# dcas_100\Card_inquiryApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postdebitCardInquiry**](Card_inquiryApi.md#postdebitCardInquiry) | **POST** /dcas/cardinquiry/v1/accounts/debitcardinquiry | 


# **postdebitCardInquiry**
> \dcas_100\model\DebitCardInquirypostResponse postdebitCardInquiry($debit_card_inquirypost_payload)



Lookup and return list of PANs associated with an Account Number and Routing Number

### Example
```php
<?php

require_once('./prod_23/dcas_100/autoload.php');
use \dcas_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_inquiryApi
    $api_instance = new dcas_100\Api\Card_inquiryApi();

    // Set the required payload and parameters.
    $debit_card_inquirypost_payload = new \dcas_100\model\DebitCardInquirypostPayload(); // \dcas_100\model\DebitCardInquirypostPayload

    try {
    $result = $api_instance->postdebitCardInquiry($debit_card_inquirypost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_inquiryApi->postdebitCardInquiry: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debit_card_inquirypost_payload** | [**\dcas_100\model\DebitCardInquirypostPayload**](../Model/\dcas_100\model\DebitCardInquirypostPayload.md)| Request containing an Account Number and Routing Number |

### Return type

[**\dcas_100\model\DebitCardInquirypostResponse**](../Model/DebitCardInquirypostResponse.md)

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