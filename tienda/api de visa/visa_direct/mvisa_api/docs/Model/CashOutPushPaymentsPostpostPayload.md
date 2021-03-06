# CashOutPushPaymentsPostpostPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**local_transaction_date_time** | **string** | The date and time the transaction takes place, expressed in the local date and time of the originator. | 
**acquiring_bin** | **string** | BIN number identifies the originator of cash-out transaction. | 
**business_application_id** | **string** | Use CO (cash-out). This field is populated with business application identifier for the transaction. Refer to &lt;a href&#x3D;\&quot;/request_response_codes#business_application_identifier\&quot;&gt;businessApplicationID&lt;/a&gt; codes | 
**merchant_category_code** | **string** | Numeric only. Originators should populate 6012. If this field is not populated by the originator, it will automatically be set to the MCC value indicated during the API onboarding process. Recipient should populate the MCC of the merchant in the response message. | 
**card_acceptor** | [**\mvs_100\model\CardAcceptor**](CardAcceptor.md) |  | 
**acquirer_country_code** | **string** | Use a 3-digit numeric country code for the country where the Visa Direct solution is registered. This must match the information provided during program enrollment. Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_codes\&quot;&gt;ISO Codes&lt;/a&gt;. | 
**retrieval_reference_number** | **string** | Numeric only. Key data element for matching a message to others within a given transaction set. The same number appears in all related messages: response, advice, reversal, chargeback, chargeback reversal, or representment. It is recommended that the client populate ydddhhnnnnnn value in this field. | 
**amount** | **string** | Transaction amount in merchant currency. | 
**sender_reference** | **string** | A reference number unique to the merchant. Field can be left blank. | [optional] 
**recipient_primary_account_number** | **string** | Consumer PAN. 16-digit PAN as provided by the consumer to merchant. | 
**systems_trace_audit_number** | **string** | Numeric only. It is a key data element used to match a response to its request or to match a message to others for a given transaction. The value assigned to the original request should appear in all subsequent messages for that transaction | 
**sender_account_number** | **string** | Populate with consumer PAN.   If the consumer PAN is not populated or is not valid or contains extra spaces, VisaNet will reject the transaction with reject code 494 (Field or data missing or invalid) | 
**transaction_currency_code** | **string** | The code in this field must always reflect the currency associated to the amount in field Amount. Use a 3-digit numeric currency code for currency. Refer to &lt;a href&#x3D;\&quot;/request_response_codes#currency_codes\&quot;&gt;ISO Codes&lt;/a&gt;. | 
**sender_name** | **string** | Please use consumer name to populate this field.  If consumer name is greater than 30 characters, use first 30 characteres.  The name must be populated using the Roman, i.e. English character set. | 

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