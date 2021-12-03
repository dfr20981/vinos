# pmc_101\Authorization_decisionApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getdecisionRequestActions**](Authorization_decisionApi.md#getdecisionRequestActions) | **GET** /vctc/validation/v1/decisions/{decisionID} | 
[**getdecisionsHistory**](Authorization_decisionApi.md#getdecisionsHistory) | **GET** /vctc/validation/v1/decisions/history | 
[**postdecisionInquiry**](Authorization_decisionApi.md#postdecisionInquiry) | **POST** /vctc/validation/v1/consumertransactioncontrols/decisioninquiry | 
[**postdecisionRequest**](Authorization_decisionApi.md#postdecisionRequest) | **POST** /vctc/validation/v1/decisions | 
[**postdecisionRequestByPan**](Authorization_decisionApi.md#postdecisionRequestByPan) | **POST** /vctc/validation/v1/decisions/cardinquiry | 
[**postpreevaluations**](Authorization_decisionApi.md#postpreevaluations) | **POST** /vctc/validation/v1/preevaluations | 
[**putdecisionRequestActions**](Authorization_decisionApi.md#putdecisionRequestActions) | **PUT** /vctc/validation/v1/decisions/{decisionID} | 


# **getdecisionRequestActions**
> \pmc_101\model\DecisionRequestActionsgetResponse getdecisionRequestActions($decision_id)



Retrieve the details of a specific decision record

### Example
```php
<?php

require_once('./prod_13/pmc_101/autoload.php');
use \pmc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Authorization_decisionApi
    $api_instance = new pmc_101\Api\Authorization_decisionApi();

    // Set the required payload and parameters.
    $decision_id = "decision_id_example"; // string

    try {
    $result = $api_instance->getdecisionRequestActions($decision_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Authorization_decisionApi->getdecisionRequestActions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_id** | **string**| The ID of the document for the document to be returned |

### Return type

[**\pmc_101\model\DecisionRequestActionsgetResponse**](../Model/DecisionRequestActionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getdecisionsHistory**
> \pmc_101\model\DecisionsHistorygetResponse getdecisionsHistory($page, $limit)



Retrieve a list of decision records for a sponsor

### Example
```php
<?php

require_once('./prod_13/pmc_101/autoload.php');
use \pmc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Authorization_decisionApi
    $api_instance = new pmc_101\Api\Authorization_decisionApi();

    // Set the required payload and parameters.
    $page = "page_example"; // string
    $limit = "limit_example"; // string

    try {
    $result = $api_instance->getdecisionsHistory($page, $limit);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Authorization_decisionApi->getdecisionsHistory: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **string**| Page number to be returned |
 **limit** | **string**| Page size to be returned |

### Return type

[**\pmc_101\model\DecisionsHistorygetResponse**](../Model/DecisionsHistorygetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postdecisionInquiry**
> \pmc_101\model\DecisionInquirypostResponse postdecisionInquiry($decision_inquirypost_payload)



Retrieve a list of decision records by reterivalReferenceNumber

### Example
```php
<?php

require_once('./prod_13/pmc_101/autoload.php');
use \pmc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Authorization_decisionApi
    $api_instance = new pmc_101\Api\Authorization_decisionApi();

    // Set the required payload and parameters.
    $decision_inquirypost_payload = new \pmc_101\model\DecisionInquirypostPayload(); // \pmc_101\model\DecisionInquirypostPayload

    try {
    $result = $api_instance->postdecisionInquiry($decision_inquirypost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Authorization_decisionApi->postdecisionInquiry: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_inquirypost_payload** | [**\pmc_101\model\DecisionInquirypostPayload**](../Model/\pmc_101\model\DecisionInquirypostPayload.md)| decisionRequest |

### Return type

[**\pmc_101\model\DecisionInquirypostResponse**](../Model/DecisionInquirypostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postdecisionRequest**
> \pmc_101\model\DecisionRequestpostResponse postdecisionRequest($decision_requestpost_payload)



Request a decision on pending transaction or send notification or advice for completed transaction

### Example
```php
<?php

require_once('./prod_13/pmc_101/autoload.php');
use \pmc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Authorization_decisionApi
    $api_instance = new pmc_101\Api\Authorization_decisionApi();

    // Set the required payload and parameters.
    $decision_requestpost_payload = new \pmc_101\model\DecisionRequestpostPayload(); // \pmc_101\model\DecisionRequestpostPayload

    try {
    $result = $api_instance->postdecisionRequest($decision_requestpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Authorization_decisionApi->postdecisionRequest: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_requestpost_payload** | [**\pmc_101\model\DecisionRequestpostPayload**](../Model/\pmc_101\model\DecisionRequestpostPayload.md)| decisionRequest |

### Return type

[**\pmc_101\model\DecisionRequestpostResponse**](../Model/DecisionRequestpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postdecisionRequestByPan**
> \pmc_101\model\DecisionRequestByPanpostResponse postdecisionRequestByPan($decision_request_by_panpost_payload)



Retrieve a list of decision records for a card

### Example
```php
<?php

require_once('./prod_13/pmc_101/autoload.php');
use \pmc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Authorization_decisionApi
    $api_instance = new pmc_101\Api\Authorization_decisionApi();

    // Set the required payload and parameters.
    $decision_request_by_panpost_payload = new \pmc_101\model\DecisionRequestByPanpostPayload(); // \pmc_101\model\DecisionRequestByPanpostPayload

    try {
    $result = $api_instance->postdecisionRequestByPan($decision_request_by_panpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Authorization_decisionApi->postdecisionRequestByPan: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_request_by_panpost_payload** | [**\pmc_101\model\DecisionRequestByPanpostPayload**](../Model/\pmc_101\model\DecisionRequestByPanpostPayload.md)| decisionHistoryRequest |

### Return type

[**\pmc_101\model\DecisionRequestByPanpostResponse**](../Model/DecisionRequestByPanpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postpreevaluations**
> \pmc_101\model\PreevaluationspostResponse postpreevaluations($preevaluationspost_payload)



Request a Pre-Evaluation recommendation on a transaction before it is run

### Example
```php
<?php

require_once('./prod_13/pmc_101/autoload.php');
use \pmc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Authorization_decisionApi
    $api_instance = new pmc_101\Api\Authorization_decisionApi();

    // Set the required payload and parameters.
    $preevaluationspost_payload = new \pmc_101\model\PreevaluationspostPayload(); // \pmc_101\model\PreevaluationspostPayload

    try {
    $result = $api_instance->postpreevaluations($preevaluationspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Authorization_decisionApi->postpreevaluations: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preevaluationspost_payload** | [**\pmc_101\model\PreevaluationspostPayload**](../Model/\pmc_101\model\PreevaluationspostPayload.md)| preEvaluationRequest |

### Return type

[**\pmc_101\model\PreevaluationspostResponse**](../Model/PreevaluationspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putdecisionRequestActions**
> \pmc_101\model\DecisionRequestActionsputResponse putdecisionRequestActions($decision_id, $decision_request_actionsput_payload)



Update the state of a specific decision record

### Example
```php
<?php

require_once('./prod_13/pmc_101/autoload.php');
use \pmc_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Authorization_decisionApi
    $api_instance = new pmc_101\Api\Authorization_decisionApi();

    // Set the required payload and parameters.
    $decision_id = "decision_id_example"; // string
    $decision_request_actionsput_payload = new \pmc_101\model\DecisionRequestActionsputPayload(); // \pmc_101\model\DecisionRequestActionsputPayload

    try {
    $result = $api_instance->putdecisionRequestActions($decision_id, $decision_request_actionsput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Authorization_decisionApi->putdecisionRequestActions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **decision_id** | **string**| The ID of the document for the document to be updated |
 **decision_request_actionsput_payload** | [**\pmc_101\model\DecisionRequestActionsputPayload**](../Model/\pmc_101\model\DecisionRequestActionsputPayload.md)| decisionUpdate |

### Return type

[**\pmc_101\model\DecisionRequestActionsputResponse**](../Model/DecisionRequestActionsputResponse.md)

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