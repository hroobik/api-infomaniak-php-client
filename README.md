![infomaniak's logo](https://www.infomaniak.com/img/common/logo_infomaniak.jpg)

![ideative's logo](./assets/IdeativeLogo.png)


#Infomaniak API Client 
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
- `DELETE` on `/1/account/{id}/tag/{tag_id}` with method `AccountDeleteTag`
- `POST` on `/1/mail/{mail_id}/mailbox` with method `MailPostMailbox`
- `POST` on `/1/mail/{mail_id}/mailbox/{mailbox}/auth/filter/edit"` with method `MailPostMailboxAuthFilterEdit`
- `GET` on `/1/affiliation/product/{id}/url/{lang}` with method `AffiliationGetProductUrl`
- `PUT` on `/1/radios/station/{id}/player/{player_id}` with method `RadiosPutStationPlayer`

Infomaniak original client is using a different naming and only on selected methods. Original 
methods have their name changed in the current client. 


##Available Methods

 * AccountDelete(array $params) Delete an account
 * AccountDeleteInvitation(array $params) Cancel an invitation to become a member of given account
 * AccountDeleteKey(array $params) Delete a SSH key
 * AccountDeleteProductLock(array $params) Remove a lock state to a product
 * AccountDeleteTag(array $params) Remove the specified tag.
 * AccountDeleteUser(array $params) Remove a user from given account
 * AccountDeleteUserEmails(array $params) Unlink an account mailboxes for given account and user
 * AccountGet(array $params) Get information of account
 * AccountGetCgu(array $params) Display account CGU
 * AccountGetCguPdf(array $params) Show CGU PDF
 * AccountGetContact(array $params)
 * AccountGetContactFields(array $params) Show fields required for a contact
 * AccountGetContracts(array $params) Get list of current account's contracts
 * AccountGetContractsDownloadOriginal(array $params) Download original contract
 * AccountGetContractsDownloadParaphed(array $params) Download paraphed contract
 * AccountGetCurrentProduct() List products of user current account
 * AccountGetCurrentService() List available current account's services
 * AccountGetDocuments(array $params)
 * AccountGetDocumentsDownload(array $params) Download attached document
 * AccountGetInvitation(array $params) Get invitation of joining account by ID
 * AccountGetInvoice(array $params) Show invoices for a group
 * AccountGetKey(array $params) Display a SSH key
 * AccountGetLog(array $params) Display a listing of logs for an account. (pagination is forced if not given)
 * AccountGetOrderContact(array $params)
 * AccountGetProduct(array $params) Display products for a service
 * AccountGetProductTransfer(array $params) Show a transfer
 * AccountGetProductUser(array $params) List product's user permission
 * AccountGetService(array $params) List available account's services
 * AccountGetTag(array $params) Display the specified tag.
 * AccountGetUser(array $params) Get user information for given account and user
 * AccountGetUserEmails(array $params) Get user's mailboxes for given account and user
 * AccountPostContact(array $params) Add a new contact to account
 * AccountPostInvitationResend(array $params) Resend invitation
 * AccountPostKey(array $params) Store a SSH key
 * AccountPostKeyGenerate(array $params) Generate a new SSH key
 * AccountPostPremiumSupport(array $params) Premium support contact
 * AccountPostProductLock(array $params) Add a lock state to a product
 * AccountPostProductTerminate(array $params) Terminate a product
 * AccountPostProductTransfer(array $params) Create a new transfer
 * AccountPostProductTransferAccept(array $params) Accept a transfer
 * AccountPostProductTransferCancel(array $params) Cancel a transfer
 * AccountPostProductTransferSendCodeByEmail(array $params) Send transfer code by email
 * AccountPostProductTransferValid(array $params) Validate a product transfer
 * AccountPostTag(array $params) Store a newly created tag for an account and tag it
 * AccountPostTagProduct(array $params) Store a newly created tag for an account and tag it
 * AccountPostUserSendSecurityWarning(array $params) Send a security warning to an user
 * AccountPostUserUnjail(array $params)
 * AccountPut(array $params) Update an account
 * AccountPutContact(array $params) Update an account contact
 * AccountPutKey(array $params) Update a SSH key
 * AccountPutPreferences(array $params) Update an account preferences
 * AccountPutProductLock(array $params) Set a lock state to a product
 * AccountPutProductUser(array $params) Update product's user permission
 * AccountPutTag(array $params) Tag or untag for taggable
 * AccountPutTagProduct(array $params) Tag or untag for taggable
 * AccountPutUser(array $params) Update user permissions
 * ActionGet(array $params) List available actions
 * AffiliationDeleteBanner(array $params) delete banner
 * AffiliationDeleteBannerUrl(array $params) delete ALL urls for banner
 * AffiliationDeleteLevel(array $params) delete level
 * AffiliationDeleteProduct(array $params) delete product
 * AffiliationDeleteProductUrl(array $params) delete product url
 * AffiliationDeletePromomethod(array $params) delete promomethod
 * AffiliationDeleteRegistredgroup(array $params) Delete subscription
 * AffiliationDeleteSitetype(array $params) delete sitetype
 * AffiliationDeleteSubscription(array $params) Delete subscription
 * AffiliationDeleteVideo(array $params) delete video
 * AffiliationGetAgence(array $params) Listing of Agencies(pagination is forced if not given)
 * AffiliationGetBanner(array $params)
 * AffiliationGetBannerUrl(array $params) show banner url
 * AffiliationGetCampaignGethash() get campagne by hash
 * AffiliationGetClick(array $params) show click
 * AffiliationGetLevel(array $params) get level
 * AffiliationGetPayment(array $params) Get payment
 * AffiliationGetPaymentDetails(array $params)
 * AffiliationGetProduct(array $params)
 * AffiliationGetProductUrl(array $params) get url for id + lang
 * AffiliationGetPromomethod(array $params) get promomethod
 * AffiliationGetRegistredgroup(array $params) get registred group
 * AffiliationGetSitetype(array $params) get sitetype
 * AffiliationGetSubscription(array $params) get subscription
 * AffiliationGetSubscriptionBanner(array $params)
 * AffiliationGetSubscriptionDeal(array $params)
 * AffiliationGetSubscriptionGethash() get subscription by hash
 * AffiliationGetSubscriptionInvoicedetail(array $params) get details of invoice
 * AffiliationGetSubscriptionInvoiceshistory(array $params) get table of profits invoices
 * AffiliationGetSubscriptionLevelstatus(array $params) gets current amount earned by affiliate since subscription and missing amount to reach next level
 * AffiliationGetSubscriptionPendingorders(array $params) get table of orders and invoices that were not paid to affiliate yet
 * AffiliationGetSubscriptionPendingprofits(array $params) Gets profits earned by affiliate since last invoice
 * AffiliationGetSubscriptionProduct(array $params) product, with url linked to subscription
 * AffiliationGetSubscriptionProducts(array $params) List of available products, with url linked to subscription
 * AffiliationGetSubscriptionProfits(array $params) gets sales graph and stats values
 * AffiliationGetSubscriptionSales(array $params) gets sales graph and stats values
 * AffiliationGetSubscriptionShowstaff(array $params) get subscription for infomaniak staff with owner id
 * AffiliationGetVideo(array $params)
 * AffiliationPostBanner(array $params) create banner
 * AffiliationPostBannerUrl(array $params) create banner url
 * AffiliationPostClick(array $params) store click
 * AffiliationPostLevel(array $params) Create level
 * AffiliationPostPaymentSetpaid(array $params) Set invoice paid
 * AffiliationPostProduct(array $params) create product
 * AffiliationPostProductUrl(array $params) create new url for product
 * AffiliationPostPromomethod(array $params) Create promomethod
 * AffiliationPostRegistredgroup(array $params) Create registred group
 * AffiliationPostRegistredgroupRegistercookie(array $params) register account for affiliation
 * AffiliationPostSitetype(array $params) Create sitetype
 * AffiliationPostSubscription(array $params) Create subscription
 * AffiliationPostSubscriptionDeal(array $params)
 * AffiliationPostVideo(array $params) create video
 * AffiliationPutBanner(array $params) update banner
 * AffiliationPutLevel(array $params) Update level
 * AffiliationPutPayment(array $params) Update payment. Better use setPaid
 * AffiliationPutProduct(array $params) update product
 * AffiliationPutProductUrl(array $params) update url for product
 * AffiliationPutPromomethod(array $params) update promomethod
 * AffiliationPutRegistredgroup(array $params) update registred group
 * AffiliationPutSitetype(array $params) update sitetype
 * AffiliationPutSubscription(array $params) modify subscription
 * AffiliationPutSubscriptionReject(array $params)
 * AffiliationPutSubscriptionToggleremunerate(array $params)
 * AffiliationPutSubscriptionValidate(array $params)
 * AffiliationPutSubscriptionWizard(array $params) route for wizard: sets subscriber's data, sends Cerberus ticket to infomaniak and email to customer
 * AffiliationPutVideo(array $params) update video
 * BookmarkDeleteBookmark(array $params) Delete a bookmark
 * BookmarkDeleteFolder(array $params) Delete bookmark folder
 * BookmarkGetBookmark(array $params) Get a bookmark
 * BookmarkGetBookmarkIcon(array $params) Get a bookmark icon
 * BookmarkGetBookmarkInc(array $params) Increment click counter of bookmark (only serve for popularity sort in user interface)
 * BookmarkGetFolder(array $params) Get bookmark folder
 * BookmarkGetFolderBookmark(array $params) Listing of all bookmarks of specified folder
 * BookmarkGetLabel() Listing of all bookmark labels
 * BookmarkPostBookmark(array $params) Add a bookmark
 * BookmarkPostFolder(array $params) Add bookmark folder
 * BookmarkPutBookmark(array $params) Update a bookmark
 * BookmarkPutFolder(array $params) Update bookmark folder
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
 * CountryGet(array $params) Display a country
 * CountryGetCity(array $params) List all cities for a country
 * DedicatedGet(array $params) Get informations of a given Dedicated server
 * DedicatedGetMonitoring(array $params) Gets the list of monitoring graphics
 * DedicatedGetWebHosting(array $params) List Dedicated web hosting
 * DedicatedPostReboot(array $params) Reboot a dedicated server
 * DedicatedPostSupportContact(array $params) Contact premium support
 * DedicatedPostWebHosting(array $params) Add a web hosting to dedicated server
 * DedicatedPutWebHosting(array $params) Update a web hosting on a dedicated server
 * DiagnosticGet(array $params) Get Diagnostic DNS of a given Service Item
 * DiagnosticPostFqdnFix(array $params) Fix an entry from diagnostic DNS
 * DiagnosticPutIgnore(array $params) Ignore diagnostic dns errors of a given Service Item
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
 * DomainPostRenewalWarrantyReminder(array $params) Send a renewal warranty reminder
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
 * EventCommunicationPutMessage(array $params) Update an existing message attached to a event communication
 * EventsGet(array $params) Get an event.
 * EventsGetComments(array $params) Get a comment.
 * EventsGetMaterials(array $params) Return impacted Materials information for an event
 * EventsGetMaterialsCheckScenario() Check if list of materials is matching a scenario
 * EventsGetNotification(array $params) List all notifications for a given id
 * EventsGetPublic(array $params) Get all events.
 * EventsGetStatus() Show All public events published on status website - last 10 days
 * EventsGetUsers() Get list of users impacted by the event
 * EventsPostSubscribe(array $params) Store a new subscriber
 * FqdnDelete(array $params) Delete a fqdn from a given Service Name and Identifier
 * FqdnGet(array $params) Get fqdns from a given Service Name and Identifier
 * FqdnPost(array $params) Add a fqdn to a given Service Name and Identifier
 * FqdnPutSwap(array $params) Swap a fqdn from a given Service Name and Identifier
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
 * InvoicingDeleteAddresses(array $params) Delete the given invoicing address
 * InvoicingDeletePaymentProfile(array $params) Delete the given payment profile
 * InvoicingDeleteRemunerationClientIbanDetails(array $params) Delete your iban details
 * InvoicingDeleteRemunerationClientPaypalDetails(array $params) Delete your paypal details
 * InvoicingGet() Ping url
 * InvoicingGetAddresses(array $params) Retrieve one invoicing address
 * InvoicingGetAddressesDefault(array $params) Retrieve the default invoicing address
 * InvoicingGetAutorenewCount(array $params) Compte les produits en renouvellement auto pour un groupe donné
 * InvoicingGetCommand(array $params) Get command details
 * InvoicingGetCommandCount(array $params) Count pending commands
 * InvoicingGetCommandList(array $params) List all commands for one account
 * InvoicingGetCommandPdf(array $params) display command as pdf document
 * InvoicingGetInvoiceAbstract(array $params) Returns a list of invoices for client account, with less informations on each invoice   reading.
 * InvoicingGetInvoiceContract(array $params) Get an invoice contract by id
 * InvoicingGetInvoiceContractList(array $params) Get all invoices contract
 * InvoicingGetInvoiceCount(array $params) Count the invoices for one client
 * InvoicingGetInvoiceDetail(array $params) get account invoices
 * InvoicingGetInvoiceList(array $params) Find client invoices   en perte.
 * InvoicingGetInvoiceListPublic(array $params) Find client invoices
 * InvoicingGetInvoicePdf(array $params) Display invoice as pdf document
 * InvoicingGetInvoicePeriodic(array $params) Find periodic invoice by id
 * InvoicingGetInvoicePeriodicList(array $params) List all periodic invoices for one client
 * InvoicingGetInvoiceRefundIban(array $params) Get informations about an ongoing iban refund
 * InvoicingGetPayment(array $params) Recherche un payment-container (pcp-xxx = par payment-container-payment, pc-xxx = par payment-container, po-xxx = par opération sur compte prépayé, f-xxx = par facture, c-xxx = par commande).
 * InvoicingGetPaymentPrepayAbstract(array $params) Returns a list of operations on prepaid account for client account, with less informations on each invoice   reading.
 * InvoicingGetPaymentPrepayHistory(array $params) Retrieve all the operations on the client prepaid account   remboursement du compte prépayé, 6: transfert entre 2 groupes, 7: crédits offerts
 * InvoicingGetPaymentPrepayPdf(array $params) Retrouve le pdf d'un dépôt sur compte prépayé par son id et un hash
 * InvoicingGetPaymentProfile(array $params)
 * InvoicingGetPaymentSearch(array $params) Recherche des payment-container (pcp-xxx = par payment-container-payment, pc-xxx = par payment-container, po-xxx = par opération sur compte prépayé, f-xxx = par facture, c-xxx = par commande).
 * InvoicingGetRemunerationClientIbanDetails(array $params) Get client iban details
 * InvoicingGetRemunerationClientPaypalDetails(array $params) Get client paypal email
 * InvoicingGetRenewCount(array $params) Compte les produits à renouveler pour un groupe donné
 * InvoicingGetRenewDomainsPublic(array $params) Liste les produits à renouveler pour un groupe donné
 * InvoicingGetRenewList(array $params) Liste les produits à renouveler pour un groupe donné
 * InvoicingGetRenewListPublic(array $params) Liste les produits à renouveler pour un groupe donné
 * InvoicingGetRenewMode(array $params)
 * InvoicingGetRenewServices(array $params)
 * InvoicingGetSettings(array $params) Global invoicing informations for current group
 * InvoicingGetVat(array $params)
 * InvoicingPostAddresses(array $params) Create a new invoicing address
 * InvoicingPostPaymentProfile(array $params)
 * InvoicingPostRemunerationClientIbanDetails(array $params) Modify or create your Iban details information
 * InvoicingPostRemunerationClientPaypalDetails(array $params) Modify or create your Paypal email address
 * InvoicingPutAddresses(array $params) Modify the given invoicing address
 * InvoicingPutAddressesDefault(array $params) Set the given address as default invoicing address
 * InvoicingPutCommandCancel(array $params) Cancel a command
 * InvoicingPutCommandCancelItems(array $params) Cancel some command items
 * InvoicingPutInvoiceAllByMail(array $params) Resend all account invoices b
 * InvoicingPutInvoiceContractUpload(array $params) Invoice contract : register the reciprocal client invoice
 * InvoicingPutInvoiceRefundIbanCustomerDatas(array $params) The client has given his bank details, send mail to accountancy department
 * InvoicingPutPaymentProfileDefault(array $params)
 * InvoicingPutRenewAutorenew(array $params)
 * InvoicingPutRenewMail(array $params) Nous avons décidé que nous allons inclure le package invoicing dans gestion (ou dans tout autre projet habilité à réaliser des tâches lourdes). Ainsi nous pourrons renvoyer le mail de rappel unitairement à un groupe donné ici via l'api, ou globallement pour tous les groupes concernés via gestion. En attendant je ne touche à rien -> j'utilise directement la classe Renouvellement du shared todo *cdr invoicing* - fin 2017 ... (après gestion en 5.6) - Mettre à jour
 * InvoicingPutRenewMode(array $params)
 * IpDeleteReverse(array $params) Remove a PTR record
 * IpGetReverse(array $params) Get reverse dns from an IP
 * IpPostReverse(array $params) Add a PTR record
 * IpPutReverse(array $params) Update a domain PTR record
 * JelasticGet(array $params) Get informations of a given Jelastic
 * JelasticGetPricing() Get the pricing of Jelastic PAAS
 * JelasticPut(array $params) Update a given Jelastic
 * LanguageGet(array $params) Display language
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
 * NasDeleteReset(array $params) Remove request to reset server
 * NasDeleteRestart(array $params) Remove request to restart server
 * NasGet(array $params) Get informations of a given NAS
 * NasGetReset(array $params) Get status of reset request
 * NasGetRestart(array $params) Get status of restart request
 * NasGetTraffic(array $params) Get traffic of a given NAS
 * NasPut(array $params) Update a given NAS
 * NasPutReset(array $params) Send request to reset server
 * NasPutRestart(array $params) Send request to restart server
 * PingGet() Test connectivity with the API
 * PrivatePostHostingFtp(array $params) Store old FTP password
 * PrivatePostHostingSql(array $params) Store old SQL password
 * PrivatePutHostingFtp(array $params) Check if FTP password was already used before
 * PrivatePutHostingSql(array $params) Check if SQL password was already used before
 * ProductGet(array $params) List products
 * ProfileDelete(array $params) Delete user
 * ProfileDeleteAddress(array $params) Delete a user profile address
 * ProfileDeleteAvatar() Delete profile's avatar
 * ProfileDeleteEmail(array $params) Delete a user profile email
 * ProfileDeletePhone(array $params) Delete a current user profile phone
 * ProfileDeleteWorkspaceMailbox(array $params) Unlink a mailbox from current user
 * ProfileDeleteWorkspacePreferenceSlackhook(array $params) Delete a user's SlackWebHook
 * ProfileGet(array $params) Get information of connected user
 * ProfileGetAddress(array $params) Get a user profile address
 * ProfileGetCgu() List contracts and cgu to sign
 * ProfileGetEmail(array $params) Get a user profile email
 * ProfileGetLog(array $params) Get list of current user logs
 * ProfileGetPassword(array $params) Get a profile specific password
 * ProfileGetPermission() Get user permission
 * ProfileGetPhone(array $params) Get a current user profile phone
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
 * ProfilePutAddress(array $params) Update a user profile address
 * ProfilePutEmail(array $params) Update a user profile email
 * ProfilePutPhone(array $params) Update a current user profile phone   $type
 * ProfilePutWorkspaceMailboxSetPrimary(array $params) Set mailbox as primary
 * ProfilePutWorkspaceMailboxUpdatePassword(array $params) Update mailbox credential password
 * ProfilePutWorkspacePreference(array $params) Update Workspace preferences
 * ProfilePutWorkspacePreferenceSlackhook(array $params) Update SlackWebHook
 * RadiosDeleteStation(array $params) Delete radio
 * RadiosDeleteStationPlayer(array $params) Deletes player
 * RadiosDeleteStream(array $params) Deletes stream
 * RadiosDeleteStreamFallback(array $params) deletes fallback
 * RadiosGetCluster(array $params) displays cluster
 * RadiosGetClusterStation(array $params) list stations of cluster
 * RadiosGetClusterStream(array $params) list streams of cluster
 * RadiosGetEdge(array $params) displays edge
 * RadiosGetEdgeConfigfile(array $params) outputs xml config file for edge
 * RadiosGetMaster(array $params) displays master
 * RadiosGetMasterConfigfile(array $params) outputs xml config file for master
 * RadiosGetStation(array $params) show radio
 * RadiosGetStationAccountlist(array $params) * Lists radios for current or given account and current user
 * RadiosGetStationFtplogpass(array $params)
 * RadiosGetStationOldplayer(array $params) Displays admin2 player
 * RadiosGetStationPlayer(array $params) Displays a player
 * RadiosGetStationRadiopass(array $params)
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
 * RadiosGetStream(array $params) Show stream
 * RadiosGetStreamConfigfileforauth()
 * RadiosGetStreamDiagnosis(array $params) diagnosis
 * RadiosGetStreamPassword(array $params)
 * RadiosPostCluster(array $params) creates cluster
 * RadiosPostEdge(array $params) creates edge
 * RadiosPostMaster(array $params) creates master
 * RadiosPostStation(array $params) Create radio
 * RadiosPostStationPlayer(array $params) Creates new player
 * RadiosPostStationPlayerDuplicate(array $params) Create new player with values of current player
 * RadiosPostStream(array $params) Creates stream
 * RadiosPostStreamFallback(array $params) add fallback to stream
 * RadiosPutCluster(array $params) modify cluster
 * RadiosPutEdge(array $params) modify cluster
 * RadiosPutMaster(array $params) modify cluster
 * RadiosPutStation(array $params) Saves radio modifs
 * RadiosPutStationFtplogpass(array $params)
 * RadiosPutStationPlayer(array $params) modifies player
 * RadiosPutStationRadiopass(array $params)
 * RadiosPutStream(array $params) Update stream
 * RadiosPutStreamPassword(array $params)
 * SmsDeleteDraft(array $params) Delete all or list of drafts
 * SmsDeleteMessage(array $params) Delete all or list of messages
 * SmsGetAuthPhoneNumber() Get phone numbers related to account
 * SmsGetCredits() Get remaining credits
 * SmsGetDraft(array $params) Get a draft
 * SmsGetInvoice(array $params) Get invoice with ID
 * SmsGetInvoicePdf(array $params) Get bill with ID (PDF)
 * SmsGetMessage(array $params) Get a message
 * SmsGetTransferIncoming() Get incomming transfers
 * SmsGetTransferOutgoing() Get outgoing transfers
 * SmsPostAuthPhoneNumber(array $params) Add a phone number
 * SmsPostAuthSend(array $params) Send an OTP code to verify a phone number
 * SmsPostAuthVerify(array $params) Verify an OTP code
 * SmsPostDraft(array $params) Add a new draft
 * SmsPostMessage(array $params) Send a SMS (return message id on success if message has only one recipient)
 * SmsPutDraft(array $params) Update a draft
 * SupportDeleteWorkspaceAccess() Revoke current user workspace right to Infomaniak's Staff
 * SupportGetSuid(array $params) Get a user's support unique id and history
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
 * TaskschedulerGetExec(array $params)
 * TaskschedulerGetTouch(array $params)
 * TimezoneGet(array $params) Display a timezone
 * UserGet(array $params) Get information of user
 * VideoGetInfomaniakPricing() Cette route nous donne la liste des prix pour le simulateur de la page de vente d'infomaniak.
 * VideoGetMigrate()
 * VideoGetPing() A test method to ensure that the API is available.
 * VideoGetWowza() Just a ping route.
 * VideoGetWowzaSimulcastFacebook(array $params) Renew the stream key Facebook side associated to the stream (Infomaniak stream) identified by the given stream ID for the simulcast config identified by the given ID, update the database accordingly and send back the new simulcast config.  If the stream does not need to be renewed or that the given stream doesn't have any simulcast config for facebook with the given ID, this will throw an error.  TODO: if the token expired, do something about it
 * VpsDeleteFirewall(array $params) Delete a firewall rule
 * VpsDeleteSnapshot(array $params)
 * VpsGet(array $params) Get informations of a given Vps
 * VpsGetFirewall(array $params) Show a cloud firewall rule
 * VpsGetMonitoring(array $params) Get monitoring data from Zabbix server
 * VpsGetSnapshot(array $params)
 * VpsGetWebHosting(array $params) Show Vps web hosting
 * VpsGetWebHostingMoveVps(array $params) Get web hosting to an other VPS informations
 * VpsPostBoot(array $params) Boot a not managed VPS
 * VpsPostDisableRescue(array $params) Disable rescue mode on a not managed VPS
 * VpsPostEnableRescue(array $params) Enable rescue mode on a not managed VPS
 * VpsPostFirewall(array $params) Add a firewall rules
 * VpsPostFirewallDisable(array $params) Disable a firewall rule
 * VpsPostFirewallEnable(array $params) Enable a firewall rule
 * VpsPostFirewallImport(array $params) Import firewall rules from a .csv file
 * VpsPostReboot(array $params) Reboot a not managed VPS
 * VpsPostReinstall(array $params) Reinstall a not managed VPS
 * VpsPostShutdown(array $params) Shutdown a not managed VPS
 * VpsPostSnapshot(array $params)
 * VpsPostSnapshotDetach(array $params)
 * VpsPostSnapshotRestore(array $params)
 * VpsPostSupportContact(array $params) Contact premium support
 * VpsPostWebHosting(array $params) Add a web hosting to VPS
 * VpsPostWebHostingMoveVps(array $params) Move web hosting to an other VPS
 * VpsPut(array $params) Update VPS informations
 * VpsPutFirewall(array $params) Update a firewall rules
 * VpsPutWebHosting(array $params) Update a web hosting to VPS
 * WebDeleteApplication(array $params) Delete a web application
 * WebDeleteApplicationBackup(array $params) Delete a web application backup
 * WebDeleteApplicationWordpress(array $params) Uninstall a Wordpress application
 * WebDeleteDatabase(array $params) Delete a database
 * WebDeleteDatabaseUser(array $params) Delete a database user
 * WebDeleteFolderProtection(array $params) Remove a folder protection
 * WebDeleteH1Alias(array $params) Delete alias for the given hosting (Type H1 only)
 * WebDeleteH1Generator(array $params) Uninstall the Generator
 * WebDeleteH1Sitebuilder(array $params) Delete My SiteBuilder for the given hosting [type H1 Only]
 * WebDeleteH1Subdomain(array $params) Delete subdomain for the given hosting (Type H1 only)
 * WebDeletePatchman(array $params) Disable patchman on a hosting
 * WebDeletePortOpen(array $params) Close an opened web hosting port
 * WebDeleteSite(array $params) Delete the given site
 * WebDeleteSiteAlias(array $params) Delete a domain alias from the given site
 * WebDeleteSitePageBuilder(array $params) Delete page
 * WebDeleteSsl(array $params) Remove SSL certificate for a Website
 * WebDeleteUser(array $params) Delete an user account
 * WebDeleteWebCron(array $params) Delete a web hosting cron task
 * WebGet(array $params) Get informations of a given WebHosting
 * WebGetApplication(array $params) Get Installatron application versions
 * WebGetApplicationBackup(array $params) Get list of backups
 * WebGetApplicationWordpress(array $params) Get details on a Wordpress installed application
 * WebGetApplicationWordpressPlugin() Get list of Wordpress plugins
 * WebGetApplicationWordpressTheme() Get list of Wordpress themes
 * WebGetCsv() List account web hosting as CSV
 * WebGetDatabase(array $params) Get database informations
 * WebGetDatabaseBackup(array $params) Get database backup
 * WebGetDatabaseUser(array $params) Get database user informations
 * WebGetGetFolders(array $params) Get web hosting folder
 * WebGetGetFoldersWithSqlDump(array $params) Get web hosting folder with sql dump files
 * WebGetH1Alias(array $params) Get list of aliases for the given hosting (Type H1 only)
 * WebGetH1Subdomain(array $params) Get list of subdomains for the given hosting (Type H1 only)
 * WebGetIp(array $params) List DedicatedIp hosting sites
 * WebGetMonitoring(array $params) Get monitoring data from Zabbix server
 * WebGetPatchman(array $params) Recovers if patchman is enabled on hosting
 * WebGetPortOpen(array $params) Get web hosting port informations
 * WebGetRestore(array $params) Get WebHosting available restore
 * WebGetSite(array $params) Get information for the given site
 * WebGetSiteLog(array $params) List access logs for given site (500 line limit)
 * WebGetSiteLogDownload(array $params) Request download of error log for given site
 * WebGetSitePageBuilder(array $params) Get page informations
 * WebGetSitePageBuilderConfig(array $params) Show page builder configuration
 * WebGetSitePageBuilderPreview(array $params) Get html preview
 * WebGetSiteStatistic(array $params) Get the statistics for the given site and month
 * WebGetSsl(array $params) Get SSL certificate for a Website
 * WebGetUser(array $params) Get an user account
 * WebGetWebCron(array $params) Get web hosting cron informations
 * WebGetWebCronRss(array $params) Get a web hosting cron RSS feed
 * WebPostApplication(array $params) Create a web application
 * WebPostApplicationBackup(array $params) Backup web application
 * WebPostApplicationBackupRestore(array $params) Restore a web application backup
 * WebPostApplicationUpgrade(array $params) Upgrade web application
 * WebPostApplicationWordpress(array $params) Install a new Wordpress application
 * WebPostApplicationWordpressPlugin(array $params) Send plugin to wordpress application
 * WebPostApplicationWordpressPluginDisable(array $params) Disable plugin from wordpress application
 * WebPostApplicationWordpressPluginEnable(array $params) Enable plugin from wordpress application
 * WebPostDatabase(array $params) Create a database
 * WebPostDatabaseDownloadBackup(array $params) Download a database backup
 * WebPostDatabaseExport(array $params) Export a database
 * WebPostDatabaseImport(array $params) Import a database
 * WebPostDatabaseRestoreBackup(array $params) Restore a database
 * WebPostDatabaseUpgrade(array $params) Upgrade database
 * WebPostDatabaseUser(array $params) Create a database user
 * WebPostH1Alias(array $params) Store alias for the given hosting (Type H1 only)
 * WebPostH1AliasSwap(array $params) Swap domain aliases, make it the primary domain for the given hosting (Type H1 only)
 * WebPostH1Limit(array $params) Unlock php limits for one hour for the given hosting (Type H1 only)
 * WebPostH1Subdomain(array $params) Store subdomain for the given hosting (Type H1 only)
 * WebPostIpActivate(array $params) Activate dedicated Ip for a specific web hosting
 * WebPostIpDisable(array $params) Disable dedicated Ip for a specific web hosting
 * WebPostMigrationCopy(array $params) Copy web and mysql datas from h1 to h2
 * WebPostMigrationCopyMysql(array $params) Copy mysql datas from h1 to h2
 * WebPostMigrationCopyWeb(array $params) Copy web datas from h1 to h2
 * WebPostMigrationFinish(array $params) Confirm the migration
 * WebPostPatchman(array $params) Enable patchman on a hosting
 * WebPostPortOpen(array $params) Open a web hosting port
 * WebPostRestore(array $params) Restore a WebHosting
 * WebPostRestoreCancel(array $params) Cancel a restoration
 * WebPostSite(array $params) Store a new site for the given hosting
 * WebPostSiteAlias(array $params) Store a domain alias for the given site
 * WebPostSiteAliasMain(array $params) Swap the current site domain for the given domain alias
 * WebPostSiteGoogleSearchConsoleUpload(array $params) Upload google search property validation file to web hosting site root directory
 * WebPostSiteMaintenance(array $params) Toggle maintenance mode for the given site
 * WebPostSitePageBuilderReset(array $params) Reset page to default state
 * WebPostSslExport(array $params) Export a certificate
 * WebPostSslGenerateCsr(array $params) Generate a CSR (certificate signing request)
 * WebPostSslImport(array $params) Import a certificate
 * WebPostSslImportIntermediary(array $params) Import an intermediary certificate
 * WebPostUser(array $params) Create an user account
 * WebPostVirusscan(array $params) Start a virus scan on web hosting
 * WebPostWebCron(array $params) Store a new web hosting cron task
 * WebPostWebCronCheck(array $params) Check a web hosting cron execution
 * WebPut(array $params) Update WebHosting from an Account identifier
 * WebPutApplication(array $params) Update a web application
 * WebPutApplicationWordpress(array $params) Edit a Wordpress application
 * WebPutDatabase(array $params) Update a database
 * WebPutDatabaseUser(array $params) Update a database user
 * WebPutFolderProtection(array $params) Update a folder protection
 * WebPutH1GeneratorToggle(array $params) Toggle the Generator
 * WebPutPortOpen(array $params) Update an opened web hosting port
 * WebPutSite(array $params) Update site with the given data
 * WebPutSitePageBuilder(array $params) Set page informations
 * WebPutSsl(array $params) Update SSL certificate for a Website
 * WebPutUser(array $params) Update an user account
 * WebPutWebCron(array $params) Update a web hosting cron task
 