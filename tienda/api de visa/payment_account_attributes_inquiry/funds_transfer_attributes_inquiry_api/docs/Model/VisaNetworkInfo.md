# VisaNetworkInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_product_type** | **string** | The code of account funding source for the card, e.g. Credit, Debit, Prepaid, Charge, Deferred Debit.&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#cardTypeCode\&quot;&gt;cardProductType&lt;/a&gt;&lt;/br&gt; | 
**enhanced_non_money_transfer_oct_domestic** | **string** | Indicates whether domestic enhanced non-money transfer OCTs (push funds) are allowed.&lt;br&gt;Y - Domestic enhanced non-money transfer OCTs are allowed.&lt;br&gt;N - Domestic enhanced non-money transfer OCTs are blocked. | 
**geo_restriction_ind** | **string** | This field will determine if the recipient issuer can accept transactions from the Originator country. If the value is “Y”, transactions cannot be accepted from the sender country. If the value is “N”, transactions are allowed. | [optional] 
**card_platform_code** | **string** | Indicates the type of card. This is a 2-character alphabetic code.&lt;br&gt;BZ -  Business.&lt;br&gt;CN -  Consumer.&lt;br&gt;CO -  Commercial.&lt;br&gt;GV -  Government. | 
**card_sub_type_code** | **string** | Indicates the type of prepaid card. This is a single-character alphabetic code.&lt;br&gt;R -  Reloadable.&lt;br&gt;N -  Non-reloadable. | [optional] 
**enhanced_non_money_transfer_oct_cross_border** | **string** | Indicates whether cross-border enhanced non-money transfer OCTs (push funds) are allowed.&lt;br&gt;Y - Cross-border enhanced non-money transfer OCTs are allowed.&lt;br&gt;N - Cross-border enhanced non-money transfer OCTs are blocked. | 
**billing_currency_minor_digits** | **string** | Identifies the number of decimal positions that should be present in any amounts for the requested card&#39;s billing currency. | 
**enhanced_money_transfer_oct_cross_border** | **string** | Indicates whether cross-border enhanced money transfer OCTs (push funds) are allowed.&lt;br&gt;Y - Cross-border enhanced money transfer OCTs are allowed.&lt;br&gt;N - Cross-border enhanced money transfer OCTs are blocked. | 
**basic_money_transfer** | **string** | Indicates whether basic money transfer OCTs (push funds) are allowed.&lt;br&gt;Y - Basic money transfer OCTs are allowed.&lt;br&gt;N - Basic money transfer OCTs are blocked. | 
**gambling_oct_domestic** | **string** | Indicates whether domestic gambling OCTs (push funds) are allowed.&lt;br&gt;Y - Domestic gambling OCTs are allowed.&lt;br&gt;N - Domestic gambling OCTs are blocked. | 
**enhanced_money_transfer_oct_domestic** | **string** | Indicates whether domestic enhanced money transfer OCTs (push funds) are allowed.&lt;br&gt;Y - Domestic enhanced money transfer OCTs are allowed.&lt;br&gt;N - Domestic enhanced money transfer OCTs are blocked. | 
**gambling_oct_cross_border** | **string** | Indicates whether cross-border gambling OCTs (push funds) are allowed.&lt;br&gt;Y - Cross-border gambling OCTs are allowed.&lt;br&gt;N - Cross-border gambling OCTs are blocked. | 
**fast_funds_cross_border** | **string** | Indicates whether the issuer supports fast funds for cross-border enhanced money transfer OCTs (push funds).&lt;br&gt;Y - Cross-border fast funds are supported.&lt;br&gt;N - Cross-border fast funds are not supported. | [optional] 
**fast_funds_domestic** | **string** | Indicates whether the issuer supports fast funds for Domestic enhanced money transfer OCTs (push funds).&lt;br&gt;Y - Domestic fast funds are supported.&lt;br&gt;N - Domestic fast funds are not supported. | [optional] 
**combo_card_range** | **string** | Indicates the type of Combo card.&lt;br&gt;0 -  Not a Combo card.&lt;br&gt;1 -  Combo card is Credit and Prepaid.&lt;br&gt;2 -  Combo card is Credit and Debit. | 
**issuer_name** | **string** | Issuer name | 
**billing_currency** | **int** | Use a 3-digit numeric currency code for the card billing currency of the PAN.&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#isoCodes\&quot;&gt;ISO Codes&lt;/a&gt;&lt;/br&gt; | [optional] 
**basic_non_money_transfer** | **string** | Indicates whether basic non-money transfer OCTs (push funds) are allowed.&lt;br&gt;Y - Basic non-money transfer OCTs are allowed.&lt;br&gt;N - Basic non-money transfer OCTs are blocked. | 
**issuer_country_code** | **string** | Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 

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