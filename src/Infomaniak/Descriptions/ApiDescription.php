<?php
# Copyright (c) 2017, Infomaniak Network SA.
# Copyright (c) 2019, Ideative Sàrl
# All rights reserved.

namespace Infomaniak\Descriptions;

use GuzzleHttp\Command\Guzzle\Description;

/**
 * Api description build from API documentation
 *
 * @package  Infomaniak
 * @category Descriptions
 */
class ApiDescription
{


    /** @var string */
    private static $endpoint;

    /** @var Description */
    protected static $description;

    /** This is the path where the methods are declared on Infomaniak API doc */
    const DESCRIPTION_JSON_SOURCE = '/doc/methods_by_package.json';


    /**
     * ApiDescription constructor.
     * @param $endpoint
     */
    public function __construct($endpoint)
    {
        self::$endpoint = $endpoint;
        if (is_null(self::$description)) {
            $tmpDescriptionJsonFile = $this->initDescriptionJsonFile(true);

            $json_location = file_get_contents($tmpDescriptionJsonFile);
            $description_config = json_decode($json_location, true);
            $description_config['baseUri'] = self::$endpoint;
            self::$description = new Description($description_config);
        }
        return self::$description;
    }


    /**
     * Creates the API description JSON file
     * @param bool $forceCreation Forces the rebuild of this file even if already exists
     * @return string
     */
    private function initDescriptionJsonFile($forceCreation = false)
    {
        $tmpDescriptionJsonFile = __DIR__ . '/../tmp/infomaniakApiDescription.json';
        if (!file_exists($tmpDescriptionJsonFile) || $forceCreation) {
            $json_location = file_get_contents(self::$endpoint . self::DESCRIPTION_JSON_SOURCE);
            $description_config = json_decode($json_location, true);
            $dataArray = [
                'operations' => [],
                "models" => [
                    "getResponse" => [
                        "type" => "object",
                        "additionalProperties" => [
                            "location" => "json"
                        ]
                    ]
                ]
            ];
            foreach ($description_config as $package => $configs) {
                if (!strpos($package, '/') && !strpos($package, '\\')) {
                    foreach ($configs as $config) {

                        // Building the name of the method, from the Url
                        $explodedUrl = explode('/', $config['url']);
                        array_shift($explodedUrl);
                        array_shift($explodedUrl);

                        foreach ($explodedUrl as $key => $value) {
                            $explodedUrl[$key] = ucfirst($explodedUrl[$key]);
                            if (strpos($value, '{') !== false) {
                                $explodedUrl[$key] = '';
                            }
                            // Cleaning the part
                            $explodedUrl[$key] = str_replace('-', '', ucwords($explodedUrl[$key], '-'));
                            $explodedUrl[$key] = str_replace('_', '', ucwords($explodedUrl[$key], '_'));
                        }
                        // Adds the HTTP method to the API method
                        $package = array_shift($explodedUrl);
                        array_unshift($explodedUrl, ucwords(strtolower($config['method'])));
                        array_unshift($explodedUrl, $package);

                        $methodName = implode('', $explodedUrl);

                        // Default configuration for every method
                        $dataArray['operations'][$methodName] = $this->getMethodTemplate();
                        $dataArray['operations'][$methodName]['name'] = $methodName;

                        // Http Method
                        $dataArray['operations'][$methodName]['httpMethod'] = $config['method'];

                        // URI
                        $dataArray['operations'][$methodName]['uri'] = $config['url'];

                        // Small description of the method
                        $dataArray['operations'][$methodName]['summary'] = $config['description'];

                        // Is this deprecated or not
                        if ($config['deprecated']) {
                            $dataArray['operations'][$methodName]['deprecated'] = true;
                        }
                        // Params expected
                        $parameters = [];
                        // Query params (send in post)
                        foreach ($config['params'] as $param) {
                            $name = str_replace('$', '', $param['name']);
                            if (!empty($name)) {
                                if (isset($param['type'])) {
                                    $parameters[$name]['type'] = $param['type'];
                                }
                                $parameters[$name]['location'] = 'query';
                                if (isset($param['description'])) {
                                    $parameters[$name]['description'] = $param['description'];
                                }
                                if (isset($param['required']) && $param['required'] === true) {
                                    $parameters[$name]['required'] = true;
                                }
                            }
                        }
                        // Uri params (send in the url as GET param)
                        foreach ($config['url_params'] as $param) {
                            $name = str_replace('$', '', $param['name']);
                            if (!empty($name)) {
                                if (isset($param['type'])) {
                                    $parameters[$name]['type'] = $param['type'];
                                }
                                $parameters[$name]['location'] = 'uri';
                                if (isset($param['description'])) {
                                    $parameters[$name]['description'] = $param['description'];
                                }
                                if (isset($param['required']) && $param['required'] === true) {
                                    $parameters[$name]['required'] = true;
                                }
                            }
                        }


                        $dataArray['operations'][$methodName]['parameters'] = $parameters;
                    }
                }
            }
            $data = json_encode($dataArray);

            // Saving this configuration in a tmp file
            // So we do not generate on every API call
            file_put_contents($tmpDescriptionJsonFile, $data);

            // Builds a PHPDoc comment section
            $this->createDocForIDE($dataArray);
        }
        return $tmpDescriptionJsonFile;
    }


