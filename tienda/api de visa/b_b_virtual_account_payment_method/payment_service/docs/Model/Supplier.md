# Supplier

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eft_ach_supplier_id** | **string** | EFT/ACH Supplier id in the Invapay system | [optional] 
**stpid** | **string** | STP ID to be associated with supplier of type STP. Format- 0–9. STPID is required new STP suppliers.  You can get the STPID for the supplier you want to pay using the supplier matching service | [optional] 
**alternate_email_addresses** | [**\vpa_102\model\AlternateEmailAddresses**](AlternateEmailAddresses.md) |  | [optional] 
**supplier_state** | **string** | Supplier state. | [optional] 
**supplier_country_code** | **string** | Supplier country code. It is alphanumeric.VPA supports all ISO alphanumeric country code.For example- USA. | [optional] 
**email_notes** | **string** | This contains the text to be included on email notifications and remittance advice. | [optional] 
**supplier_postal_code** | **string** | Supplier postal code. It is mandatory for new suppliers and only if the country mandates it. | [optional] 
**supplier_profile_update_indicator** | **string** | Y — Implies that supplier profile has to be updated.  N — Implies that supplier profile should not be updated.  By default, it will not update the supplier profile. | [optional] 
**supplier_id** | **string** | Identifier used by the buyer to identify the supplier. This has to be unique for a buyer. It cannot contain spaces. | 
**primary_email_address** | **string** | Email address | [optional] 
**supplier_city** | **string** | Supplier city. | [optional] 
**supplier_address_line2** | **string** | Supplier address line 2. | [optional] 
**supplier_name** | **string** | Name of supplier to be paid. It is mandatory for new suppliers. | [optional] 
**supplier_address_line1** | **string** | Supplier address line 1. | [optional] 

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