# MerchantAddressInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**city** | **string** | the city of the merchant address | [optional] 
**languages** | **string** | returns all languages associated with the address | [optional] 
**index_number** | **int** | an integer identifier to signify the result index for the merchant address (specific to your request). Only displayed for a merchant address reference data request | [optional] 
**merchant_key** | **int** | the identifying value of the merchant. Only displayed for a merchant address reference data request | [optional] 
**distance** | **string** | the distance from the origin to the merchant address. Only displayed when a geolocation filter has been applied and the address has valid latitude and longitude coordinates Max length: Computed - should be less than 20 bytes + distance unit | [optional] 
**address1** | **string** | the first line of the merchant address. Max length: 200 characters | [optional] 
**address2** | **string** | the second line of the merchant. May return an empty String | [optional] 
**longtitude** | **string** | the longitude of the address | [optional] 
**country_name** | **string** | the country name | [optional] 
**latitude** | **string** | the latitude of the address | [optional] 
**state** | **string** | the state/province/territory of the merchant address | [optional] 
**key** | **int** | the identifying value of the merchant address | [optional] 
**language_name** | **string** | Deprecated; languages returns a complete list | A single language associated to the merchant address | [optional] 
**postal_code** | **string** | the postal code/zip code | [optional] 
**merchant_value** | **string** | the default merchant name. Only displayed for a merchant address reference data request | [optional] 
**language_ids** | **string** | returns all keys for the languages associated with the address | [optional] 

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