    /**
     * Returns the current description
     * @return Description
     */
    public function getDescription()
    {
        return self::$description;
    }

    /**
     * Builds a PHPDoc comment section
     * For all methods listed in the decrription file.
     * Copy-Past the content of this file in Api.php file as a comment for \Infomaniak\Api
     * This is only for IDE integration purpose.
     * The code generated is only PHPDoc comments
     * @param $data
     */
    private function createDocForIDE($data)
    {

        $file = __DIR__ . '/../PHPDocForIDE.php';

        $code[] = '<?php';
        $code[] = '';
        $code[] = 'namespace Infomaniak;';
        $code[] = '';
        $code[] = '// The current code should be copy-paste as a comment for \Infomaniak\Api Class';
        $code[] = '';
        $code[] = '/**';
        $code[] = ' * Class API';
        $code[] = ' *';
        $code[] = ' * @package Infomaniak';

        ksort($data['operations']);
        foreach ($data['operations'] as $method => $datum) {
            $methodDesc = ' * @method Api ' . $method . '(';
            if (count($datum['parameters'])) {
                $methodDesc .= 'array $params';
            }
            $methodDesc .= ')';
            if (!empty($datum['summary'])) {
                $methodDesc .= ' ' . preg_replace("/[\n\r]/", " ", $datum['summary']);
            }
            $code[] = $methodDesc;
        }

        $code[] = '**/';
        $code[] = 'class PHPDocForIDE extends GuzzleClient {}';
        file_put_contents($file, implode("\n", $code));
    }


    /**
     * Method template array
     * @return array
     */
    private function getMethodTemplate()
    {

        return [
            "name" => "",
            "httpMethod" => "",
            "uri" => "",
            "responseModel" => "getResponse",
            "wrapper" => "Infomaniak\\Results\\ApiResult",
            "notes" => "",
            "summary" => "",
            "documentationUrl" => "",
            "deprecated" => false,
            "data" => [],
            "parameters" => [],
            "additionalParameters" => null,
            "errorResponses" => [
                [
                    "code" => 503,
                    "reason" => "Service Unavailable",
                    "class" => "Infomaniak\\Exceptions\\ApiException"
                ]
            ]
        ];
    }

    /**
     * Forces the Descriptions file to be generated again, even if it already exists in tmp folder
     */
    public function forceDescriptionGeneration()
    {
        $this->initDescriptionJsonFile(true);
    }


    /**
     * Translates a string with underscores
     * into camel case (e.g. first_name -> firstName)
     *
     * @param string $str String in underscore format
     * @return string $str translated into camel caps
     */
    function to_camel_case($str)
    {
        $func = create_function('$c', 'return strtoupper($c[1]);');
        return preg_replace_callback('/_-([a-z])/', $func, $str);
    }
}

