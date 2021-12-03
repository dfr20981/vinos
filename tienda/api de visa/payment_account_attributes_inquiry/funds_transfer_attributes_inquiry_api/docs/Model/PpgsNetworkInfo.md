# PpgsNetworkInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network_id** | **int** | This contains a code that identifies the network.&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#network_id_and_sharing_group_code\&quot;&gt;Network Id&lt;/a&gt; | 
**oct_xb_participant** | **string** | Push Funds(OCT) Cross Border Indicator.&lt;br&gt; &lt;b&gt; Note:&lt;/b&gt;  &lt;br&gt; Supported only in US for domestic transactions involving Push Payments Gateway Service. | 
**billing_currency_code** | **int** | Use a 3-digit numeric currency code for the card billing currency of the PAN.&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 
**billing_currency_code_minor_digits** | **string** | Identifies the number of decimal positions that should be present in any amounts for the requested card&#39;s billing currency. | 
**oct_dom_participant** | **string** | Push Funds(OCT) Domestic Indicator.&lt;br&gt; &lt;b&gt; Note:&lt;/b&gt;  &lt;br&gt; Supported only in US for domestic transactions involving Push Payments Gateway Service. | 
**aft_dom_participant** | **string** | Pull Funds(AFT) Domestic Indicator.&lt;br&gt; &lt;b&gt; Note:&lt;/b&gt;  &lt;br&gt; Supported only in US for domestic transactions involving Push Payments Gateway Service. | 
**card_issuer_country_code** | **string** | Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 
**card_platform_code** | **string** | Indicates the type of card. This is a 2-character alphabetic code.&lt;br&gt;BZ -  Business.&lt;br&gt;CN -  Consumer.&lt;br&gt;CO -  Commercial.&lt;br&gt;GV -  Government. | [optional] 
**aft_xb_participant** | **string** | Pull Funds(AFT) Cross Border Indicator.&lt;br&gt; &lt;b&gt; Note:&lt;/b&gt;  &lt;br&gt; Supported only in US for domestic transactions involving Push Payments Gateway Service. | 
**card_type_code** | **string** | The code of account funding source for the card, e.g. Credit, Debit, Prepaid, Charge, Deferred Debit.&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#cardTypeCode\&quot;&gt;cardTypeCode&lt;/a&gt; | [optional] 

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