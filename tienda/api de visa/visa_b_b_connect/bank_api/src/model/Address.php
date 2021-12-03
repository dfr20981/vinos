<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  vba_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bank API
 *
 * The VISA B2B Connect REST API allows developers to perform operations from a company or bank perspective. The VISA B2B Connect API allows you to create and update profiles or retreive information that is relevant to you.
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

namespace vba_101\model;

use \ArrayAccess;

/**
 * Address Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     vba_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'country_display_name' => 'string',
        'unit_no' => 'string',
        'zip_code' => 'string',
        'line1' => 'string',
        'country_iso_code' => 'int',
        'state' => 'string'
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
        'city' => 'city',
        'country_display_name' => 'countryDisplayName',
        'unit_no' => 'unitNo',
        'zip_code' => 'zipCode',
        'line1' => 'line1',
        'country_iso_code' => 'countryIsoCode',
        'state' => 'state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country_display_name' => 'setCountryDisplayName',
        'unit_no' => 'setUnitNo',
        'zip_code' => 'setZipCode',
        'line1' => 'setLine1',
        'country_iso_code' => 'setCountryIsoCode',
        'state' => 'setState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country_display_name' => 'getCountryDisplayName',
        'unit_no' => 'getUnitNo',
        'zip_code' => 'getZipCode',
        'line1' => 'getLine1',
        'country_iso_code' => 'getCountryIsoCode',
        'state' => 'getState'
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
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_display_name'] = isset($data['country_display_name']) ? $data['country_display_name'] : null;
        $this->container['unit_no'] = isset($data['unit_no']) ? $data['unit_no'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['line1'] = isset($data['line1']) ? $data['line1'] : null;
        $this->container['country_iso_code'] = isset($data['country_iso_code']) ? $data['country_iso_code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['country_display_name'] === null) {
            $invalid_properties[] = "'country_display_name' can't be null";
        }
        if ($this->container['unit_no'] === null) {
            $invalid_properties[] = "'unit_no' can't be null";
        }
        if ($this->container['zip_code'] === null) {
            $invalid_properties[] = "'zip_code' can't be null";
        }
        if ($this->container['line1'] === null) {
            $invalid_properties[] = "'line1' can't be null";
        }
        if ($this->container['country_iso_code'] === null) {
            $invalid_properties[] = "'country_iso_code' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
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

        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['country_display_name'] === null) {
            return false;
        }
        if ($this->container['unit_no'] === null) {
            return false;
        }
        if ($this->container['zip_code'] === null) {
            return false;
        }
        if ($this->container['line1'] === null) {
            return false;
        }
        if ($this->container['country_iso_code'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city 
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_display_name
     * @return string
     */
    public function getCountryDisplayName()
    {
        return $this->container['country_display_name'];
    }

    /**
     * Sets country_display_name
     * @param string $country_display_name 
     * @return $this
     */
    public function setCountryDisplayName($country_display_name)
    {
        $this->container['country_display_name'] = $country_display_name;

        return $this;
    }

    /**
     * Gets unit_no
     * @return string
     */
    public function getUnitNo()
    {
        return $this->container['unit_no'];
    }

    /**
     * Sets unit_no
     * @param string $unit_no 
     * @return $this
     */
    public function setUnitNo($unit_no)
    {
        $this->container['unit_no'] = $unit_no;

        return $this;
    }

    /**
     * Gets zip_code
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     * @param string $zip_code 
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets line1
     * @return string
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     * @param string $line1 The address except the unit number all on one line.
     * @return $this
     */
    public function setLine1($line1)
    {
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets country_iso_code
     * @return int
     */
    public function getCountryIsoCode()
    {
        return $this->container['country_iso_code'];
    }

    /**
     * Sets country_iso_code
     * @param int $country_iso_code 
     * @return $this
     */
    public function setCountryIsoCode($country_iso_code)
    {
        $this->container['country_iso_code'] = $country_iso_code;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state 
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
            return json_encode(\vba_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vba_101\ObjectSerializer::sanitizeForSerialization($this));
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