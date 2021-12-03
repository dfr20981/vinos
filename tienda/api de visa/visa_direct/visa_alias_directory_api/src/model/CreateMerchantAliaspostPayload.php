<?php
/**
 * CreateMerchantAliaspostPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  alias_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visa Alias Directory API
 *
 * Visa Alias Directory Services provide an ability to resolve an identifier (i.e. an alias) such as mobile phone number, email address, short name, or nickname, to a Visa card account (non-Visa soon) through APIs.  A Visa client can use these APIs to allow consumers provide an alias instead of inputting a card number (PAN) to use Visa Direct push payment services such as person-to-person (P2P) money transfers, mVisa merchant payments and mVisa agent deposits and withdrawals.
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

namespace alias_100\model;

use \ArrayAccess;

/**
 * CreateMerchantAliaspostPayload Class Doc Comment
 *
 * @category    Class
 * @description Request body for creating merchant or agent alias
 * @package     alias_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateMerchantAliaspostPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateMerchantAliaspostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'merchant_category_code' => 'string',
        'payload_format_indicator' => 'string',
        'transaction_currency_code' => 'string',
        'recipient_name' => 'string',
        'country' => 'string',
        'convenience_fee_amount' => 'string',
        'is_agent_alias' => 'string',
        'point_of_initiation_method' => 'string',
        'tip_convenience_fee_indicator' => 'string',
        'convenience_fee_percentage' => 'string',
        'alias_id' => 'string',
        'merchant_id' => 'string'
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
        'city' => 'city',
        'merchant_category_code' => 'merchantCategoryCode',
        'payload_format_indicator' => 'payloadFormatIndicator',
        'transaction_currency_code' => 'transactionCurrencyCode',
        'recipient_name' => 'recipientName',
        'country' => 'country',
        'convenience_fee_amount' => 'convenienceFeeAmount',
        'is_agent_alias' => 'isAgentAlias',
        'point_of_initiation_method' => 'pointOfInitiationMethod',
        'tip_convenience_fee_indicator' => 'tipConvenienceFeeIndicator',
        'convenience_fee_percentage' => 'convenienceFeePercentage',
        'alias_id' => 'aliasId',
        'merchant_id' => 'merchantId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'merchant_category_code' => 'setMerchantCategoryCode',
        'payload_format_indicator' => 'setPayloadFormatIndicator',
        'transaction_currency_code' => 'setTransactionCurrencyCode',
        'recipient_name' => 'setRecipientName',
        'country' => 'setCountry',
        'convenience_fee_amount' => 'setConvenienceFeeAmount',
        'is_agent_alias' => 'setIsAgentAlias',
        'point_of_initiation_method' => 'setPointOfInitiationMethod',
        'tip_convenience_fee_indicator' => 'setTipConvenienceFeeIndicator',
        'convenience_fee_percentage' => 'setConvenienceFeePercentage',
        'alias_id' => 'setAliasId',
        'merchant_id' => 'setMerchantId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'merchant_category_code' => 'getMerchantCategoryCode',
        'payload_format_indicator' => 'getPayloadFormatIndicator',
        'transaction_currency_code' => 'getTransactionCurrencyCode',
        'recipient_name' => 'getRecipientName',
        'country' => 'getCountry',
        'convenience_fee_amount' => 'getConvenienceFeeAmount',
        'is_agent_alias' => 'getIsAgentAlias',
        'point_of_initiation_method' => 'getPointOfInitiationMethod',
        'tip_convenience_fee_indicator' => 'getTipConvenienceFeeIndicator',
        'convenience_fee_percentage' => 'getConvenienceFeePercentage',
        'alias_id' => 'getAliasId',
        'merchant_id' => 'getMerchantId'
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
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['merchant_category_code'] = isset($data['merchant_category_code']) ? $data['merchant_category_code'] : null;
        $this->container['payload_format_indicator'] = isset($data['payload_format_indicator']) ? $data['payload_format_indicator'] : null;
        $this->container['transaction_currency_code'] = isset($data['transaction_currency_code']) ? $data['transaction_currency_code'] : null;
        $this->container['recipient_name'] = isset($data['recipient_name']) ? $data['recipient_name'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['convenience_fee_amount'] = isset($data['convenience_fee_amount']) ? $data['convenience_fee_amount'] : null;
        $this->container['is_agent_alias'] = isset($data['is_agent_alias']) ? $data['is_agent_alias'] : null;
        $this->container['point_of_initiation_method'] = isset($data['point_of_initiation_method']) ? $data['point_of_initiation_method'] : null;
        $this->container['tip_convenience_fee_indicator'] = isset($data['tip_convenience_fee_indicator']) ? $data['tip_convenience_fee_indicator'] : null;
        $this->container['convenience_fee_percentage'] = isset($data['convenience_fee_percentage']) ? $data['convenience_fee_percentage'] : null;
        $this->container['alias_id'] = isset($data['alias_id']) ? $data['alias_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['merchant_category_code'] === null) {
            $invalid_properties[] = "'merchant_category_code' can't be null";
        }
        if ($this->container['payload_format_indicator'] === null) {
            $invalid_properties[] = "'payload_format_indicator' can't be null";
        }
        if ($this->container['transaction_currency_code'] === null) {
            $invalid_properties[] = "'transaction_currency_code' can't be null";
        }
        if ($this->container['recipient_name'] === null) {
            $invalid_properties[] = "'recipient_name' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalid_properties[] = "'country' can't be null";
        }
        if ($this->container['alias_id'] === null) {
            $invalid_properties[] = "'alias_id' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalid_properties[] = "'merchant_id' can't be null";
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

        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['merchant_category_code'] === null) {
            return false;
        }
        if ($this->container['payload_format_indicator'] === null) {
            return false;
        }
        if ($this->container['transaction_currency_code'] === null) {
            return false;
        }
        if ($this->container['recipient_name'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['alias_id'] === null) {
            return false;
        }
        if ($this->container['merchant_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city Merchant or agent city.
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
     * @param string $merchant_category_code Merchant Category Code. Numeric only.
     * @return $this
     */
    public function setMerchantCategoryCode($merchant_category_code)
    {
        $this->container['merchant_category_code'] = $merchant_category_code;

        return $this;
    }

    /**
     * Gets payload_format_indicator
     * @return string
     */
    public function getPayloadFormatIndicator()
    {
        return $this->container['payload_format_indicator'];
    }

    /**
     * Sets payload_format_indicator
     * @param string $payload_format_indicator Defines the format of the merchant data payload. Payload Format Indicator must be set to '01' as per EMVCo Merchant Presented QR specifications.
     * @return $this
     */
    public function setPayloadFormatIndicator($payload_format_indicator)
    {
        $this->container['payload_format_indicator'] = $payload_format_indicator;

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
     * @param string $transaction_currency_code As defined by ISO 4217.  This is the transaction currency code that a merchant can accept for payment. 3-digit numeric presentation of the currency is recommended to be used if alias may be used for QR.
     * @return $this
     */
    public function setTransactionCurrencyCode($transaction_currency_code)
    {
        $this->container['transaction_currency_code'] = $transaction_currency_code;

        return $this;
    }

    /**
     * Gets recipient_name
     * @return string
     */
    public function getRecipientName()
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     * @param string $recipient_name Merchant or agent name.
     * @return $this
     */
    public function setRecipientName($recipient_name)
    {
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Merchant or agent country code as defined by ISO 3166. ISO 3166 alpha-2 is recommended to be used if alias may be used for QR.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets convenience_fee_amount
     * @return string
     */
    public function getConvenienceFeeAmount()
    {
        return $this->container['convenience_fee_amount'];
    }

    /**
     * Sets convenience_fee_amount
     * @param string $convenience_fee_amount The convenience fee of a fixed amount. Applicable only for merchant alias.
     * @return $this
     */
    public function setConvenienceFeeAmount($convenience_fee_amount)
    {
        $this->container['convenience_fee_amount'] = $convenience_fee_amount;

        return $this;
    }

    /**
     * Gets is_agent_alias
     * @return string
     */
    public function getIsAgentAlias()
    {
        return $this->container['is_agent_alias'];
    }

    /**
     * Sets is_agent_alias
     * @param string $is_agent_alias Optional and applicable for agent alias use only. If set as 'Y', agent alias to be created.
     * @return $this
     */
    public function setIsAgentAlias($is_agent_alias)
    {
        $this->container['is_agent_alias'] = $is_agent_alias;

        return $this;
    }

    /**
     * Gets point_of_initiation_method
     * @return string
     */
    public function getPointOfInitiationMethod()
    {
        return $this->container['point_of_initiation_method'];
    }

    /**
     * Sets point_of_initiation_method
     * @param string $point_of_initiation_method In this two-digit field, the first character indicates the method by which the data is presented by the merchant. The second character indicates whether the data is static or dynamic. Static data refers to a situation wherein same data is presented for every transaction unlike a dynamic data wherein the information is specific to a transaction.<br><b>1st character</b><br>''1'' = QR<br>''2'' = BLE<br>''3'' = NFC<br>''4'' - ''9'' = Reserved for Future Use<br><b>2nd character</b><br>''1'' = Static<br>''2'' = Dynamic<br>''3'' - ''9'' = Reserved for Future Use.<br>Example: ''11'' indicates QR static code, ''12'' indicates QR dynamic code.
     * @return $this
     */
    public function setPointOfInitiationMethod($point_of_initiation_method)
    {
        $this->container['point_of_initiation_method'] = $point_of_initiation_method;

        return $this;
    }

    /**
     * Gets tip_convenience_fee_indicator
     * @return string
     */
    public function getTipConvenienceFeeIndicator()
    {
        return $this->container['tip_convenience_fee_indicator'];
    }

    /**
     * Sets tip_convenience_fee_indicator
     * @param string $tip_convenience_fee_indicator Tip or Convenience Fee Indicator. This shall contains a value of '01', '02' or '03' as per EMVCo Merchant Presented QR specifications. Applicable only for merchant alias.
     * @return $this
     */
    public function setTipConvenienceFeeIndicator($tip_convenience_fee_indicator)
    {
        $this->container['tip_convenience_fee_indicator'] = $tip_convenience_fee_indicator;

        return $this;
    }

    /**
     * Gets convenience_fee_percentage
     * @return string
     */
    public function getConvenienceFeePercentage()
    {
        return $this->container['convenience_fee_percentage'];
    }

    /**
     * Sets convenience_fee_percentage
     * @param string $convenience_fee_percentage Applicable only for merchant alias. The percentage convenience fee, specified as numeric value from “00.01” (for 00.01%) to “99.99” (for 99.99%).
     * @return $this
     */
    public function setConvenienceFeePercentage($convenience_fee_percentage)
    {
        $this->container['convenience_fee_percentage'] = $convenience_fee_percentage;

        return $this;
    }

    /**
     * Gets alias_id
     * @return string
     */
    public function getAliasId()
    {
        return $this->container['alias_id'];
    }

    /**
     * Sets alias_id
     * @param string $alias_id This attribute is used by acquirer to uniquely identify their merchant or agent.
     * @return $this
     */
    public function setAliasId($alias_id)
    {
        $this->container['alias_id'] = $alias_id;

        return $this;
    }

    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param string $merchant_id A 16 digit-number as per Mobile Push Payment Program Implementation Guide to receive payment by merchant or agent.
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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
            return json_encode(\alias_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\alias_100\ObjectSerializer::sanitizeForSerialization($this));
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