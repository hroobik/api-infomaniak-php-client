![infomaniak's logo](https://www.infomaniak.com/img/common/logo_infomaniak.jpg)

![ideative's logo](./assets/IdeativeLogo.png)


# Infomaniak API Client 
Fork by Ideative


Introduction
------------

ideative/api-infomaniak-php-client is a fork of infomaniak/api-client-php.

It's a PHP client for Infomaniak API. 
This client will provide documentation of all available services, describing URIs, HTTP methods and input parameters.

It can automatically updates the methods available, based on the Infomaniak API documentation Methods Description, 
available on http://api.infomaniak.com/doc/methods_by_package.json 

Installation
------------

You can install ideative/api-infomaniak-php-client using Composer:

Quick integration with the following command:

```
composer require ideative/api-infomaniak-php-client
```

Usage
-----

```php
<?php

require 'vendor/autoload.php';

use Infomaniak\Api;

$token = '123456789';
$client = new Api(['token' => $token]);

// Ping example
$result = $client->PingGet();
print_r($result);

// List mailbox example
$result = $client->MailGetMailbox(
	array(
		'id'   => 123456789,
		'with' => '*'
	)
);
print_r($result);

```

 ### Changes regarding the original Infomaniak PHP Client.

Infomaniak official API Documentation is generated with a JSON feed available on http://api.infomaniak.com/doc/methods_by_package.json.
 
This client generates dynamically the structure needed to call all methods defined in the Infomaniak API.

For a better classification of methods, the names of all methods are derived from the url that is called in the API by 
these methods.

Some example: 
- `DELETE` on `/1/account/{id}/tag/{tag_id}` with method `AccountIdDeleteTag`
- `POST` on `/1/mail/{mail_id}/mailbox` with method `MailPostMailbox`
- `POST` on `/1/mail/{mail_id}/mailbox/{mailbox}/auth/filter/edit"` with method `MailPostMailboxAuthFilterEdit`
- `GET` on `/1/affiliation/product/{id}/url/{lang}` with method `AffiliationGetProductIdUrl`
- `PUT` on `/1/radios/station/{id}/player/{player_id}` with method `RadiosPutStationIdPlayer`

Infomaniak original client is using a different naming syntax and only on selected methods. Original 
methods have their name changed in the current client. 


## Available Methods

* AccountGet() Get list of current user accounts
* AccountGetCurrentProduct() List products of user current account
* AccountGetCurrentService() List available current account's services
* AccountIdDelete(array $params) Delete an account
* AccountIdDeleteInvitation(array $params) Cancel an invitation to become a member of given account
* AccountIdDeleteKey(array $params) Delete a SSH key
* AccountIdDeleteProductLock(array $params) Remove a lock state to a product
* AccountIdDeleteTag(array $params) Remove the specified tag.
* AccountIdDeleteUser(array $params) Remove a user from given account
* AccountIdDeleteUserEmails(array $params) Unlink an account mailboxes for given account and user
* AccountIdGet(array $params) Get information of account
* AccountIdGetCgu(array $params) Display account CGU
* AccountIdGetCguPdf(array $params) Show CGU PDF
* AccountIdGetContact(array $params)
* AccountIdGetContactFields(array $params) Show fields required for a contact
* AccountIdGetContracts(array $params) Get list of current account's contracts
* AccountIdGetContractsDownloadOriginal(array $params) Download original contract
* AccountIdGetContractsDownloadParaphed(array $params) Download paraphed contract
* AccountIdGetDocuments(array $params)
* AccountIdGetDocumentsDownload(array $params) Download attached document
* AccountIdGetInvitation(array $params) Get invitation of joining account by ID
* AccountIdGetInvoice(array $params) Show invoices for a group
* AccountIdGetKey(array $params) Display a SSH key
* AccountIdGetLog(array $params) Display a listing of logs for an account. (pagination is forced if not given)
* AccountIdGetOrderContact(array $params)
* AccountIdGetProduct(array $params) Display products for a service
* AccountIdGetProductTransfer(array $params) Show a transfer
* AccountIdGetProductUser(array $params) List product's user permission
* AccountIdGetService(array $params) List available account's services
* AccountIdGetTag(array $params) Display the specified tag.
* AccountIdGetUser(array $params) Get user information for given account and user
* AccountIdGetUserEmails(array $params) Get user's mailboxes for given account and user
* AccountIdPostContact(array $params) Add a new contact to account
* AccountIdPostInvitationResend(array $params) Resend invitation
* AccountIdPostKey(array $params) Store a SSH key
* AccountIdPostKeyGenerate(array $params) Generate a new SSH key
* AccountIdPostPremiumSupport(array $params) Premium support contact
* AccountIdPostProductLock(array $params) Add a lock state to a product
* AccountIdPostProductTerminate(array $params) Terminate a product
* AccountIdPostProductTransfer(array $params) Create a new transfer
* AccountIdPostProductTransferAccept(array $params) Accept a transfer
* AccountIdPostProductTransferCancel(array $params) Cancel a transfer
* AccountIdPostProductTransferSendCodeByEmail(array $params) Send transfer code by email
* AccountIdPostProductTransferValid(array $params) Validate a product transfer
* AccountIdPostTag(array $params) Store a newly created tag for an account and tag it
* AccountIdPostTagProduct(array $params) Store a newly created tag for an account and tag it
* AccountIdPostUserSendSecurityWarning(array $params) Send a security warning to an user
* AccountIdPostUserUnjail(array $params)
* AccountIdPut(array $params) Update an account
* AccountIdPutContact(array $params) Update an account contact
* AccountIdPutKey(array $params) Update a SSH key
* AccountIdPutPreferences(array $params) Update an account preferences
* AccountIdPutProductLock(array $params) Set a lock state to a product
* AccountIdPutProductUser(array $params) Update product's user permission
* AccountIdPutTag(array $params) Tag or untag for taggable
* AccountIdPutTagProduct(array $params) Tag or untag for taggable
* AccountIdPutUser(array $params) Update user permissions
* ActionGet(array $params) List available actions
* AffiliationDeleteBannerId(array $params) delete banner
* AffiliationDeleteBannerIdUrl(array $params) delete ALL urls for banner
* AffiliationDeleteLevelId(array $params) delete level
* AffiliationDeleteProductId(array $params) delete product
* AffiliationDeleteProductIdUrl(array $params) delete product url
* AffiliationDeletePromomethodId(array $params) delete promomethod
* AffiliationDeleteRegistredgroupId(array $params) Delete subscription
* AffiliationDeleteSitetypeId(array $params) delete sitetype
* AffiliationDeleteSubscriptionId(array $params) Delete subscription
* AffiliationDeleteVideoId(array $params) delete video
* AffiliationGetAgence(array $params) Listing of Agencies(pagination is forced if not given)
* AffiliationGetBanner() all banners with urls
* AffiliationGetBannerId(array $params)
* AffiliationGetBannerIdUrl(array $params) show banner url
* AffiliationGetCampaignGethash() get campagne by hash
* AffiliationGetClick(array $params) List clicks and sums gains
* AffiliationGetClickId(array $params) show click
* AffiliationGetLevel() Listing of levels
* AffiliationGetLevelId(array $params) get level
* AffiliationGetPayment(array $params) Listing of payments
* AffiliationGetPaymentId(array $params) Get payment
* AffiliationGetPaymentIdDetails(array $params)
* AffiliationGetProduct()
* AffiliationGetProductId(array $params)
* AffiliationGetProductIdUrl(array $params) get url for id + lang
* AffiliationGetPromomethod() Listing of promomethods
* AffiliationGetPromomethodId(array $params) get promomethod
* AffiliationGetRegistredgroup(array $params) Listing of registred groups
* AffiliationGetRegistredgroupId(array $params) get registred group
* AffiliationGetSitetype() Listing of sitetypes
* AffiliationGetSitetypeId(array $params) get sitetype
* AffiliationGetSubscription(array $params) Listing of subscriptions
* AffiliationGetSubscriptionGethash() get subscription by hash
* AffiliationGetSubscriptionId(array $params) get subscription
* AffiliationGetSubscriptionIdBanner(array $params)
* AffiliationGetSubscriptionIdDeal(array $params)
* AffiliationGetSubscriptionIdInvoicedetail(array $params) get details of invoice
* AffiliationGetSubscriptionIdInvoiceshistory(array $params) get table of profits invoices
* AffiliationGetSubscriptionIdLevelstatus(array $params) gets current amount earned by affiliate since subscription and missing amount to reach next level
* AffiliationGetSubscriptionIdPendingorders(array $params) get table of orders and invoices that were not paid to affiliate yet
* AffiliationGetSubscriptionIdPendingprofits(array $params) Gets profits earned by affiliate since last invoice
* AffiliationGetSubscriptionIdProduct(array $params) product, with url linked to subscription
* AffiliationGetSubscriptionIdProducts(array $params) List of available products, with url linked to subscription
* AffiliationGetSubscriptionIdProfits(array $params) gets sales graph and stats values
* AffiliationGetSubscriptionIdSales(array $params) gets sales graph and stats values
* AffiliationGetSubscriptionIdShowstaff(array $params) get subscription for infomaniak staff with owner id
* AffiliationGetVideo(array $params)
* AffiliationGetVideoId(array $params)
* AffiliationPostBanner(array $params) create banner
* AffiliationPostBannerIdUrl(array $params) create banner url
* AffiliationPostClick(array $params) store click
* AffiliationPostLevel(array $params) Create level
* AffiliationPostPaymentIdSetpaid(array $params) Set invoice paid
* AffiliationPostProduct(array $params) create product
* AffiliationPostProductIdUrl(array $params) create new url for product
* AffiliationPostPromomethod(array $params) Create promomethod
* AffiliationPostRegistredgroup(array $params) Create registred group
* AffiliationPostRegistredgroupRegistercookie(array $params) register account for affiliation
* AffiliationPostSitetype(array $params) Create sitetype
* AffiliationPostSubscription(array $params) Create subscription
* AffiliationPostSubscriptionIdDeal(array $params)
* AffiliationPostVideo(array $params) create video
* AffiliationPutBannerId(array $params) update banner
* AffiliationPutLevelId(array $params) Update level
* AffiliationPutPaymentId(array $params) Update payment. Better use setPaid
* AffiliationPutProductId(array $params) update product
* AffiliationPutProductIdUrl(array $params) update url for product
* AffiliationPutPromomethodId(array $params) update promomethod
* AffiliationPutRegistredgroupId(array $params) update registred group
* AffiliationPutSitetypeId(array $params) update sitetype
* AffiliationPutSubscriptionId(array $params) modify subscription
* AffiliationPutSubscriptionIdReject(array $params)
* AffiliationPutSubscriptionIdToggleremunerate(array $params)
* AffiliationPutSubscriptionIdValidate(array $params)
* AffiliationPutSubscriptionIdWizard(array $params) route for wizard: sets subscriber's data, sends Cerberus ticket to infomaniak and email to customer
* AffiliationPutVideoId(array $params) update video
* BookmarkDeleteBookmarkId(array $params) Delete a bookmark
* BookmarkDeleteFolderId(array $params) Delete bookmark folder
* BookmarkGetBookmark() Get bookmarks
* BookmarkGetBookmarkId(array $params) Get a bookmark
* BookmarkGetBookmarkIdIcon(array $params) Get a bookmark icon
* BookmarkGetBookmarkIdInc(array $params) Increment click counter of bookmark (only serve for popularity sort in user interface)
* BookmarkGetFolder() Get bookmark folders
* BookmarkGetFolderId(array $params) Get bookmark folder
* BookmarkGetFolderIdBookmark(array $params) Listing of all bookmarks of specified folder
* BookmarkGetLabel() Listing of all bookmark labels
* BookmarkPostBookmark(array $params) Add a bookmark
* BookmarkPostFolder(array $params) Add bookmark folder
* BookmarkPutBookmarkId(array $params) Update a bookmark
* BookmarkPutFolderId(array $params) Update bookmark folder
* CertificateDeleteDomain(array $params) Remove certificat from the given domain
* CertificateGet(array $params) Get informations of a given Certificate
* CertificateGetDomain(array $params) List domains for a certificate
* CertificateGetDownload(array $params) Download the certificate
* CertificateGetFqdn(array $params) Get all Certificates for given fqdn
* CertificateGetNote(array $params) Get certificate notes
* CertificateGetPricing() Get pricing of Certificates Accept account_id parameter
* CertificateGetRequest(array $params) Get informations of a given CertificateRequest
* CertificatePostDecodeCsr(array $params) Decode a CSR (without SAN information)
* CertificatePostValidateDomains(array $params) Validate a domain name
* CertificatePostValidateRequest(array $params) Validate request datas before using them Use same required and optional fields of POST /1/certificate/{certificate_id}/request
* CertificatePostVerifyEmail(array $params) Validate certificate CGU
* CertificatePostWebhook(array $params) Provider webhook
* CertificatePut(array $params) Update Certificate from an Certificate identifier
* CertificatePutDomain(array $params) Add certificate to given domain
* CertificatePutNote(array $params) Get certificate notes
* CertificatePutValidateCgu(array $params) Validate certificate CGU
* CertificatePutValidateDcv(array $params) Modifiy DCV for a domain
* CertificatePutValidateEmail(array $params) Validate certificate email
* CertificatePutValidateOrganization(array $params) Validate certificate organization
* CertificatePutValidatePhone(array $params) Validate certificate phone
* CountryGet(array $params) List available countries
* CountryIdGet(array $params) Display a country
* CountryIdGetCity(array $params) List all cities for a country
* DedicatedGet() List dedicated servers from an Account identifier
* DedicatedIdGet(array $params) Get informations of a given Dedicated server
* DedicatedIdGetMonitoring(array $params) Gets the list of monitoring graphics
* DedicatedIdGetWebHosting(array $params) List Dedicated web hosting
* DedicatedIdPostReboot(array $params) Reboot a dedicated server
* DedicatedIdPostSupportContact(array $params) Contact premium support
* DedicatedIdPostWebHosting(array $params) Add a web hosting to dedicated server
* DedicatedIdPutWebHosting(array $params) Update a web hosting on a dedicated server
* DiagnosticGetId(array $params) Get Diagnostic DNS of a given Service Item
* DiagnosticPostFqdnIdFix(array $params) Fix an entry from diagnostic DNS
* DiagnosticPutIdIgnore(array $params) Ignore diagnostic dns errors of a given Service Item
* DomainDeleteDnsGlueRecord(array $params) Delete a domain glue record
* DomainDeleteDnsRecord(array $params) Delete a domain DNS record
* DomainDeleteDnsZone(array $params) Delete a domain DNS zone
* DomainDeleteRedirection(array $params) Delete a domain redirection
* DomainDeleteSynonym(array $params) Dissociate the domain
* DomainGet(array $params) Show a domain
* DomainGetAccount(array $params) List account domains
* DomainGetAccountCsv(array $params) List account domain as CSV
* DomainGetAccountRestorable(array $params) List account restorable domains
* DomainGetCategoriesAll() Show domain categories
* DomainGetCategoriesTlds(array $params) Show domain tlds
* DomainGetContact(array $params) Get a contact
* DomainGetDns(array $params) List domain DNS server
* DomainGetDnsBackup(array $params) Show a DNS zone backup
* DomainGetDnsGlueRecord(array $params) Show a domain glue record
* DomainGetDnsRecord(array $params) Show a DNS record
* DomainGetDnsZone(array $params) Show domain DNS zone
* DomainGetDnssecInformation(array $params) Get DNSSEC information for a domain
* DomainGetRedirection(array $params) Show a domain redirection
* DomainGetStatisticOption(array $params) Show domain option
* DomainGetSynonym(array $params) List domain synonym
* DomainGetSynonymAvailable(array $params) List available synonyms domains
* DomainGetTradingInformation(array $params) Get trading information
* DomainIdPostRenewalWarrantyReminder(array $params) Send a renewal warranty reminder
* DomainPostAcceptTransfer(array $params) Accept a domain tranfer
* DomainPostAccountCategoriesSuggest(array $params) Display domain suggestion
* DomainPostAccountCheck(array $params)
* DomainPostBulkTradingExtraFields()
* DomainPostBulkTradingInformation(array $params)
* DomainPostCancelTransfer(array $params) Cancel the domain transfer
* DomainPostConfirmTerminate(array $params) Confirm a termination for a domain
* DomainPostContactDisableVisibility(array $params) Disable the whois contact obfuscation
* DomainPostContactEnableVisibility(array $params) Enable the whois contact obfuscation
* DomainPostDeclineTransfer(array $params) Decline a domain transfer
* DomainPostDisableDnssec(array $params) Disable domain DNSSEC
* DomainPostDisableDnssecReg(array $params)
* DomainPostDisableDnssecZone(array $params)
* DomainPostDisableWhoisAntiSpam(array $params) Disable domain whois antispam
* DomainPostDnsGlueRecord(array $params) Add a glue record for a domain
* DomainPostDnsRecord(array $params) Store a domain DNS record
* DomainPostDnsZone(array $params) Store a domain DNS zone
* DomainPostEnableDnssec(array $params) Enable DNSSEC for a domain
* DomainPostEnableDnssecReg(array $params)
* DomainPostEnableDnssecZone(array $params)
* DomainPostEnableTrustee(array $params) Add a trustee contact
* DomainPostEnableWhoisAntiSpam(array $params) Enable domain whois antispam
* DomainPostLock(array $params) Lock a domain
* DomainPostPrivacy() Proxy email for privacy domain owner
* DomainPostRedirection(array $params) Create a new domain redirection
* DomainPostRequestTerminate(array $params) Request a termination for a domain
* DomainPostRequestTrade(array $params) Request a domain trade
* DomainPostRequestTradeAuthCode(array $params) Request a trade auth code for .be domain extension
* DomainPostRequestTransfer(array $params) Request a domain tranfer
* DomainPostResendContactValidationEmail(array $params) Resend contact validation request
* DomainPostResendFoa(array $params) Resend a FOA
* DomainPostResendTradeValidationEmail(array $params) Resend a trade validation email
* DomainPostSendAuthcode(array $params) Send Authcode to domain owner
* DomainPostSynonym(array $params) Associate a domain synonym
* DomainPostSynonymSwap(array $params) Make a domain as primary domain
* DomainPostTerminate(array $params) Terminate a domain
* DomainPostTradingExtraFields(array $params)
* DomainPostUnlock(array $params) Unlock a domain
* DomainPutBulkUpdateDns()
* DomainPutContact(array $params) Change the contact for a domain role
* DomainPutDns(array $params) Update domain DNS server
* DomainPutDnsGlueRecord(array $params) Update a glue record domain
* DomainPutDnsRecord(array $params) Update a domain DNS record
* DomainPutDnsZone(array $params) Update a domain DNS zone
* DomainPutRedirection(array $params) Update a domain redirection
* EventCommunicationGetStats(array $params) Return information for related communication
* EventCommunicationPutMessageId(array $params) Update an existing message attached to a event communication
* EventsGetMaterialsCheckScenario() Check if list of materials is matching a scenario
* EventsGetPublic(array $params) Get all events.
* EventsGetStatus() Show All public events published on status website - last 10 days
* EventsGetUsers() Get list of users impacted by the event
* EventsIdGet(array $params) Get an event.
* EventsIdGetComments(array $params) Get a comment.
* EventsIdGetMaterials(array $params) Return impacted Materials information for an event
* EventsIdGetNotification(array $params) List all notifications for a given id
* EventsIdPostSubscribe(array $params) Store a new subscriber
* FqdnDeleteId(array $params) Delete a fqdn from a given Service Name and Identifier
* FqdnGetId(array $params) Get fqdns from a given Service Name and Identifier
* FqdnPostId(array $params) Add a fqdn to a given Service Name and Identifier
* FqdnPutIdSwap(array $params) Swap a fqdn from a given Service Name and Identifier
* HousingGet(array $params) Get service housing data Available 'with' parameters : users, racks, housing_users  Deprecated, use following routes instead : account/$accountId/product/$serviceId/$productId?with=users -> to get product details and users with their right for the product housing/$productId/contract -> to get contract details housing/$productId/rack?with=housing_units_owned_count,data_center -> to get racks list housing/$productId/housing-user?with=access_rights -> to get list of access rigts to data center
* HousingGetCable(array $params) Get housing product's cables
* HousingGetCableNetworkMonitoring(array $params) Return cable's network monitoring data. For now it will use the old system and return 4 url returning images with stats for the day/week/month/year.
* HousingGetContract(array $params) Get housing contract with lines, prices, currencies and periodicity
* HousingGetDataCenter() Get active data centers
* HousingGetHousingUser(array $params) Show housing user data with Available 'with' parameters : access_rights
* HousingGetHousingUserPicture(array $params) Only way to correctly return a housing user's picture for now.
* HousingGetInvitation(array $params) Get invitation data (email and data centers) if pending and not expired
* HousingGetRack(array $params) Show rack for given product Housing Available 'with' parameters : data_center, housing_units_owned, housing_units_owned_count, network
* HousingGetRackRackUnit(array $params) Show rack unit
* HousingGetSupportPremium(array $params) Get support information for the product
* HousingPostHousingUserAccessRight(array $params) Create a new access right for the housing user in the given data center (it will stay in a 'creating' state until someone at infomaniak confirm it)
* HousingPostInvitation(array $params) Complete invitation data and create the housing user
* HousingPostSupportContact(array $params) Contact support for logistic or administrative questions.
* HousingPostTermination(array $params) Request for housing product termination. Will create a ticket and the support will take care of calling the user to handle the product termination.
* HousingPutHousingUser(array $params) Update housing user's data : email, phone and mobile
* HousingPutHousingUserAccessRight(array $params) Update access rights of a housing user for the given data center Status deleting is a pending status that will make the api create a ticket asking the support to delete this housing user's access right
* HousingPutRackRackUnit(array $params) Update rack unit's group label and notes
* InvoicingGet() Ping url
* InvoicingGetCommandPdf(array $params) Display command as pdf document
* InvoicingGetInvoiceListPublic(array $params) Find client invoices
* InvoicingGetInvoicePdf(array $params) Display invoice as pdf document
* InvoicingGetPaymentPrepayPdf(array $params) Retrouve le pdf d'un dépôt sur compte prépayé par son id et un hash
* InvoicingGetRenewDomainsPublic(array $params) Liste les produits à renouveler pour un groupe donné
* InvoicingGetRenewListPublic(array $params) Liste les produits à renouveler pour un groupe donné
* InvoicingIdDeleteAddresses(array $params) Delete the given invoicing address
* InvoicingIdDeletePaymentProfile(array $params) Delete the given payment profile
* InvoicingIdDeleteRemunerationClientIbanDetails(array $params) Delete your iban details
* InvoicingIdDeleteRemunerationClientPaypalDetails(array $params) Delete your paypal details
* InvoicingIdGetAddresses(array $params) Retrieve one invoicing address
* InvoicingIdGetAddressesDefault(array $params) Retrieve the default invoicing address
* InvoicingIdGetAutorenewCount(array $params) Compte les produits en renouvellement auto pour un groupe donné
* InvoicingIdGetCommand(array $params) Get command details
* InvoicingIdGetCommandCount(array $params) Count pending commands
* InvoicingIdGetCommandList(array $params) List all commands for one account
* InvoicingIdGetCommandPdf(array $params) display command as pdf document
* InvoicingIdGetInvoiceAbstract(array $params) Returns a list of invoices for client account, with less informations on each invoice   reading.
* InvoicingIdGetInvoiceContract(array $params) Get an invoice contract by id
* InvoicingIdGetInvoiceContractList(array $params) Get all invoices contract
* InvoicingIdGetInvoiceCount(array $params) Count the invoices for one client
* InvoicingIdGetInvoiceDetail(array $params) get account invoices
* InvoicingIdGetInvoiceList(array $params) Find client invoices   en perte.
* InvoicingIdGetInvoicePdf(array $params) Display invoice as pdf document
* InvoicingIdGetInvoicePeriodic(array $params) Find periodic invoice by id
* InvoicingIdGetInvoicePeriodicList(array $params) List all periodic invoices for one client
* InvoicingIdGetInvoiceRefundIban(array $params) Get informations about an ongoing iban refund
* InvoicingIdGetPayment(array $params) Recherche un payment-container (pcp-xxx = par payment-container-payment, pc-xxx = par payment-container, po-xxx = par opération sur compte prépayé, f-xxx = par facture, c-xxx = par commande).
* InvoicingIdGetPaymentPrepayAbstract(array $params) Returns a list of operations on prepaid account for client account, with less informations on each invoice   reading.
* InvoicingIdGetPaymentPrepayHistory(array $params) Retrieve all the operations on the client prepaid account   remboursement du compte prépayé, 6: transfert entre 2 groupes, 7: crédits offerts
* InvoicingIdGetPaymentPrepayPdf(array $params) Retrouve le pdf d'un dépôt sur compte prépayé par son id
* InvoicingIdGetPaymentProfile(array $params)
* InvoicingIdGetPaymentSearch(array $params) Recherche des payment-container (pcp-xxx = par payment-container-payment, pc-xxx = par payment-container, po-xxx = par opération sur compte prépayé, f-xxx = par facture, c-xxx = par commande).
* InvoicingIdGetRemunerationClientIbanDetails(array $params) Get client iban details
* InvoicingIdGetRemunerationClientPaypalDetails(array $params) Get client paypal email
* InvoicingIdGetRenewCount(array $params) Compte les produits à renouveler pour un groupe donné
* InvoicingIdGetRenewList(array $params) Liste les produits à renouveler pour un groupe donné
* InvoicingIdGetRenewMode(array $params)
* InvoicingIdGetRenewServices(array $params)
* InvoicingIdGetSettings(array $params) Global invoicing informations for current group
* InvoicingIdGetVat(array $params)
* InvoicingIdPostAddresses(array $params) Create a new invoicing address
* InvoicingIdPostPaymentProfile(array $params)
* InvoicingIdPostRemunerationClientIbanDetails(array $params) Modify or create your Iban details information
* InvoicingIdPostRemunerationClientPaypalDetails(array $params) Modify or create your Paypal email address
* InvoicingIdPutAddresses(array $params) Modify the given invoicing address
* InvoicingIdPutAddressesDefault(array $params) Set the given address as default invoicing address
* InvoicingIdPutCommandCancel(array $params) Cancel a command
* InvoicingIdPutCommandCancelItems(array $params) Cancel some command items
* InvoicingIdPutInvoiceAllByMail(array $params) Resend all account invoices b
* InvoicingIdPutInvoiceContractUpload(array $params) Invoice contract : register the reciprocal client invoice
* InvoicingIdPutInvoiceRefundIbanCustomerDatas(array $params) The client has given his bank details, send mail to accountancy department
* InvoicingIdPutPaymentProfileDefault(array $params)
* InvoicingIdPutRenewAutorenew(array $params)
* InvoicingIdPutRenewMail(array $params) Nous avons décidé que nous allons inclure le package invoicing dans gestion (ou dans tout autre projet habilité à réaliser des tâches lourdes). Ainsi nous pourrons renvoyer le mail de rappel unitairement à un groupe donné ici via l'api, ou globallement pour tous les groupes concernés via gestion. En attendant je ne touche à rien -> j'utilise directement la classe Renouvellement du shared todo *cdr invoicing* - fin 2017 ... (après gestion en 5.6) - Mettre à jour
* InvoicingIdPutRenewMode(array $params)
* IpDeleteReverse(array $params) Remove a PTR record
* IpGetReverse(array $params) Get reverse dns from an IP
* IpPostReverse(array $params) Add a PTR record
* IpPutReverse(array $params) Update a domain PTR record
* JelasticGet(array $params) Get informations of a given Jelastic
* JelasticGetPricing() Get the pricing of Jelastic PAAS
* JelasticPut(array $params) Update a given Jelastic
* LanguageGet() List available languages
* LanguageIdGet(array $params) Display language
* MailDeleteMailbox(array $params) Delete a given Mailbox
* MailDeleteMailboxAlias(array $params) Delete an alias from a given Mailbox
* MailDeleteMailboxAutoresponse(array $params) Delete a given Mailbox auto response
* MailDeleteMailboxForwarding(array $params) Delete a redirect address from a given Mailbox
* MailDeleteMailboxHeaderAddress(array $params) Delete a sender/reply address
* MailDeleteMailboxSignature(array $params) Delete a given Mailbox Signature
* MailDeleteMailboxWorkspaceInvitation(array $params) Delete an invitation from a given Mailbox
* MailDeleteMailboxWorkspaceUser(array $params) Remove a user from a given Mailbox
* MailGet(array $params) Get informations of a given ServiceMail
* MailGetCsv() List account mail hosting as CSV
* MailGetInvitation(array $params) List Workspace invitation from an Account identifier
* MailGetMailbox(array $params) Get informations of a given Mailbox
* MailGetMailboxAlias(array $params) Get aliases of a given Mailbox
* MailGetMailboxAutoresponse(array $params) Get informations of a given Mailbox auto response
* MailGetMailboxForwarding(array $params) Get informations of a given Mailbox forwarding
* MailGetMailboxHeaderAddress(array $params) List mailbox headers
* MailGetMailboxImapsyncListUnfinishedTasks(array $params) List unifinished tasks for the current user
* MailGetMailboxSignature(array $params) Get informations of a given Mailbox Signature
* MailGetMailboxWorkspace(array $params) Get Workspace users of a given Mailbox alias
* MailGetMailboxWorkspaceInvitation(array $params) Get Workspace invitation of a given Mailbox alias
* MailGetWorkspace(array $params) List Workspace users for a given Mailbox
* MailGetWorkspaceInvitation(array $params) List Workspace invitation for a given Mailbox
* MailPostMailbox(array $params) Create a new Mailbox
* MailPostMailboxAlias(array $params) Add an alias to a given Mailbox
* MailPostMailboxAuth(array $params) Authentificate
* MailPostMailboxAuthFilter(array $params) Get filters of a given Mailbox
* MailPostMailboxAuthFilterAdd(array $params) Add a filter in a given Mailbox
* MailPostMailboxAuthFilterDelete(array $params) Delete a filter of a given Mailbox
* MailPostMailboxAuthFilterEdit(array $params) Update filter of a given Mailbox
* MailPostMailboxAuthFilterReorder(array $params) Reorder filters for a given Mailbox
* MailPostMailboxAuthFilterScriptAdd(array $params) Add filter script of a given Mailbox
* MailPostMailboxAuthFilterScriptDelete(array $params) Delete a filter script of a given Mailbox
* MailPostMailboxAuthFilterScriptEdit(array $params) Update filter script of a given Mailbox
* MailPostMailboxAuthFilterScriptImport(array $params) Import .siv file in a given Mailbox
* MailPostMailboxAuthFilterScriptSetActivation(array $params) Enable / disable a filter script for a given Mailbox
* MailPostMailboxAuthFilterSetActivation(array $params) Enable / disable a filter for a given Mailbox
* MailPostMailboxAuthFolder(array $params) Get folders of a given Mailbox
* MailPostMailboxAuthFolderDeleteSpam(array $params) Delete mail from spam folder of a given Mailbox
* MailPostMailboxAuthFolderDeleteTrash(array $params) Delete mail from spam folder of a given Mailbox
* MailPostMailboxAuthImapsyncSyncEmails(array $params) Synchronize a source email to a destination email
* MailPostMailboxAuthWorkspaceInvitation(array $params) Create an invitation
* MailPostMailboxAutoresponseReset(array $params) Reset Auto Response
* MailPostMailboxForwarding(array $params) Add a redirect address to a given Mailbox
* MailPostMailboxImapsyncSyncEmails(array $params) Synchronize a source email to a destination email
* MailPostMailboxImapsyncSyncEmailsCsv(array $params) Synchronize multiple emails at once   "source_password": "demo", "destination_email": "demo@niak.ch", "destination_password": "demo", "source_ssl": "true"}]
* MailPostMailboxImapsyncValidateEmail(array $params) Determine the validity of the given email and its credentials
* MailPostMailboxImport(array $params) Import mailboxes from a .csv file
* MailPostMailboxSignature(array $params) Create a new Mailbox Signature
* MailPostMailboxSignatureUpload(array $params) Upload an image
* MailPut(array $params) Update a given ServiceMail
* MailPutMailbox(array $params) Update a given Mailbox
* MailPutMailboxAlias(array $params) Update aliases list of a given Mailbox
* MailPutMailboxAuthFolder(array $params) Update folders draft,trash,sent,spam of a given Mailbox
* MailPutMailboxAuthWorkspaceInvitationSend(array $params) Send an invitation
* MailPutMailboxAutoresponse(array $params) Update a given Mailbox auto response
* MailPutMailboxForwarding(array $params) Update a given Mailbox forwarding
* MailPutMailboxHeaderAddressSendValidation(array $params) Send validation email with code when adding a new sender/reply address
* MailPutMailboxHeaderAddressSendValidationLink(array $params) Send validation email with link when adding a new sender/reply address
* MailPutMailboxHeaderAddressValidate(array $params) Validate a new sender/reply address
* MailPutMailboxSignature(array $params) Update a given Mailbox Signature
* MailPutMailboxSignatureDefault(array $params) Set as default a given Mailbox Signature
* MailPutMailboxWorkspaceInvitation(array $params) Update invitation permission for a given Mailbox
* MailPutMailboxWorkspaceUser(array $params) Update user permission for a given Mailbox
* NasGet(array $params) List ServiceNas from an Account identifier
* NasIdDeleteReset(array $params) Remove request to reset server
* NasIdDeleteRestart(array $params) Remove request to restart server
* NasIdGet(array $params) Get informations of a given NAS
* NasIdGetReset(array $params) Get status of reset request
* NasIdGetRestart(array $params) Get status of restart request
* NasIdGetTraffic(array $params) Get traffic of a given NAS
* NasIdPut(array $params) Update a given NAS
* NasIdPutReset(array $params) Send request to reset server
* NasIdPutRestart(array $params) Send request to restart server
* PingGet() Test connectivity with the API
* PrivatePostHostingIdFtp(array $params) Store old FTP password
* PrivatePostHostingIdSql(array $params) Store old SQL password
* PrivatePutHostingIdFtp(array $params) Check if FTP password was already used before
* PrivatePutHostingIdSql(array $params) Check if SQL password was already used before
* ProductGet(array $params) List products
* ProfileDelete(array $params) Delete user
* ProfileDeleteAddressId(array $params) Delete a user profile address
* ProfileDeleteAvatar() Delete profile's avatar
* ProfileDeleteEmailId(array $params) Delete a user profile email
* ProfileDeletePhoneId(array $params) Delete a current user profile phone
* ProfileDeleteWorkspaceMailboxId(array $params) Unlink a mailbox from current user
* ProfileDeleteWorkspacePreferenceSlackhookId(array $params) Delete a user's SlackWebHook
* ProfileGet(array $params) Get information of connected user
* ProfileGetAddress() Get list of current user addressses
* ProfileGetAddressId(array $params) Get a user profile address
* ProfileGetCgu() List contracts and cgu to sign
* ProfileGetEmail() Get list of current user emails
* ProfileGetEmailId(array $params) Get a user profile email
* ProfileGetLog(array $params) Get list of current user logs
* ProfileGetPassword() List profile specific password
* ProfileGetPasswordId(array $params) Get a profile specific password
* ProfileGetPermission() Get user permission
* ProfileGetPhone() Get list of current user phones
* ProfileGetPhoneId(array $params) Get a current user profile phone
* ProfileGetTwofactorauthentication() Get status of 2FA for the current user
* ProfileGetWorkspace() Get related workspace users
* ProfileGetWorkspacePreference() Get Workspace preferences
* ProfileGetWorkspacePreferenceSlackhook() List user's SlackWebHook
* ProfilePostAddress(array $params) Add an address to user profile
* ProfilePostAvatar() Add / Update profile's avatar. Image must be a scared image with minimum size of 16 of type image/png, image/jpeg or image/gif
* ProfilePostCguSign() Sign CG and contracts
* ProfilePostEmail(array $params) Add an email to user profile
* ProfilePostPassword(array $params) Add a profile specific password Warning: password given in response cannot be retrieve later, so store / show it immediately
* ProfilePostPhone(array $params) Add an phone to current user profile   $type
* ProfilePostWorkspaceMailbox(array $params) Attach a mailbox to current user
* ProfilePostWorkspacePreferenceSlackhook(array $params) Create a SlackWebHook
* ProfilePut(array $params) Update profile information
* ProfilePutAddressId(array $params) Update a user profile address
* ProfilePutEmailId(array $params) Update a user profile email
* ProfilePutPhoneId(array $params) Update a current user profile phone   $type
* ProfilePutWorkspaceMailboxIdSetPrimary(array $params) Set mailbox as primary
* ProfilePutWorkspaceMailboxIdUpdatePassword(array $params) Update mailbox credential password
* ProfilePutWorkspacePreference(array $params) Update Workspace preferences
* ProfilePutWorkspacePreferenceSlackhookId(array $params) Update SlackWebHook
* RadiosDeleteStationId(array $params) Delete radio
* RadiosDeleteStationIdPlayer(array $params) Deletes player
* RadiosDeleteStreamId(array $params) Deletes stream
* RadiosDeleteStreamIdFallback(array $params) deletes fallback
* RadiosGetCluster(array $params) lists clusters
* RadiosGetClusterId(array $params) displays cluster
* RadiosGetClusterIdStation(array $params) list stations of cluster
* RadiosGetClusterIdStream(array $params) list streams of cluster
* RadiosGetEdge(array $params) lists edges * @api_optional boolean $checkup
* RadiosGetEdgeConfigfile(array $params) outputs xml config file for edge
* RadiosGetEdgeId(array $params) displays edge
* RadiosGetMaster(array $params) lists masters
* RadiosGetMasterConfigfile(array $params) outputs xml config file for master
* RadiosGetMasterId(array $params) displays master
* RadiosGetStation(array $params) Lists radios
* RadiosGetStationAccountlist(array $params) * Lists radios for current or given account and current user
* RadiosGetStationId(array $params) show radio
* RadiosGetStationIdFtplogpass(array $params)
* RadiosGetStationIdOldplayer(array $params) Displays admin2 player
* RadiosGetStationIdPlayer(array $params) Displays a player
* RadiosGetStationIdRadiopass(array $params)
* RadiosGetStatsAccountBandwidth(array $params) gets bandwidth for station or particular stream
* RadiosGetStatsAccountCountries(array $params) gets countries stats
* RadiosGetStatsAccountListeners(array $params) gets listeners for account
* RadiosGetStatsAccountListeningtime(array $params) gets listening time for station or particular stream
* RadiosGetStatsAccountOverview(array $params) get stats overview for account
* RadiosGetStatsItemBandwidth(array $params) gets bandwidth for station or particular stream
* RadiosGetStatsItemCountries(array $params) gets countries stats
* RadiosGetStatsItemListeners(array $params) gets listeners for station or particular stream
* RadiosGetStatsItemListeningtime(array $params) gets listening time for station or particular stream
* RadiosGetStatsItemMonitoring(array $params) displays instant stats
* RadiosGetStatsItemOverview(array $params) get stats overview
* RadiosGetStatsItemPlayers(array $params) gets players stats
* RadiosGetStream(array $params) Lists streams
* RadiosGetStreamConfigfileforauth()
* RadiosGetStreamId(array $params) Show stream
* RadiosGetStreamIdDiagnosis(array $params) diagnosis
* RadiosGetStreamIdPassword(array $params)
* RadiosPostCluster(array $params) creates cluster
* RadiosPostEdge(array $params) creates edge
* RadiosPostMaster(array $params) creates master
* RadiosPostStation(array $params) Create radio
* RadiosPostStationIdPlayer(array $params) Creates new player
* RadiosPostStationIdPlayerDuplicate(array $params) Create new player with values of current player
* RadiosPostStream(array $params) Creates stream
* RadiosPostStreamIdFallback(array $params) add fallback to stream
* RadiosPutClusterId(array $params) modify cluster
* RadiosPutEdgeId(array $params) modify cluster
* RadiosPutMasterId(array $params) modify cluster
* RadiosPutStationId(array $params) Saves radio modifs
* RadiosPutStationIdFtplogpass(array $params)
* RadiosPutStationIdPlayer(array $params) modifies player
* RadiosPutStationIdRadiopass(array $params)
* RadiosPutStreamId(array $params) Update stream
* RadiosPutStreamIdPassword(array $params)
* SmsDeleteDraft(array $params) Delete all or list of drafts
* SmsDeleteDraftId(array $params) Delete a draft
* SmsDeleteMessage(array $params) Delete all or list of messages
* SmsDeleteMessageId(array $params) Delete a message
* SmsGetAuthPhoneNumber() Get phone numbers related to account
* SmsGetCredits() Get remaining credits
* SmsGetDraft(array $params) Get all draft
* SmsGetDraftId(array $params) Get a draft
* SmsGetInvoice() Get all invoices
* SmsGetInvoiceId(array $params) Get invoice with ID
* SmsGetInvoiceIdPdf(array $params) Get bill with ID (PDF)
* SmsGetMessage(array $params) Get all messages
* SmsGetMessageId(array $params) Get a message
* SmsGetTransferIncoming() Get incomming transfers
* SmsGetTransferOutgoing() Get outgoing transfers
* SmsPostAuthPhoneNumber(array $params) Add a phone number
* SmsPostAuthSend(array $params) Send an OTP code to verify a phone number
* SmsPostAuthVerify(array $params) Verify an OTP code
* SmsPostDraft(array $params) Add a new draft
* SmsPostMessage(array $params) Send a SMS (return message id on success if message has only one recipient)
* SmsPutDraftId(array $params) Update a draft
* SupportDeleteWorkspaceAccess() Revoke current user workspace right to Infomaniak's Staff
* SupportGetSuidId(array $params) Get a user's support unique id and history
* SupportPostWorkspaceAccess() Grant current user workspace right to Infomaniak's Staff
* SwissBackupDelete(array $params) Delete a given Swiss Backup product
* SwissBackupDeleteSlot(array $params)
* SwissBackupGet(array $params) Get informations of a given Swiss Backup product
* SwissBackupGetPassword(array $params)
* SwissBackupGetPricing() Get pricing with promo
* SwissBackupGetSlot(array $params)
* SwissBackupGetSlotRclone(array $params)
* SwissBackupPost() Add Swiss Backup from an Account identifier
* SwissBackupPostOrder() Add an order
* SwissBackupPostRequestPassword()
* SwissBackupPostSlot(array $params)
* SwissBackupPostSlotDisable(array $params)
* SwissBackupPostSlotEnable(array $params)
* SwissBackupPostSlotRequestPassword(array $params)
* SwissBackupPut(array $params) Update a given Swiss Backup product
* SwissBackupPutPassword(array $params)
* SwissBackupPutSlot(array $params)
* TaskschedulerGetExecId(array $params)
* TaskschedulerGetTouchId(array $params)
* TimezoneGet(array $params) List available timezone
* TimezoneIdGet(array $params) Display a timezone
* UserIdGet(array $params) Get information of user
* VideoGetInfomaniakPricing() Cette route nous donne la liste des prix pour le simulateur de la page de vente d'infomaniak.
* VideoGetMigrate()
* VideoGetPing() A test method to ensure that the API is available.
* VideoGetWowza() Just a ping route.
* VideoGetWowzaSimulcastFacebook(array $params) Renew the stream key Facebook side associated to the stream (Infomaniak stream) identified by the given stream ID for the simulcast config identified by the given ID, update the database accordingly and send back the new simulcast config.  If the stream does not need to be renewed or that the given stream doesn't have any simulcast config for facebook with the given ID, this will throw an error.  TODO: if the token expired, do something about it
* VpsGet() List Vps from an Account identifier
* VpsIdDeleteFirewall(array $params) Delete a firewall rule
* VpsIdDeleteSnapshot(array $params)
* VpsIdGet(array $params) Get informations of a given Vps
* VpsIdGetFirewall(array $params) Show a cloud firewall rule
* VpsIdGetMonitoring(array $params) Get monitoring data from Zabbix server
* VpsIdGetSnapshot(array $params)
* VpsIdGetWebHosting(array $params) Show Vps web hosting
* VpsIdGetWebHostingMoveVps(array $params) Get web hosting to an other VPS informations
* VpsIdPostBoot(array $params) Boot a not managed VPS
* VpsIdPostDisableRescue(array $params) Disable rescue mode on a not managed VPS
* VpsIdPostEnableRescue(array $params) Enable rescue mode on a not managed VPS
* VpsIdPostFirewall(array $params) Add a firewall rules
* VpsIdPostFirewallDisable(array $params) Disable a firewall rule
* VpsIdPostFirewallEnable(array $params) Enable a firewall rule
* VpsIdPostFirewallImport(array $params) Import firewall rules from a .csv file
* VpsIdPostReboot(array $params) Reboot a not managed VPS
* VpsIdPostReinstall(array $params) Reinstall a not managed VPS
* VpsIdPostShutdown(array $params) Shutdown a not managed VPS
* VpsIdPostSnapshot(array $params)
* VpsIdPostSnapshotDetach(array $params)
* VpsIdPostSnapshotRestore(array $params)
* VpsIdPostSupportContact(array $params) Contact premium support
* VpsIdPostWebHosting(array $params) Add a web hosting to VPS
* VpsIdPostWebHostingMoveVps(array $params) Move web hosting to an other VPS
* VpsIdPut(array $params) Update VPS informations
* VpsIdPutFirewall(array $params) Update a firewall rules
* VpsIdPutWebHosting(array $params) Update a web hosting to VPS
* WebGet(array $params) List WebHosting from an Account identifier
* WebGetApplication(array $params) Get Installatron application versions
* WebGetApplicationWordpressPlugin() Get list of Wordpress plugins
* WebGetApplicationWordpressTheme() Get list of Wordpress themes
* WebGetCsv() List account web hosting as CSV
* WebGetWebCronRss(array $params) Get a web hosting cron RSS feed
* WebIdDeleteApplication(array $params) Delete a web application
* WebIdDeleteApplicationBackup(array $params) Delete a web application backup
* WebIdDeleteApplicationWordpress(array $params) Uninstall a Wordpress application
* WebIdDeleteDatabase(array $params) Delete a database
* WebIdDeleteDatabaseUser(array $params) Delete a database user
* WebIdDeleteFolderProtection(array $params) Remove a folder protection
* WebIdDeleteH1Alias(array $params) Delete alias for the given hosting (Type H1 only)
* WebIdDeleteH1Generator(array $params) Uninstall the Generator
* WebIdDeleteH1Sitebuilder(array $params) Delete My SiteBuilder for the given hosting [type H1 Only]
* WebIdDeleteH1Subdomain(array $params) Delete subdomain for the given hosting (Type H1 only)
* WebIdDeletePatchman(array $params) Disable patchman on a hosting
* WebIdDeletePortOpen(array $params) Close an opened web hosting port
* WebIdDeleteSite(array $params) Delete the given site
* WebIdDeleteSiteAlias(array $params) Delete a domain alias from the given site
* WebIdDeleteSitePageBuilder(array $params) Delete page
* WebIdDeleteSsl(array $params) Remove SSL certificate for a Website
* WebIdDeleteUser(array $params) Delete an user account
* WebIdDeleteWebCron(array $params) Delete a web hosting cron task
* WebIdGet(array $params) Get informations of a given WebHosting
* WebIdGetApplication(array $params) Get WebApplication
* WebIdGetApplicationBackup(array $params) Get list of backups
* WebIdGetApplicationWordpress(array $params) Get details on a Wordpress installed application
* WebIdGetApplicationWordpressPlugin(array $params) Get list of Wordpress plugins
* WebIdGetApplicationWordpressTheme(array $params) Get list of Wordpress themes
* WebIdGetDatabase(array $params) Get database informations
* WebIdGetDatabaseBackup(array $params) Get database backup
* WebIdGetDatabaseUser(array $params) Get database user informations
* WebIdGetGetFolders(array $params) Get web hosting folder
* WebIdGetGetFoldersWithSqlDump(array $params) Get web hosting folder with sql dump files
* WebIdGetH1Alias(array $params) Get list of aliases for the given hosting (Type H1 only)
* WebIdGetH1Subdomain(array $params) Get list of subdomains for the given hosting (Type H1 only)
* WebIdGetIp(array $params) List DedicatedIp hosting sites
* WebIdGetMonitoring(array $params) Get monitoring data from Zabbix server
* WebIdGetPatchman(array $params) Recovers if patchman is enabled on hosting
* WebIdGetPortOpen(array $params) Get web hosting port informations
* WebIdGetRestore(array $params) Get WebHosting available restore
* WebIdGetSite(array $params) Get information for the given site
* WebIdGetSiteLog(array $params) List access logs for given site (500 line limit)
* WebIdGetSiteLogDownload(array $params) Request download of error log for given site
* WebIdGetSitePageBuilder(array $params) Get page informations
* WebIdGetSitePageBuilderConfig(array $params) Show page builder configuration
* WebIdGetSitePageBuilderPreview(array $params) Get html preview
* WebIdGetSiteStatistic(array $params) Get the statistics for the given site and month
* WebIdGetSsl(array $params) Get SSL certificate for a Website
* WebIdGetUser(array $params) Get an user account
* WebIdGetWebCron(array $params) Get web hosting cron informations
* WebIdPostApplication(array $params) Create a web application
* WebIdPostApplicationBackup(array $params) Backup web application
* WebIdPostApplicationBackupRestore(array $params) Restore a web application backup
* WebIdPostApplicationUpgrade(array $params) Upgrade web application
* WebIdPostApplicationWordpress(array $params) Install a new Wordpress application
* WebIdPostApplicationWordpressPlugin(array $params) Send plugin to wordpress application
* WebIdPostApplicationWordpressPluginDisable(array $params) Disable plugin from wordpress application
* WebIdPostApplicationWordpressPluginEnable(array $params) Enable plugin from wordpress application
* WebIdPostDatabase(array $params) Create a database
* WebIdPostDatabaseDownloadBackup(array $params) Download a database backup
* WebIdPostDatabaseExport(array $params) Export a database
* WebIdPostDatabaseImport(array $params) Import a database
* WebIdPostDatabaseRestoreBackup(array $params) Restore a database
* WebIdPostDatabaseUpgrade(array $params) Upgrade database
* WebIdPostDatabaseUser(array $params) Create a database user
* WebIdPostH1Alias(array $params) Store alias for the given hosting (Type H1 only)
* WebIdPostH1AliasSwap(array $params) Swap domain aliases, make it the primary domain for the given hosting (Type H1 only)
* WebIdPostH1Limit(array $params) Unlock php limits for one hour for the given hosting (Type H1 only)
* WebIdPostH1Subdomain(array $params) Store subdomain for the given hosting (Type H1 only)
* WebIdPostIpActivate(array $params) Activate dedicated Ip for a specific web hosting
* WebIdPostIpDisable(array $params) Disable dedicated Ip for a specific web hosting
* WebIdPostMigrationCopy(array $params) Copy web and mysql datas from h1 to h2
* WebIdPostMigrationCopyMysql(array $params) Copy mysql datas from h1 to h2
* WebIdPostMigrationCopyWeb(array $params) Copy web datas from h1 to h2
* WebIdPostMigrationFinish(array $params) Confirm the migration
* WebIdPostPatchman(array $params) Enable patchman on a hosting
* WebIdPostPortOpen(array $params) Open a web hosting port
* WebIdPostRestore(array $params) Restore a WebHosting
* WebIdPostRestoreCancel(array $params) Cancel a restoration
* WebIdPostSite(array $params) Store a new site for the given hosting
* WebIdPostSiteAlias(array $params) Store a domain alias for the given site
* WebIdPostSiteAliasMain(array $params) Swap the current site domain for the given domain alias
* WebIdPostSiteGoogleSearchConsoleUpload(array $params) Upload google search property validation file to web hosting site root directory
* WebIdPostSiteMaintenance(array $params) Toggle maintenance mode for the given site
* WebIdPostSitePageBuilderReset(array $params) Reset page to default state
* WebIdPostSslExport(array $params) Export a certificate
* WebIdPostSslGenerateCsr(array $params) Generate a CSR (certificate signing request)
* WebIdPostSslImport(array $params) Import a certificate
* WebIdPostSslImportIntermediary(array $params) Import an intermediary certificate
* WebIdPostUser(array $params) Create an user account
* WebIdPostVirusscan(array $params) Start a virus scan on web hosting
* WebIdPostWebCron(array $params) Store a new web hosting cron task
* WebIdPostWebCronCheck(array $params) Check a web hosting cron execution
* WebIdPut(array $params) Update WebHosting from an Account identifier
* WebIdPutApplication(array $params) Update a web application
* WebIdPutApplicationWordpress(array $params) Edit a Wordpress application
* WebIdPutDatabase(array $params) Update a database
* WebIdPutDatabaseUser(array $params) Update a database user
* WebIdPutFolderProtection(array $params) Update a folder protection
* WebIdPutH1GeneratorToggle(array $params) Toggle the Generator
* WebIdPutPortOpen(array $params) Update an opened web hosting port
* WebIdPutSite(array $params) Update site with the given data
* WebIdPutSitePageBuilder(array $params) Set page informations
* WebIdPutSsl(array $params) Update SSL certificate for a Website
* WebIdPutUser(array $params) Update an user account
* WebIdPutWebCron(array $params) Update a web hosting cron task
 
