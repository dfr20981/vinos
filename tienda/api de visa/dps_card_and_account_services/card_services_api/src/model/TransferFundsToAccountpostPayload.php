<?php
/**
 * TransferFundsToAccountpostPayload
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
 * TransferFundsToAccountpostPayload Class Doc Comment
 *
 * @category    Class
 * @description Funds Transfer Request
 * @package     dcas_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransferFundsToAccountpostPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'transferFundsToAccountpostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fee_number' => 'string',
        'to_account_alias_id' => 'string',
        'fee_amount' => '\dcas_101\model\FeeAmount',
        'from_account_alias_id' => 'string',
        'transfer_amount' => '\dcas_101\model\TransferAmount'
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
        'fee_number' => 'feeNumber',
        'to_account_alias_id' => 'toAccountAliasId',
        'fee_amount' => 'feeAmount',
        'from_account_alias_id' => 'fromAccountAliasId',
        'transfer_amount' => 'transferAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'fee_number' => 'setFeeNumber',
        'to_account_alias_id' => 'setToAccountAliasId',
        'fee_amount' => 'setFeeAmount',
        'from_account_alias_id' => 'setFromAccountAliasId',
        'transfer_amount' => 'setTransferAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'fee_number' => 'getFeeNumber',
        'to_account_alias_id' => 'getToAccountAliasId',
        'fee_amount' => 'getFeeAmount',
        'from_account_alias_id' => 'getFromAccountAliasId',
        'transfer_amount' => 'getTransferAmount'
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
        $this->container['fee_number'] = isset($data['fee_number']) ? $data['fee_number'] : null;
        $this->container['to_account_alias_id'] = isset($data['to_account_alias_id']) ? $data['to_account_alias_id'] : null;
        $this->container['fee_amount'] = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['from_account_alias_id'] = isset($data['from_account_alias_id']) ? $data['from_account_alias_id'] : null;
        $this->container['transfer_amount'] = isset($data['transfer_amount']) ? $data['transfer_amount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['to_account_alias_id'] === null) {
            $invalid_properties[] = "'to_account_alias_id' can't be null";
        }
        if ($this->container['transfer_amount'] === null) {
            $invalid_properties[] = "'transfer_amount' can't be null";
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

        if ($this->container['to_account_alias_id'] === null) {
            return false;
        }
        if ($this->container['transfer_amount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets fee_number
     * @return string
     */
    public function getFeeNumber()
    {
        return $this->container['fee_number'];
    }

    /**
     * Sets fee_number
     * @param string $fee_number The fee number that is tied to the fee amount.
     * @return $this
     */
    public function setFeeNumber($fee_number)
    {
        $this->container['fee_number'] = $fee_number;

        return $this;
    }

    /**
     * Gets to_account_alias_id
     * @return string
     */
    public function getToAccountAliasId()
    {
        return $this->container['to_account_alias_id'];
    }

    /**
     * Sets to_account_alias_id
     * @param string $to_account_alias_id The account alias identifier, to which the funds will be transferred.
     * @return $this
     */
    public function setToAccountAliasId($to_account_alias_id)
    {
        $this->container['to_account_alias_id'] = $to_account_alias_id;

        return $this;
    }

    /**
     * Gets fee_amount
     * @return \dcas_101\model\FeeAmount
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     * @param \dcas_101\model\FeeAmount $fee_amount
     * @return $this
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets from_account_alias_id
     * @return string
     */
    public function getFromAccountAliasId()
    {
        return $this->container['from_account_alias_id'];
    }

    /**
     * Sets from_account_alias_id
     * @param string $from_account_alias_id The account alias identifier, from which the funds will be transferred. This field is required only for debit cards.
     * @return $this
     */
    public function setFromAccountAliasId($from_account_alias_id)
    {
        $this->container['from_account_alias_id'] = $from_account_alias_id;

        return $this;
    }

    /**
     * Gets transfer_amount
     * @return \dcas_101\model\TransferAmount
     */
    public function getTransferAmount()
    {
        return $this->container['transfer_amount'];
    }

    /**
     * Sets transfer_amount
     * @param \dcas_101\model\TransferAmount $transfer_amount
     * @return $this
     */
    public function setTransferAmount($transfer_amount)
    {
        $this->container['transfer_amount'] = $transfer_amount;

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