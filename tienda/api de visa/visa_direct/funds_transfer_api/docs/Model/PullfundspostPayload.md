# PullfundspostPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_application_id** | **string** | Identifies the programs&#39; business application type for VisaNet transaction processing&lt;br&gt;&lt;br&gt;For Money Transfer, AA applies to transactions where the sender and recipient are the same person and PP applies to transactions where the sender and recipient are not the same person.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#business_application_identifier\&quot;&gt;businessApplicationId&lt;/a&gt; codes | 
**cps_authorization_characteristics_indicator** | **string** | Request for CPS authorization. If present, a valid value is required. Spaces or special characters are not allowed. Possible values are : Y (Transaction requests participation) | [optional] 
**source_of_funds** | **string** | when present, this field contain a valid &lt;a href&#x3D;\&quot;/request_response_codes#sourceOfFundsCode\&quot;&gt;sourceOfFundsCode&lt;/a&gt; code that matches the funding instrument. &lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#sourceOfFundsCode\&quot;&gt;sourceOfFundsCode&lt;/a&gt; codes | [optional] 
**retrieval_reference_number** | **string** | A value used to tie together service calls related to a single financial transaction. When passing Account Funding Transaction (AFT) and Original Credit Transaction (OCT) methods, this value must differ between the two methods. When passing the Account Funding Transaction Reversal (AFTR) method, this value must match the  retrievalReferenceNumber previously passed with the AFT method for this transaction.&lt;br&gt;&lt;br&gt;Recommended Format: ydddhhnnnnnn&lt;br&gt;&lt;br&gt;The first fours digits must be a valid yddd date in the Julian date format, where the first digit &#x3D; 0-9 (last digit of current year) and the next three digits &#x3D; 001-366 (number of the day in the year).&lt;br&gt;&lt;br&gt;hh can be the two digit hour in a 24 hour clock (00-23) during which the transaction is performed.&lt;br&gt;&lt;br&gt;nnnnnn can be the systemsTraceAuditNumber or any 6 digit number. | 
**card_acceptor** | [**\ft_100\model\CardAcceptor**](CardAcceptor.md) |  | 
**sender_address** | **string** | When present, this field contains sender&#39;s Address | [optional] 
**sender_middle_initial** | **string** | This field contains sender&#39;s middle initial | [optional] 
**recipient_state** | **string** | Required if RecipientCountryCode is either 124(CAN) or 840(USA) | [optional] 
**surcharge** | **string** | When present, this field contains the sender&#39;s surcharge as assessed by the originator. Values in this field must be in the same currency and format as defined in the amount field. | [optional] 
**sender_state_code** | **string** | When present, this field contains sender&#39;s state code | [optional] 
**merchant_category_code** | **int** | &lt;b&gt;Note:&lt;/b&gt;&lt;/b&gt; If provided, then the value overrides the one present in onboarding data. If the merchantCategoryCode value is not populated in onboarding data then this field is mandatory.&lt;br&gt;&lt;br&gt;If not provided, then the value will default to the values provided during onboarding (when the services are provisioned). | 
**sender_last_name** | **string** | This field contains sender&#39;s last name | [optional] 
**merchant_verification_value** | [**\ft_100\model\MerchantVerificationValue**](MerchantVerificationValue.md) |  | [optional] 
**sharing_group_code** | **string** | This field is optionally used by Push Payments Gateway participants (merchants and acquirers) to specify the network access priority.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#network_id_and_sharing_group_code\&quot;&gt;Sharing Group Code&lt;/a&gt;&lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt;&lt;br&gt;Supported only in US for domestic transactions involving Push Payments Gateway Service. | [optional] 
**acquirer_country_code** | **int** | Use a 3-digit numeric country code for the country of the BIN under which your Visa Direct solution is registered. This must match the information provided during program enrollment.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 
**amount** | **double** | The amount of the transaction, inclusive of all fees you assess for the transaction, including currency conversion fees. If the originator is populating the surcharge or foreignExchangeFeeTransaction field, they must be included in the amount field. | 
**member_comments** | **string** | This field can be optionally used to send and receive comments by service providers. Issuers can optionally include new text in this field in the response. If the issuer does not include this field, Visa will inject the value from the request in the response and send it back to the service provider. | [optional] 
**recipient_last_name** | **string** | When present, this field contains recipient&#39;s last name | [optional] 
**national_reimbursement_fee** | **double** | If present, this field should contain the IRF fees. | [optional] 
**card_cvv2_value** | **string** | The cardCvv2Value value provided by the account holder for the senderPrimaryAccountNumber in the request. | [optional] 
**cavv** | **string** | The Cardholder Authentication Verification Value (CAVV) is a value generated by an Access Control Server (ACS) and signed by the Issuer using account and password information of cardholders registered for the Verified by Visa program.  This field should be in hexabinary format. | [optional] 
**sender_postal_code** | **string** | When present, this field contains the sender&#39;s postal code | [optional] 
**pin_data** | [**\ft_100\model\PinData**](PinData.md) |  | [optional] 
**sender_first_name** | **string** | This field contains sender&#39;s first name | [optional] 
**sender_city** | **string** | When present, this field contains sender&#39;s city | [optional] 
**fee_program_indicator** | **string** | If present, a valid value is required. Spaces or special characters are not allowed. | [optional] 
**address_verification_data** | [**\ft_100\model\AddressVerificationData**](AddressVerificationData.md) |  | [optional] 
**sender_account_number** | **string** | When present, this field contains the sender&#39;s account number | [optional] 
**magnetic_stripe_data** | [**\ft_100\model\MagneticStripeData**](MagneticStripeData.md) |  | [optional] 
**acquiring_bin** | **int** | The Bank Identification Number (BIN) under which your Visa Direct is registered. This must match the information provided during enrollment. | 
**account_type** | **string** | This is used to identify the account type of the senderPrimaryAccountNumber in the request. Below are the possible values.&lt;br&gt;&lt;br&gt; 00-Not applicable&lt;br&gt; 10-Saving account&lt;br&gt; 20-Checking account&lt;br&gt; 30-Credit card account&lt;br&gt; 40-Universal account&lt;br&gt;&lt;br&gt;Default is set to \&quot;00\&quot; if not provided. | [optional] 
**merchant_pseudo_aba_number** | **string** | This is a number that uniquely identifies the originator when they sign up to send Push Payment Gateway transactions. On enrollment, an originator will get a single pseudo-value that is assigned by Visa. The other networks will assign their own unique values for the originator.&lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt;&lt;br&gt;Supported only in US for domestic transactions involving Push Payments Gateway Service. | [optional] 
**foreign_exchange_fee_transaction** | **double** | When present, this field contains the sender&#39;s foreign exchange markup fee (markup above the wholesale or VisaNet exchange rate as assessed by the originator). Values in this field must be in the same currency and format as defined in the amount field. | [optional] 
**point_of_service_data** | [**\ft_100\model\PointOfServiceData**](PointOfServiceData.md) |  | [optional] 
**sender_primary_account_number** | **string** | The primary account number of the sender&#39;s account. | 
**local_transaction_date_time** | **string** |  | 
**recipient_first_name** | **string** | When present, this field contains recipient&#39;s first name | [optional] 
**sender_card_expiry_date** | **string** | The expiration date for the sender&#39;s Visa account number in  senderPrimaryAccountNumber | 
**recipient_middle_initial** | **string** | When present, this field contains recipient&#39;s middle initial | [optional] 
**recipient_country_code** | **string** | when present, this field contains recipient&#39;s country code &lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_codes\&quot;&gt;ISO Codes&lt;/a&gt; | [optional] 
**systems_trace_audit_number** | **int** | A unique value should be used for each API method. However, when passing the (AFTR) method, this value must match the systemsTraceAuditNumber previously passed with the AFT method for the current transaction. | 
**sender_country_code** | **string** | when present, this field contains sender&#39;s country code &lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_codes\&quot;&gt;ISO Codes&lt;/a&gt; | [optional] 
**sender_currency_code** | **string** | Use a 3-character alpha or numeric currency code for currency of the sender.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 
**point_of_service_capability** | [**\ft_100\model\PointOfServiceCapability**](PointOfServiceCapability.md) |  | [optional] 

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