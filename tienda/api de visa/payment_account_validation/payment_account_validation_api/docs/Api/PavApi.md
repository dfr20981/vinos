# cv_100\PavApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postcardvalidation**](PavApi.md#postcardvalidation) | **POST** /pav/v1/cardvalidation | 


# **postcardvalidation**
> \cv_100\model\CardvalidationpostResponse postcardvalidation($cardvalidationpost_payload, $cardvalidationpost_payload2, $cardvalidationpost_payload3, $cardvalidationpost_payload4, $cardvalidationpost_payload5, $cardvalidationpost_payload6, $cardvalidationpost_payload7, $cardvalidationpost_payload8, $cardvalidationpost_payload9)



Perform validations of the payment account

### Example
```php
<?php

require_once('./prod_9/cv_100/autoload.php');
use \cv_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate PavApi
    $api_instance = new cv_100\Api\PavApi();

    // Set the required payload and parameters.
    $cardvalidationpost_payload = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload2 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload3 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload4 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload5 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload6 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload7 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload8 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload
    $cardvalidationpost_payload9 = new \cv_100\model\CardvalidationpostPayload(); // \cv_100\model\CardvalidationpostPayload

    try {
    $result = $api_instance->postcardvalidation($cardvalidationpost_payload, $cardvalidationpost_payload2, $cardvalidationpost_payload3, $cardvalidationpost_payload4, $cardvalidationpost_payload5, $cardvalidationpost_payload6, $cardvalidationpost_payload7, $cardvalidationpost_payload8, $cardvalidationpost_payload9);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling PavApi->postcardvalidation: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cardvalidationpost_payload** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| The primary account number for which account validations are being performed |
 **cardvalidationpost_payload2** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| The expiration date for the primaryAccountNumber in the request. The date should not be a past date.&lt;/br&gt;Required when the cvv2Value is present. |
 **cardvalidationpost_payload3** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)|  |
 **cardvalidationpost_payload4** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| The cardCvv2Value value provided by the account holder for the primaryAccountNumber in the request.&lt;/br&gt;Required when addressVerificationResults is not present. |
 **cardvalidationpost_payload5** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| This is an optional field.  The clients of Funds Transfer APIs can choose to provide acquiringBin for reporting purpose.  The Bank Identification Number (BIN) under which your Funds Transfer is registered. This must match the information provided during enrollment. |
 **cardvalidationpost_payload6** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| This is an optional field. If acquiringBin is provided, it is highly recommended that acquirerCountryCode is also provided.&lt;/br&gt;The clients of Funds Transfer APIs can choose to provide acquirerCountryCode for reporting purpose.&lt;/br&gt;Use a 3-digit numeric country code for the country where the Funds Transfer solution is registered. This must match the information provided during program enrollment.&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; |
 **cardvalidationpost_payload7** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| This is an optional field. The clients of Funds Transfer APIs can choose to provide card acceptor information for reporting purposes. |
 **cardvalidationpost_payload8** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| This is an optional field. It is recommended that the clients of Funds Transfer APIs provide systemsTraceAuditNumber for tie the calls with a single funds transfer transaction. |
 **cardvalidationpost_payload9** | [**\cv_100\model\CardvalidationpostPayload**](../Model/\cv_100\model\CardvalidationpostPayload.md)| This is an optional field. It is recommended that the clients of Funds Transfer APIs provide retrievalReferenceNumber for tie the calls with a single funds transfer transaction.&lt;/br&gt;Recommended Format: ydddhhnnnnnn&lt;/br&gt;The first fours digits must be a valid yddd date in the Julian date format, where the first digit &#x3D; 0-9 (last digit of current year) and the next three digits &#x3D; 001-366 (number of the day in the year).&lt;/br&gt;hh can be the two digit hour in a 24 hour clock (00-23) during which the transaction is performed.&lt;/br&gt;nnnnnn can be the systemsTraceAuditNumber or any 6 digit number. |

### Return type

[**\cv_100\model\CardvalidationpostResponse**](../Model/CardvalidationpostResponse.md)

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