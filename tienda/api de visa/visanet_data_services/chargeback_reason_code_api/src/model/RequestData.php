<?php
/**
 * RequestData
 *
 * PHP version 5
 *
 * @category Class
 * @package  vnds_104
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Chargeback Reason Code API
 *
 * look up for requested chargeback Reason information
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

namespace vnds_104\model;

use \ArrayAccess;

/**
 * RequestData Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     vnds_104
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RequestData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'requestData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'partial_lookup' => 'string',
        'chargeback_reason_code' => 'string',
        'chargeback_reason_name' => 'string'
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
        'partial_lookup' => 'partialLookup',
        'chargeback_reason_code' => 'chargebackReasonCode',
        'chargeback_reason_name' => 'chargebackReasonName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'partial_lookup' => 'setPartialLookup',
        'chargeback_reason_code' => 'setChargebackReasonCode',
        'chargeback_reason_name' => 'setChargebackReasonName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'partial_lookup' => 'getPartialLookup',
        'chargeback_reason_code' => 'getChargebackReasonCode',
        'chargeback_reason_name' => 'getChargebackReasonName'
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
        $this->container['partial_lookup'] = isset($data['partial_lookup']) ? $data['partial_lookup'] : null;
        $this->container['chargeback_reason_code'] = isset($data['chargeback_reason_code']) ? $data['chargeback_reason_code'] : null;
        $this->container['chargeback_reason_name'] = isset($data['chargeback_reason_name']) ? $data['chargeback_reason_name'] : null;
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
     * Gets partial_lookup
     * @return string
     */
    public function getPartialLookup()
    {
        return $this->container['partial_lookup'];
    }

    /**
     * Sets partial_lookup
     * @param string $partial_lookup parameter to decide for partial look up or full download
     * @return $this
     */
    public function setPartialLookup($partial_lookup)
    {
        $this->container['partial_lookup'] = $partial_lookup;

        return $this;
    }

    /**
     * Gets chargeback_reason_code
     * @return string
     */
    public function getChargebackReasonCode()
    {
        return $this->container['chargeback_reason_code'];
    }

    /**
     * Sets chargeback_reason_code
     * @param string $chargeback_reason_code valid Chargeback Reason Code.
     * @return $this
     */
    public function setChargebackReasonCode($chargeback_reason_code)
    {
        $this->container['chargeback_reason_code'] = $chargeback_reason_code;

        return $this;
    }

    /**
     * Gets chargeback_reason_name
     * @return string
     */
    public function getChargebackReasonName()
    {
        return $this->container['chargeback_reason_name'];
    }

    /**
     * Sets chargeback_reason_name
     * @param string $chargeback_reason_name valid Chargeback Reason Name.
     * @return $this
     */
    public function setChargebackReasonName($chargeback_reason_name)
    {
        $this->container['chargeback_reason_name'] = $chargeback_reason_name;

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
            return json_encode(\vnds_104\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vnds_104\ObjectSerializer::sanitizeForSerialization($this));
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