<?php
/**
 * FundstransferinquirypostResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  ca_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Funds Transfer Attributes Inquiry API
 *
 * The Funds Transfer Attributes Inquiry API is often used with a funds transfer to/from a Visa payment account to determine key characteristics of a recipient card before initiating the transfer like country, card-type, block status, etc.
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

namespace ca_100\model;

use \ArrayAccess;

/**
 * FundstransferinquirypostResponse Class Doc Comment
 *
 * @category    Class
 * @description Funds Transfer Inquiry Response
 * @package     ca_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FundstransferinquirypostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'fundstransferinquirypostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'visa_network_info' => '\ca_100\model\VisaNetworkInfo',
        'ppgs_network_info' => '\ca_100\model\PpgsNetworkInfo'
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
        'visa_network_info' => 'visaNetworkInfo',
        'ppgs_network_info' => 'ppgsNetworkInfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'visa_network_info' => 'setVisaNetworkInfo',
        'ppgs_network_info' => 'setPpgsNetworkInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'visa_network_info' => 'getVisaNetworkInfo',
        'ppgs_network_info' => 'getPpgsNetworkInfo'
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
        $this->container['visa_network_info'] = isset($data['visa_network_info']) ? $data['visa_network_info'] : null;
        $this->container['ppgs_network_info'] = isset($data['ppgs_network_info']) ? $data['ppgs_network_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['visa_network_info'] === null) {
            $invalid_properties[] = "'visa_network_info' can't be null";
        }
        if ($this->container['ppgs_network_info'] === null) {
            $invalid_properties[] = "'ppgs_network_info' can't be null";
        }
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

        if ($this->container['visa_network_info'] === null) {
            return false;
        }
        if ($this->container['ppgs_network_info'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets visa_network_info
     * @return \ca_100\model\VisaNetworkInfo
     */
    public function getVisaNetworkInfo()
    {
        return $this->container['visa_network_info'];
    }

    /**
     * Sets visa_network_info
     * @param \ca_100\model\VisaNetworkInfo $visa_network_info
     * @return $this
     */
    public function setVisaNetworkInfo($visa_network_info)
    {
        $this->container['visa_network_info'] = $visa_network_info;

        return $this;
    }

    /**
     * Gets ppgs_network_info
     * @return \ca_100\model\PpgsNetworkInfo
     */
    public function getPpgsNetworkInfo()
    {
        return $this->container['ppgs_network_info'];
    }

    /**
     * Sets ppgs_network_info
     * @param \ca_100\model\PpgsNetworkInfo $ppgs_network_info
     * @return $this
     */
    public function setPpgsNetworkInfo($ppgs_network_info)
    {
        $this->container['ppgs_network_info'] = $ppgs_network_info;

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
            return json_encode(\ca_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ca_100\ObjectSerializer::sanitizeForSerialization($this));
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