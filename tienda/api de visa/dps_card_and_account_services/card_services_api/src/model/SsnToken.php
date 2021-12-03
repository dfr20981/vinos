<?php
/**
 * SsnToken
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
 * SsnToken Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     dcas_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SsnToken implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ssnToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_token_present' => 'bool',
        'ssn' => 'string',
        'is_last_four_only' => 'bool'
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
        'is_token_present' => 'isTokenPresent',
        'ssn' => 'ssn',
        'is_last_four_only' => 'isLastFourOnly'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'is_token_present' => 'setIsTokenPresent',
        'ssn' => 'setSsn',
        'is_last_four_only' => 'setIsLastFourOnly'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'is_token_present' => 'getIsTokenPresent',
        'ssn' => 'getSsn',
        'is_last_four_only' => 'getIsLastFourOnly'
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
        $this->container['is_token_present'] = isset($data['is_token_present']) ? $data['is_token_present'] : null;
        $this->container['ssn'] = isset($data['ssn']) ? $data['ssn'] : null;
        $this->container['is_last_four_only'] = isset($data['is_last_four_only']) ? $data['is_last_four_only'] : null;
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
     * Gets ssn
     * @return string
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     * @param string $ssn 
     * @return $this
     */
    public function setSsn($ssn)
    {
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets is_last_four_only
     * @return bool
     */
    public function getIsLastFourOnly()
    {
        return $this->container['is_last_four_only'];
    }

    /**
     * Sets is_last_four_only
     * @param bool $is_last_four_only 
     * @return $this
     */
    public function setIsLastFourOnly($is_last_four_only)
    {
        $this->container['is_last_four_only'] = $is_last_four_only;

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