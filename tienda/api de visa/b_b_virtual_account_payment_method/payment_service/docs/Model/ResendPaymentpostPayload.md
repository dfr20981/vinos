# ResendPaymentpostPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_message_id** | **string** | The messageID of the original process payment request that is being resent. | 
**account_number** | **string** | An existing Visa card account. Values are 0–9. Note- If the account number is passed, it should correspond to the card account number used for the payment. | [optional] 
**alternate_email_addresses** | [**\vpa_102\model\AlternateEmailAddresses**](AlternateEmailAddresses.md) |  | [optional] 
**client_id** | **string** | Client ID field is a unique identification of the financial institution . This will be provided by Visa at the time of setup. | 
**supplier_profile_update_indicator** | **string** | This field contains value as Y if supplier profile has to be updated and N if supplier profile should not be updated. By default, the system will not update the supplier profile with the new values sent in the request. | [optional] 
**primary_email_address** | **string** | This contains the email address for the supplier that will receive the payment instruction. It must be a valid email address. If the primary email address is provided, the payment advice will be sent to the new primary email address provided in the request. If it is not, the email address in the original request will be used. | [optional] 
**message_id** | **string** | Unique identifier for this request.  Each request sent to VPA requires its own unique ID. | 
**buyer_id** | **string** | Buyer ID is the buyer identifier as defined in Visa Payables Automation. Value format is 0–9. | 
**email_notes** | **string** | This contains the text to be included on email notifications and remittance advice.  If this field is not provided, the value from the original request will be used. | [optional] 
**expiration_date** | **string** | The date by which a supplier must collect his payment. Format is YYYY-MM-DD | [optional] 

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