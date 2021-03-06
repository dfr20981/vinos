# FundstransferinquirypostPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acquiring_bin** | **int** | This is an optional field. The Bank Identification Number (BIN) under which your Funds Transfer application is registered. This must match the information provided during enrollment. | [optional] 
**retrieval_reference_number** | **string** | A value used to tie together service calls related to a single financial transaction.&lt;br&gt;Recommended Format: ydddhhnnnnnn&lt;br&gt;The first four digits must be a valid yddd date in the Julian date format, where the first digit &#x3D; 0-9 (last digit of current year) and the next three digits &#x3D; 001-366 (number of the day in the year).&lt;br&gt;hh can be the two digit hour in a 24 hour clock (00-23) during which the transaction is performed.&lt;br&gt; nnnnnn can be the SystemsTraceAuditNumber or any 6 digit number. | 
**sharing_group_code** | **string** | This is an optional field. If sharingGroupCode is provided, it is highly recommended that acquirerCountryCode is also provided.&lt;br&gt;Use a 3-digit numeric country code for the country where the Funds Transfer solution is registered. This must match the information provided during program enrollment. | [optional] 
**acquirer_country_code** | **string** | This is an optional field. If acquiringBin is provided, it is highly recommended that acquirerCountryCode is also provided.&lt;br&gt;Use a 3-digit numeric country code for the country where the Funds Transfer solution is registered. This must match the information provided during program enrollment. | [optional] 
**primary_account_number** | **string** | The primary account number or Token for which account attributes are being requested | 
**systems_trace_audit_number** | **string** | A unique value should be used for each API method where this is required. If this is used for funds transfer, please refer to &lt;a href&#x3D;\&quot;/products/visa_direct/reference#visa_direct__funds_transfer__v1__pullfunds\&quot; &gt; PullFundsTransactions POST&lt;/a&gt;Funds Transfer API for more details. | 

[Back to Model list](../../README.md#documentation-for-models)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to README](../../README.md)



##License
**?? Copyright 2018 Visa. All Rights Reserved.**

*NOTICE: The software and accompanying information and documentation (together, the ???Software???) remain the property of
and are proprietary to Visa and its suppliers and affiliates. The Software remains protected by intellectual property
rights and may be covered by U.S. and foreign patents or patent applications. The Software is licensed and not sold.*

*By accessing the Software you are agreeing to Visa's terms of use (developer.visa.com/terms) and privacy policy (developer.visa.com/privacy).
In addition, all permissible uses of the Software must be in support of Visa products, programs and services provided
through the Visa Developer Program (VDP) platform only (developer.visa.com). **THE SOFTWARE AND ANY ASSOCIATED
INFORMATION OR DOCUMENTATION IS PROVIDED ON AN ???AS IS,??? ???AS AVAILABLE,??? ???WITH ALL FAULTS??? BASIS WITHOUT WARRANTY OR
CONDITION OF ANY KIND. YOUR USE IS AT YOUR OWN RISK.** All brand names are the property of their respective owners, used for identification purposes only, and do not imply
product endorsement or affiliation with Visa. Any links to third party sites are for your information only and equally
do not constitute a Visa endorsement. Visa has no insight into and control over third party content and code and disclaims
all liability for any such components, including continued availability and functionality. Benefits depend on implementation
details and business factors and coding steps shown are exemplary only and do not reflect all necessary elements for the
described capabilities. Capabilities and features are subject to Visa???s terms and conditions and may require development,
implementation and resources by you based on your business and operational details. Please refer to the specific
API documentation for details on the requirements, eligibility and geographic availability.*

*This Software includes programs, concepts and details under continuing development by Visa. Any Visa features,
functionality, implementation, branding, and schedules may be amended, updated or canceled at Visa???s discretion.
The timing of widespread availability of programs and functionality is also subject to a number of factors outside Visa???s control,
including but not limited to deployment of necessary infrastructure by issuers, acquirers, merchants and mobile device manufacturers.*