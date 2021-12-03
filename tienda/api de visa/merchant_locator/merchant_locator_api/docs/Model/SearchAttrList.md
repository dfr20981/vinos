# SearchAttrList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distance** | **int** | Distance value should be in between 0 to 100 | 
**merchant_street_address** | **string** | Address of the registered Merchant | 
**merchant_category_code** | **string** | Category Code Array of the registered Merchant. Note: Merchant Name or Merchant Category Code is Mandatory, cannot have both. Merchant Category Code can be more than one with a comma separation | 
**merchant_name** | **string** | Name of the Merchant or Supplier Name. Note: Optional when any one of VisaMerchantId or VisaStoreId or BusinessRegistrationId or MerchantUrl or AcquirerCardAcceptorId is provided. | 
**merchant_city** | **string** | City of the registered Merchant | 
**merchant_state** | **string** | State of the registered Merchant. Ex: US | 
**longitude** | **string** | Longitude value should be  between -180 to +180. Note: Postal Code or (Latitude and Longitude) is mandatory, cannot have both | 
**latitude** | **string** | Latitude value should be between -90 to +90. Note: Postal Code or (Latitude and Longitude) is mandatory, cannot have both | 
**merchant_country_code** | **int** | Country Code of the registered Merchant. Merchant Country code is mandatory with MerchantName. Note: Optional when Merchant Category Code is provided and Postal code is not provided | 
**distance_unit** | **string** | Distance Unit should be either KM/M | 
**merchant_postal_code** | **string** | Postal Code of the registered Merchant. Note: Postal Code or (Latitude and Longitude) is mandatory, cannot have both. Merchant Country Code is mandatory with Postal Code. | 

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