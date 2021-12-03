# vpa_102\Payment_serviceApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postcancelPayment**](Payment_serviceApi.md#postcancelPayment) | **POST** /vpa/v1/payment/CancelPayment | 
[**postgetpaymentDetails**](Payment_serviceApi.md#postgetpaymentDetails) | **POST** /vpa/v1/payment/GetPaymentDetails | 
[**postgetpaymentUrl**](Payment_serviceApi.md#postgetpaymentUrl) | **POST** /vpa/v1/payment/GetPaymentDetailURL | 
[**postprocessPayments**](Payment_serviceApi.md#postprocessPayments) | **POST** /vpa/v1/payment/ProcessPayments | 
[**postresendPayment**](Payment_serviceApi.md#postresendPayment) | **POST** /vpa/v1/payment/ResendPayment | 


# **postcancelPayment**
> \vpa_102\model\CancelPaymentpostResponse postcancelPayment($cancel_paymentpost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_102/autoload.php');
use \vpa_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Payment_serviceApi
    $api_instance = new vpa_102\Api\Payment_serviceApi();

    // Set the required payload and parameters.
    $cancel_paymentpost_payload = new \vpa_102\model\CancelPaymentpostPayload(); // \vpa_102\model\CancelPaymentpostPayload

    try {
    $result = $api_instance->postcancelPayment($cancel_paymentpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Payment_serviceApi->postcancelPayment: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancel_paymentpost_payload** | [**\vpa_102\model\CancelPaymentpostPayload**](../Model/\vpa_102\model\CancelPaymentpostPayload.md)|  |

### Return type

[**\vpa_102\model\CancelPaymentpostResponse**](../Model/CancelPaymentpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postgetpaymentDetails**
> \vpa_102\model\GetpaymentDetailspostResponse postgetpaymentDetails($getpayment_detailspost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_102/autoload.php');
use \vpa_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Payment_serviceApi
    $api_instance = new vpa_102\Api\Payment_serviceApi();

    // Set the required payload and parameters.
    $getpayment_detailspost_payload = new \vpa_102\model\GetpaymentDetailspostPayload(); // \vpa_102\model\GetpaymentDetailspostPayload

    try {
    $result = $api_instance->postgetpaymentDetails($getpayment_detailspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Payment_serviceApi->postgetpaymentDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getpayment_detailspost_payload** | [**\vpa_102\model\GetpaymentDetailspostPayload**](../Model/\vpa_102\model\GetpaymentDetailspostPayload.md)|  |

### Return type

[**\vpa_102\model\GetpaymentDetailspostResponse**](../Model/GetpaymentDetailspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postgetpaymentUrl**
> \vpa_102\model\GetpaymentUrlpostResponse postgetpaymentUrl($getpayment_urlpost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_102/autoload.php');
use \vpa_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Payment_serviceApi
    $api_instance = new vpa_102\Api\Payment_serviceApi();

    // Set the required payload and parameters.
    $getpayment_urlpost_payload = new \vpa_102\model\GetpaymentUrlpostPayload(); // \vpa_102\model\GetpaymentUrlpostPayload

    try {
    $result = $api_instance->postgetpaymentUrl($getpayment_urlpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Payment_serviceApi->postgetpaymentUrl: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getpayment_urlpost_payload** | [**\vpa_102\model\GetpaymentUrlpostPayload**](../Model/\vpa_102\model\GetpaymentUrlpostPayload.md)|  |

### Return type

[**\vpa_102\model\GetpaymentUrlpostResponse**](../Model/GetpaymentUrlpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postprocessPayments**
> \vpa_102\model\ProcessPaymentspostResponse postprocessPayments($process_paymentspost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_102/autoload.php');
use \vpa_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Payment_serviceApi
    $api_instance = new vpa_102\Api\Payment_serviceApi();

    // Set the required payload and parameters.
    $process_paymentspost_payload = new \vpa_102\model\ProcessPaymentspostPayload(); // \vpa_102\model\ProcessPaymentspostPayload

    try {
    $result = $api_instance->postprocessPayments($process_paymentspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Payment_serviceApi->postprocessPayments: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_paymentspost_payload** | [**\vpa_102\model\ProcessPaymentspostPayload**](../Model/\vpa_102\model\ProcessPaymentspostPayload.md)|  |

### Return type

[**\vpa_102\model\ProcessPaymentspostResponse**](../Model/ProcessPaymentspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postresendPayment**
> \vpa_102\model\ResendPaymentpostResponse postresendPayment($resend_paymentpost_payload)





### Example
```php
<?php

require_once('./prod_28/vpa_102/autoload.php');
use \vpa_102\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Payment_serviceApi
    $api_instance = new vpa_102\Api\Payment_serviceApi();

    // Set the required payload and parameters.
    $resend_paymentpost_payload = new \vpa_102\model\ResendPaymentpostPayload(); // \vpa_102\model\ResendPaymentpostPayload

    try {
    $result = $api_instance->postresendPayment($resend_paymentpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Payment_serviceApi->postresendPayment: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resend_paymentpost_payload** | [**\vpa_102\model\ResendPaymentpostPayload**](../Model/\vpa_102\model\ResendPaymentpostPayload.md)|  |

### Return type

[**\vpa_102\model\ResendPaymentpostResponse**](../Model/ResendPaymentpostResponse.md)

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