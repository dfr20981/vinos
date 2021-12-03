# pmc_102\Prog_adminApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletemanageRuleConfiguration**](Prog_adminApi.md#deletemanageRuleConfiguration) | **DELETE** /vctc/programadmin//v1/sponsors/configuration | 
[**deletemanageTransactionControls**](Prog_adminApi.md#deletemanageTransactionControls) | **DELETE** /vctc/programadmin//v1/configuration/transactiontypecontrols | 
[**getmanageRuleConfiguration**](Prog_adminApi.md#getmanageRuleConfiguration) | **GET** /vctc/programadmin//v1/sponsors/configuration | 
[**getmanageTransactionControls**](Prog_adminApi.md#getmanageTransactionControls) | **GET** /vctc/programadmin//v1/configuration/transactiontypecontrols | 
[**postmanageRuleConfiguration**](Prog_adminApi.md#postmanageRuleConfiguration) | **POST** /vctc/programadmin//v1/sponsors/configuration | 
[**postmanageTransactionControls**](Prog_adminApi.md#postmanageTransactionControls) | **POST** /vctc/programadmin//v1/configuration/transactiontypecontrols | 
[**putmanageRuleConfiguration**](Prog_adminApi.md#putmanageRuleConfiguration) | **PUT** /vctc/programadmin//v1/sponsors/configuration | 
[**putmanageTransactionControls**](Prog_adminApi.md#putmanageTransactionControls) | **PUT** /vctc/programadmin//v1/configuration/transactiontypecontrols | 


# **deletemanageRuleConfiguration**
> \pmc_102\model\ManageRuleConfigurationdeleteResponse deletemanageRuleConfiguration($manage_rule_configurationdelete_payload)



Delete the consumer transaction controls that the issuer has made avaiable to its cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.
    $manage_rule_configurationdelete_payload = new \pmc_102\model\ManageRuleConfigurationdeletePayload(); // \pmc_102\model\ManageRuleConfigurationdeletePayload

    try {
    $result = $api_instance->deletemanageRuleConfiguration($manage_rule_configurationdelete_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->deletemanageRuleConfiguration: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_rule_configurationdelete_payload** | [**\pmc_102\model\ManageRuleConfigurationdeletePayload**](../Model/\pmc_102\model\ManageRuleConfigurationdeletePayload.md)| request |

### Return type

[**\pmc_102\model\ManageRuleConfigurationdeleteResponse**](../Model/ManageRuleConfigurationdeleteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **deletemanageTransactionControls**
> \pmc_102\model\ManageTransactionControlsdeleteResponse deletemanageTransactionControls($manage_transaction_controlsdelete_payload)



Delete transaction type controls that the issuer has made available to its cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.
    $manage_transaction_controlsdelete_payload = new \pmc_102\model\ManageTransactionControlsdeletePayload(); // \pmc_102\model\ManageTransactionControlsdeletePayload

    try {
    $result = $api_instance->deletemanageTransactionControls($manage_transaction_controlsdelete_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->deletemanageTransactionControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_transaction_controlsdelete_payload** | [**\pmc_102\model\ManageTransactionControlsdeletePayload**](../Model/\pmc_102\model\ManageTransactionControlsdeletePayload.md)| request |

### Return type

[**\pmc_102\model\ManageTransactionControlsdeleteResponse**](../Model/ManageTransactionControlsdeleteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getmanageRuleConfiguration**
> \pmc_102\model\ManageRuleConfigurationgetResponse getmanageRuleConfiguration()



Retrieve list of rule categories that issuer has made available to its cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.

    try {
    $result = $api_instance->getmanageRuleConfiguration();
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->getmanageRuleConfiguration: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\pmc_102\model\ManageRuleConfigurationgetResponse**](../Model/ManageRuleConfigurationgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getmanageTransactionControls**
> \pmc_102\model\ManageTransactionControlsgetResponse getmanageTransactionControls()



Retrieve the list of transaction type controls that the issuer has made available to its cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.

    try {
    $result = $api_instance->getmanageTransactionControls();
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->getmanageTransactionControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\pmc_102\model\ManageTransactionControlsgetResponse**](../Model/ManageTransactionControlsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postmanageRuleConfiguration**
> \pmc_102\model\ManageRuleConfigurationpostResponse postmanageRuleConfiguration($manage_rule_configurationpost_payload)



Add new rule categories for use by issuer's cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.
    $manage_rule_configurationpost_payload = new \pmc_102\model\ManageRuleConfigurationpostPayload(); // \pmc_102\model\ManageRuleConfigurationpostPayload

    try {
    $result = $api_instance->postmanageRuleConfiguration($manage_rule_configurationpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->postmanageRuleConfiguration: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_rule_configurationpost_payload** | [**\pmc_102\model\ManageRuleConfigurationpostPayload**](../Model/\pmc_102\model\ManageRuleConfigurationpostPayload.md)| request |

### Return type

[**\pmc_102\model\ManageRuleConfigurationpostResponse**](../Model/ManageRuleConfigurationpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postmanageTransactionControls**
> \pmc_102\model\ManageTransactionControlspostResponse postmanageTransactionControls($manage_transaction_controlspost_payload)



Add new transaction type controls for the issuer's cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.
    $manage_transaction_controlspost_payload = new \pmc_102\model\ManageTransactionControlspostPayload(); // \pmc_102\model\ManageTransactionControlspostPayload

    try {
    $result = $api_instance->postmanageTransactionControls($manage_transaction_controlspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->postmanageTransactionControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_transaction_controlspost_payload** | [**\pmc_102\model\ManageTransactionControlspostPayload**](../Model/\pmc_102\model\ManageTransactionControlspostPayload.md)| request |

### Return type

[**\pmc_102\model\ManageTransactionControlspostResponse**](../Model/ManageTransactionControlspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putmanageRuleConfiguration**
> \pmc_102\model\ManageRuleConfigurationputResponse putmanageRuleConfiguration($manage_rule_configurationput_payload)



Update existing set of rule categories with a new set for use by issuer's cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.
    $manage_rule_configurationput_payload = new \pmc_102\model\ManageRuleConfigurationputPayload(); // \pmc_102\model\ManageRuleConfigurationputPayload

    try {
    $result = $api_instance->putmanageRuleConfiguration($manage_rule_configurationput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->putmanageRuleConfiguration: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_rule_configurationput_payload** | [**\pmc_102\model\ManageRuleConfigurationputPayload**](../Model/\pmc_102\model\ManageRuleConfigurationputPayload.md)| request |

### Return type

[**\pmc_102\model\ManageRuleConfigurationputResponse**](../Model/ManageRuleConfigurationputResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putmanageTransactionControls**
> \pmc_102\model\ManageTransactionControlsputResponse putmanageTransactionControls($manage_transaction_controlsput_payload)



Update existing set of transaction type controls with a new set for the issuer's cardholders

### Example
```php
<?php

require_once('./prod_13/pmc_102/autoload.php');
use \pmc_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Prog_adminApi
    $api_instance = new pmc_102\Api\Prog_adminApi();

    // Set the required payload and parameters.
    $manage_transaction_controlsput_payload = new \pmc_102\model\ManageTransactionControlsputPayload(); // \pmc_102\model\ManageTransactionControlsputPayload

    try {
    $result = $api_instance->putmanageTransactionControls($manage_transaction_controlsput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Prog_adminApi->putmanageTransactionControls: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_transaction_controlsput_payload** | [**\pmc_102\model\ManageTransactionControlsputPayload**](../Model/\pmc_102\model\ManageTransactionControlsputPayload.md)| request |

### Return type

[**\pmc_102\model\ManageTransactionControlsputResponse**](../Model/ManageTransactionControlsputResponse.md)

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