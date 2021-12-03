# vces_100\Visa_card_eligibility_serviceApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postprepay**](Visa_card_eligibility_serviceApi.md#postprepay) | **POST** /visacardeligibilityservices/v1/cardeligibility/prepay | 
[**postredeemOffer**](Visa_card_eligibility_serviceApi.md#postredeemOffer) | **POST** /visacardeligibilityservices/v1/promo/redeem | 
[**postvalidateCardEligibility**](Visa_card_eligibility_serviceApi.md#postvalidateCardEligibility) | **POST** /visacardeligibilityservices/v1/cardeligibility/validate | 


# **postprepay**
> \vces_100\model\PrepaypostResponse postprepay($prepaypost_payload)



Send Card details to Visa.

### Example
```php
<?php

require_once('./prod_27/vces_100/autoload.php');
use \vces_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Visa_card_eligibility_serviceApi
    $api_instance = new vces_100\Api\Visa_card_eligibility_serviceApi();

    // Set the required payload and parameters.
    $prepaypost_payload = new \vces_100\model\PrepaypostPayload(); // \vces_100\model\PrepaypostPayload

    try {
    $result = $api_instance->postprepay($prepaypost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Visa_card_eligibility_serviceApi->postprepay: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prepaypost_payload** | [**\vces_100\model\PrepaypostPayload**](../Model/\vces_100\model\PrepaypostPayload.md)| Request body |

### Return type

[**\vces_100\model\PrepaypostResponse**](../Model/PrepaypostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postredeemOffer**
> \vces_100\model\RedeemOfferpostResponse postredeemOffer($redeem_offerpost_payload)



Send Card details to Visa.

### Example
```php
<?php

require_once('./prod_27/vces_100/autoload.php');
use \vces_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Visa_card_eligibility_serviceApi
    $api_instance = new vces_100\Api\Visa_card_eligibility_serviceApi();

    // Set the required payload and parameters.
    $redeem_offerpost_payload = new \vces_100\model\RedeemOfferpostPayload(); // \vces_100\model\RedeemOfferpostPayload

    try {
    $result = $api_instance->postredeemOffer($redeem_offerpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Visa_card_eligibility_serviceApi->postredeemOffer: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **redeem_offerpost_payload** | [**\vces_100\model\RedeemOfferpostPayload**](../Model/\vces_100\model\RedeemOfferpostPayload.md)| Request body |

### Return type

[**\vces_100\model\RedeemOfferpostResponse**](../Model/RedeemOfferpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postvalidateCardEligibility**
> \vces_100\model\ValidateCardEligibilitypostResponse postvalidateCardEligibility($validate_card_eligibilitypost_payload)



Send Card validation details to Visa.

### Example
```php
<?php

require_once('./prod_27/vces_100/autoload.php');
use \vces_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Visa_card_eligibility_serviceApi
    $api_instance = new vces_100\Api\Visa_card_eligibility_serviceApi();

    // Set the required payload and parameters.
    $validate_card_eligibilitypost_payload = new \vces_100\model\ValidateCardEligibilitypostPayload(); // \vces_100\model\ValidateCardEligibilitypostPayload

    try {
    $result = $api_instance->postvalidateCardEligibility($validate_card_eligibilitypost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Visa_card_eligibility_serviceApi->postvalidateCardEligibility: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **validate_card_eligibilitypost_payload** | [**\vces_100\model\ValidateCardEligibilitypostPayload**](../Model/\vces_100\model\ValidateCardEligibilitypostPayload.md)| Request body |

### Return type

[**\vces_100\model\ValidateCardEligibilitypostResponse**](../Model/ValidateCardEligibilitypostResponse.md)

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