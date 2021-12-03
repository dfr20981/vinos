# pmc_105\Customer_rules_alertsApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletemanageAlertsPreferences**](Customer_rules_alertsApi.md#deletemanageAlertsPreferences) | **DELETE** /vctc/customerrules/v1/consumertransactioncontrols/customer/{userIdentifier}/alerts/preferences | 
[**getGetNotificationDetails**](Customer_rules_alertsApi.md#getGetNotificationDetails) | **GET** /vctc/customerrules/v1/consumertransactioncontrols/customer/notifications | 
[**getcustomerAlertsProfile**](Customer_rules_alertsApi.md#getcustomerAlertsProfile) | **GET** /vctc/customerrules/v1/consumertransactioncontrols/customer/{userIdentifier} | 
[**patchcustomerAlertsProfile**](Customer_rules_alertsApi.md#patchcustomerAlertsProfile) | **PATCH** /vctc/customerrules/v1/consumertransactioncontrols/customer/{userIdentifier} | 
[**postGetNotificationsSummaryByPanOrToken**](Customer_rules_alertsApi.md#postGetNotificationsSummaryByPanOrToken) | **POST** /vctc/customerrules/v1/consumertransactioncontrols/customer/notificationInquiry | 
[**postcreateCustomerAlertProfile**](Customer_rules_alertsApi.md#postcreateCustomerAlertProfile) | **POST** /vctc/customerrules/v1/consumertransactioncontrols/customer | 
[**postmanageAlertsPreferences**](Customer_rules_alertsApi.md#postmanageAlertsPreferences) | **POST** /vctc/customerrules/v1/consumertransactioncontrols/customer/{userIdentifier}/alerts/preferences | 
[**putmanageAlertsPreferences**](Customer_rules_alertsApi.md#putmanageAlertsPreferences) | **PUT** /vctc/customerrules/v1/consumertransactioncontrols/customer/{userIdentifier}/alerts/preferences | 


# **deletemanageAlertsPreferences**
> \pmc_105\model\ManageAlertsPreferencesdeleteResponse deletemanageAlertsPreferences($user_identifier, $manage_alerts_preferencesdelete_payload, $app_group_id, $app_id, $sponsor_id)



Delete Existing Notification Preferences for given Customer

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $user_identifier = "user_identifier_example"; // string
    $manage_alerts_preferencesdelete_payload = new \pmc_105\model\ManageAlertsPreferencesdeletePayload(); // \pmc_105\model\ManageAlertsPreferencesdeletePayload
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->deletemanageAlertsPreferences($user_identifier, $manage_alerts_preferencesdelete_payload, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->deletemanageAlertsPreferences: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_identifier** | **string**| The user identifier of the customer profile document |
 **manage_alerts_preferencesdelete_payload** | [**\pmc_105\model\ManageAlertsPreferencesdeletePayload**](../Model/\pmc_105\model\ManageAlertsPreferencesdeletePayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\ManageAlertsPreferencesdeleteResponse**](../Model/ManageAlertsPreferencesdeleteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getGetNotificationDetails**
> \pmc_105\model\GetNotificationDetailsgetResponse getGetNotificationDetails($limit, $page, $decision_id, $document_id, $notification_id, $user_identifier, $app_group_id, $app_id, $sponsor_id)



Get notification details by documentID, decisionID, or userIdentifier. Note, only one parameter may be passed per request.

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $limit = "limit_example"; // string
    $page = "page_example"; // string
    $decision_id = "decision_id_example"; // string
    $document_id = "document_id_example"; // string
    $notification_id = "notification_id_example"; // string
    $user_identifier = "user_identifier_example"; // string
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->getGetNotificationDetails($limit, $page, $decision_id, $document_id, $notification_id, $user_identifier, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->getGetNotificationDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| Page size to be returned |
 **page** | **string**| Page number to be returned |
 **decision_id** | **string**| Decision ID to search for | [optional]
 **document_id** | **string**| Control document ID to search for | [optional]
 **notification_id** | **string**| Notification ID to search for | [optional]
 **user_identifier** | **string**| User identifier to search for | [optional]
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\GetNotificationDetailsgetResponse**](../Model/GetNotificationDetailsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getcustomerAlertsProfile**
> \pmc_105\model\CustomerAlertsProfilegetResponse getcustomerAlertsProfile($user_identifier, $app_group_id, $app_id, $sponsor_id)



Get Customer Profile by userIdentifier

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $user_identifier = "user_identifier_example"; // string
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->getcustomerAlertsProfile($user_identifier, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->getcustomerAlertsProfile: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_identifier** | **string**| The user identifier of the customer profile document |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\CustomerAlertsProfilegetResponse**](../Model/CustomerAlertsProfilegetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **patchcustomerAlertsProfile**
> \pmc_105\model\CustomerAlertsProfilepatchResponse patchcustomerAlertsProfile($user_identifier, $customer_alerts_profilepatch_payload, $app_group_id, $app_id, $sponsor_id)



Update Customer Profile by userIdentifier

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $user_identifier = "user_identifier_example"; // string
    $customer_alerts_profilepatch_payload = new \pmc_105\model\CustomerAlertsProfilepatchPayload(); // \pmc_105\model\CustomerAlertsProfilepatchPayload
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->patchcustomerAlertsProfile($user_identifier, $customer_alerts_profilepatch_payload, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->patchcustomerAlertsProfile: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_identifier** | **string**| The user identifier of the customer profile document |
 **customer_alerts_profilepatch_payload** | [**\pmc_105\model\CustomerAlertsProfilepatchPayload**](../Model/\pmc_105\model\CustomerAlertsProfilepatchPayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\CustomerAlertsProfilepatchResponse**](../Model/CustomerAlertsProfilepatchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postGetNotificationsSummaryByPanOrToken**
> \pmc_105\model\GetNotificationsSummaryByPanOrTokenpostResponse postGetNotificationsSummaryByPanOrToken($get_notifications_summary_by_pan_or_tokenpost_payload, $app_group_id, $app_id, $sponsor_id)



Get notification summary by primaryAccountNumber or paymentToken

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $get_notifications_summary_by_pan_or_tokenpost_payload = new \pmc_105\model\GetNotificationsSummaryByPanOrTokenpostPayload(); // \pmc_105\model\GetNotificationsSummaryByPanOrTokenpostPayload
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->postGetNotificationsSummaryByPanOrToken($get_notifications_summary_by_pan_or_tokenpost_payload, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->postGetNotificationsSummaryByPanOrToken: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_notifications_summary_by_pan_or_tokenpost_payload** | [**\pmc_105\model\GetNotificationsSummaryByPanOrTokenpostPayload**](../Model/\pmc_105\model\GetNotificationsSummaryByPanOrTokenpostPayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\GetNotificationsSummaryByPanOrTokenpostResponse**](../Model/GetNotificationsSummaryByPanOrTokenpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postcreateCustomerAlertProfile**
> \pmc_105\model\CreateCustomerAlertProfilepostResponse postcreateCustomerAlertProfile($create_customer_alert_profilepost_payload, $app_group_id, $app_id, $sponsor_id)



Create New Customer Profile

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $create_customer_alert_profilepost_payload = new \pmc_105\model\CreateCustomerAlertProfilepostPayload(); // \pmc_105\model\CreateCustomerAlertProfilepostPayload
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->postcreateCustomerAlertProfile($create_customer_alert_profilepost_payload, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->postcreateCustomerAlertProfile: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_customer_alert_profilepost_payload** | [**\pmc_105\model\CreateCustomerAlertProfilepostPayload**](../Model/\pmc_105\model\CreateCustomerAlertProfilepostPayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\CreateCustomerAlertProfilepostResponse**](../Model/CreateCustomerAlertProfilepostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postmanageAlertsPreferences**
> \pmc_105\model\ManageAlertsPreferencespostResponse postmanageAlertsPreferences($user_identifier, $manage_alerts_preferencespost_payload, $app_group_id, $app_id, $sponsor_id)



Create New Notification Preferences for given Customer Profile

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $user_identifier = "user_identifier_example"; // string
    $manage_alerts_preferencespost_payload = new \pmc_105\model\ManageAlertsPreferencespostPayload(); // \pmc_105\model\ManageAlertsPreferencespostPayload
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->postmanageAlertsPreferences($user_identifier, $manage_alerts_preferencespost_payload, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->postmanageAlertsPreferences: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_identifier** | **string**| The user identifier of the customer profile document |
 **manage_alerts_preferencespost_payload** | [**\pmc_105\model\ManageAlertsPreferencespostPayload**](../Model/\pmc_105\model\ManageAlertsPreferencespostPayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\ManageAlertsPreferencespostResponse**](../Model/ManageAlertsPreferencespostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putmanageAlertsPreferences**
> \pmc_105\model\ManageAlertsPreferencesputResponse putmanageAlertsPreferences($user_identifier, $manage_alerts_preferencesput_payload, $app_group_id, $app_id, $sponsor_id)



Update Existing Notification Preferences for given Customer

### Example
```php
<?php

require_once('./prod_13/pmc_105/autoload.php');
use \pmc_105\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Customer_rules_alertsApi
    $api_instance = new pmc_105\Api\Customer_rules_alertsApi();

    // Set the required payload and parameters.
    $user_identifier = "user_identifier_example"; // string
    $manage_alerts_preferencesput_payload = new \pmc_105\model\ManageAlertsPreferencesputPayload(); // \pmc_105\model\ManageAlertsPreferencesputPayload
    $app_group_id = "app_group_id_example"; // string
    $app_id = "app_id_example"; // string
    $sponsor_id = "sponsor_id_example"; // string

    try {
    $result = $api_instance->putmanageAlertsPreferences($user_identifier, $manage_alerts_preferencesput_payload, $app_group_id, $app_id, $sponsor_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Customer_rules_alertsApi->putmanageAlertsPreferences: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_identifier** | **string**| The user identifier of the customer profile document |
 **manage_alerts_preferencesput_payload** | [**\pmc_105\model\ManageAlertsPreferencesputPayload**](../Model/\pmc_105\model\ManageAlertsPreferencesputPayload.md)| request |
 **app_group_id** | **string**| Application Group ID assigned by VDP to uniquely identify a logical group of applications that manage transaction controls, if present appID should not be present | [optional]
 **app_id** | **string**| Application ID assigned by VDP to uniquely identify an application that manages transaction controls, if present appGroupID should not be present | [optional]
 **sponsor_id** | **string**| Card Program Sponsor ID as configured in VTC, and supplied by VDP | [optional]

### Return type

[**\pmc_105\model\ManageAlertsPreferencesputResponse**](../Model/ManageAlertsPreferencesputResponse.md)

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