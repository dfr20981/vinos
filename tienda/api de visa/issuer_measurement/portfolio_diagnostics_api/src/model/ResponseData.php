<?php
/**
 * ResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  im_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Portfolio Diagnostics API
 *
 * Deliver Visa’s data insights and other key analytics to our clients through the Visa Developer Platform
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

namespace im_100\model;

use \ArrayAccess;

/**
 * ResponseData Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     im_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ResponseData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'responseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_volume_yo_y_growth' => 'string',
        'purchase_volume' => 'string',
        'payment_volume' => 'string',
        'active_cards_yo_y_growth' => 'string',
        'purchase_volume_market_share' => 'string',
        'active_cards_market_share' => 'string',
        'active_cards' => 'string',
        'payment_volume_market_share' => 'string',
        'purchase_volume_yo_y_growth' => 'string'
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
        'payment_volume_yo_y_growth' => 'paymentVolumeYoYGrowth',
        'purchase_volume' => 'purchaseVolume',
        'payment_volume' => 'paymentVolume',
        'active_cards_yo_y_growth' => 'activeCardsYoYGrowth',
        'purchase_volume_market_share' => 'purchaseVolumeMarketShare',
        'active_cards_market_share' => 'activeCardsMarketShare',
        'active_cards' => 'activeCards',
        'payment_volume_market_share' => 'paymentVolumeMarketShare',
        'purchase_volume_yo_y_growth' => 'purchaseVolumeYoYGrowth'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'payment_volume_yo_y_growth' => 'setPaymentVolumeYoYGrowth',
        'purchase_volume' => 'setPurchaseVolume',
        'payment_volume' => 'setPaymentVolume',
        'active_cards_yo_y_growth' => 'setActiveCardsYoYGrowth',
        'purchase_volume_market_share' => 'setPurchaseVolumeMarketShare',
        'active_cards_market_share' => 'setActiveCardsMarketShare',
        'active_cards' => 'setActiveCards',
        'payment_volume_market_share' => 'setPaymentVolumeMarketShare',
        'purchase_volume_yo_y_growth' => 'setPurchaseVolumeYoYGrowth'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'payment_volume_yo_y_growth' => 'getPaymentVolumeYoYGrowth',
        'purchase_volume' => 'getPurchaseVolume',
        'payment_volume' => 'getPaymentVolume',
        'active_cards_yo_y_growth' => 'getActiveCardsYoYGrowth',
        'purchase_volume_market_share' => 'getPurchaseVolumeMarketShare',
        'active_cards_market_share' => 'getActiveCardsMarketShare',
        'active_cards' => 'getActiveCards',
        'payment_volume_market_share' => 'getPaymentVolumeMarketShare',
        'purchase_volume_yo_y_growth' => 'getPurchaseVolumeYoYGrowth'
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
        $this->container['payment_volume_yo_y_growth'] = isset($data['payment_volume_yo_y_growth']) ? $data['payment_volume_yo_y_growth'] : null;
        $this->container['purchase_volume'] = isset($data['purchase_volume']) ? $data['purchase_volume'] : null;
        $this->container['payment_volume'] = isset($data['payment_volume']) ? $data['payment_volume'] : null;
        $this->container['active_cards_yo_y_growth'] = isset($data['active_cards_yo_y_growth']) ? $data['active_cards_yo_y_growth'] : null;
        $this->container['purchase_volume_market_share'] = isset($data['purchase_volume_market_share']) ? $data['purchase_volume_market_share'] : null;
        $this->container['active_cards_market_share'] = isset($data['active_cards_market_share']) ? $data['active_cards_market_share'] : null;
        $this->container['active_cards'] = isset($data['active_cards']) ? $data['active_cards'] : null;
        $this->container['payment_volume_market_share'] = isset($data['payment_volume_market_share']) ? $data['payment_volume_market_share'] : null;
        $this->container['purchase_volume_yo_y_growth'] = isset($data['purchase_volume_yo_y_growth']) ? $data['purchase_volume_yo_y_growth'] : null;
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
     * Gets payment_volume_yo_y_growth
     * @return string
     */
    public function getPaymentVolumeYoYGrowth()
    {
        return $this->container['payment_volume_yo_y_growth'];
    }

    /**
     * Sets payment_volume_yo_y_growth
     * @param string $payment_volume_yo_y_growth Payment VolumeYoY Growth ratio
     * @return $this
     */
    public function setPaymentVolumeYoYGrowth($payment_volume_yo_y_growth)
    {
        $this->container['payment_volume_yo_y_growth'] = $payment_volume_yo_y_growth;

        return $this;
    }

    /**
     * Gets purchase_volume
     * @return string
     */
    public function getPurchaseVolume()
    {
        return $this->container['purchase_volume'];
    }

    /**
     * Sets purchase_volume
     * @param string $purchase_volume Purchase Volume ratio
     * @return $this
     */
    public function setPurchaseVolume($purchase_volume)
    {
        $this->container['purchase_volume'] = $purchase_volume;

        return $this;
    }

    /**
     * Gets payment_volume
     * @return string
     */
    public function getPaymentVolume()
    {
        return $this->container['payment_volume'];
    }

    /**
     * Sets payment_volume
     * @param string $payment_volume Payment Volume ratio
     * @return $this
     */
    public function setPaymentVolume($payment_volume)
    {
        $this->container['payment_volume'] = $payment_volume;

        return $this;
    }

    /**
     * Gets active_cards_yo_y_growth
     * @return string
     */
    public function getActiveCardsYoYGrowth()
    {
        return $this->container['active_cards_yo_y_growth'];
    }

    /**
     * Sets active_cards_yo_y_growth
     * @param string $active_cards_yo_y_growth Active Cards YoYGrowth ratio
     * @return $this
     */
    public function setActiveCardsYoYGrowth($active_cards_yo_y_growth)
    {
        $this->container['active_cards_yo_y_growth'] = $active_cards_yo_y_growth;

        return $this;
    }

    /**
     * Gets purchase_volume_market_share
     * @return string
     */
    public function getPurchaseVolumeMarketShare()
    {
        return $this->container['purchase_volume_market_share'];
    }

    /**
     * Sets purchase_volume_market_share
     * @param string $purchase_volume_market_share Purchase Volume MarketShare ratio
     * @return $this
     */
    public function setPurchaseVolumeMarketShare($purchase_volume_market_share)
    {
        $this->container['purchase_volume_market_share'] = $purchase_volume_market_share;

        return $this;
    }

    /**
     * Gets active_cards_market_share
     * @return string
     */
    public function getActiveCardsMarketShare()
    {
        return $this->container['active_cards_market_share'];
    }

    /**
     * Sets active_cards_market_share
     * @param string $active_cards_market_share Active Cards Market Share ratio
     * @return $this
     */
    public function setActiveCardsMarketShare($active_cards_market_share)
    {
        $this->container['active_cards_market_share'] = $active_cards_market_share;

        return $this;
    }

    /**
     * Gets active_cards
     * @return string
     */
    public function getActiveCards()
    {
        return $this->container['active_cards'];
    }

    /**
     * Sets active_cards
     * @param string $active_cards Active Cards ratio
     * @return $this
     */
    public function setActiveCards($active_cards)
    {
        $this->container['active_cards'] = $active_cards;

        return $this;
    }

    /**
     * Gets payment_volume_market_share
     * @return string
     */
    public function getPaymentVolumeMarketShare()
    {
        return $this->container['payment_volume_market_share'];
    }

    /**
     * Sets payment_volume_market_share
     * @param string $payment_volume_market_share Payment Volume MarketShare ration
     * @return $this
     */
    public function setPaymentVolumeMarketShare($payment_volume_market_share)
    {
        $this->container['payment_volume_market_share'] = $payment_volume_market_share;

        return $this;
    }

    /**
     * Gets purchase_volume_yo_y_growth
     * @return string
     */
    public function getPurchaseVolumeYoYGrowth()
    {
        return $this->container['purchase_volume_yo_y_growth'];
    }

    /**
     * Sets purchase_volume_yo_y_growth
     * @param string $purchase_volume_yo_y_growth Purchase Volume YoYGrowth ratio
     * @return $this
     */
    public function setPurchaseVolumeYoYGrowth($purchase_volume_yo_y_growth)
    {
        $this->container['purchase_volume_yo_y_growth'] = $purchase_volume_yo_y_growth;

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
            return json_encode(\im_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\im_100\ObjectSerializer::sanitizeForSerialization($this));
    }
}

/**
* ----------------------------------------------------------------------------------------------------------------------
*
* © Copyright 2018 Visa. All Rights Reserved.
*
* NOTICE: The software and accompanying information and documentation (together, the “Software”) remain the property of
* and are proprietary to Visa and its suppliers and affiliates. The Software remains protected by intellectual property
* rights and may be covered by U.S. and foreign patents or patent applications. The Software is licensed and not sold.
*
* By accessing the Software you are agreeing to Visa's terms of use (developer.visa.com/terms) and privacy policy
* (developer.visa.com/privacy). In addition, all permissible uses of the Software must be in support of Visa products,
* programs and services provided through the Visa Developer Program (VDP) platform only (developer.visa.com).
* THE SOFTWARE AND ANY ASSOCIATED INFORMATION OR DOCUMENTATION IS PROVIDED ON AN “AS IS,” “AS AVAILABLE,” “WITH ALL
* FAULTS” BASIS WITHOUT WARRANTY OR CONDITION OF ANY KIND. YOUR USE IS AT YOUR OWN RISK.
* ----------------------------------------------------------------------------------------------------------------------
*/