<?php
/**
 * CardVerificationpostPayload
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
 * CardVerificationpostPayload Class Doc Comment
 *
 * @category    Class
 * @description Verification Code
 * @package     dcas_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CardVerificationpostPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'cardVerificationpostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\dcas_101\model\Address',
        'expiration_date' => '\dcas_101\model\ExpirationDate',
        'cvv2' => 'string'
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
        'address' => 'address',
        'expiration_date' => 'expirationDate',
        'cvv2' => 'cvv2'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'expiration_date' => 'setExpirationDate',
        'cvv2' => 'setCvv2'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'expiration_date' => 'getExpirationDate',
        'cvv2' => 'getCvv2'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['cvv2'] = isset($data['cvv2']) ? $data['cvv2'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['address'] === null) {
            $invalid_properties[] = "'address' can't be null";
        }
        if ($this->container['expiration_date'] === null) {
            $invalid_properties[] = "'expiration_date' can't be null";
        }
        if ($this->container['cvv2'] === null) {
            $invalid_properties[] = "'cvv2' can't be null";
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

        if ($this->container['address'] === null) {
            return false;
        }
        if ($this->container['expiration_date'] === null) {
            return false;
        }
        if ($this->container['cvv2'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets address
     * @return \dcas_101\model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \dcas_101\model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets expiration_date
     * @return \dcas_101\model\ExpirationDate
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     * @param \dcas_101\model\ExpirationDate $expiration_date
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets cvv2
     * @return string
     */
    public function getCvv2()
    {
        return $this->container['cvv2'];
    }

    /**
     * Sets cvv2
     * @param string $cvv2 The cardholder cvv2 value.
     * @return $this
     */
    public function setCvv2($cvv2)
    {
        $this->container['cvv2'] = $cvv2;

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