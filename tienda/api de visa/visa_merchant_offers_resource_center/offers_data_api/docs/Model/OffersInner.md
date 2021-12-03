# OffersInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_offer_event** | **bool** | the indicator to specify that the offer is an event | [optional] 
**merchant_terms** | [**\vmorc_100\model\MerchantTerms**](MerchantTerms.md) |  | [optional] 
**program_name** | **string** | the name of the program. Max length: 500 characters. | [optional] 
**barcode** | [**\vmorc_100\model\Barcode**](Barcode.md) |  | [optional] 
**promoting_countries** | [**\vmorc_100\model\PromotingCountries**](PromotingCountries.md) |  | [optional] 
**offer_metadata** | [**\vmorc_100\model\OfferMetadata**](OfferMetadata.md) |  | [optional] 
**offer_source_contact** | **string** | the source agency contact asssociated with the offer. Max length: 100 characters | [optional] 
**offer_id** | **int** | an identifier for the offer and any translations it may have | [optional] 
**redemption_url** | **string** | the redemption URL of the offer. May return an empty String. Max length: 2048 characters | [optional] 
**creative_guidelines** | **string** | the creative guidelines of the offer. May return an empty String. Max length: 2GB | [optional] 
**offer_type** | [**\vmorc_100\model\OfferType**](OfferType.md) |  | [optional] 
**offer_source** | **string** | the source agency asssociated with the offer. Max length: 200 characters | [optional] 
**featured_offer_indicator** | **bool** | indicator whether the offer is featured | [optional] 
**sup_data4** | [**\vmorc_100\model\SupData4**](SupData4.md) |  | [optional] 
**redemption_countries** | [**\vmorc_100\model\RedemptionCountries**](RedemptionCountries.md) |  | [optional] 
**merchant_list** | [**\vmorc_100\model\MerchantList**](MerchantList.md) |  | [optional] 
**redemption_email** | **string** | the redemption Email of the offer. May return an empty String. Max length: 2048 characters | [optional] 
**sup_data2** | [**\vmorc_100\model\SupData2**](SupData2.md) |  | [optional] 
**sup_data3** | [**\vmorc_100\model\SupData3**](SupData3.md) |  | [optional] 
**offer_content_id** | **int** | a unique identifier for the offer for the specific version and specified language | [optional] 
**last_modified_date_time** | **string** | the date and time the offer was last updated. Formatted as : DayOfWeek, DD Mon YYYY HH:MM:SS GMT | [optional] 
**promotion_restictions** | [**\vmorc_100\model\PromotionRestictions**](PromotionRestictions.md) |  | [optional] 
**language_id** | **int** | the identifier for the language of the offer | [optional] 
**redemption_format_instructions** | **string** | the format instructions for redemption of offer. May return an empty String. Max length: 2048 characters | [optional] 
**offer_title** | **string** | the title of the offer. Max length: 1000 characters | [optional] 
**promotion_to_date** | **string** | the end of the promotion date range (in GMT). Formatted as: Mon DD, YYYY | [optional] 
**promotion_from_date** | **string** | the start of the promotion date range (in GMT). Formatted as: Mon DD, YYYY | [optional] 
**f_a_qs** | [**\vmorc_100\model\FAQs**](FAQs.md) |  | [optional] 
**sup_data1** | [**\vmorc_100\model\SupData1**](SupData1.md) |  | [optional] 
**current_version** | **int** | the version of the offer | [optional] 
**qr_code** | [**\vmorc_100\model\QrCode**](QrCode.md) |  | [optional] 
**creative_approvals_email** | **string** | the email of the creative approval of the offer. May return an empty String. Max length: 200 characters | [optional] 
**image_list** | [**\vmorc_100\model\ImageList**](ImageList.md) |  | [optional] 
**business_segment_list** | [**\vmorc_100\model\BusinessSegmentList**](BusinessSegmentList.md) |  | [optional] 
**category_subcategory_list** | [**\vmorc_100\model\CategorySubcategoryList**](CategorySubcategoryList.md) |  | [optional] 
**validity_to_date** | **string** | the end of the validity date range (in GMT). Formatted as: Mon DD, YYYY | [optional] 
**offer_copy** | [**\vmorc_100\model\OfferCopy**](OfferCopy.md) |  | [optional] 
**visa_terms** | [**\vmorc_100\model\VisaTerms**](VisaTerms.md) |  | [optional] 
**offer_status** | **string** | the status of the offer | [optional] 
**index_number** | **int** | an integer identifier to signify the result index for the offer (specific to the request) | [optional] 
**event_sub_title** | **string** | the event sub title. Returns an empty String if the offer is not an event. Field is optional for events | [optional] 
**offer_short_description** | [**\vmorc_100\model\OfferShortDescription**](OfferShortDescription.md) |  | [optional] 
**date_locations** | [**\vmorc_100\model\DateLocations**](DateLocations.md) |  | [optional] 
**redemption_code** | **string** | the redemption code of the offer. May return an empty String. Max length: 1024 characters | [optional] 
**program_id** | **int** | the identifier for the program | [optional] 
**card_payment_type** | [**\vmorc_100\model\CardPaymentType**](CardPaymentType.md) |  | [optional] 
**card_product_list** | [**\vmorc_100\model\CardProductList**](CardProductList.md) |  | [optional] 
**accountrangestorpins** | [**\vmorc_100\model\Accountrangestorpins**](Accountrangestorpins.md) |  | [optional] 
**validity_from_date** | **string** | the start of the validity date range (in GMT). Formatted as: Mon DD, YYYY | [optional] 
**rpins** | [**\vmorc_100\model\Rpins**](Rpins.md) |  | [optional] 
**redemption_channel_list** | [**\vmorc_100\model\RedemptionChannelList**](RedemptionChannelList.md) |  | [optional] 
**active_indicator** | **bool** | indicator whether offer is active | [optional] 
**social_media_sharing_types** | [**\vmorc_100\model\SocialMediaSharingTypes**](SocialMediaSharingTypes.md) |  | [optional] 
**promotion_channel_list** | [**\vmorc_100\model\PromotionChannelList**](PromotionChannelList.md) |  | [optional] 
**accountranges** | [**\vmorc_100\model\Accountranges**](Accountranges.md) |  | [optional] 
**share_title** | **string** | the social media sharing title. Returns an empty String if the offer does not have social media sharing types. | [optional] 
**redemption_telephone** | [**\vmorc_100\model\RedemptionTelephone**](RedemptionTelephone.md) |  | [optional] 
**language** | **string** | the name of the language. Max length: 100 characters | [optional] 
**binstorpins** | [**\vmorc_100\model\Binstorpins**](Binstorpins.md) |  | [optional] 
**legal_country_exclusions** | [**\vmorc_100\model\LegalCountryExclusions**](LegalCountryExclusions.md) |  | [optional] 
**sold_out** | **bool** | indicator whether offer is sold out | [optional] 
**bins** | [**\vmorc_100\model\Bins**](Bins.md) |  | [optional] 

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