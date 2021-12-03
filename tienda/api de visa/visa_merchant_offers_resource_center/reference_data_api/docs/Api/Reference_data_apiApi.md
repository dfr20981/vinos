# vmorc_101\Reference_data_apiApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getretrieveDataByMerchant**](Reference_data_apiApi.md#getretrieveDataByMerchant) | **GET** /vmorc/data/v1/merchant | 
[**getretrieveDataByMerchantAddress**](Reference_data_apiApi.md#getretrieveDataByMerchantAddress) | **GET** /vmorc/data/v1/merchantAddress | 
[**getretrieveDataByReference**](Reference_data_apiApi.md#getretrieveDataByReference) | **GET** /vmorc/data/v1/ref | 


# **getretrieveDataByMerchant**
> \vmorc_101\model\RetrieveDataByMerchantgetResponse getretrieveDataByMerchant($start_index, $program)



Retrieve Data by merchant

### Example
```php
<?php

require_once('./prod_18/vmorc_101/autoload.php');
use \vmorc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Reference_data_apiApi
    $api_instance = new vmorc_101\Api\Reference_data_apiApi();

    // Set the required payload and parameters.
    $start_index = "start_index_example"; // string
    $program = "program_example"; // string

    try {
    $result = $api_instance->getretrieveDataByMerchant($start_index, $program);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Reference_data_apiApi->getretrieveDataByMerchant: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_index** | **string**| Optional. A maximum of 500 merchant records are returned in the response. The index indicates which merchant within the alphabetically sorted results to start returning in the response. Accepts an integer. Default set to 1 | [optional]
 **program** | **string**| Optional. Returns merchant data for approved and active offers (includes expired offers) that belong to the specified program | [optional]

### Return type

[**\vmorc_101\model\RetrieveDataByMerchantgetResponse**](../Model/RetrieveDataByMerchantgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getretrieveDataByMerchantAddress**
> \vmorc_101\model\RetrieveDataByMerchantAddressgetResponse getretrieveDataByMerchantAddress($merchant_ids, $start_index)



Get merchant address data

### Example
```php
<?php

require_once('./prod_18/vmorc_101/autoload.php');
use \vmorc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Reference_data_apiApi
    $api_instance = new vmorc_101\Api\Reference_data_apiApi();

    // Set the required payload and parameters.
    $merchant_ids = "merchant_ids_example"; // string
    $start_index = "start_index_example"; // string

    try {
    $result = $api_instance->getretrieveDataByMerchantAddress($merchant_ids, $start_index);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Reference_data_apiApi->getretrieveDataByMerchantAddress: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_ids** | **string**| Required. Returns merchant address data for the requested merchant ids. Separate multiple ids by commas |
 **start_index** | **string**| Optional. A maximum of 500 address records are returned in the response. The index indicates which addresses within the sorted results (by merchant id) to start returning in the response. Accepts an integer. Default set to 1 | [optional]

### Return type

[**\vmorc_101\model\RetrieveDataByMerchantAddressgetResponse**](../Model/RetrieveDataByMerchantAddressgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getretrieveDataByReference**
> \vmorc_101\model\RetrieveDataByReferencegetResponse getretrieveDataByReference($resources, $languages, $program_ids)



Retrieve Data by reference

### Example
```php
<?php

require_once('./prod_18/vmorc_101/autoload.php');
use \vmorc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Reference_data_apiApi
    $api_instance = new vmorc_101\Api\Reference_data_apiApi();

    // Set the required payload and parameters.
    $resources = "resources_example"; // string
    $languages = "languages_example"; // string
    $program_ids = "program_ids_example"; // string

    try {
    $result = $api_instance->getretrieveDataByReference($resources, $languages, $program_ids);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Reference_data_apiApi->getretrieveDataByReference: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resources** | **string**| Optional. Request for specific reference data types in theresponse.Provide one reference data type or a comma-delimited string of reference data types. Default returns all available referece data types.   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#resources\&quot;&gt;resources&lt;/a&gt; for supported resource values. | [optional]
 **languages** | **string**| Optional. A comma-delimited string of languageIds. For the reference data that may specify a language, the response will only return translations that match the requested languageIds. Default returns all existing translations.   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#resources\&quot;&gt;resources&lt;/a&gt; for supported resources that support a specific language. | [optional]
 **program_ids** | **string**| Optional. Returns reference data for approved and active offers (includes expired offers) that belong to the specified program. Two additional responses of \&quot;promoting_countries\&quot; and \&quot;redemption_countries\&quot; are returned in this request. | [optional]

### Return type

[**\vmorc_101\model\RetrieveDataByReferencegetResponse**](../Model/RetrieveDataByReferencegetResponse.md)

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