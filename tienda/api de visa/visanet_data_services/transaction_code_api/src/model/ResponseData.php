<?php
/**
 * ResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  vnds_103
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transaction Code API
 *
 * look up for requested transaction Code information
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

namespace vnds_103\model;

use \ArrayAccess;

/**
 * ResponseData Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     vnds_103
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
        'transaction_code' => 'string',
        'transaction_group_code' => 'string',
        'transaction_group_name' => 'string',
        'transaction_name' => 'string'
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
        'transaction_code' => 'transactionCode',
        'transaction_group_code' => 'transactionGroupCode',
        'transaction_group_name' => 'transactionGroupName',
        'transaction_name' => 'transactionName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'transaction_code' => 'setTransactionCode',
        'transaction_group_code' => 'setTransactionGroupCode',
        'transaction_group_name' => 'setTransactionGroupName',
        'transaction_name' => 'setTransactionName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'transaction_code' => 'getTransactionCode',
        'transaction_group_code' => 'getTransactionGroupCode',
        'transaction_group_name' => 'getTransactionGroupName',
        'transaction_name' => 'getTransactionName'
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
        $this->container['transaction_code'] = isset($data['transaction_code']) ? $data['transaction_code'] : null;
        $this->container['transaction_group_code'] = isset($data['transaction_group_code']) ? $data['transaction_group_code'] : null;
        $this->container['transaction_group_name'] = isset($data['transaction_group_name']) ? $data['transaction_group_name'] : null;
        $this->container['transaction_name'] = isset($data['transaction_name']) ? $data['transaction_name'] : null;
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
     * Gets transaction_code
     * @return string
     */
    public function getTransactionCode()
    {
        return $this->container['transaction_code'];
    }

    /**
     * Sets transaction_code
     * @param string $transaction_code Transaction Code
     * @return $this
     */
    public function setTransactionCode($transaction_code)
    {
        $this->container['transaction_code'] = $transaction_code;

        return $this;
    }

    /**
     * Gets transaction_group_code
     * @return string
     */
    public function getTransactionGroupCode()
    {
        return $this->container['transaction_group_code'];
    }

    /**
     * Sets transaction_group_code
     * @param string $transaction_group_code Transaction Group Code
     * @return $this
     */
    public function setTransactionGroupCode($transaction_group_code)
    {
        $this->container['transaction_group_code'] = $transaction_group_code;

        return $this;
    }

    /**
     * Gets transaction_group_name
     * @return string
     */
    public function getTransactionGroupName()
    {
        return $this->container['transaction_group_name'];
    }

    /**
     * Sets transaction_group_name
     * @param string $transaction_group_name Transaction Code Group Name
     * @return $this
     */
    public function setTransactionGroupName($transaction_group_name)
    {
        $this->container['transaction_group_name'] = $transaction_group_name;

        return $this;
    }

    /**
     * Gets transaction_name
     * @return string
     */
    public function getTransactionName()
    {
        return $this->container['transaction_name'];
    }

    /**
     * Sets transaction_name
     * @param string $transaction_name Transaction Code Name
     * @return $this
     */
    public function setTransactionName($transaction_name)
    {
        $this->container['transaction_name'] = $transaction_name;

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
            return json_encode(\vnds_103\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vnds_103\ObjectSerializer::sanitizeForSerialization($this));
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