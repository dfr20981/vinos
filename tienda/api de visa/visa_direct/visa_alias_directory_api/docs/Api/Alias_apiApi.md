# alias_100\Alias_apiApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGetAlias**](Alias_apiApi.md#getGetAlias) | **GET** /visaaliasdirectory/v1/manage/{guid} | 
[**getGetMerchantAlias**](Alias_apiApi.md#getGetMerchantAlias) | **GET** /visaaliasdirectory/v1/managemerchant | 
[**getGetReport**](Alias_apiApi.md#getGetReport) | **GET** /visaaliasdirectory/v1/managereport | 
[**postCreateAlias**](Alias_apiApi.md#postCreateAlias) | **POST** /visaaliasdirectory/v1/manage/createalias | 
[**postCreateMerchantAlias**](Alias_apiApi.md#postCreateMerchantAlias) | **POST** /visaaliasdirectory/v1/managemerchant/createalias | 
[**postDeleteAlias**](Alias_apiApi.md#postDeleteAlias) | **POST** /visaaliasdirectory/v1/manage/deletealias | 
[**postDeleteMerchantAlias**](Alias_apiApi.md#postDeleteMerchantAlias) | **POST** /visaaliasdirectory/v1/managemerchant/deletealias | 
[**postGenerateReport**](Alias_apiApi.md#postGenerateReport) | **POST** /visaaliasdirectory/v1/managereport/generate | 
[**postResolve**](Alias_apiApi.md#postResolve) | **POST** /visaaliasdirectory/v1/resolve | 
[**postUpdateAlias**](Alias_apiApi.md#postUpdateAlias) | **POST** /visaaliasdirectory/v1/manage/updatealias | 
[**postUpdateMerchantAlias**](Alias_apiApi.md#postUpdateMerchantAlias) | **POST** /visaaliasdirectory/v1/managemerchant/updatealias | 


# **getGetAlias**
> \alias_100\model\GetAliasgetResponse getGetAlias($guid)



Get alias and recipient's related data.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $guid = "guid_example"; // string

    try {
    $result = $api_instance->getGetAlias($guid);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->getGetAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**| This attribute is uniquely used by Issuer to identify their customer (i.e. consumer cardholder). |

### Return type

[**\alias_100\model\GetAliasgetResponse**](../Model/GetAliasgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getGetMerchantAlias**
> \alias_100\model\GetMerchantAliasgetResponse getGetMerchantAlias($merchantaliasid, $type)



Get alias and merchant or agent related data.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $merchantaliasid = "merchantaliasid_example"; // string
    $type = "type_example"; // string

    try {
    $result = $api_instance->getGetMerchantAlias($merchantaliasid, $type);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->getGetMerchantAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantaliasid** | **string**| This attribute is uniquely used by acquirer to identify their merchant or agent. |
 **type** | **string**| Valid type value is &#39;agent&#39;. If type is not provided, default search for merchant alias records only. | [optional]

### Return type

[**\alias_100\model\GetMerchantAliasgetResponse**](../Model/GetMerchantAliasgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getGetReport**
> \alias_100\model\GetReportgetResponse getGetReport($reportid, $pageid)



Get Report data.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $reportid = "reportid_example"; // string
    $pageid = "pageid_example"; // string

    try {
    $result = $api_instance->getGetReport($reportid, $pageid);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->getGetReport: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportid** | **string**| This attribute is uniquely generated by Visa Alias directory to identify the report generation request.  This is used to retrieve the alias report together with the page ID.&lt;br&gt;The format is {BID}-{TYPE}-{NUMERIC STRING}, where &lt;b&gt;BID&lt;/b&gt; is the Business Identifier of the client used by Visa, &lt;b&gt;TYPE&lt;/b&gt; can be &#39;CONSUMER&#39;, &#39;MERCHANT&#39; or &#39;AGENT&#39; alias report. |
 **pageid** | **string**| Numeric only. This attribute is used to specify the page number of the report. |

### Return type

[**\alias_100\model\GetReportgetResponse**](../Model/GetReportgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postCreateAlias**
> \alias_100\model\CreateAliaspostResponse postCreateAlias($create_aliaspost_payload)



Create an alias in the Alias Directory.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $create_aliaspost_payload = new \alias_100\model\CreateAliaspostPayload(); // \alias_100\model\CreateAliaspostPayload

    try {
    $result = $api_instance->postCreateAlias($create_aliaspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postCreateAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_aliaspost_payload** | [**\alias_100\model\CreateAliaspostPayload**](../Model/\alias_100\model\CreateAliaspostPayload.md)| Request body for creating alias API |

### Return type

[**\alias_100\model\CreateAliaspostResponse**](../Model/CreateAliaspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postCreateMerchantAlias**
> \alias_100\model\CreateMerchantAliaspostResponse postCreateMerchantAlias($create_merchant_aliaspost_payload)



Creates a merchant or agent alias in the Alias Directory.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $create_merchant_aliaspost_payload = new \alias_100\model\CreateMerchantAliaspostPayload(); // \alias_100\model\CreateMerchantAliaspostPayload

    try {
    $result = $api_instance->postCreateMerchantAlias($create_merchant_aliaspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postCreateMerchantAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_merchant_aliaspost_payload** | [**\alias_100\model\CreateMerchantAliaspostPayload**](../Model/\alias_100\model\CreateMerchantAliaspostPayload.md)| Request body for creating merchant or agent alias |

### Return type

[**\alias_100\model\CreateMerchantAliaspostResponse**](../Model/CreateMerchantAliaspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postDeleteAlias**
> \alias_100\model\DeleteAliaspostResponse postDeleteAlias($delete_aliaspost_payload)



Delete alias of a recipient from the Alias Directory.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $delete_aliaspost_payload = new \alias_100\model\DeleteAliaspostPayload(); // \alias_100\model\DeleteAliaspostPayload

    try {
    $result = $api_instance->postDeleteAlias($delete_aliaspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postDeleteAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_aliaspost_payload** | [**\alias_100\model\DeleteAliaspostPayload**](../Model/\alias_100\model\DeleteAliaspostPayload.md)| Request body for deleting an alias |

### Return type

[**\alias_100\model\DeleteAliaspostResponse**](../Model/DeleteAliaspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postDeleteMerchantAlias**
> \alias_100\model\DeleteMerchantAliaspostResponse postDeleteMerchantAlias($delete_merchant_aliaspost_payload)



Delete alias of a merchant or agent from the Alias Directory.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $delete_merchant_aliaspost_payload = new \alias_100\model\DeleteMerchantAliaspostPayload(); // \alias_100\model\DeleteMerchantAliaspostPayload

    try {
    $result = $api_instance->postDeleteMerchantAlias($delete_merchant_aliaspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postDeleteMerchantAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_merchant_aliaspost_payload** | [**\alias_100\model\DeleteMerchantAliaspostPayload**](../Model/\alias_100\model\DeleteMerchantAliaspostPayload.md)| Request body for deleting a merchant or agent alias |

### Return type

[**\alias_100\model\DeleteMerchantAliaspostResponse**](../Model/DeleteMerchantAliaspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postGenerateReport**
> \alias_100\model\GenerateReportpostResponse postGenerateReport($generate_reportpost_payload)



To submit a request to generate report and return a URL as response for retrieving report.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $generate_reportpost_payload = new \alias_100\model\GenerateReportpostPayload(); // \alias_100\model\GenerateReportpostPayload

    try {
    $result = $api_instance->postGenerateReport($generate_reportpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postGenerateReport: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_reportpost_payload** | [**\alias_100\model\GenerateReportpostPayload**](../Model/\alias_100\model\GenerateReportpostPayload.md)| Request body for generating a report |

### Return type

[**\alias_100\model\GenerateReportpostResponse**](../Model/GenerateReportpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postResolve**
> \alias_100\model\ResolvepostResponse postResolve($resolvepost_payload)



Resolve an alias for recipient's primary account number (PAN) and related data.

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $resolvepost_payload = new \alias_100\model\ResolvepostPayload(); // \alias_100\model\ResolvepostPayload

    try {
    $result = $api_instance->postResolve($resolvepost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postResolve: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resolvepost_payload** | [**\alias_100\model\ResolvepostPayload**](../Model/\alias_100\model\ResolvepostPayload.md)| Request body for resolve alias API |

### Return type

[**\alias_100\model\ResolvepostResponse**](../Model/ResolvepostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postUpdateAlias**
> \alias_100\model\UpdateAliaspostResponse postUpdateAlias($update_aliaspost_payload)



Update alias and recipient data in the Alias Directory

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $update_aliaspost_payload = new \alias_100\model\UpdateAliaspostPayload(); // \alias_100\model\UpdateAliaspostPayload

    try {
    $result = $api_instance->postUpdateAlias($update_aliaspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postUpdateAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_aliaspost_payload** | [**\alias_100\model\UpdateAliaspostPayload**](../Model/\alias_100\model\UpdateAliaspostPayload.md)| Request body for updating alias API |

### Return type

[**\alias_100\model\UpdateAliaspostResponse**](../Model/UpdateAliaspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postUpdateMerchantAlias**
> \alias_100\model\UpdateMerchantAliaspostResponse postUpdateMerchantAlias($update_merchant_aliaspost_payload)



Update merchant alias or agent alias info in the Alias Directory

### Example
```php
<?php

require_once('./prod_6/alias_100/autoload.php');
use \alias_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Alias_apiApi
    $api_instance = new alias_100\Api\Alias_apiApi();

    // Set the required payload and parameters.
    $update_merchant_aliaspost_payload = new \alias_100\model\UpdateMerchantAliaspostPayload(); // \alias_100\model\UpdateMerchantAliaspostPayload

    try {
    $result = $api_instance->postUpdateMerchantAlias($update_merchant_aliaspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Alias_apiApi->postUpdateMerchantAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_merchant_aliaspost_payload** | [**\alias_100\model\UpdateMerchantAliaspostPayload**](../Model/\alias_100\model\UpdateMerchantAliaspostPayload.md)| Request body for updating merchant or agent alias API |

### Return type

[**\alias_100\model\UpdateMerchantAliaspostResponse**](../Model/UpdateMerchantAliaspostResponse.md)

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