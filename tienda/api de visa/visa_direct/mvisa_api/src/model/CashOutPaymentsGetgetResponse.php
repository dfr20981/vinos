<?php
/**
 * CashOutPaymentsGetgetResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  mvs_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * mVisa API
 *
 * mVisa is a simple, secure and fast way to pay and be paid using mobile phones. mVisa enables a range of payment use cases and is technology agnostic-leveraging evolving POS environment such as QR codes and works on both smart or feature phones.
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

namespace mvs_100\model;

use \ArrayAccess;

/**
 * CashOutPaymentsGetgetResponse Class Doc Comment
 *
 * @category    Class
 * @description Cash Out Push Payment Response
 * @package     mvs_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CashOutPaymentsGetgetResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'cashOutPaymentsGetgetResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approval_code' => 'string',
        'transaction_identifier' => 'string',
        'status_identifier' => 'string',
        'retrieval_reference_number' => 'string',
        'card_acceptor' => '\mvs_100\model\CardAcceptor',
        'response_code' => 'string',
        'action_code' => 'string',
        'transaction_date_time' => 'string'
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
        'approval_code' => 'approvalCode',
        'transaction_identifier' => 'transactionIdentifier',
        'status_identifier' => 'statusIdentifier',
        'retrieval_reference_number' => 'retrievalReferenceNumber',
        'card_acceptor' => 'cardAcceptor',
        'response_code' => 'responseCode',
        'action_code' => 'actionCode',
        'transaction_date_time' => 'transactionDateTime'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'approval_code' => 'setApprovalCode',
        'transaction_identifier' => 'setTransactionIdentifier',
        'status_identifier' => 'setStatusIdentifier',
        'retrieval_reference_number' => 'setRetrievalReferenceNumber',
        'card_acceptor' => 'setCardAcceptor',
        'response_code' => 'setResponseCode',
        'action_code' => 'setActionCode',
        'transaction_date_time' => 'setTransactionDateTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'approval_code' => 'getApprovalCode',
        'transaction_identifier' => 'getTransactionIdentifier',
        'status_identifier' => 'getStatusIdentifier',
        'retrieval_reference_number' => 'getRetrievalReferenceNumber',
        'card_acceptor' => 'getCardAcceptor',
        'response_code' => 'getResponseCode',
        'action_code' => 'getActionCode',
        'transaction_date_time' => 'getTransactionDateTime'
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
        $this->container['approval_code'] = isset($data['approval_code']) ? $data['approval_code'] : null;
        $this->container['transaction_identifier'] = isset($data['transaction_identifier']) ? $data['transaction_identifier'] : null;
        $this->container['status_identifier'] = isset($data['status_identifier']) ? $data['status_identifier'] : null;
        $this->container['retrieval_reference_number'] = isset($data['retrieval_reference_number']) ? $data['retrieval_reference_number'] : null;
        $this->container['card_acceptor'] = isset($data['card_acceptor']) ? $data['card_acceptor'] : null;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
        $this->container['action_code'] = isset($data['action_code']) ? $data['action_code'] : null;
        $this->container['transaction_date_time'] = isset($data['transaction_date_time']) ? $data['transaction_date_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['transaction_identifier'] === null) {
            $invalid_properties[] = "'transaction_identifier' can't be null";
        }
        if ($this->container['retrieval_reference_number'] === null) {
            $invalid_properties[] = "'retrieval_reference_number' can't be null";
        }
        if ($this->container['response_code'] === null) {
            $invalid_properties[] = "'response_code' can't be null";
        }
        if ($this->container['action_code'] === null) {
            $invalid_properties[] = "'action_code' can't be null";
        }
        if ($this->container['transaction_date_time'] === null) {
            $invalid_properties[] = "'transaction_date_time' can't be null";
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

        if ($this->container['transaction_identifier'] === null) {
            return false;
        }
        if ($this->container['retrieval_reference_number'] === null) {
            return false;
        }
        if ($this->container['response_code'] === null) {
            return false;
        }
        if ($this->container['action_code'] === null) {
            return false;
        }
        if ($this->container['transaction_date_time'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets approval_code
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->container['approval_code'];
    }

    /**
     * Sets approval_code
     * @param string $approval_code <b>Conditional.</b> Contains the authorization code provided by the participant when a transaction is approved.
     * @return $this
     */
    public function setApprovalCode($approval_code)
    {
        $this->container['approval_code'] = $approval_code;

        return $this;
    }

    /**
     * Gets transaction_identifier
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->container['transaction_identifier'];
    }

    /**
     * Sets transaction_identifier
     * @param string $transaction_identifier It is added by VisaNet. It contains a right-justified, VisaNet generated Transaction Identifier (TID) that is unique for each request. The identifier links original messages to subsequent messages, such as those for exception item processing and clearing record.
     * @return $this
     */
    public function setTransactionIdentifier($transaction_identifier)
    {
        $this->container['transaction_identifier'] = $transaction_identifier;

        return $this;
    }

    /**
     * Gets status_identifier
     * @return string
     */
    public function getStatusIdentifier()
    {
        return $this->container['status_identifier'];
    }

    /**
     * Sets status_identifier
     * @param string $status_identifier Required when API response times out.
     * @return $this
     */
    public function setStatusIdentifier($status_identifier)
    {
        $this->container['status_identifier'] = $status_identifier;

        return $this;
    }

    /**
     * Gets retrieval_reference_number
     * @return string
     */
    public function getRetrievalReferenceNumber()
    {
        return $this->container['retrieval_reference_number'];
    }

    /**
     * Sets retrieval_reference_number
     * @param string $retrieval_reference_number Numeric only. Key data element for matching a message to others within a given transaction set. Value will be the same as what has been provided in the request.
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrieval_reference_number)
    {
        $this->container['retrieval_reference_number'] = $retrieval_reference_number;

        return $this;
    }

    /**
     * Gets card_acceptor
     * @return \mvs_100\model\CardAcceptor
     */
    public function getCardAcceptor()
    {
        return $this->container['card_acceptor'];
    }

    /**
     * Sets card_acceptor
     * @param \mvs_100\model\CardAcceptor $card_acceptor
     * @return $this
     */
    public function setCardAcceptor($card_acceptor)
    {
        $this->container['card_acceptor'] = $card_acceptor;

        return $this;
    }

    /**
     * Gets response_code
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     * @param string $response_code It is added by VisaNet and contains the response source/reason code that identifies the source of the field actionCode response decision.
     * @return $this
     */
    public function setResponseCode($response_code)
    {
        $this->container['response_code'] = $response_code;

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
     * @param string $action_code Contains a code that defines the response to a request. Refer to <a href=\"/request_response_codes#action_code\">ActionCode</a>
     * @return $this
     */
    public function setActionCode($action_code)
    {
        $this->container['action_code'] = $action_code;

        return $this;
    }

    /**
     * Gets transaction_date_time
     * @return string
     */
    public function getTransactionDateTime()
    {
        return $this->container['transaction_date_time'];
    }

    /**
     * Sets transaction_date_time
     * @param string $transaction_date_time The value in response must match the value in the request.
     * @return $this
     */
    public function setTransactionDateTime($transaction_date_time)
    {
        $this->container['transaction_date_time'] = $transaction_date_time;

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
            return json_encode(\mvs_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\mvs_100\ObjectSerializer::sanitizeForSerialization($this));
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