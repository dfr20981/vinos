<?php
/**
 * CashOutPushPaymentsPostpostPayload
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
 * CashOutPushPaymentsPostpostPayload Class Doc Comment
 *
 * @category    Class
 * @description Request body for creating in cash out push payment
 * @package     mvs_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CashOutPushPaymentsPostpostPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'cashOutPushPaymentsPostpostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'local_transaction_date_time' => 'string',
        'acquiring_bin' => 'string',
        'business_application_id' => 'string',
        'merchant_category_code' => 'string',
        'card_acceptor' => '\mvs_100\model\CardAcceptor',
        'acquirer_country_code' => 'string',
        'retrieval_reference_number' => 'string',
        'amount' => 'string',
        'sender_reference' => 'string',
        'recipient_primary_account_number' => 'string',
        'systems_trace_audit_number' => 'string',
        'sender_account_number' => 'string',
        'transaction_currency_code' => 'string',
        'sender_name' => 'string'
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
        'local_transaction_date_time' => 'localTransactionDateTime',
        'acquiring_bin' => 'acquiringBin',
        'business_application_id' => 'businessApplicationId',
        'merchant_category_code' => 'merchantCategoryCode',
        'card_acceptor' => 'cardAcceptor',
        'acquirer_country_code' => 'acquirerCountryCode',
        'retrieval_reference_number' => 'retrievalReferenceNumber',
        'amount' => 'amount',
        'sender_reference' => 'senderReference',
        'recipient_primary_account_number' => 'recipientPrimaryAccountNumber',
        'systems_trace_audit_number' => 'systemsTraceAuditNumber',
        'sender_account_number' => 'senderAccountNumber',
        'transaction_currency_code' => 'transactionCurrencyCode',
        'sender_name' => 'senderName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'local_transaction_date_time' => 'setLocalTransactionDateTime',
        'acquiring_bin' => 'setAcquiringBin',
        'business_application_id' => 'setBusinessApplicationId',
        'merchant_category_code' => 'setMerchantCategoryCode',
        'card_acceptor' => 'setCardAcceptor',
        'acquirer_country_code' => 'setAcquirerCountryCode',
        'retrieval_reference_number' => 'setRetrievalReferenceNumber',
        'amount' => 'setAmount',
        'sender_reference' => 'setSenderReference',
        'recipient_primary_account_number' => 'setRecipientPrimaryAccountNumber',
        'systems_trace_audit_number' => 'setSystemsTraceAuditNumber',
        'sender_account_number' => 'setSenderAccountNumber',
        'transaction_currency_code' => 'setTransactionCurrencyCode',
        'sender_name' => 'setSenderName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'local_transaction_date_time' => 'getLocalTransactionDateTime',
        'acquiring_bin' => 'getAcquiringBin',
        'business_application_id' => 'getBusinessApplicationId',
        'merchant_category_code' => 'getMerchantCategoryCode',
        'card_acceptor' => 'getCardAcceptor',
        'acquirer_country_code' => 'getAcquirerCountryCode',
        'retrieval_reference_number' => 'getRetrievalReferenceNumber',
        'amount' => 'getAmount',
        'sender_reference' => 'getSenderReference',
        'recipient_primary_account_number' => 'getRecipientPrimaryAccountNumber',
        'systems_trace_audit_number' => 'getSystemsTraceAuditNumber',
        'sender_account_number' => 'getSenderAccountNumber',
        'transaction_currency_code' => 'getTransactionCurrencyCode',
        'sender_name' => 'getSenderName'
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
        $this->container['local_transaction_date_time'] = isset($data['local_transaction_date_time']) ? $data['local_transaction_date_time'] : null;
        $this->container['acquiring_bin'] = isset($data['acquiring_bin']) ? $data['acquiring_bin'] : null;
        $this->container['business_application_id'] = isset($data['business_application_id']) ? $data['business_application_id'] : null;
        $this->container['merchant_category_code'] = isset($data['merchant_category_code']) ? $data['merchant_category_code'] : null;
        $this->container['card_acceptor'] = isset($data['card_acceptor']) ? $data['card_acceptor'] : null;
        $this->container['acquirer_country_code'] = isset($data['acquirer_country_code']) ? $data['acquirer_country_code'] : null;
        $this->container['retrieval_reference_number'] = isset($data['retrieval_reference_number']) ? $data['retrieval_reference_number'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['sender_reference'] = isset($data['sender_reference']) ? $data['sender_reference'] : null;
        $this->container['recipient_primary_account_number'] = isset($data['recipient_primary_account_number']) ? $data['recipient_primary_account_number'] : null;
        $this->container['systems_trace_audit_number'] = isset($data['systems_trace_audit_number']) ? $data['systems_trace_audit_number'] : null;
        $this->container['sender_account_number'] = isset($data['sender_account_number']) ? $data['sender_account_number'] : null;
        $this->container['transaction_currency_code'] = isset($data['transaction_currency_code']) ? $data['transaction_currency_code'] : null;
        $this->container['sender_name'] = isset($data['sender_name']) ? $data['sender_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['local_transaction_date_time'] === null) {
            $invalid_properties[] = "'local_transaction_date_time' can't be null";
        }
        if ($this->container['acquiring_bin'] === null) {
            $invalid_properties[] = "'acquiring_bin' can't be null";
        }
        if ($this->container['business_application_id'] === null) {
            $invalid_properties[] = "'business_application_id' can't be null";
        }
        if ($this->container['merchant_category_code'] === null) {
            $invalid_properties[] = "'merchant_category_code' can't be null";
        }
        if ($this->container['card_acceptor'] === null) {
            $invalid_properties[] = "'card_acceptor' can't be null";
        }
        if ($this->container['acquirer_country_code'] === null) {
            $invalid_properties[] = "'acquirer_country_code' can't be null";
        }
        if ($this->container['retrieval_reference_number'] === null) {
            $invalid_properties[] = "'retrieval_reference_number' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['recipient_primary_account_number'] === null) {
            $invalid_properties[] = "'recipient_primary_account_number' can't be null";
        }
        if ($this->container['systems_trace_audit_number'] === null) {
            $invalid_properties[] = "'systems_trace_audit_number' can't be null";
        }
        if ($this->container['sender_account_number'] === null) {
            $invalid_properties[] = "'sender_account_number' can't be null";
        }
        if ($this->container['transaction_currency_code'] === null) {
            $invalid_properties[] = "'transaction_currency_code' can't be null";
        }
        if ($this->container['sender_name'] === null) {
            $invalid_properties[] = "'sender_name' can't be null";
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

        if ($this->container['local_transaction_date_time'] === null) {
            return false;
        }
        if ($this->container['acquiring_bin'] === null) {
            return false;
        }
        if ($this->container['business_application_id'] === null) {
            return false;
        }
        if ($this->container['merchant_category_code'] === null) {
            return false;
        }
        if ($this->container['card_acceptor'] === null) {
            return false;
        }
        if ($this->container['acquirer_country_code'] === null) {
            return false;
        }
        if ($this->container['retrieval_reference_number'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['recipient_primary_account_number'] === null) {
            return false;
        }
        if ($this->container['systems_trace_audit_number'] === null) {
            return false;
        }
        if ($this->container['sender_account_number'] === null) {
            return false;
        }
        if ($this->container['transaction_currency_code'] === null) {
            return false;
        }
        if ($this->container['sender_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets local_transaction_date_time
     * @return string
     */
    public function getLocalTransactionDateTime()
    {
        return $this->container['local_transaction_date_time'];
    }

    /**
     * Sets local_transaction_date_time
     * @param string $local_transaction_date_time The date and time the transaction takes place, expressed in the local date and time of the originator.
     * @return $this
     */
    public function setLocalTransactionDateTime($local_transaction_date_time)
    {
        $this->container['local_transaction_date_time'] = $local_transaction_date_time;

        return $this;
    }

    /**
     * Gets acquiring_bin
     * @return string
     */
    public function getAcquiringBin()
    {
        return $this->container['acquiring_bin'];
    }

    /**
     * Sets acquiring_bin
     * @param string $acquiring_bin BIN number identifies the originator of cash-out transaction.
     * @return $this
     */
    public function setAcquiringBin($acquiring_bin)
    {
        $this->container['acquiring_bin'] = $acquiring_bin;

        return $this;
    }

    /**
     * Gets business_application_id
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['business_application_id'];
    }

    /**
     * Sets business_application_id
     * @param string $business_application_id Use CO (cash-out). This field is populated with business application identifier for the transaction. Refer to <a href=\"/request_response_codes#business_application_identifier\">businessApplicationID</a> codes
     * @return $this
     */
    public function setBusinessApplicationId($business_application_id)
    {
        $this->container['business_application_id'] = $business_application_id;

        return $this;
    }

    /**
     * Gets merchant_category_code
     * @return string
     */
    public function getMerchantCategoryCode()
    {
        return $this->container['merchant_category_code'];
    }

    /**
     * Sets merchant_category_code
     * @param string $merchant_category_code Numeric only. Originators should populate 6012. If this field is not populated by the originator, it will automatically be set to the MCC value indicated during the API onboarding process. Recipient should populate the MCC of the merchant in the response message.
     * @return $this
     */
    public function setMerchantCategoryCode($merchant_category_code)
    {
        $this->container['merchant_category_code'] = $merchant_category_code;

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
     * Gets acquirer_country_code
     * @return string
     */
    public function getAcquirerCountryCode()
    {
        return $this->container['acquirer_country_code'];
    }

    /**
     * Sets acquirer_country_code
     * @param string $acquirer_country_code Use a 3-digit numeric country code for the country where the Visa Direct solution is registered. This must match the information provided during program enrollment. Refer to <a href=\"/request_response_codes#iso_country_codes\">ISO Codes</a>.
     * @return $this
     */
    public function setAcquirerCountryCode($acquirer_country_code)
    {
        $this->container['acquirer_country_code'] = $acquirer_country_code;

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
     * @param string $retrieval_reference_number Numeric only. Key data element for matching a message to others within a given transaction set. The same number appears in all related messages: response, advice, reversal, chargeback, chargeback reversal, or representment. It is recommended that the client populate ydddhhnnnnnn value in this field.
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrieval_reference_number)
    {
        $this->container['retrieval_reference_number'] = $retrieval_reference_number;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount Transaction amount in merchant currency.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets sender_reference
     * @return string
     */
    public function getSenderReference()
    {
        return $this->container['sender_reference'];
    }

    /**
     * Sets sender_reference
     * @param string $sender_reference A reference number unique to the merchant. Field can be left blank.
     * @return $this
     */
    public function setSenderReference($sender_reference)
    {
        $this->container['sender_reference'] = $sender_reference;

        return $this;
    }

    /**
     * Gets recipient_primary_account_number
     * @return string
     */
    public function getRecipientPrimaryAccountNumber()
    {
        return $this->container['recipient_primary_account_number'];
    }

    /**
     * Sets recipient_primary_account_number
     * @param string $recipient_primary_account_number Consumer PAN. 16-digit PAN as provided by the consumer to merchant.
     * @return $this
     */
    public function setRecipientPrimaryAccountNumber($recipient_primary_account_number)
    {
        $this->container['recipient_primary_account_number'] = $recipient_primary_account_number;

        return $this;
    }

    /**
     * Gets systems_trace_audit_number
     * @return string
     */
    public function getSystemsTraceAuditNumber()
    {
        return $this->container['systems_trace_audit_number'];
    }

    /**
     * Sets systems_trace_audit_number
     * @param string $systems_trace_audit_number Numeric only. It is a key data element used to match a response to its request or to match a message to others for a given transaction. The value assigned to the original request should appear in all subsequent messages for that transaction
     * @return $this
     */
    public function setSystemsTraceAuditNumber($systems_trace_audit_number)
    {
        $this->container['systems_trace_audit_number'] = $systems_trace_audit_number;

        return $this;
    }

    /**
     * Gets sender_account_number
     * @return string
     */
    public function getSenderAccountNumber()
    {
        return $this->container['sender_account_number'];
    }

    /**
     * Sets sender_account_number
     * @param string $sender_account_number Populate with consumer PAN.   If the consumer PAN is not populated or is not valid or contains extra spaces, VisaNet will reject the transaction with reject code 494 (Field or data missing or invalid)
     * @return $this
     */
    public function setSenderAccountNumber($sender_account_number)
    {
        $this->container['sender_account_number'] = $sender_account_number;

        return $this;
    }

    /**
     * Gets transaction_currency_code
     * @return string
     */
    public function getTransactionCurrencyCode()
    {
        return $this->container['transaction_currency_code'];
    }

    /**
     * Sets transaction_currency_code
     * @param string $transaction_currency_code The code in this field must always reflect the currency associated to the amount in field Amount. Use a 3-digit numeric currency code for currency. Refer to <a href=\"/request_response_codes#currency_codes\">ISO Codes</a>.
     * @return $this
     */
    public function setTransactionCurrencyCode($transaction_currency_code)
    {
        $this->container['transaction_currency_code'] = $transaction_currency_code;

        return $this;
    }

    /**
     * Gets sender_name
     * @return string
     */
    public function getSenderName()
    {
        return $this->container['sender_name'];
    }

    /**
     * Sets sender_name
     * @param string $sender_name Please use consumer name to populate this field.  If consumer name is greater than 30 characters, use first 30 characteres.  The name must be populated using the Roman, i.e. English character set.
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        $this->container['sender_name'] = $sender_name;

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