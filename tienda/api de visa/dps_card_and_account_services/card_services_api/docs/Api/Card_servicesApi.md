# dcas_101\Card_servicesApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getcardStatus**](Card_servicesApi.md#getcardStatus) | **GET** /dcas/cardservices/v1/cards/{cardId}/cardstatus | 
[**getgetAccountDetails**](Card_servicesApi.md#getgetAccountDetails) | **GET** /dcas/cardservices/v1/cards/{cardId}/accounts?lookUpBalances&#x3D;{lookUpBalances} | 
[**getgetCardByAlias**](Card_servicesApi.md#getgetCardByAlias) | **GET** /dcas/cardservices/v1/cards/{cardId} | 
[**getgetCardholderDetails**](Card_servicesApi.md#getgetCardholderDetails) | **GET** /dcas/cardservices/v1/cards/{cardId}/cardholderdetails | 
[**getgetNotificationSettings**](Card_servicesApi.md#getgetNotificationSettings) | **GET** /dcas/cardservices/v1/cards/{cardId}/notifications | 
[**getgetSingleAccountDetails**](Card_servicesApi.md#getgetSingleAccountDetails) | **GET** /dcas/cardservices/v1/accounts/{accountAliasId}?lookUpBalances&#x3D;{lookUpBalances} | 
[**getgetTransactionHistory**](Card_servicesApi.md#getgetTransactionHistory) | **GET** /dcas/cardservices/v1/cards/{cardId}/transactions | 
[**getnotificationDetails**](Card_servicesApi.md#getnotificationDetails) | **GET** /dcas/cardservices/v1/cards/{cardId}/notifications/settings | 
[**getnotificationSubscriptions**](Card_servicesApi.md#getnotificationSubscriptions) | **GET** /dcas/cardservices/v1/cards/{cardId}/notifications/subscriptions | 
[**postcardActivation**](Card_servicesApi.md#postcardActivation) | **POST** /dcas/cardservices/v1/cardservices/v1/cards/{cardId}/cardactivation | 
[**postcardVerification**](Card_servicesApi.md#postcardVerification) | **POST** /dcas/cardservices/v1/cards/{cardId}/cardverification | 
[**postcreateCardIdentifiers**](Card_servicesApi.md#postcreateCardIdentifiers) | **POST** /dcas/cardservices/v1/cards | 
[**postgetListOfFundTransferAccounts**](Card_servicesApi.md#postgetListOfFundTransferAccounts) | **POST** /dcas/cardservices/v1/cards/{cardId}/fundstransfers/requirementsinquiry | 
[**postloadFundsToCard**](Card_servicesApi.md#postloadFundsToCard) | **POST** /dcas/cardservices/v1/cards/{cardId}/cardloads | 
[**postretrieveRequirementsToLoadFunds**](Card_servicesApi.md#postretrieveRequirementsToLoadFunds) | **POST** /dcas/cardservices/v1/cards/{cardId}/cardloads/requirementsinquiry | 
[**posttransferFundsToAccount**](Card_servicesApi.md#posttransferFundsToAccount) | **POST** /dcas/cardservices/v1/cards/{cardId}/fundstransfers | 
[**postverifyOneTimePasscode**](Card_servicesApi.md#postverifyOneTimePasscode) | **POST** /dcas/cardservices/v1/cards/{cardId}/notifications/otpverification | 
[**putcardStatus**](Card_servicesApi.md#putcardStatus) | **PUT** /dcas/cardservices/v1/cards/{cardId}/cardstatus | 
[**putnotificationDetails**](Card_servicesApi.md#putnotificationDetails) | **PUT** /dcas/cardservices/v1/cards/{cardId}/notifications/settings | 
[**putnotificationSubscriptions**](Card_servicesApi.md#putnotificationSubscriptions) | **PUT** /dcas/cardservices/v1/cards/{cardId}/notifications/subscriptions | 


# **getcardStatus**
> \dcas_101\model\CardStatusgetResponse getcardStatus($card_id)



Get the card status for a given cardId

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string

    try {
    $result = $api_instance->getcardStatus($card_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getcardStatus: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| CardId unique Indentifier |

### Return type

[**\dcas_101\model\CardStatusgetResponse**](../Model/CardStatusgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getgetAccountDetails**
> \dcas_101\model\GetAccountDetailsgetResponse getgetAccountDetails($look_up_balances, $card_id)



Retrieves unique accountIds for account (uniquely identified by AccountNumber, AccountType and Institution) and balance information for all the accounts.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $look_up_balances = "look_up_balances_example"; // string
    $card_id = "card_id_example"; // string

    try {
    $result = $api_instance->getgetAccountDetails($look_up_balances, $card_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getgetAccountDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **look_up_balances** | **string**| Flag for looking up account balances |
 **card_id** | **string**| Unique indentifier assigned to the PAN |

### Return type

[**\dcas_101\model\GetAccountDetailsgetResponse**](../Model/GetAccountDetailsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getgetCardByAlias**
> \dcas_101\model\GetCardByAliasgetResponse getgetCardByAlias($look_up_balances, $card_id)



Gets card details, account details, and balance information for a given card ID.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $look_up_balances = "look_up_balances_example"; // string
    $card_id = "card_id_example"; // string

    try {
    $result = $api_instance->getgetCardByAlias($look_up_balances, $card_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getgetCardByAlias: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **look_up_balances** | **string**| Flag for looking up account balances |
 **card_id** | **string**| Card alias Id unique Indentifier |

### Return type

[**\dcas_101\model\GetCardByAliasgetResponse**](../Model/GetCardByAliasgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getgetCardholderDetails**
> \dcas_101\model\GetCardholderDetailsgetResponse getgetCardholderDetails($card_id)



Gets cardholderdetails for a given cardId.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string

    try {
    $result = $api_instance->getgetCardholderDetails($card_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getgetCardholderDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |

### Return type

[**\dcas_101\model\GetCardholderDetailsgetResponse**](../Model/GetCardholderDetailsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getgetNotificationSettings**
> \dcas_101\model\GetNotificationSettingsgetResponse getgetNotificationSettings($card_id, $push_id)



Retrieves the Notification Settings and Subscription for the card in a summary format.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $push_id = "push_id_example"; // string

    try {
    $result = $api_instance->getgetNotificationSettings($card_id, $push_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getgetNotificationSettings: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **push_id** | **string**| Unique indentifier assigned to the push device | [optional]

### Return type

[**\dcas_101\model\GetNotificationSettingsgetResponse**](../Model/GetNotificationSettingsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getgetSingleAccountDetails**
> \dcas_101\model\GetSingleAccountDetailsgetResponse getgetSingleAccountDetails($look_up_balances, $account_alias_id)



Gets account details and balance information for a given account alias ID.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $look_up_balances = "look_up_balances_example"; // string
    $account_alias_id = "account_alias_id_example"; // string

    try {
    $result = $api_instance->getgetSingleAccountDetails($look_up_balances, $account_alias_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getgetSingleAccountDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **look_up_balances** | **string**| Flag for looking up account balances |
 **account_alias_id** | **string**| Unique indentifier assigned to an account |

### Return type

[**\dcas_101\model\GetSingleAccountDetailsgetResponse**](../Model/GetSingleAccountDetailsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getgetTransactionHistory**
> \dcas_101\model\GetTransactionHistorygetResponse getgetTransactionHistory($card_id, $index_row, $rows_on_page, $account_alias_id)



Get transaction history for a given cardId.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $index_row = "index_row_example"; // string
    $rows_on_page = "rows_on_page_example"; // string
    $account_alias_id = "account_alias_id_example"; // string

    try {
    $result = $api_instance->getgetTransactionHistory($card_id, $index_row, $rows_on_page, $account_alias_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getgetTransactionHistory: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **index_row** | **string**| Unique indentifier assigned to the PAN | [optional]
 **rows_on_page** | **string**| Unique indentifier assigned to the PAN | [optional]
 **account_alias_id** | **string**| Unique indentifier assigned to the PAN | [optional]

### Return type

[**\dcas_101\model\GetTransactionHistorygetResponse**](../Model/GetTransactionHistorygetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getnotificationDetails**
> \dcas_101\model\NotificationDetailsgetResponse getnotificationDetails($card_id)



Get notification details (Phone number, email address, push ids) for a given cardId.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string

    try {
    $result = $api_instance->getnotificationDetails($card_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getnotificationDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |

### Return type

[**\dcas_101\model\NotificationDetailsgetResponse**](../Model/NotificationDetailsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getnotificationSubscriptions**
> \dcas_101\model\NotificationSubscriptionsgetResponse getnotificationSubscriptions($card_id, $push_id)



Get list of all notification subscriptions available and that are in use for a given card Id.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $push_id = "push_id_example"; // string

    try {
    $result = $api_instance->getnotificationSubscriptions($card_id, $push_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->getnotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **push_id** | **string**| Unique indentifier assigned to a push enabled device | [optional]

### Return type

[**\dcas_101\model\NotificationSubscriptionsgetResponse**](../Model/NotificationSubscriptionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postcardActivation**
> \dcas_101\model\CardActivationpostResponse postcardActivation($card_id, $app_id, $card_activationpost_payload, $sponsor_id, $correlation_id)



Performs Card Activation for given cardId.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $app_id = "app_id_example"; // string
    $card_activationpost_payload = new \dcas_101\model\CardActivationpostPayload(); // \dcas_101\model\CardActivationpostPayload
    $sponsor_id = "sponsor_id_example"; // string
    $correlation_id = "correlation_id_example"; // string

    try {
    $result = $api_instance->postcardActivation($card_id, $app_id, $card_activationpost_payload, $sponsor_id, $correlation_id);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->postcardActivation: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **app_id** | **string**| VDP Application ID |
 **card_activationpost_payload** | [**\dcas_101\model\CardActivationpostPayload**](../Model/\dcas_101\model\CardActivationpostPayload.md)| Activation request with all the card details; expiration and CVV2 being required. |
 **sponsor_id** | **string**| Issuer Sponsor ID | [optional]
 **correlation_id** | **string**| Correlation ID (optional) | [optional]

### Return type

[**\dcas_101\model\CardActivationpostResponse**](../Model/CardActivationpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postcardVerification**
> \dcas_101\model\CardVerificationpostResponse postcardVerification($card_id, $card_verificationpost_payload)



Verifies whether the information presented by the user  is valid or not.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $card_verificationpost_payload = new \dcas_101\model\CardVerificationpostPayload(); // \dcas_101\model\CardVerificationpostPayload

    try {
    $result = $api_instance->postcardVerification($card_id, $card_verificationpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->postcardVerification: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **card_verificationpost_payload** | [**\dcas_101\model\CardVerificationpostPayload**](../Model/\dcas_101\model\CardVerificationpostPayload.md)| Verification Code |

### Return type

[**\dcas_101\model\CardVerificationpostResponse**](../Model/CardVerificationpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postcreateCardIdentifiers**
> \dcas_101\model\CreateCardIdentifierspostResponse postcreateCardIdentifiers($create_card_identifierspost_payload)



Creates a unique card Id for a Primary Account Number (PAN) and creates an account alias ID for accounts tied to the PAN. Retrieves balance information for all the accounts.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $create_card_identifierspost_payload = new \dcas_101\model\CreateCardIdentifierspostPayload(); // \dcas_101\model\CreateCardIdentifierspostPayload

    try {
    $result = $api_instance->postcreateCardIdentifiers($create_card_identifierspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->postcreateCardIdentifiers: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_card_identifierspost_payload** | [**\dcas_101\model\CreateCardIdentifierspostPayload**](../Model/\dcas_101\model\CreateCardIdentifierspostPayload.md)| An array containing PANs, expiration Dates and show balances flags |

### Return type

[**\dcas_101\model\CreateCardIdentifierspostResponse**](../Model/CreateCardIdentifierspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postgetListOfFundTransferAccounts**
> \dcas_101\model\GetListOfFundTransferAccountspostResponse postgetListOfFundTransferAccounts($card_id, $get_list_of_fund_transfer_accountspost_payload)



Get list of funds transfer accounts and fees associated with a card.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $get_list_of_fund_transfer_accountspost_payload = new \dcas_101\model\GetListOfFundTransferAccountspostPayload(); // \dcas_101\model\GetListOfFundTransferAccountspostPayload

    try {
    $result = $api_instance->postgetListOfFundTransferAccounts($card_id, $get_list_of_fund_transfer_accountspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->postgetListOfFundTransferAccounts: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **get_list_of_fund_transfer_accountspost_payload** | [**\dcas_101\model\GetListOfFundTransferAccountspostPayload**](../Model/\dcas_101\model\GetListOfFundTransferAccountspostPayload.md)|  |

### Return type

[**\dcas_101\model\GetListOfFundTransferAccountspostResponse**](../Model/GetListOfFundTransferAccountspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postloadFundsToCard**
> \dcas_101\model\LoadFundsToCardpostResponse postloadFundsToCard($card_id, $load_funds_to_cardpost_payload)



Load funds immediately on a given prepaid card (identified by cardId)

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $load_funds_to_cardpost_payload = new \dcas_101\model\LoadFundsToCardpostPayload(); // \dcas_101\model\LoadFundsToCardpostPayload

    try {
    $result = $api_instance->postloadFundsToCard($card_id, $load_funds_to_cardpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->postloadFundsToCard: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **load_funds_to_cardpost_payload** | [**\dcas_101\model\LoadFundsToCardpostPayload**](../Model/\dcas_101\model\LoadFundsToCardpostPayload.md)| Card Load Request |

### Return type

[**\dcas_101\model\LoadFundsToCardpostResponse**](../Model/LoadFundsToCardpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postretrieveRequirementsToLoadFunds**
> \dcas_101\model\RetrieveRequirementsToLoadFundspostResponse postretrieveRequirementsToLoadFunds($card_id, $retrieve_requirements_to_load_fundspost_payload)



Get funding accounts, fees, minimum and maximum reload amounts in load funds flow for a given cardId.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $retrieve_requirements_to_load_fundspost_payload = new \dcas_101\model\RetrieveRequirementsToLoadFundspostPayload(); // \dcas_101\model\RetrieveRequirementsToLoadFundspostPayload

    try {
    $result = $api_instance->postretrieveRequirementsToLoadFunds($card_id, $retrieve_requirements_to_load_fundspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->postretrieveRequirementsToLoadFunds: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **retrieve_requirements_to_load_fundspost_payload** | [**\dcas_101\model\RetrieveRequirementsToLoadFundspostPayload**](../Model/\dcas_101\model\RetrieveRequirementsToLoadFundspostPayload.md)| Funding Requirements Request |

### Return type

[**\dcas_101\model\RetrieveRequirementsToLoadFundspostResponse**](../Model/RetrieveRequirementsToLoadFundspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **posttransferFundsToAccount**
> \dcas_101\model\TransferFundsToAccountpostResponse posttransferFundsToAccount($card_id, $transfer_funds_to_accountpost_payload)



Transfer funds off the prepaid card (identified by cardId) into a DDA Acount (identified by accountAliasId)

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $transfer_funds_to_accountpost_payload = new \dcas_101\model\TransferFundsToAccountpostPayload(); // \dcas_101\model\TransferFundsToAccountpostPayload

    try {
    $result = $api_instance->posttransferFundsToAccount($card_id, $transfer_funds_to_accountpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->posttransferFundsToAccount: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **transfer_funds_to_accountpost_payload** | [**\dcas_101\model\TransferFundsToAccountpostPayload**](../Model/\dcas_101\model\TransferFundsToAccountpostPayload.md)| Funds Transfer Request |

### Return type

[**\dcas_101\model\TransferFundsToAccountpostResponse**](../Model/TransferFundsToAccountpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **postverifyOneTimePasscode**
> \dcas_101\model\VerifyOneTimePasscodepostResponse postverifyOneTimePasscode($card_id, $verify_one_time_passcodepost_payload)



Verifies if the one time passcode sent to the user is valid or not (Double Opt In).

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $verify_one_time_passcodepost_payload = new \dcas_101\model\VerifyOneTimePasscodepostPayload(); // \dcas_101\model\VerifyOneTimePasscodepostPayload

    try {
    $result = $api_instance->postverifyOneTimePasscode($card_id, $verify_one_time_passcodepost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->postverifyOneTimePasscode: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **verify_one_time_passcodepost_payload** | [**\dcas_101\model\VerifyOneTimePasscodepostPayload**](../Model/\dcas_101\model\VerifyOneTimePasscodepostPayload.md)| Verification Code |

### Return type

[**\dcas_101\model\VerifyOneTimePasscodepostResponse**](../Model/VerifyOneTimePasscodepostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putcardStatus**
> \dcas_101\model\CardStatusputResponse putcardStatus($card_id, $card_statusput_payload)



Updates the card status for a given Card ID.

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $card_statusput_payload = new \dcas_101\model\CardStatusputPayload(); // \dcas_101\model\CardStatusputPayload

    try {
    $result = $api_instance->putcardStatus($card_id, $card_statusput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->putcardStatus: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Card alias Id unique Indentifier |
 **card_statusput_payload** | [**\dcas_101\model\CardStatusputPayload**](../Model/\dcas_101\model\CardStatusputPayload.md)| Key Value for updating card status |

### Return type

[**\dcas_101\model\CardStatusputResponse**](../Model/CardStatusputResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putnotificationDetails**
> \dcas_101\model\NotificationDetailsputResponse putnotificationDetails($card_id, $notification_detailsput_payload)



Update notification details for a given cardId

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $notification_detailsput_payload = new \dcas_101\model\NotificationDetailsputPayload(); // \dcas_101\model\NotificationDetailsputPayload

    try {
    $result = $api_instance->putnotificationDetails($card_id, $notification_detailsput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->putnotificationDetails: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **notification_detailsput_payload** | [**\dcas_101\model\NotificationDetailsputPayload**](../Model/\dcas_101\model\NotificationDetailsputPayload.md)| Notification Settings Update |

### Return type

[**\dcas_101\model\NotificationDetailsputResponse**](../Model/NotificationDetailsputResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **putnotificationSubscriptions**
> \dcas_101\model\NotificationSubscriptionsputResponse putnotificationSubscriptions($card_id, $notification_subscriptionsput_payload)



Update notification subscriptions for a given cardId

### Example
```php
<?php

require_once('./prod_23/dcas_101/autoload.php');
use \dcas_101\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Card_servicesApi
    $api_instance = new dcas_101\Api\Card_servicesApi();

    // Set the required payload and parameters.
    $card_id = "card_id_example"; // string
    $notification_subscriptionsput_payload = new \dcas_101\model\NotificationSubscriptionsputPayload(); // \dcas_101\model\NotificationSubscriptionsputPayload

    try {
    $result = $api_instance->putnotificationSubscriptions($card_id, $notification_subscriptionsput_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Card_servicesApi->putnotificationSubscriptions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| Unique indentifier assigned to the PAN |
 **notification_subscriptionsput_payload** | [**\dcas_101\model\NotificationSubscriptionsputPayload**](../Model/\dcas_101\model\NotificationSubscriptionsputPayload.md)| Notifications Subscriptions Update |

### Return type

[**\dcas_101\model\NotificationSubscriptionsputResponse**](../Model/NotificationSubscriptionsputResponse.md)

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