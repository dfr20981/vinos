<?php
/**
 * DecisionRequestActionsputPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  pmc_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Authorization API
 *
 * The Authorization Decision API enables an authorization processor to request an authorization decision recommendation based on cardholder rules configured in consumer transaction controls.  In addition, the API enables the authorization processor to update an authorization decision with the actual decision that was rendered.
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

namespace pmc_101\model;

use \ArrayAccess;

/**
 * DecisionRequestActionsputPayload Class Doc Comment
 *
 * @category    Class
 * @description decisionUpdate
 * @package     pmc_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DecisionRequestActionsputPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'decisionRequestActionsputPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cardholder_bill_amount' => 'double',
        'transaction_approved' => 'string',
        'is_decline_result_of_transaction_control' => 'bool',
        'decision_type' => 'string',
        'transaction_amount' => 'double'
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
        'cardholder_bill_amount' => 'cardholderBillAmount',
        'transaction_approved' => 'transactionApproved',
        'is_decline_result_of_transaction_control' => 'isDeclineResultOfTransactionControl',
        'decision_type' => 'decisionType',
        'transaction_amount' => 'transactionAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cardholder_bill_amount' => 'setCardholderBillAmount',
        'transaction_approved' => 'setTransactionApproved',
        'is_decline_result_of_transaction_control' => 'setIsDeclineResultOfTransactionControl',
        'decision_type' => 'setDecisionType',
        'transaction_amount' => 'setTransactionAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cardholder_bill_amount' => 'getCardholderBillAmount',
        'transaction_approved' => 'getTransactionApproved',
        'is_decline_result_of_transaction_control' => 'getIsDeclineResultOfTransactionControl',
        'decision_type' => 'getDecisionType',
        'transaction_amount' => 'getTransactionAmount'
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
        $this->container['cardholder_bill_amount'] = isset($data['cardholder_bill_amount']) ? $data['cardholder_bill_amount'] : null;
        $this->container['transaction_approved'] = isset($data['transaction_approved']) ? $data['transaction_approved'] : null;
        $this->container['is_decline_result_of_transaction_control'] = isset($data['is_decline_result_of_transaction_control']) ? $data['is_decline_result_of_transaction_control'] : null;
        $this->container['decision_type'] = isset($data['decision_type']) ? $data['decision_type'] : null;
        $this->container['transaction_amount'] = isset($data['transaction_amount']) ? $data['transaction_amount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['transaction_approved'] === null) {
            $invalid_properties[] = "'transaction_approved' can't be null";
        }
        if ($this->container['decision_type'] === null) {
            $invalid_properties[] = "'decision_type' can't be null";
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

        if ($this->container['transaction_approved'] === null) {
            return false;
        }
        if ($this->container['decision_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets cardholder_bill_amount
     * @return double
     */
    public function getCardholderBillAmount()
    {
        return $this->container['cardholder_bill_amount'];
    }

    /**
     * Sets cardholder_bill_amount
     * @param double $cardholder_bill_amount The total completion amount to be billed to the cardholder inclusive of any fees assessed.  This amount must be in the card issuers currency.  This is an optional field.  If completion amount is not equal to request amount, the spend limit will be updated to reflect the difference.
     * @return $this
     */
    public function setCardholderBillAmount($cardholder_bill_amount)
    {
        $this->container['cardholder_bill_amount'] = $cardholder_bill_amount;

        return $this;
    }

    /**
     * Gets transaction_approved
     * @return string
     */
    public function getTransactionApproved()
    {
        return $this->container['transaction_approved'];
    }

    /**
     * Sets transaction_approved
     * @param string $transaction_approved The decision for the completed transaction
     * @return $this
     */
    public function setTransactionApproved($transaction_approved)
    {
        $this->container['transaction_approved'] = $transaction_approved;

        return $this;
    }

    /**
     * Gets is_decline_result_of_transaction_control
     * @return bool
     */
    public function getIsDeclineResultOfTransactionControl()
    {
        return $this->container['is_decline_result_of_transaction_control'];
    }

    /**
     * Sets is_decline_result_of_transaction_control
     * @param bool $is_decline_result_of_transaction_control Indicates whether the decline decision is the result of the transaction control recommendation.  If not present true will be assumed
     * @return $this
     */
    public function setIsDeclineResultOfTransactionControl($is_decline_result_of_transaction_control)
    {
        $this->container['is_decline_result_of_transaction_control'] = $is_decline_result_of_transaction_control;

        return $this;
    }

    /**
     * Gets decision_type
     * @return string
     */
    public function getDecisionType()
    {
        return $this->container['decision_type'];
    }

    /**
     * Sets decision_type
     * @param string $decision_type The decision request type
     * @return $this
     */
    public function setDecisionType($decision_type)
    {
        $this->container['decision_type'] = $decision_type;

        return $this;
    }

    /**
     * Gets transaction_amount
     * @return double
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     * @param double $transaction_amount The total transaction amount in local merchant currency.
     * @return $this
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

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
            return json_encode(\pmc_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\pmc_101\ObjectSerializer::sanitizeForSerialization($this));
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