<?php
/**
 * MerchandiseReturnReversalPostpostResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  mvrf_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mobile Push Payment Refund API
 *
 * Mobile Push Payment is a simple, secure and fast way to pay and be paid using mobile phones. Mobile Push Payment enables a range of payment use cases and is technology agnostic-leveraging evolving POS environment such as QR codes and works on both smart or feature phones.
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

namespace mvrf_100\model;

use \ArrayAccess;

/**
 * MerchandiseReturnReversalPostpostResponse Class Doc Comment
 *
 * @category    Class
 * @description Merchandise Return Reversal Response
 * @package     mvrf_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchandiseReturnReversalPostpostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'merchandiseReturnReversalPostpostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approval_code' => 'string',
        'fee_program_indicator' => 'string',
        'merchant_verification_value' => 'string',
        'status_identifier' => 'string',
        'transaction_identifier' => 'string',
        'response_code' => 'string',
        'action_code' => 'string',
        'transmission_date_time' => 'string'
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
        'fee_program_indicator' => 'feeProgramIndicator',
        'merchant_verification_value' => 'merchantVerificationValue',
        'status_identifier' => 'statusIdentifier',
        'transaction_identifier' => 'transactionIdentifier',
        'response_code' => 'responseCode',
        'action_code' => 'actionCode',
        'transmission_date_time' => 'transmissionDateTime'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'approval_code' => 'setApprovalCode',
        'fee_program_indicator' => 'setFeeProgramIndicator',
        'merchant_verification_value' => 'setMerchantVerificationValue',
        'status_identifier' => 'setStatusIdentifier',
        'transaction_identifier' => 'setTransactionIdentifier',
        'response_code' => 'setResponseCode',
        'action_code' => 'setActionCode',
        'transmission_date_time' => 'setTransmissionDateTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'approval_code' => 'getApprovalCode',
        'fee_program_indicator' => 'getFeeProgramIndicator',
        'merchant_verification_value' => 'getMerchantVerificationValue',
        'status_identifier' => 'getStatusIdentifier',
        'transaction_identifier' => 'getTransactionIdentifier',
        'response_code' => 'getResponseCode',
        'action_code' => 'getActionCode',
        'transmission_date_time' => 'getTransmissionDateTime'
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
        $this->container['fee_program_indicator'] = isset($data['fee_program_indicator']) ? $data['fee_program_indicator'] : null;
        $this->container['merchant_verification_value'] = isset($data['merchant_verification_value']) ? $data['merchant_verification_value'] : null;
        $this->container['status_identifier'] = isset($data['status_identifier']) ? $data['status_identifier'] : null;
        $this->container['transaction_identifier'] = isset($data['transaction_identifier']) ? $data['transaction_identifier'] : null;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
        $this->container['action_code'] = isset($data['action_code']) ? $data['action_code'] : null;
        $this->container['transmission_date_time'] = isset($data['transmission_date_time']) ? $data['transmission_date_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['status_identifier'] === null) {
            $invalid_properties[] = "'status_identifier' can't be null";
        }
        if ($this->container['transaction_identifier'] === null) {
            $invalid_properties[] = "'transaction_identifier' can't be null";
        }
        if ($this->container['response_code'] === null) {
            $invalid_properties[] = "'response_code' can't be null";
        }
        if ($this->container['action_code'] === null) {
            $invalid_properties[] = "'action_code' can't be null";
        }
        if ($this->container['transmission_date_time'] === null) {
            $invalid_properties[] = "'transmission_date_time' can't be null";
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

        if ($this->container['status_identifier'] === null) {
            return false;
        }
        if ($this->container['transaction_identifier'] === null) {
            return false;
        }
        if ($this->container['response_code'] === null) {
            return false;
        }
        if ($this->container['action_code'] === null) {
            return false;
        }
        if ($this->container['transmission_date_time'] === null) {
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
     * @param string $approval_code The authorization code from the issuer.
     * @return $this
     */
    public function setApprovalCode($approval_code)
    {
        $this->container['approval_code'] = $approval_code;

        return $this;
    }

    /**
     * Gets fee_program_indicator
     * @return string
     */
    public function getFeeProgramIndicator()
    {
        return $this->container['fee_program_indicator'];
    }

    /**
     * Sets fee_program_indicator
     * @param string $fee_program_indicator Optional field which may be populated by recipient where applicable.
     * @return $this
     */
    public function setFeeProgramIndicator($fee_program_indicator)
    {
        $this->container['fee_program_indicator'] = $fee_program_indicator;

        return $this;
    }

    /**
     * Gets merchant_verification_value
     * @return string
     */
    public function getMerchantVerificationValue()
    {
        return $this->container['merchant_verification_value'];
    }

    /**
     * Sets merchant_verification_value
     * @param string $merchant_verification_value The concatenated Merchant Verification Value of Visa assigned and Acquirer assigned value is returned.
     * @return $this
     */
    public function setMerchantVerificationValue($merchant_verification_value)
    {
        $this->container['merchant_verification_value'] = $merchant_verification_value;

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
     * @param string $status_identifier required when call times out
     * @return $this
     */
    public function setStatusIdentifier($status_identifier)
    {
        $this->container['status_identifier'] = $status_identifier;

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
     * @param string $transaction_identifier It contains a right-justified, VisaNet generated Transaction Identifier (TID).
     * @return $this
     */
    public function setTransactionIdentifier($transaction_identifier)
    {
        $this->container['transaction_identifier'] = $transaction_identifier;

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
     * @param string $response_code The source for the response; typically, either the recipient issuer or a Visa system.Refer to  The VisaNet Response Source for the transaction
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
     * @param string $action_code It contains a code that defines the response to a request
     * @return $this
     */
    public function setActionCode($action_code)
    {
        $this->container['action_code'] = $action_code;

        return $this;
    }

    /**
     * Gets transmission_date_time
     * @return string
     */
    public function getTransmissionDateTime()
    {
        return $this->container['transmission_date_time'];
    }

    /**
     * Sets transmission_date_time
     * @param string $transmission_date_time Transmission date and time
     * @return $this
     */
    public function setTransmissionDateTime($transmission_date_time)
    {
        $this->container['transmission_date_time'] = $transmission_date_time;

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
            return json_encode(\mvrf_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\mvrf_100\ObjectSerializer::sanitizeForSerialization($this));
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