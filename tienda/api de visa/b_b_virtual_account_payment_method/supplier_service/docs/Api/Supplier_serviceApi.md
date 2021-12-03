# vpa_101\Supplier_serviceApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postcreateSupplier**](Supplier_serviceApi.md#postcreateSupplier) | **POST** /vpa/v1/supplier/CreateSupplier | 
[**postdisableSupplier**](Supplier_serviceApi.md#postdisableSupplier) | **POST** /vpa/v1/supplier/DisableSupplier | 
[**postgetsupplierDetails**](Supplier_serviceApi.md#postgetsupplierDetails) | **POST** /vpa/v1/supplier/GetSupplierDetails | 
[**postmanagesupplierAccount**](Supplier_serviceApi.md#postmanagesupplierAccount) | **POST** /vpa/v1/supplier/ManageSupplierAccount | 
[**postupdateSupplier**](Supplier_serviceApi.md#postupdateSupplier) | **POST** /vpa/v1/supplier/UpdateSupplier | 


# **postcreateSupplier**
> \vpa_101\model\CreateSupplierpostResponse postcreateSupplier($create_supplierpost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_101/autoload.php');
use \vpa_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Supplier_serviceApi
    $api_instance = new vpa_101\Api\Supplier_serviceApi();

    // Set the required payload and parameters.
    $create_supplierpost_payload = new \vpa_101\model\CreateSupplierpostPayload(); // \vpa_101\model\CreateSupplierpostPayload

    try {
    $result = $api_instance->postcreateSupplier($create_supplierpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Supplier_serviceApi->postcreateSupplier: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_supplierpost_payload** | [**\vpa_101\model\CreateSupplierpostPayload**](../Model/\vpa_101\model\CreateSupplierpostPayload.md)|  |

### Return type

[**\vpa_101\model\CreateSupplierpostResponse**](../Model/CreateSupplierpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postdisableSupplier**
> \vpa_101\model\DisableSupplierpostResponse postdisableSupplier($disable_supplierpost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_101/autoload.php');
use \vpa_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Supplier_serviceApi
    $api_instance = new vpa_101\Api\Supplier_serviceApi();

    // Set the required payload and parameters.
    $disable_supplierpost_payload = new \vpa_101\model\DisableSupplierpostPayload(); // \vpa_101\model\DisableSupplierpostPayload

    try {
    $result = $api_instance->postdisableSupplier($disable_supplierpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Supplier_serviceApi->postdisableSupplier: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disable_supplierpost_payload** | [**\vpa_101\model\DisableSupplierpostPayload**](../Model/\vpa_101\model\DisableSupplierpostPayload.md)|  |

### Return type

[**\vpa_101\model\DisableSupplierpostResponse**](../Model/DisableSupplierpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postgetsupplierDetails**
> \vpa_101\model\GetsupplierDetailspostResponse postgetsupplierDetails($getsupplier_detailspost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_101/autoload.php');
use \vpa_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Supplier_serviceApi
    $api_instance = new vpa_101\Api\Supplier_serviceApi();

    // Set the required payload and parameters.
    $getsupplier_detailspost_payload = new \vpa_101\model\GetsupplierDetailspostPayload(); // \vpa_101\model\GetsupplierDetailspostPayload

    try {
    $result = $api_instance->postgetsupplierDetails($getsupplier_detailspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Supplier_serviceApi->postgetsupplierDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getsupplier_detailspost_payload** | [**\vpa_101\model\GetsupplierDetailspostPayload**](../Model/\vpa_101\model\GetsupplierDetailspostPayload.md)|  |

### Return type

[**\vpa_101\model\GetsupplierDetailspostResponse**](../Model/GetsupplierDetailspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postmanagesupplierAccount**
> \vpa_101\model\ManagesupplierAccountpostResponse postmanagesupplierAccount($managesupplier_accountpost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_101/autoload.php');
use \vpa_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Supplier_serviceApi
    $api_instance = new vpa_101\Api\Supplier_serviceApi();

    // Set the required payload and parameters.
    $managesupplier_accountpost_payload = new \vpa_101\model\ManagesupplierAccountpostPayload(); // \vpa_101\model\ManagesupplierAccountpostPayload

    try {
    $result = $api_instance->postmanagesupplierAccount($managesupplier_accountpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Supplier_serviceApi->postmanagesupplierAccount: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managesupplier_accountpost_payload** | [**\vpa_101\model\ManagesupplierAccountpostPayload**](../Model/\vpa_101\model\ManagesupplierAccountpostPayload.md)|  |

### Return type

[**\vpa_101\model\ManagesupplierAccountpostResponse**](../Model/ManagesupplierAccountpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postupdateSupplier**
> \vpa_101\model\UpdateSupplierpostResponse postupdateSupplier($update_supplierpost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_101/autoload.php');
use \vpa_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Supplier_serviceApi
    $api_instance = new vpa_101\Api\Supplier_serviceApi();

    // Set the required payload and parameters.
    $update_supplierpost_payload = new \vpa_101\model\UpdateSupplierpostPayload(); // \vpa_101\model\UpdateSupplierpostPayload

    try {
    $result = $api_instance->postupdateSupplier($update_supplierpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Supplier_serviceApi->postupdateSupplier: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_supplierpost_payload** | [**\vpa_101\model\UpdateSupplierpostPayload**](../Model/\vpa_101\model\UpdateSupplierpostPayload.md)|  |

### Return type

[**\vpa_101\model\UpdateSupplierpostResponse**](../Model/UpdateSupplierpostResponse.md)

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