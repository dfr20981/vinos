<?php
/**
 * RetrieveDataByReferencegetResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  vmorc_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reference Data API
 *
 * The Reference Data API provides developers the set of available reference data from VMORC. Use the &quot;key&quot; information of each reference data option to conduct filtered offer requests.
 *
 * OpenAPI spec version: v1
 * Contact: 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace vmorc_101\model;

use \ArrayAccess;

/**
 * RetrieveDataByReferencegetResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     vmorc_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RetrieveDataByReferencegetResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'retrieveDataByReferencegetResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_payment_type' => '\vmorc_101\model\CardPaymentType',
        'redemption_countries' => '\vmorc_101\model\RedemptionCountries',
        'language' => '\vmorc_101\model\Language',
        'redemption_channel' => '\vmorc_101\model\RedemptionChannel',
        'promotion_countries' => '\vmorc_101\model\PromotionCountries',
        'category_subcategory' => '\vmorc_101\model\CategorySubcategory',
        'business_segment' => '\vmorc_101\model\BusinessSegment',
        'card_product' => '\vmorc_101\model\CardProduct',
        'program' => '\vmorc_101\model\Program',
        'promotion_channel' => '\vmorc_101\model\PromotionChannel',
        'region_country' => '\vmorc_101\model\RegionCountry'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'card_payment_type' => 'card_payment_type',
        'redemption_countries' => 'redemption_countries',
        'language' => 'language',
        'redemption_channel' => 'redemption_channel',
        'promotion_countries' => 'promotion_countries',
        'category_subcategory' => 'category_subcategory',
        'business_segment' => 'business_segment',
        'card_product' => 'card_product',
        'program' => 'program',
        'promotion_channel' => 'promotion_channel',
        'region_country' => 'region_country'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'card_payment_type' => 'setCardPaymentType',
        'redemption_countries' => 'setRedemptionCountries',
        'language' => 'setLanguage',
        'redemption_channel' => 'setRedemptionChannel',
        'promotion_countries' => 'setPromotionCountries',
        'category_subcategory' => 'setCategorySubcategory',
        'business_segment' => 'setBusinessSegment',
        'card_product' => 'setCardProduct',
        'program' => 'setProgram',
        'promotion_channel' => 'setPromotionChannel',
        'region_country' => 'setRegionCountry'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'card_payment_type' => 'getCardPaymentType',
        'redemption_countries' => 'getRedemptionCountries',
        'language' => 'getLanguage',
        'redemption_channel' => 'getRedemptionChannel',
        'promotion_countries' => 'getPromotionCountries',
        'category_subcategory' => 'getCategorySubcategory',
        'business_segment' => 'getBusinessSegment',
        'card_product' => 'getCardProduct',
        'program' => 'getProgram',
        'promotion_channel' => 'getPromotionChannel',
        'region_country' => 'getRegionCountry'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['card_payment_type'] = isset($data['card_payment_type']) ? $data['card_payment_type'] : null;
        $this->container['redemption_countries'] = isset($data['redemption_countries']) ? $data['redemption_countries'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['redemption_channel'] = isset($data['redemption_channel']) ? $data['redemption_channel'] : null;
        $this->container['promotion_countries'] = isset($data['promotion_countries']) ? $data['promotion_countries'] : null;
        $this->container['category_subcategory'] = isset($data['category_subcategory']) ? $data['category_subcategory'] : null;
        $this->container['business_segment'] = isset($data['business_segment']) ? $data['business_segment'] : null;
        $this->container['card_product'] = isset($data['card_product']) ? $data['card_product'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['promotion_channel'] = isset($data['promotion_channel']) ? $data['promotion_channel'] : null;
        $this->container['region_country'] = isset($data['region_country']) ? $data['region_country'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets card_payment_type
     * @return \vmorc_101\model\CardPaymentType
     */
    public function getCardPaymentType()
    {
        return $this->container['card_payment_type'];
    }

    /**
     * Sets card_payment_type
     * @param \vmorc_101\model\CardPaymentType $card_payment_type
     * @return $this
     */
    public function setCardPaymentType($card_payment_type)
    {
        $this->container['card_payment_type'] = $card_payment_type;

        return $this;
    }

    /**
     * Gets redemption_countries
     * @return \vmorc_101\model\RedemptionCountries
     */
    public function getRedemptionCountries()
    {
        return $this->container['redemption_countries'];
    }

    /**
     * Sets redemption_countries
     * @param \vmorc_101\model\RedemptionCountries $redemption_countries
     * @return $this
     */
    public function setRedemptionCountries($redemption_countries)
    {
        $this->container['redemption_countries'] = $redemption_countries;

        return $this;
    }

    /**
     * Gets language
     * @return \vmorc_101\model\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param \vmorc_101\model\Language $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets redemption_channel
     * @return \vmorc_101\model\RedemptionChannel
     */
    public function getRedemptionChannel()
    {
        return $this->container['redemption_channel'];
    }

    /**
     * Sets redemption_channel
     * @param \vmorc_101\model\RedemptionChannel $redemption_channel
     * @return $this
     */
    public function setRedemptionChannel($redemption_channel)
    {
        $this->container['redemption_channel'] = $redemption_channel;

        return $this;
    }

    /**
     * Gets promotion_countries
     * @return \vmorc_101\model\PromotionCountries
     */
    public function getPromotionCountries()
    {
        return $this->container['promotion_countries'];
    }

    /**
     * Sets promotion_countries
     * @param \vmorc_101\model\PromotionCountries $promotion_countries
     * @return $this
     */
    public function setPromotionCountries($promotion_countries)
    {
        $this->container['promotion_countries'] = $promotion_countries;

        return $this;
    }

    /**
     * Gets category_subcategory
     * @return \vmorc_101\model\CategorySubcategory
     */
    public function getCategorySubcategory()
    {
        return $this->container['category_subcategory'];
    }

    /**
     * Sets category_subcategory
     * @param \vmorc_101\model\CategorySubcategory $category_subcategory
     * @return $this
     */
    public function setCategorySubcategory($category_subcategory)
    {
        $this->container['category_subcategory'] = $category_subcategory;

        return $this;
    }

    /**
     * Gets business_segment
     * @return \vmorc_101\model\BusinessSegment
     */
    public function getBusinessSegment()
    {
        return $this->container['business_segment'];
    }

    /**
     * Sets business_segment
     * @param \vmorc_101\model\BusinessSegment $business_segment
     * @return $this
     */
    public function setBusinessSegment($business_segment)
    {
        $this->container['business_segment'] = $business_segment;

        return $this;
    }

    /**
     * Gets card_product
     * @return \vmorc_101\model\CardProduct
     */
    public function getCardProduct()
    {
        return $this->container['card_product'];
    }

    /**
     * Sets card_product
     * @param \vmorc_101\model\CardProduct $card_product
     * @return $this
     */
    public function setCardProduct($card_product)
    {
        $this->container['card_product'] = $card_product;

        return $this;
    }

    /**
     * Gets program
     * @return \vmorc_101\model\Program
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     * @param \vmorc_101\model\Program $program
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets promotion_channel
     * @return \vmorc_101\model\PromotionChannel
     */
    public function getPromotionChannel()
    {
        return $this->container['promotion_channel'];
    }

    /**
     * Sets promotion_channel
     * @param \vmorc_101\model\PromotionChannel $promotion_channel
     * @return $this
     */
    public function setPromotionChannel($promotion_channel)
    {
        $this->container['promotion_channel'] = $promotion_channel;

        return $this;
    }

    /**
     * Gets region_country
     * @return \vmorc_101\model\RegionCountry
     */
    public function getRegionCountry()
    {
        return $this->container['region_country'];
    }

    /**
     * Sets region_country
     * @param \vmorc_101\model\RegionCountry $region_country
     * @return $this
     */
    public function setRegionCountry($region_country)
    {
        $this->container['region_country'] = $region_country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\vmorc_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vmorc_101\ObjectSerializer::sanitizeForSerialization($this));
    }
}

/**
* ----------------------------------------------------------------------------------------------------------------------
*
* ?? Copyright 2018 Visa. All Rights Reserved.
*
* NOTICE: The software and accompanying information and documentation (together, the ???Software???) remain the property of
* and are proprietary to Visa and its suppliers and affiliates. The Software remains protected by intellectual property
* rights and may be covered by U.S. and foreign patents or patent applications. The Software is licensed and not sold.
*
* By accessing the Software you are agreeing to Visa's terms of use (developer.visa.com/terms) and privacy policy
* (developer.visa.com/privacy). In addition, all permissible uses of the Software must be in support of Visa products,
* programs and services provided through the Visa Developer Program (VDP) platform only (developer.visa.com).
* THE SOFTWARE AND ANY ASSOCIATED INFORMATION OR DOCUMENTATION IS PROVIDED ON AN ???AS IS,??? ???AS AVAILABLE,??? ???WITH ALL
* FAULTS??? BASIS WITHOUT WARRANTY OR CONDITION OF ANY KIND. YOUR USE IS AT YOUR OWN RISK.
* ----------------------------------------------------------------------------------------------------------------------
*/