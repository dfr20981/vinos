# CardDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **string** | Account number can be an existing Visa account, a new account in the VPA system, or a proxy number. If this column is blank, the following logic is used for determining the account number      1. Lodged account is used if there is one for the supplier     2. If the supplier does not have a lodged card account, system should pick the card account from the pool based on the matrix in Account Picking logic table. | [optional] 
**currency_code** | **string** | Payment Currencye Code.  A valid ISO alpha currency code should be passed.  If the currency passed is not one of the supported currencies setup in the buyer profile, the payment will be rejected. | [optional] 
**proxy_number** | **string** | Proxy number is required if the buyer is DPS or the Account Type is 5. | [optional] 
**account_limit** | **string** | Credit limit of the account.    Note-  This field is required only if the account is a new account which is not already lodged to the supplier for which the payment is made. | [optional] 
**action_type** | **string** | Mode of account creation. Note- This field is mandatory if the card details is added and for all clients, except Visa Debit Processing Service clients. Possible values are      ● 1 - Request New Card (Request the card from the processor)     ● 2 - Add/Lodge Card Number (Supply the Card account details as part of the request) | [optional] 
**expiration_date** | **string** | Account&#39;s expiry date.  Note-  This field is required only if the account is a new account which is not already lodged to the supplier for which the payment is made. | [optional] 
**account_type** | **string** | Account Type.  Valid values are-  1- Lodged Adjustable Limit account   2- Lodged account. Note-  This field is required only if the account is a new account which is not already lodged to the supplier for which the payment is made. | [optional] 

[Back to Model list](../../README.md#documentation-for-models)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to README](../../README.md)



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