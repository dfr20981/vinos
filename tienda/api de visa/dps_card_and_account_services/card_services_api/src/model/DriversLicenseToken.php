<?php
/**
 * DriversLicenseToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  dcas_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Card Services API
 *
 * Manage cardholder’s card and account information, notification settings, and balance information.
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

namespace dcas_101\model;

use \ArrayAccess;

/**
 * DriversLicenseToken Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     dcas_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DriversLicenseToken implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'driversLicenseToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'driving_license_number' => 'string',
        'is_token_present' => 'bool',
        'state_code' => 'string',
        'country_code' => 'string'
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
        'driving_license_number' => 'drivingLicenseNumber',
        'is_token_present' => 'isTokenPresent',
        'state_code' => 'stateCode',
        'country_code' => 'countryCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'driving_license_number' => 'setDrivingLicenseNumber',
        'is_token_present' => 'setIsTokenPresent',
        'state_code' => 'setStateCode',
        'country_code' => 'setCountryCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'driving_license_number' => 'getDrivingLicenseNumber',
        'is_token_present' => 'getIsTokenPresent',
        'state_code' => 'getStateCode',
        'country_code' => 'getCountryCode'
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
        $this->container['driving_license_number'] = isset($data['driving_license_number']) ? $data['driving_license_number'] : null;
        $this->container['is_token_present'] = isset($data['is_token_present']) ? $data['is_token_present'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
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
     * Gets driving_license_number
     * @return string
     */
    public function getDrivingLicenseNumber()
    {
        return $this->container['driving_license_number'];
    }

    /**
     * Sets driving_license_number
     * @param string $driving_license_number 
     * @return $this
     */
    public function setDrivingLicenseNumber($driving_license_number)
    {
        $this->container['driving_license_number'] = $driving_license_number;

        return $this;
    }

    /**
     * Gets is_token_present
     * @return bool
     */
    public function getIsTokenPresent()
    {
        return $this->container['is_token_present'];
    }

    /**
     * Sets is_token_present
     * @param bool $is_token_present 
     * @return $this
     */
    public function setIsTokenPresent($is_token_present)
    {
        $this->container['is_token_present'] = $is_token_present;

        return $this;
    }

    /**
     * Gets state_code
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     * @param string $state_code 
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code 
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

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
            return json_encode(\dcas_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\dcas_101\ObjectSerializer::sanitizeForSerialization($this));
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