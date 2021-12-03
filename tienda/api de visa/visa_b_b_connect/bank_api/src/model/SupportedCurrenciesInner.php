<?php
/**
 * SupportedCurrenciesInner
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
 * SupportedCurrenciesInner Class Doc Comment
 *
 * @category    Class
 * @package     vba_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SupportedCurrenciesInner implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'supportedCurrencies_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_iso_code' => 'int',
        'default' => 'bool',
        'currency_alpha_code' => 'string'
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
        'currency_iso_code' => 'currencyIsoCode',
        'default' => 'default',
        'currency_alpha_code' => 'currencyAlphaCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'currency_iso_code' => 'setCurrencyIsoCode',
        'default' => 'setDefault',
        'currency_alpha_code' => 'setCurrencyAlphaCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'currency_iso_code' => 'getCurrencyIsoCode',
        'default' => 'getDefault',
        'currency_alpha_code' => 'getCurrencyAlphaCode'
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
        $this->container['currency_iso_code'] = isset($data['currency_iso_code']) ? $data['currency_iso_code'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['currency_alpha_code'] = isset($data['currency_alpha_code']) ? $data['currency_alpha_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['currency_iso_code'] === null) {
            $invalid_properties[] = "'currency_iso_code' can't be null";
        }
        if ($this->container['default'] === null) {
            $invalid_properties[] = "'default' can't be null";
        }
        if ($this->container['currency_alpha_code'] === null) {
            $invalid_properties[] = "'currency_alpha_code' can't be null";
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

        if ($this->container['currency_iso_code'] === null) {
            return false;
        }
        if ($this->container['default'] === null) {
            return false;
        }
        if ($this->container['currency_alpha_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets currency_iso_code
     * @return int
     */
    public function getCurrencyIsoCode()
    {
        return $this->container['currency_iso_code'];
    }

    /**
     * Sets currency_iso_code
     * @param int $currency_iso_code 
     * @return $this
     */
    public function setCurrencyIsoCode($currency_iso_code)
    {
        $this->container['currency_iso_code'] = $currency_iso_code;

        return $this;
    }

    /**
     * Gets default
     * @return bool
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param bool $default 
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets currency_alpha_code
     * @return string
     */
    public function getCurrencyAlphaCode()
    {
        return $this->container['currency_alpha_code'];
    }

    /**
     * Sets currency_alpha_code
     * @param string $currency_alpha_code 
     * @return $this
     */
    public function setCurrencyAlphaCode($currency_alpha_code)
    {
        $this->container['currency_alpha_code'] = $currency_alpha_code;

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