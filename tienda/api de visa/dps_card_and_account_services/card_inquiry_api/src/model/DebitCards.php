<?php
/**
 * DebitCards
 *
 * PHP version 5
 *
 * @category Class
 * @package  dcas_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Card Inquiry API
 *
 * Lookup and return list of PANs associated with an Account Number and Routing Number
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

namespace dcas_100\model;

use \ArrayAccess;

/**
 * DebitCards Class Doc Comment
 *
 * @category    Class
 * @description Provides an array of debit cards that have basic cardholder information and that are associated with the provided account information.
 * @package     dcas_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DebitCards implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'debitCards';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'should_capture_card' => 'bool',
        'card_status' => 'string',
        'cardholder_name' => '\dcas_100\model\CardholderName',
        'sequence_on_card' => 'string',
        'primary_account_number' => 'string',
        'expiration_date' => '\dcas_100\model\ExpirationDate',
        'activation_status' => 'string',
        'cardholder_address' => '\dcas_100\model\CardholderAddress'
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
        'should_capture_card' => 'shouldCaptureCard',
        'card_status' => 'cardStatus',
        'cardholder_name' => 'cardholderName',
        'sequence_on_card' => 'sequenceOnCard',
        'primary_account_number' => 'primaryAccountNumber',
        'expiration_date' => 'expirationDate',
        'activation_status' => 'activationStatus',
        'cardholder_address' => 'cardholderAddress'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'should_capture_card' => 'setShouldCaptureCard',
        'card_status' => 'setCardStatus',
        'cardholder_name' => 'setCardholderName',
        'sequence_on_card' => 'setSequenceOnCard',
        'primary_account_number' => 'setPrimaryAccountNumber',
        'expiration_date' => 'setExpirationDate',
        'activation_status' => 'setActivationStatus',
        'cardholder_address' => 'setCardholderAddress'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'should_capture_card' => 'getShouldCaptureCard',
        'card_status' => 'getCardStatus',
        'cardholder_name' => 'getCardholderName',
        'sequence_on_card' => 'getSequenceOnCard',
        'primary_account_number' => 'getPrimaryAccountNumber',
        'expiration_date' => 'getExpirationDate',
        'activation_status' => 'getActivationStatus',
        'cardholder_address' => 'getCardholderAddress'
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
        $this->container['should_capture_card'] = isset($data['should_capture_card']) ? $data['should_capture_card'] : null;
        $this->container['card_status'] = isset($data['card_status']) ? $data['card_status'] : null;
        $this->container['cardholder_name'] = isset($data['cardholder_name']) ? $data['cardholder_name'] : null;
        $this->container['sequence_on_card'] = isset($data['sequence_on_card']) ? $data['sequence_on_card'] : null;
        $this->container['primary_account_number'] = isset($data['primary_account_number']) ? $data['primary_account_number'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['activation_status'] = isset($data['activation_status']) ? $data['activation_status'] : null;
        $this->container['cardholder_address'] = isset($data['cardholder_address']) ? $data['cardholder_address'] : null;
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
     * Gets should_capture_card
     * @return bool
     */
    public function getShouldCaptureCard()
    {
        return $this->container['should_capture_card'];
    }

    /**
     * Sets should_capture_card
     * @param bool $should_capture_card If the card is status, this value is used to further determine if the card is in a state where it should be &ldquo;captured&CloseCurlyDoubleQuote; if encountered
     * @return $this
     */
    public function setShouldCaptureCard($should_capture_card)
    {
        $this->container['should_capture_card'] = $should_capture_card;

        return $this;
    }

    /**
     * Gets card_status
     * @return string
     */
    public function getCardStatus()
    {
        return $this->container['card_status'];
    }

    /**
     * Sets card_status
     * @param string $card_status The card status
     * @return $this
     */
    public function setCardStatus($card_status)
    {
        $this->container['card_status'] = $card_status;

        return $this;
    }

    /**
     * Gets cardholder_name
     * @return \dcas_100\model\CardholderName
     */
    public function getCardholderName()
    {
        return $this->container['cardholder_name'];
    }

    /**
     * Sets cardholder_name
     * @param \dcas_100\model\CardholderName $cardholder_name
     * @return $this
     */
    public function setCardholderName($cardholder_name)
    {
        $this->container['cardholder_name'] = $cardholder_name;

        return $this;
    }

    /**
     * Gets sequence_on_card
     * @return string
     */
    public function getSequenceOnCard()
    {
        return $this->container['sequence_on_card'];
    }

    /**
     * Sets sequence_on_card
     * @param string $sequence_on_card The sequence on card.
     * @return $this
     */
    public function setSequenceOnCard($sequence_on_card)
    {
        $this->container['sequence_on_card'] = $sequence_on_card;

        return $this;
    }

    /**
     * Gets primary_account_number
     * @return string
     */
    public function getPrimaryAccountNumber()
    {
        return $this->container['primary_account_number'];
    }

    /**
     * Sets primary_account_number
     * @param string $primary_account_number The primary account number. ,
     * @return $this
     */
    public function setPrimaryAccountNumber($primary_account_number)
    {
        $this->container['primary_account_number'] = $primary_account_number;

        return $this;
    }

    /**
     * Gets expiration_date
     * @return \dcas_100\model\ExpirationDate
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     * @param \dcas_100\model\ExpirationDate $expiration_date
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets activation_status
     * @return string
     */
    public function getActivationStatus()
    {
        return $this->container['activation_status'];
    }

    /**
     * Sets activation_status
     * @param string $activation_status The activation status.
     * @return $this
     */
    public function setActivationStatus($activation_status)
    {
        $this->container['activation_status'] = $activation_status;

        return $this;
    }

    /**
     * Gets cardholder_address
     * @return \dcas_100\model\CardholderAddress
     */
    public function getCardholderAddress()
    {
        return $this->container['cardholder_address'];
    }

    /**
     * Sets cardholder_address
     * @param \dcas_100\model\CardholderAddress $cardholder_address
     * @return $this
     */
    public function setCardholderAddress($cardholder_address)
    {
        $this->container['cardholder_address'] = $cardholder_address;

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
            return json_encode(\dcas_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\dcas_100\ObjectSerializer::sanitizeForSerialization($this));
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