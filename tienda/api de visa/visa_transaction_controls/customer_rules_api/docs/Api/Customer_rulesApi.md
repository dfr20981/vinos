# pmc_100\Customer_rulesApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletecardReplacement**](Customer_rulesApi.md#deletecardReplacement) | **DELETE** /vctc/customerrules//v1/consumertransactioncontrols/accounts/accountupdate | 
[**deletedeleteControlDocumentByDocId**](Customer_rulesApi.md#deletedeleteControlDocumentByDocId) | **DELETE** /vctc/customerrules//v1/consumertransactioncontrols/{documentID} | 
[**deletemanageControls**](Customer_rulesApi.md#deletemanageControls) | **DELETE** /vctc/customerrules//v1/consumertransactioncontrols/{documentID}/rules | 
[**getapplicationConfiguration**](Customer_rulesApi.md#getapplicationConfiguration) | **GET** /vctc/customerrules//v1/consumertransactioncontrols/applications/configuration | 
[**getmanageControls**](Customer_rulesApi.md#getmanageControls) | **GET** /vctc/customerrules//v1/consumertransactioncontrols/{documentID}/rules | 
[**gettransactionControlDocumentHistory**](Customer_rulesApi.md#gettransactionControlDocumentHistory) | **GET** /vctc/customerrules//v1/consumertransactioncontrols/{documentID}/controlHistory | 
[**postbatchEnrollment**](Customer_rulesApi.md#postbatchEnrollment) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/batch | 
[**postcardReplacement**](Customer_rulesApi.md#postcardReplacement) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/accounts/accountupdate | 
[**postconfigurationCardinquiry**](Customer_rulesApi.md#postconfigurationCardinquiry) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/configuration/cardinquiry | 
[**postdecoupleTokens**](Customer_rulesApi.md#postdecoupleTokens) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/accounts/decoupletokens | 
[**postmanageControls**](Customer_rulesApi.md#postmanageControls) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/{documentID}/rules | 
[**postmerchantTypeControlsCardInquiry**](Customer_rulesApi.md#postmerchantTypeControlsCardInquiry) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/merchanttypecontrols/cardinquiry | 
[**postmobileWalletServices**](Customer_rulesApi.md#postmobileWalletServices) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/walletservices/accountinquiry | 
[**posttransactionControlHistoryByDocumentId**](Customer_rulesApi.md#posttransactionControlHistoryByDocumentId) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/controlHistory | 
[**posttransactionControls**](Customer_rulesApi.md#posttransactionControls) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/transactiontypecontrols/cardinquiry | 
[**posttransactionControlsByPan**](Customer_rulesApi.md#posttransactionControlsByPan) | **POST** /vctc/customerrules//v1/consumertransactioncontrols/inquiries/cardinquiry | 
[**postvtcRegistration**](Customer_rulesApi.md#postvtcRegistration) | **POST** /vctc/customerrules//v1/consumertransactioncontrols | 
[**putapplicationConfiguration**](Customer_rulesApi.md#putapplicationConfiguration) | **PUT** /vctc/customerrules//v1/consumertransactioncontrols/applications/configuration | 
[**putmanageControls**](Customer_rulesApi.md#putmanageControls) | **PUT** /vctc/customerrules//v1/consumertransactioncontrols/{documentID}/rules | 


# **deletecardReplacement**
> \pmc_100\model\CardReplacementdeleteResponse deletecardReplacement($card_replacementdelete_payload)



Delete a Control Document using an Account Number (primaryAccountNumber or paymentToken).

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $card_replacementdelete_payload = new \pmc_100\model\CardReplacementdeletePayload(); // \pmc_100\model\CardReplacementdeletePayload

    try {
    $result = $api_instance->deletecardReplacement($card_replacementdelete_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->deletecardReplacement: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_replacementdelete_payload** | [**\pmc_100\model\CardReplacementdeletePayload**](../Model/\pmc_100\model\CardReplacementdeletePayload.md)| request |

### Return type

[**\pmc_100\model\CardReplacementdeleteResponse**](../Model/CardReplacementdeleteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **deletedeleteControlDocumentByDocId**
> \pmc_100\model\DeleteControlDocumentByDocIddeleteResponse deletedeleteControlDocumentByDocId($document_id)



Delete a Control Document.

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $document_id = "document_id_example"; // string

    try {
    $result = $api_instance->deletedeleteControlDocumentByDocId($document_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->deletedeleteControlDocumentByDocId: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| The documentID of the control document to be de-enrolled. The document will be deleted. |

### Return type

[**\pmc_100\model\DeleteControlDocumentByDocIddeleteResponse**](../Model/DeleteControlDocumentByDocIddeleteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **deletemanageControls**
> \pmc_100\model\ManageControlsdeleteResponse deletemanageControls($document_id, $manage_controlsdelete_payload)



Delete an existing control type in a Control Document.

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $document_id = "document_id_example"; // string
    $manage_controlsdelete_payload = new \pmc_100\model\ManageControlsdeletePayload(); // \pmc_100\model\ManageControlsdeletePayload

    try {
    $result = $api_instance->deletemanageControls($document_id, $manage_controlsdelete_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->deletemanageControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| The documentID of the control document from where control rules are to be deleted, Does not delete the document |
 **manage_controlsdelete_payload** | [**\pmc_100\model\ManageControlsdeletePayload**](../Model/\pmc_100\model\ManageControlsdeletePayload.md)| request |

### Return type

[**\pmc_100\model\ManageControlsdeleteResponse**](../Model/ManageControlsdeleteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getapplicationConfiguration**
> \pmc_100\model\ApplicationConfigurationgetResponse getapplicationConfiguration()



Retrieve the App's configuration data for notification callback settings

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.

    try {
    $result = $api_instance->getapplicationConfiguration();
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->getapplicationConfiguration: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\pmc_100\model\ApplicationConfigurationgetResponse**](../Model/ApplicationConfigurationgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getmanageControls**
> \pmc_100\model\ManageControlsgetResponse getmanageControls($document_id, $user_identifier)



Retrieve a Control Document

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $document_id = "document_id_example"; // string
    $user_identifier = "user_identifier_example"; // string

    try {
    $result = $api_instance->getmanageControls($document_id, $user_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->getmanageControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| The documentID of the control document to be returned. |
 **user_identifier** | **string**| Uniquely identifies the cardholder who is to receive the alert message. The notification Service Provider should use this value to identify an individual and their contact preferences.  The userIdentifier should be a GUID, but at minimum must be unique per enrolling application. It is mandatory for VTC notifications. Maximum of 72 characters. | [optional]

### Return type

[**\pmc_100\model\ManageControlsgetResponse**](../Model/ManageControlsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **gettransactionControlDocumentHistory**
> \pmc_100\model\TransactionControlDocumentHistorygetResponse gettransactionControlDocumentHistory($document_id)



Get Transaction Control Changes History(Audit) by documentID

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $document_id = "document_id_example"; // string

    try {
    $result = $api_instance->gettransactionControlDocumentHistory($document_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->gettransactionControlDocumentHistory: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| The documentID of the control document to be returned. |

### Return type

[**\pmc_100\model\TransactionControlDocumentHistorygetResponse**](../Model/TransactionControlDocumentHistorygetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postbatchEnrollment**
> \pmc_100\model\BatchEnrollmentpostResponse postbatchEnrollment($app_id, $sponsor_id, $batch_enrollmentpost_payload, $app_group_id)



Enroll a batch of accounts in Visa Transaction Controls (VTC)

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string
    $batch_enrollmentpost_payload = new \pmc_100\model\BatchEnrollmentpostPayload(); // \pmc_100\model\BatchEnrollmentpostPayload
    $app_group_id = "app_group_id_example"; // string

    try {
    $result = $api_instance->postbatchEnrollment($app_id, $sponsor_id, $batch_enrollmentpost_payload, $app_group_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postbatchEnrollment: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present |
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP |
 **batch_enrollmentpost_payload** | [**\pmc_100\model\BatchEnrollmentpostPayload**](../Model/\pmc_100\model\BatchEnrollmentpostPayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]

### Return type

[**\pmc_100\model\BatchEnrollmentpostResponse**](../Model/BatchEnrollmentpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postcardReplacement**
> \pmc_100\model\CardReplacementpostResponse postcardReplacement($card_replacementpost_payload)



Update the existing account identifier with new one (Card Replacement)

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $card_replacementpost_payload = new \pmc_100\model\CardReplacementpostPayload(); // \pmc_100\model\CardReplacementpostPayload

    try {
    $result = $api_instance->postcardReplacement($card_replacementpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postcardReplacement: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_replacementpost_payload** | [**\pmc_100\model\CardReplacementpostPayload**](../Model/\pmc_100\model\CardReplacementpostPayload.md)| request |

### Return type

[**\pmc_100\model\CardReplacementpostResponse**](../Model/CardReplacementpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postconfigurationCardinquiry**
> \pmc_100\model\ConfigurationCardinquirypostResponse postconfigurationCardinquiry($configuration_cardinquirypost_payload)



Retrieve list of available payment control types for a card

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $configuration_cardinquirypost_payload = new \pmc_100\model\ConfigurationCardinquirypostPayload(); // \pmc_100\model\ConfigurationCardinquirypostPayload

    try {
    $result = $api_instance->postconfigurationCardinquiry($configuration_cardinquirypost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postconfigurationCardinquiry: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configuration_cardinquirypost_payload** | [**\pmc_100\model\ConfigurationCardinquirypostPayload**](../Model/\pmc_100\model\ConfigurationCardinquirypostPayload.md)| CardInquiryRequest |

### Return type

[**\pmc_100\model\ConfigurationCardinquirypostResponse**](../Model/ConfigurationCardinquirypostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postdecoupleTokens**
> \pmc_100\model\DecoupleTokenspostResponse postdecoupleTokens($app_id, $decouple_tokenspost_payload, $app_group_id, $sponsor_id)



Couple/Decouple a list of tokens from/to corresponding PAN

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $app_id = "app_id_example"; // string
    $decouple_tokenspost_payload = new \pmc_100\model\DecoupleTokenspostPayload(); // \pmc_100\model\DecoupleTokenspostPayload
    $app_group_id = "app_group_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->postdecoupleTokens($app_id, $decouple_tokenspost_payload, $app_group_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postdecoupleTokens: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present |
 **decouple_tokenspost_payload** | [**\pmc_100\model\DecoupleTokenspostPayload**](../Model/\pmc_100\model\DecoupleTokenspostPayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_100\model\DecoupleTokenspostResponse**](../Model/DecoupleTokenspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postmanageControls**
> \pmc_100\model\ManageControlspostResponse postmanageControls($document_id, $manage_controlspost_payload)



Add new payment controls to a Control Document

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $document_id = "document_id_example"; // string
    $manage_controlspost_payload = new \pmc_100\model\ManageControlspostPayload(); // \pmc_100\model\ManageControlspostPayload

    try {
    $result = $api_instance->postmanageControls($document_id, $manage_controlspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postmanageControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| The unique documentID of a control document. |
 **manage_controlspost_payload** | [**\pmc_100\model\ManageControlspostPayload**](../Model/\pmc_100\model\ManageControlspostPayload.md)| request |

### Return type

[**\pmc_100\model\ManageControlspostResponse**](../Model/ManageControlspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postmerchantTypeControlsCardInquiry**
> \pmc_100\model\MerchantTypeControlsCardInquirypostResponse postmerchantTypeControlsCardInquiry($merchant_type_controls_card_inquirypost_payload)



Retreive list of available merchant type controls for a card

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $merchant_type_controls_card_inquirypost_payload = new \pmc_100\model\MerchantTypeControlsCardInquirypostPayload(); // \pmc_100\model\MerchantTypeControlsCardInquirypostPayload

    try {
    $result = $api_instance->postmerchantTypeControlsCardInquiry($merchant_type_controls_card_inquirypost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postmerchantTypeControlsCardInquiry: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_type_controls_card_inquirypost_payload** | [**\pmc_100\model\MerchantTypeControlsCardInquirypostPayload**](../Model/\pmc_100\model\MerchantTypeControlsCardInquirypostPayload.md)| CardInquiryRequest |

### Return type

[**\pmc_100\model\MerchantTypeControlsCardInquirypostResponse**](../Model/MerchantTypeControlsCardInquirypostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postmobileWalletServices**
> \pmc_100\model\MobileWalletServicespostResponse postmobileWalletServices($mobile_wallet_servicespost_payload)



Retrieve available Rules and existing Control Documents based on the primaryAccountNumber, paymentToken or documentID

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $mobile_wallet_servicespost_payload = new \pmc_100\model\MobileWalletServicespostPayload(); // \pmc_100\model\MobileWalletServicespostPayload

    try {
    $result = $api_instance->postmobileWalletServices($mobile_wallet_servicespost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postmobileWalletServices: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mobile_wallet_servicespost_payload** | [**\pmc_100\model\MobileWalletServicespostPayload**](../Model/\pmc_100\model\MobileWalletServicespostPayload.md)| request |

### Return type

[**\pmc_100\model\MobileWalletServicespostResponse**](../Model/MobileWalletServicespostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **posttransactionControlHistoryByDocumentId**
> \pmc_100\model\TransactionControlHistoryByDocumentIdpostResponse posttransactionControlHistoryByDocumentId($transaction_control_history_by_document_idpost_payload)



Get a control document history by primaryAccountNumber and date range.

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $transaction_control_history_by_document_idpost_payload = new \pmc_100\model\TransactionControlHistoryByDocumentIdpostPayload(); // \pmc_100\model\TransactionControlHistoryByDocumentIdpostPayload

    try {
    $result = $api_instance->posttransactionControlHistoryByDocumentId($transaction_control_history_by_document_idpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->posttransactionControlHistoryByDocumentId: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_control_history_by_document_idpost_payload** | [**\pmc_100\model\TransactionControlHistoryByDocumentIdpostPayload**](../Model/\pmc_100\model\TransactionControlHistoryByDocumentIdpostPayload.md)| request |

### Return type

[**\pmc_100\model\TransactionControlHistoryByDocumentIdpostResponse**](../Model/TransactionControlHistoryByDocumentIdpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **posttransactionControls**
> \pmc_100\model\TransactionControlspostResponse posttransactionControls($transaction_controlspost_payload)



Retreive list of available transaction type controls for a card

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $transaction_controlspost_payload = new \pmc_100\model\TransactionControlspostPayload(); // \pmc_100\model\TransactionControlspostPayload

    try {
    $result = $api_instance->posttransactionControls($transaction_controlspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->posttransactionControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_controlspost_payload** | [**\pmc_100\model\TransactionControlspostPayload**](../Model/\pmc_100\model\TransactionControlspostPayload.md)| CardInquiryRequest |

### Return type

[**\pmc_100\model\TransactionControlspostResponse**](../Model/TransactionControlspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **posttransactionControlsByPan**
> \pmc_100\model\TransactionControlsByPanpostResponse posttransactionControlsByPan($transaction_controls_by_panpost_payload)



Get a Control Document List by a PrimaryAccountNumber

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $transaction_controls_by_panpost_payload = new \pmc_100\model\TransactionControlsByPanpostPayload(); // \pmc_100\model\TransactionControlsByPanpostPayload

    try {
    $result = $api_instance->posttransactionControlsByPan($transaction_controls_by_panpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->posttransactionControlsByPan: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_controls_by_panpost_payload** | [**\pmc_100\model\TransactionControlsByPanpostPayload**](../Model/\pmc_100\model\TransactionControlsByPanpostPayload.md)| request |

### Return type

[**\pmc_100\model\TransactionControlsByPanpostResponse**](../Model/TransactionControlsByPanpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postvtcRegistration**
> \pmc_100\model\VtcRegistrationpostResponse postvtcRegistration($vtc_registrationpost_payload)



Enroll an account in Visa Transaction Controls (VTC)

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $vtc_registrationpost_payload = new \pmc_100\model\VtcRegistrationpostPayload(); // \pmc_100\model\VtcRegistrationpostPayload

    try {
    $result = $api_instance->postvtcRegistration($vtc_registrationpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->postvtcRegistration: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vtc_registrationpost_payload** | [**\pmc_100\model\VtcRegistrationpostPayload**](../Model/\pmc_100\model\VtcRegistrationpostPayload.md)| request |

### Return type

[**\pmc_100\model\VtcRegistrationpostResponse**](../Model/VtcRegistrationpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putapplicationConfiguration**
> \pmc_100\model\ApplicationConfigurationputResponse putapplicationConfiguration($application_configurationput_payload)



Update the App's configuration data for notification callback settings

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $application_configurationput_payload = new \pmc_100\model\ApplicationConfigurationputPayload(); // \pmc_100\model\ApplicationConfigurationputPayload

    try {
    $result = $api_instance->putapplicationConfiguration($application_configurationput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->putapplicationConfiguration: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_configurationput_payload** | [**\pmc_100\model\ApplicationConfigurationputPayload**](../Model/\pmc_100\model\ApplicationConfigurationputPayload.md)| callBackSettingsRequest |

### Return type

[**\pmc_100\model\ApplicationConfigurationputResponse**](../Model/ApplicationConfigurationputResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putmanageControls**
> \pmc_100\model\ManageControlsputResponse putmanageControls($document_id, $manage_controlsput_payload)



Update the existing details of a Control Document

### Example
```php
<?php

require_once('./prod_13/pmc_100/autoload.php');
use \pmc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rulesApi
    $api_instance = new pmc_100\Api\Customer_rulesApi();

    // Set the required payload and parameters.
    $document_id = "document_id_example"; // string
    $manage_controlsput_payload = new \pmc_100\model\ManageControlsputPayload(); // \pmc_100\model\ManageControlsputPayload

    try {
    $result = $api_instance->putmanageControls($document_id, $manage_controlsput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rulesApi->putmanageControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| The documentID of the control document to be updated. |
 **manage_controlsput_payload** | [**\pmc_100\model\ManageControlsputPayload**](../Model/\pmc_100\model\ManageControlsputPayload.md)| request |

### Return type

[**\pmc_100\model\ManageControlsputResponse**](../Model/ManageControlsputResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)


##License
**© Copyright 2018 Visa. All Rights Reserved.**

*NOTICE: The software and accompanying information and documentation (together, the “Software”) remain the property of
and are proprietary to Visa and its suppliers and affiliates. The Software remains protected by intellectual property
rights and may be covered by U.S. and foreign patents or patent applications. The Software is licensed and not sold.*

*By accessing the Software you are agreeing to Visa's terms of use (developer.visa.com/terms) and privacy policy (developer.visa.com/privacy).
In addition, all permissible uses of the Software must be in support of Visa products, programs and services provided
through the Visa Developer Program (VDP) platform only (developer.visa.com). **THE SOFTWARE AND ANY ASSOCIATED
INFORMATION OR DOCUMENTATION IS PROVIDED ON AN “AS IS,” “AS AVAILABLE,” “WITH ALL FAULTS” BASIS WITHOUT WARRANTY OR
CONDITION OF ANY KIND. YOUR USE IS AT YOUR OWN RISK.** All brand names are the property of their respective owners, used for identification purposes only, and do not imply
product endorsement or affiliation with Visa. Any links to third party sites are for your information only and equally
do not constitute a Visa endorsement. Visa has no insight into and control over third party content and code and disclaims
all liability for any such components, including continued availability and functionality. Benefits depend on implementation
details and business factors and coding steps shown are exemplary only and do not reflect all necessary elements for the
described capabilities. Capabilities and features are subject to Visa’s terms and conditions and may require development,
implementation and resources by you based on your business and operational details. Please refer to the specific
API documentation for details on the requirements, eligibility and geographic availability.*

*This Software includes programs, concepts and details under continuing development by Visa. Any Visa features,
functionality, implementation, branding, and schedules may be amended, updated or canceled at Visa’s discretion.
The timing of widespread availability of programs and functionality is also subject to a number of factors outside Visa’s control,
including but not limited to deployment of necessary infrastructure by issuers, acquirers, merchants and mobile device manufacturers.*