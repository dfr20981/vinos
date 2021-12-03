# ca_100\PaaiApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postfundstransferinquiry**](PaaiApi.md#postfundstransferinquiry) | **POST** /paai/fundstransferattinq/v3/cardattributes/fundstransferinquiry | 


# **postfundstransferinquiry**
> \ca_100\model\FundstransferinquirypostResponse postfundstransferinquiry($fundstransferinquirypost_payload)



Retrieve the attributes, which determine the key characteristics of a recipient payment account before initiating a funds transfer, by providing the Primary Account Number (PAN) for both Visa and Non-Visa cards

### Example
```php
<?php

require_once('./prod_10/ca_100/autoload.php');
use \ca_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate PaaiApi
    $api_instance = new ca_100\Api\PaaiApi();

    // Set the required payload and parameters.
    $fundstransferinquirypost_payload = new \ca_100\model\FundstransferinquirypostPayload(); // \ca_100\model\FundstransferinquirypostPayload

    try {
    $result = $api_instance->postfundstransferinquiry($fundstransferinquirypost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling PaaiApi->postfundstransferinquiry: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fundstransferinquirypost_payload** | [**\ca_100\model\FundstransferinquirypostPayload**](../Model/\ca_100\model\FundstransferinquirypostPayload.md)| Request body for Funds Transfer Inquiry |

### Return type

[**\ca_100\model\FundstransferinquirypostResponse**](../Model/FundstransferinquirypostResponse.md)

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