# Resource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_update_time_stamp** | **string** | Provides the timestamp, in GMT, of when the resource was last updated. | [optional] 
**document_id** | **string** | System generated ID of the Control Document bound to Account Identifier (primaryAccountNumber/paymentToken) | [optional] 
**user_identifier** | **string** | Uniquely identifies the cardholder who is to receive the alert message. The notification Service Provider should use this value to identify an individual and their contact preferences.  The userIdentifier should be a GUID, but at minimum must be unique per enrolling application. It is mandatory for VTC notifications. Maximum of 72 characters | [optional] 
**transaction_controls** | [**\pmc_100\model\TransactionControls**](TransactionControls.md) |  | [optional] 
**merchant_controls** | [**\pmc_100\model\MerchantControls**](MerchantControls.md) |  | [optional] 
**global_controls** | [**\pmc_100\model\GlobalControls**](GlobalControls.md) |  | [optional] 

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