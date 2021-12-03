# Payments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_gross_amount** | **string** | Payment gross amount.  Format is 99999999999999.99 | 
**payment_expiry_date** | **string** | The date by which a supplier must collect this payment. Format is YYYY-MM-DD. | 
**account_number** | **string** | Account number used for making the payment. | 
**invoices** | [**\vpa_102\model\Invoices**](Invoices.md) |  | [optional] 
**currency_code** | **string** | Payment currency code.  ISO alpha currency code will be returned in the response. | 
**system_match_status** | **string** | Valid values are Matched, Unmatched and Expired | [optional] 
**payment_description** | **string** | Description of the payment. | [optional] 
**payment_request_date** | **string** | Payment requested date. Format is YYYY-MM-DD. | [optional] 
**payment_type** | **string** | Type of payment processing-    1 - Payment Instruction    2 - Payment Requisition | [optional] 
**supplier** | [**\vpa_102\model\Supplier**](Supplier.md) |  | [optional] 
**manual_match_status** | **string** | Valid values are I or G - Reconciled    U - Unreconciled      P - Partially Reconciled   Y - Forcibly Reconciled | [optional] 

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