# UpdateSupplierpostPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supplier_date** | **string** | This field contains the Supplier Date Format. This is a mandatory field, if an empty value is supplied VPA will default the value to the Buyer’s date format. The valid values are   ● MMDDYYYY     ● DDMMYYYY     ● YYYYMMDD      ● DD/MM/YYYY     ● DD/MM/YY       ● YYYY/MM/DD     ● YY/MM/DD       ● MM/DD/YYYY     ● MM/DD/YY      ● DD/MMM/YYYY     ● DD/MMM/YY      ● YYYY/MMM/DD      ● YY/MMM/DD       ● MMM/DD/YYYY      ● MMMM/DD/YY      ● DD-MM-YYYY     ● DD-MM-YY     ● YYYY-MM-DD      ● YY-MM-DD      ● MM-DD-YYYY     ● MM-DD-YY     ● DD-MMM-YY      ● DD-MMM-YYYY      ● YYYY-MMM-DD      ● YY-MMM-DD      ● MMM-DD-YYYY     ● MMM-DD-YY | [optional] 
**invoice_attachment_required** | **string** | Invoice attachment indicator. Possible values are Y and N. If this field is not passed/set in the WS request then the value of this field is defaulted to N. | [optional] 
**supplier_state** | **string** | Supplier state. | [optional] 
**supplier_language** | **string** | Supplier language. The valid values and corresponding language are       ● fr_FR- Corresponds to the French language.       ● en_US- Corresponds to the English (US) language.       ● en_GB- Corresponds to the English (UK) language.       ● es_ES- Corresponds to the Spanish language.       ● pt_BR- Corresponds to the Brazilian Portugese language.       ● English- Corresponds to the English (US) language.         ● IntlEnglish- Corresponds to the English (UK) language.       ● French- Corresponds to the French language.       ● SpanishLA- Corresponds to the Spanish language.       ● PortugueseBR- Corresponds to the Brazilian Portugese language. | [optional] 
**client_id** | **string** | Client ID field is a unique identification of the financial institution. This will be provided by Visa at the time of setup. | 
**security_answers** | [**\vpa_101\model\SecurityAnswers**](SecurityAnswers.md) |  | [optional] 
**supplier_type** | **string** | Type of supplier. Valid values are ● VPA ● STP | [optional] 
**supplier_id** | **string** | Identifier used by the buyer to identify the supplier. This has to be unique for a buyer. It cannot contain spaces. | 
**supplier_postal_code** | **string** | Supplier postal code. It is mandatory for new suppliers and only if the country mandates it. | [optional] 
**reminder_notification_required** | **string** | Indicator to enable the supplier reminder notification feature. Possible values are Y and N. If this is not set or is set to N then reminder notification will not be sent to the supplier before payment expiration. Note If the suppress supplier notification option is enabled for the buyer, the reminder notification is not sent even if this flag is set to Y. | [optional] 
**buyer_id** | **string** | Buyer ID is the buyer identifier as defined in Visa Payables Automation. Value format is 0–9. | 
**supplier_address_line2** | **string** | Supplier address line 2. | [optional] 
**supplier_address_line1** | **string** | Supplier address line 1. | [optional] 
**alternate_email_addresses** | [**\vpa_101\model\AlternateEmailAddresses**](AlternateEmailAddresses.md) |  | [optional] 
**payment_control_required** | **string** | Specifies whether the supplier is enabled for payment controls. Valid values are    ● Y    ● N    If this field is not passed/set in the WS request then the value of this field is defaulted to Y if the Default Auth Control is enabled in the buyer profile else it is set to N. | [optional] 
**default_currency_code** | **string** | Default currency code. All ISO alpha numerica currency codes will be supported. For example- USD. If default currency code is not provided, buyer currency code is used.  If the currency code supplied is not setup in the allowable currencies in the buyer profile, the request will be rejected. | [optional] 
**supplier_country_code** | **string** | Supplier country code. It is alphanumeric.VPA supports all ISO alpha numeric country code.For example- USA. | [optional] 
**supplier_gl_code** | **string** | Supplier GL code | [optional] 
**payment_expiration_days** | **string** | Determines the number of days within which a supplier must take his payment to avoid expiration of payment instruction. Its value must be greater than zero.  If this value is not provided, payment expiry days set in the buyer profile is used | [optional] 
**stp_id** | **string** | STP ID to be associated with supplier of type STP. Format- 0–9. STPID is required new STP suppliers.  You can get the STPID for the supplier you want to pay using the supplier matching service | [optional] 
**security_code_required** | **string** | Specifies whether security code (CVV2) is required for a supplier to collect a payment. Possible values are Y and N. If this field is not passed/set in the WS request then the value of this field is defaulted to \&quot;N\&quot;. | [optional] 
**reminder_notification_days** | **string** | Specifies how many days before payment expiration will the reminder notification be sent. For example, if this value is set to 4, reminder notification will be sent to the supplier four days before payment expiration. This field is required if the reminder notification required field is set to Y. | [optional] 
**primary_email_address** | **string** | Supplier primary email address. The value is mandatory in case the bank/buyer has the notification indicator set to Y. | [optional] 
**message_id** | **string** | Unique identifier for this request.  Each request sent to VPA requires its own unique ID. | 
**supplier_city** | **string** | Supplier city. | [optional] 
**enable_pin** | **string** | The EnablePin field is an indicator, which bank and buyer uses to specify if PIN can be enabled at supplier level. A supplier can set a PIN on his account only if EnablePin is set to Y. This field is used only for DPS buyers. This field should be set as Y only if bank and buyer are enabled for PIN. | [optional] 
**supplier_name** | **string** | Name of supplier to be paid. It is mandatory for new suppliers. | [optional] 

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