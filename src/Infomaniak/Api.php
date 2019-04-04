<?php
# Copyright (c) 2017, Infomaniak Network SA.
# Copyright (c) 2019, Ideative Sàrl
# All rights reserved.

namespace Infomaniak;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use Infomaniak\Descriptions\ApiDescription;
use Infomaniak\Exceptions\ApiException;
use Infomaniak\Deserializers\ApiDeserializer;


/**
 * Class API
 * @package Infomaniak
 **/
class Api extends MiddleManForIDE
{

    /** @var string */
    private $endpoint = '';

    /** @var array */
    private $config = [];

    /** @var Client */
    private $client;

    /** @var Description */
    private static $description;

    const ENDPOINTS = ['default' => 'https://api.infomaniak.com'];
    const CONNECT_TIMEOUT = 5;
    const TIMEOUT = 30;


    /******************************************************************************************************
     * PUBLIC METHODS
     ******************************************************************************************************/

    /**
     * Api constructor.
     *
     * @param array $params
     * @param string $endpoint
     *
     * @throws ApiException if token is not provided
     */
    public function __construct($params, $endpoint = 'default')
    {
        if (isset($params['token'])) {
            $token = $params['token'];
        } elseif (isset($params['client_api']) && $params['client_secret']) {
            throw new ApiException("Unsupported OAuth provider");
        } else {
            throw new ApiException("Unknown provided endpoint");
        }
        $this->initEndpoint($endpoint);
        $this->initClientApi($token);
        $this->initDescription();

        return parent::__construct($this->client, self::getApiDescription(), null,
            new ApiDeserializer(self::$description, true));
    }


    /**
     * Configure and init Api description
     */
    private function initDescription()
    {
        if (is_null(self::$description)) {
            $apiDescription = new ApiDescription($this->endpoint);
            self::$description = $apiDescription->getDescription();
        }
    }


    /******************************************************************************************************
     * PRIVATE METHODS
     ******************************************************************************************************/

    /**
     * Configure and init Api endpoint
     *
     * @param string $endpoint
     *
     * @throws ApiException if endpoint provided is not define
     */
    private function initEndpoint($endpoint)
    {
        if (!array_key_exists($endpoint, self::ENDPOINTS)) {
            throw new ApiException("Unknown provided endpoint");
        }
        $this->endpoint = self::ENDPOINTS[$endpoint];
    }

    /**
     * Configure and init Guzzle Client
     *
     * @param string $token
     */
    private function initClientApi($token)
    {
        $this->config['connect_timeout'] = self::CONNECT_TIMEOUT;
        $this->config['timeout'] = self::TIMEOUT;
        $this->config['protocols'] = ['https'];
        $this->config['headers'] = ['authorization' => 'Bearer ' . $token];
        $this->client = new Client($this->config);
    }


    /******************************************************************************************************
     * STATIC PUBLIC METHODS
     ******************************************************************************************************/

    /**
     * Return Api description services from a static context
     *
     * @return Description
     */
    public static function getApiDescription()
    {
        return self::$description;
    }

    /**
     * Return Api operation description from a static context
     *
     * @param string $name
     *
     * @return \GuzzleHttp\Command\Guzzle\Operation
     */
    public static function getApiOperationDescription($name)
    {
        return self::$description->getOperation($name);
    }

}



