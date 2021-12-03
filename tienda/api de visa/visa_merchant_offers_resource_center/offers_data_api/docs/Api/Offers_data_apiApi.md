# vmorc_100\Offers_data_apiApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getretrieveAllOffers**](Offers_data_apiApi.md#getretrieveAllOffers) | **GET** /vmorc/offers/v1/all | 
[**getretrieveOffersByContentId**](Offers_data_apiApi.md#getretrieveOffersByContentId) | **GET** /vmorc/offers/v1/bycontentid | 
[**getretrieveOffersByFilter**](Offers_data_apiApi.md#getretrieveOffersByFilter) | **GET** /vmorc/offers/v1/byfilter | 
[**getretrieveOffersByOfferId**](Offers_data_apiApi.md#getretrieveOffersByOfferId) | **GET** /vmorc/offers/v1/byofferid | 


# **getretrieveAllOffers**
> \vmorc_100\model\RetrieveAllOffersgetResponse getretrieveAllOffers($start_index, $max_offers)



Request for all offers

### Example
```php
<?php

require_once('./prod_18/vmorc_100/autoload.php');
use \vmorc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Offers_data_apiApi
    $api_instance = new vmorc_100\Api\Offers_data_apiApi();

    // Set the required payload and parameters.
    $start_index = "start_index_example"; // string
    $max_offers = "max_offers_example"; // string

    try {
    $result = $api_instance->getretrieveAllOffers($start_index, $max_offers);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Offers_data_apiApi->getretrieveAllOffers: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_index** | **string**| A maximum of 500 offer results may be returned in the response. The parameter specifies the index of the total available offer results to start returning in the response. | [optional]
 **max_offers** | **string**| Optional. A maximum of 500 offer results are returned in the offer response. The index indicates the maximum number of offers to return in the response. Accepts an integer (greater than 0; less than or equal to 500). Default set to 500 | [optional]

### Return type

[**\vmorc_100\model\RetrieveAllOffersgetResponse**](../Model/RetrieveAllOffersgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getretrieveOffersByContentId**
> \vmorc_100\model\RetrieveOffersByContentIdgetResponse getretrieveOffersByContentId($contentid, $updatefrom, $updateto, $start_index, $max_offers)



Request for offers by content id

### Example
```php
<?php

require_once('./prod_18/vmorc_100/autoload.php');
use \vmorc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Offers_data_apiApi
    $api_instance = new vmorc_100\Api\Offers_data_apiApi();

    // Set the required payload and parameters.
    $contentid = "contentid_example"; // string
    $updatefrom = "updatefrom_example"; // string
    $updateto = "updateto_example"; // string
    $start_index = "start_index_example"; // string
    $max_offers = "max_offers_example"; // string

    try {
    $result = $api_instance->getretrieveOffersByContentId($contentid, $updatefrom, $updateto, $start_index, $max_offers);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Offers_data_apiApi->getretrieveOffersByContentId: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentid** | **string**| Retrieve offers by their content ids. Provide an content id integer or a comma-delimited string of content id integers |
 **updatefrom** | **string**| Request for offers that are updated after a specified date (in GMT). Accepts a date formatted by: yyyyMMdd | [optional]
 **updateto** | **string**| Request for offers that are updated before a specified date (in GMT). Accepts a date formatted by: yyyyMMdd | [optional]
 **start_index** | **string**| Optional. A maximum of 500 offer results are returned in the offer response. The index indicates which offer within the sorted offer results to start returning in the offer response. Accepts an integer. Default set to 1 | [optional]
 **max_offers** | **string**| Optional. A maximum of 500 offer results are returned in the offer response. The index indicates the maximum number of offers to return in the response. Accepts an integer (greater than 0; less than or equal to 500). Default set to 500 | [optional]

### Return type

[**\vmorc_100\model\RetrieveOffersByContentIdgetResponse**](../Model/RetrieveOffersByContentIdgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getretrieveOffersByFilter**
> \vmorc_100\model\RetrieveOffersByFiltergetResponse getretrieveOffersByFilter($business_segment, $card_payment_type, $card_product, $category, $subcategory, $merchant, $program, $promotion_channel, $promoting_region, $promoting_country, $redemption_region, $redemption_country, $merchant_region, $merchant_county, $language, $expired, $validfrom, $validto, $promotedfrom, $promotedto, $updatefrom, $updateto, $featured, $start_index, $max_offers, $bins, $rpins, $bins_to_rpins, $accountranges, $accountranges_to_rpins, $pans, $non_card_attribute, $origin, $radius, $unit, $non_geo)



Request for offers by filter

### Example
```php
<?php

require_once('./prod_18/vmorc_100/autoload.php');
use \vmorc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Offers_data_apiApi
    $api_instance = new vmorc_100\Api\Offers_data_apiApi();

    // Set the required payload and parameters.
    $business_segment = "business_segment_example"; // string
    $card_payment_type = "card_payment_type_example"; // string
    $card_product = "card_product_example"; // string
    $category = "category_example"; // string
    $subcategory = "subcategory_example"; // string
    $merchant = "merchant_example"; // string
    $program = "program_example"; // string
    $promotion_channel = "promotion_channel_example"; // string
    $promoting_region = "promoting_region_example"; // string
    $promoting_country = "promoting_country_example"; // string
    $redemption_region = "redemption_region_example"; // string
    $redemption_country = "redemption_country_example"; // string
    $merchant_region = "merchant_region_example"; // string
    $merchant_county = "merchant_county_example"; // string
    $language = "language_example"; // string
    $expired = "expired_example"; // string
    $validfrom = "validfrom_example"; // string
    $validto = "validto_example"; // string
    $promotedfrom = "promotedfrom_example"; // string
    $promotedto = "promotedto_example"; // string
    $updatefrom = "updatefrom_example"; // string
    $updateto = "updateto_example"; // string
    $featured = "featured_example"; // string
    $start_index = "start_index_example"; // string
    $max_offers = "max_offers_example"; // string
    $bins = "bins_example"; // string
    $rpins = "rpins_example"; // string
    $bins_to_rpins = "bins_to_rpins_example"; // string
    $accountranges = "accountranges_example"; // string
    $accountranges_to_rpins = "accountranges_to_rpins_example"; // string
    $pans = "pans_example"; // string
    $non_card_attribute = "non_card_attribute_example"; // string
    $origin = "origin_example"; // string
    $radius = "radius_example"; // string
    $unit = "unit_example"; // string
    $non_geo = "non_geo_example"; // string

    try {
    $result = $api_instance->getretrieveOffersByFilter($business_segment, $card_payment_type, $card_product, $category, $subcategory, $merchant, $program, $promotion_channel, $promoting_region, $promoting_country, $redemption_region, $redemption_country, $merchant_region, $merchant_county, $language, $expired, $validfrom, $validto, $promotedfrom, $promotedto, $updatefrom, $updateto, $featured, $start_index, $max_offers, $bins, $rpins, $bins_to_rpins, $accountranges, $accountranges_to_rpins, $pans, $non_card_attribute, $origin, $radius, $unit, $non_geo);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Offers_data_apiApi->getretrieveOffersByFilter: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_segment** | **string**| Filter offers by business segments. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#business_segments\&quot;&gt;business_segments&lt;/a&gt; for sample values and keys. | [optional]
 **card_payment_type** | **string**| Filter offers by card payment types. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#card_payment_types\&quot;&gt;card_payment_types&lt;/a&gt; for sample values and keys. | [optional]
 **card_product** | **string**| Filter offers by card products. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#card_product\&quot;&gt;card_product&lt;/a&gt; for sample values and keys. | [optional]
 **category** | **string**| Filter offers by offer categories. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#category_and_subcategory\&quot;&gt;category_subcategory&lt;/a&gt; for sample values and keys. | [optional]
 **subcategory** | **string**| Filter offers by offer subcategories. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#category_and_subcategory\&quot;&gt;category_subcategory&lt;/a&gt; for sample values and keys. | [optional]
 **merchant** | **string**| Filter offers by merchants. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#merchant\&quot;&gt;merchant&lt;/a&gt; for sample values and keys. | [optional]
 **program** | **string**| Filter offers by programs. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#program\&quot;&gt;program&lt;/a&gt; for sample values and keys. | [optional]
 **promotion_channel** | **string**| Filter offers by promotion channels. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#promotion_channel\&quot;&gt;promotion_channel&lt;/a&gt; for sample values and keys. | [optional]
 **promoting_region** | **string**| Filter offers by promoting regions. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#region\&quot;&gt;region&lt;/a&gt; for sample values and keys. | [optional]
 **promoting_country** | **string**| Filter offers by promoting countries. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers    Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#country\&quot;&gt;country&lt;/a&gt; for sample values and keys. | [optional]
 **redemption_region** | **string**| Filter offers by redemption regions. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers    Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#region\&quot;&gt;region&lt;/a&gt; for sample values and keys. | [optional]
 **redemption_country** | **string**| Filter offers by redemption countries. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers  Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#country\&quot;&gt;country&lt;/a&gt; for sample values and keys. | [optional]
 **merchant_region** | **string**| Filter for offers that have been assigned a merchant address in at least one merchant address region parameter   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#region\&quot;&gt;region&lt;/a&gt; for sample values and keys. | [optional]
 **merchant_county** | **string**| Filter for offers that have been assigned a merchant address in at least one merchant address country parameter    Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#country\&quot;&gt;country&lt;/a&gt; for sample values and keys. | [optional]
 **language** | **string**| Filter offers by offer languages. Provide one \&quot;key\&quot; integer or a comma-delimited string of \&quot;key\&quot; integers | [optional]
 **expired** | **string**| Request for expired offers. Provide a boolean value. Default set to value to \&quot;false\&quot;. | [optional]
 **validfrom** | **string**| Request for offers where the offer&#39;s redemption end date is on or after the provided date (in GMT). Accepts a date formatted by: yyyyMMdd e.g. 1, If validfrom&#x3D;20150101 is provided, this returns eligible offers that end on or after January 1, 2015 e.g. 2, If validfrom&#x3D;20150101&amp;validto&#x3D;20150131, this will return eligible offers that end on or after January 1, 2015 and start on or before January 31, 2015 (valid during at least one day in January 2015). | [optional]
 **validto** | **string**| Request for offers where the offer’s redemption start date is before or on the provided date (in GMT). Accepts a date formatted   by: yyyyMMdd e.g. 1, If validto&#x3D;20150131 is provided, this will     return eligible offers that start before or on January 31,       2015 e.g. 2, If validfrom&#x3D;20150101&amp;validto&#x3D;20150131, this will return eligible offers that end on or after January 1, 2015 and start on or before January 31, 2015 (valid during at least one day in January 2015). | [optional]
 **promotedfrom** | **string**| Request for offers where the offer’s promotion end date is on or  after the provided date (in GMT). Accepts a date formatted by: yyyyMMdd e.g. 1, If promotedfrom&#x3D;20150101 is provided, this will / return eligible offers where the promotion ends on or after January 1, 2015 e.g. 2, If promotedfrom&#x3D;20150101&amp;promotedto&#x3D;20150131, this will return eligible offers where the promotion ends on or after January 1, 2015 and start on or before January 31, 2015 (promoted at least one day in January 2015). | [optional]
 **promotedto** | **string**| Request for offers where the offer’s promotion start date is before or on the provided date (in GMT). Accepts a date formatted by: yyyyMMdd e.g. 1, If promotedto&#x3D;20150131 is provided, this will return eligible offers where the promotion starts before or on January 31, 2015 e.g. 2, If promotedfrom&#x3D;20150101&amp;promotedto&#x3D;20150131, this will return eligible offers where the promotion ends on or after January 1, 2015 and start on or before January 31, 2015 (promoted at least one day in January 2015). | [optional]
 **updatefrom** | **string**| Request for offers where the provided date is before or on an offer’s last modified date/time (in GMT). Accepts a date formatted by: yyyyMMdd | [optional]
 **updateto** | **string**| Request for offers where the provided date is after or on an       offer’s last modified date/time (in GMT). Accepts a date     formatted by: yyyyMMdd | [optional]
 **featured** | **string**| Request for featured offers. Provide a boolean value. | [optional]
 **start_index** | **string**| A maximum of 500 offer results are returned in the offer response. The index indicates which offer within the sorted offer results to start returning in the offer response. Accepts an integer. Default set to 1 | [optional]
 **max_offers** | **string**| Optional. A maximum of 500 offer results are returned in the offer response. The index indicates the maximum number of offers to return in the response. Accepts an integer (greater than 0; less than or equal to 500). Default set to 500 | [optional]
 **bins** | **string**| Request for offers that fulfill one or more BIN options by inputting the exact desired bin value(s). Comma-delimit for multiple values | [optional]
 **rpins** | **string**| Request for offers that fulfill one or more RPIN options by inputting the exact desired rpin value(s). Comma-delimit for multiple values | [optional]
 **bins_to_rpins** | **string**| Request for offers that fulfill one or more BIN to RPIN pairing options by inputting the exact desired bin value, a tilde(\&quot;~\&quot;), and the exact rpin value. | [optional]
 **accountranges** | **string**| Request for offers that fulfill a specific Account Range by     providing either  a \&quot;from\&quot; prefix value OR a \&quot;to\&quot; prefix value OR a \&quot;from\&quot; and a \&quot;to\&quot; prefix values. Each provided prefix value   must be a minimum of 4 digits. Each account range request must contain a colon(\&quot;:\&quot;) to distinguish between the \&quot;from\&quot; and \&quot;to\&quot; values (even if only one boundary is provided). | [optional]
 **accountranges_to_rpins** | **string**| Request for offers that fulfill a specific Account Range to RPIN pairing by providing either a \&quot;from\&quot; prefix value ~ RPIN OR a \&quot;to\&quot; prefix value ~ RPIN OR a \&quot;from\&quot; and a \&quot;to\&quot; prefix values ~ RPIN. Each provided account range prefix value must be a minimum of 4 digits. Each account range portion of the request must contain a colon(\&quot;:\&quot;) to distinguish between the \&quot;from\&quot; and \&quot;to\&quot; values (even if only one boundary is provided). Use a tilde(\&quot;~\&quot;) to separate the account range from the exact desired rpin. | [optional]
 **pans** | **string**| Request for offers by PAN (must be a minimum of 16 digits). The provided PAN is padded-right with \&quot;0\&quot; to a length of 21 digits. The system returns the offers where the padded value is within the subset of at least one of the offer&#39;s account range assignments. | [optional]
 **non_card_attribute** | **string**| Request for offers that do not have assignments to card attribute fields. Provide a boolean value. Default sets value to \&quot;false\&quot;. | [optional]
 **origin** | **string**| Required for applying a geolocation filter. Input the origin by specifying the latitude, a comma (\&quot;,\&quot;), and the longitude. Coordinates must be inputted in decimal degree format. The accepted range for latitude is between -90 and 90, inclusive. The accepted range for longitude is between -180 and 180, inclusive. | [optional]
 **radius** | **string**| Optional for applying a geolocation filter.. A maximum radius of 1000 (kilometers) or 621.371 (miles) is accepted. Default sets to 60 miles (or 100 kilometers if the \&quot;unit\&quot; geolocation parameter has been set to \&quot;km\&quot;). | [optional]
 **unit** | **string**| Optional for applying a geolocation filter.. Indicate the distance unit of miles or kilometers. Default sets to miles. To use kilometers, specify \&quot;km\&quot;. | [optional]
 **non_geo** | **string**| Optional for applying a geolocation filter.. Request for offers that have not been assigned merchant addresses with geo-location(latitude/longitude) coordinates. At minimum, an origin must be also provided to call this flag. Accepts a boolean value - By default, the boolean value is set to false. | [optional]

### Return type

[**\vmorc_100\model\RetrieveOffersByFiltergetResponse**](../Model/RetrieveOffersByFiltergetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)

# **getretrieveOffersByOfferId**
> \vmorc_100\model\RetrieveOffersByOfferIdgetResponse getretrieveOffersByOfferId($offerid, $updatefrom, $updateto, $start_index, $max_offers)



Request for offers by an offer id

### Example
```php
<?php

require_once('./prod_18/vmorc_100/autoload.php');
use \vmorc_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Offers_data_apiApi
    $api_instance = new vmorc_100\Api\Offers_data_apiApi();

    // Set the required payload and parameters.
    $offerid = "offerid_example"; // string
    $updatefrom = "updatefrom_example"; // string
    $updateto = "updateto_example"; // string
    $start_index = "start_index_example"; // string
    $max_offers = "max_offers_example"; // string

    try {
    $result = $api_instance->getretrieveOffersByOfferId($offerid, $updatefrom, $updateto, $start_index, $max_offers);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Offers_data_apiApi->getretrieveOffersByOfferId: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerid** | **string**| Retrieve offers by their offer ids. Provide an offer id integer or a comma-delimited string of offer id integers |
 **updatefrom** | **string**| Request for offers that are updated after a specified date (in GMT). Accepts a date formatted by: yyyyMMdd | [optional]
 **updateto** | **string**| Request for offers that are updated before a specified date (in GMT). Accepts a date formatted by: yyyyMMdd | [optional]
 **start_index** | **string**| Optional. A maximum of 500 offer results are returned in the offer response. The index indicates which offer within the sorted offer results to start returning in the offer response. Accepts an integer. Default set to 1 | [optional]
 **max_offers** | **string**| Optional. A maximum of 500 offer results are returned in the offer response. The index indicates the maximum number of offers to return in the response. Accepts an integer (greater than 0; less than or equal to 500). Default set to 500 | [optional]

### Return type

[**\vmorc_100\model\RetrieveOffersByOfferIdgetResponse**](../Model/RetrieveOffersByOfferIdgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)   |   [Back to API list](../../README.md#documentation-for-api-endpoints)   |   [Back to Model list](../../README.md#documentation-for-models)   |   [Back to README](../../README.md)


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