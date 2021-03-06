<?php
/**
 * AdjustreversefundspostResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  ads_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Adjustment API
 *
 * The AdjustReverseFundsTransactions resource credits (pushes back) funds to the sender&apos;s Visa account by initiating a financial message called an Account Funding Transaction Reversal (AFTR) without the 24 hours limitation in the AFTR.
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

namespace ads_100\model;

use \ArrayAccess;

/**
 * AdjustreversefundspostResponse Class Doc Comment
 *
 * @category    Class
 * @description Adjustment Funds Transfer Response
 * @package     ads_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AdjustreversefundspostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'adjustreversefundspostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_and_time_transmission' => 'string',
        'transaction_identifier' => 'int',
        'action_code' => 'string'
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
        'date_and_time_transmission' => 'dateAndTimeTransmission',
        'transaction_identifier' => 'transactionIdentifier',
        'action_code' => 'actionCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'date_and_time_transmission' => 'setDateAndTimeTransmission',
        'transaction_identifier' => 'setTransactionIdentifier',
        'action_code' => 'setActionCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'date_and_time_transmission' => 'getDateAndTimeTransmission',
        'transaction_identifier' => 'getTransactionIdentifier',
        'action_code' => 'getActionCode'
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
        $this->container['date_and_time_transmission'] = isset($data['date_and_time_transmission']) ? $data['date_and_time_transmission'] : null;
        $this->container['transaction_identifier'] = isset($data['transaction_identifier']) ? $data['transaction_identifier'] : null;
        $this->container['action_code'] = isset($data['action_code']) ? $data['action_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['date_and_time_transmission'] === null) {
            $invalid_properties[] = "'date_and_time_transmission' can't be null";
        }
        if ($this->container['transaction_identifier'] === null) {
            $invalid_properties[] = "'transaction_identifier' can't be null";
        }
        if ($this->container['action_code'] === null) {
            $invalid_properties[] = "'action_code' can't be null";
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

        if ($this->container['date_and_time_transmission'] === null) {
            return false;
        }
        if ($this->container['transaction_identifier'] === null) {
            return false;
        }
        if ($this->container['action_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets date_and_time_transmission
     * @return string
     */
    public function getDateAndTimeTransmission()
    {
        return $this->container['date_and_time_transmission'];
    }

    /**
     * Sets date_and_time_transmission
     * @param string $date_and_time_transmission This field contains the year, month, day, and time the transaction was processed by Visa Direct. Example: 2016-01-15T07:03:52.000Z
     * @return $this
     */
    public function setDateAndTimeTransmission($date_and_time_transmission)
    {
        $this->container['date_and_time_transmission'] = $date_and_time_transmission;

        return $this;
    }

    /**
     * Gets transaction_identifier
     * @return int
     */
    public function getTransactionIdentifier()
    {
        return $this->container['transaction_identifier'];
    }

    /**
     * Sets transaction_identifier
     * @param int $transaction_identifier Visa transaction identifier .
     * @return $this
     */
    public function setTransactionIdentifier($transaction_identifier)
    {
        $this->container['transaction_identifier'] = $transaction_identifier;

        return $this;
    }

    /**
     * Gets action_code
     * @return string
     */
    public function getActionCode()
    {
        return $this->container['action_code'];
    }

    /**
     * Sets action_code
     * @param string $action_code The results of the transaction request
     * @return $this
     */
    public function setActionCode($action_code)
    {
        $this->container['action_code'] = $action_code;

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
            return json_encode(\ads_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ads_100\ObjectSerializer::sanitizeForSerialization($this));
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