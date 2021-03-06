<?php
/**
 * ResolvepostResponse
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
 * ResolvepostResponse Class Doc Comment
 *
 * @category    Class
 * @description Alias Resolve Response
 * @package     alias_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ResolvepostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ResolvepostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'merchant_category_code' => 'string',
        'url' => 'string',
        'country' => 'string',
        'transaction_currency_code' => 'string',
        'recipient_primary_account_number' => 'string',
        'tip_convenience_fee_indicator' => 'string',
        'card_type' => 'string',
        'convenience_fee_amount' => 'string',
        'point_of_initiation_method' => 'string',
        'postal_code' => 'string',
        'recipient_name' => 'string',
        'issuer_name' => 'string',
        'convenience_fee_percentage' => 'string',
        'account_look_up_info' => '\alias_100\model\AccountLookUpInfo'
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
        'url' => 'url',
        'country' => 'country',
        'transaction_currency_code' => 'transactionCurrencyCode',
        'recipient_primary_account_number' => 'recipientPrimaryAccountNumber',
        'tip_convenience_fee_indicator' => 'tipConvenienceFeeIndicator',
        'card_type' => 'cardType',
        'convenience_fee_amount' => 'convenienceFeeAmount',
        'point_of_initiation_method' => 'pointOfInitiationMethod',
        'postal_code' => 'postalCode',
        'recipient_name' => 'recipientName',
        'issuer_name' => 'issuerName',
        'convenience_fee_percentage' => 'convenienceFeePercentage',
        'account_look_up_info' => 'accountLookUpInfo'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'merchant_category_code' => 'setMerchantCategoryCode',
        'url' => 'setUrl',
        'country' => 'setCountry',
        'transaction_currency_code' => 'setTransactionCurrencyCode',
        'recipient_primary_account_number' => 'setRecipientPrimaryAccountNumber',
        'tip_convenience_fee_indicator' => 'setTipConvenienceFeeIndicator',
        'card_type' => 'setCardType',
        'convenience_fee_amount' => 'setConvenienceFeeAmount',
        'point_of_initiation_method' => 'setPointOfInitiationMethod',
        'postal_code' => 'setPostalCode',
        'recipient_name' => 'setRecipientName',
        'issuer_name' => 'setIssuerName',
        'convenience_fee_percentage' => 'setConvenienceFeePercentage',
        'account_look_up_info' => 'setAccountLookUpInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'merchant_category_code' => 'getMerchantCategoryCode',
        'url' => 'getUrl',
        'country' => 'getCountry',
        'transaction_currency_code' => 'getTransactionCurrencyCode',
        'recipient_primary_account_number' => 'getRecipientPrimaryAccountNumber',
        'tip_convenience_fee_indicator' => 'getTipConvenienceFeeIndicator',
        'card_type' => 'getCardType',
        'convenience_fee_amount' => 'getConvenienceFeeAmount',
        'point_of_initiation_method' => 'getPointOfInitiationMethod',
        'postal_code' => 'getPostalCode',
        'recipient_name' => 'getRecipientName',
        'issuer_name' => 'getIssuerName',
        'convenience_fee_percentage' => 'getConvenienceFeePercentage',
        'account_look_up_info' => 'getAccountLookUpInfo'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['transaction_currency_code'] = isset($data['transaction_currency_code']) ? $data['transaction_currency_code'] : null;
        $this->container['recipient_primary_account_number'] = isset($data['recipient_primary_account_number']) ? $data['recipient_primary_account_number'] : null;
        $this->container['tip_convenience_fee_indicator'] = isset($data['tip_convenience_fee_indicator']) ? $data['tip_convenience_fee_indicator'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['convenience_fee_amount'] = isset($data['convenience_fee_amount']) ? $data['convenience_fee_amount'] : null;
        $this->container['point_of_initiation_method'] = isset($data['point_of_initiation_method']) ? $data['point_of_initiation_method'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['recipient_name'] = isset($data['recipient_name']) ? $data['recipient_name'] : null;
        $this->container['issuer_name'] = isset($data['issuer_name']) ? $data['issuer_name'] : null;
        $this->container['convenience_fee_percentage'] = isset($data['convenience_fee_percentage']) ? $data['convenience_fee_percentage'] : null;
        $this->container['account_look_up_info'] = isset($data['account_look_up_info']) ? $data['account_look_up_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['country'] === null) {
            $invalid_properties[] = "'country' can't be null";
        }
        if ($this->container['recipient_primary_account_number'] === null) {
            $invalid_properties[] = "'recipient_primary_account_number' can't be null";
        }
        if ($this->container['recipient_name'] === null) {
            $invalid_properties[] = "'recipient_name' can't be null";
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

        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['recipient_primary_account_number'] === null) {
            return false;
        }
        if ($this->container['recipient_name'] === null) {
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
     * @param string $city City of the recipient.  Recipient can be a consumer, merchant or agent.
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
     * @param string $merchant_category_code <b>Conditional.</b>  Merchant Category Code. This attribute will only be returned if businessApplicationId=MP, CO
     * @return $this
     */
    public function setMerchantCategoryCode($merchant_category_code)
    {
        $this->container['merchant_category_code'] = $merchant_category_code;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url <b>Optional.</b>  An URL of a landing page that contains participating issuers will be returned to originator if an alias cannot be found in Visa Alias Directory and <b>HTTP status code = 404</b>.  Originator can notify unregistered recipient with this URL so that he/she can select preferred issuer for alias registration.<br><b>Note:</b>This attribute is only applicable to selective markets, originator will receive this URL instead of error JSON response for processing if HTTP status code = 404.  Contact Visa's representative for details.
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @param string $country Country code of the recipient. As defined by ISO 3166.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * @param string $transaction_currency_code <b>Conditional.</b>  This is the transaction currency code that a merchant can accept for payment. This attribute will only be returned if businessApplicationId=MP, CO. As defined by ISO 4217.
     * @return $this
     */
    public function setTransactionCurrencyCode($transaction_currency_code)
    {
        $this->container['transaction_currency_code'] = $transaction_currency_code;

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
     * @param string $recipient_primary_account_number Depending on the businessApplicationId of the request, this attribute can contain the consumer card number, mVisa merchant ID (16-digit) or mVisa agent ID (16-digit).
     * @return $this
     */
    public function setRecipientPrimaryAccountNumber($recipient_primary_account_number)
    {
        $this->container['recipient_primary_account_number'] = $recipient_primary_account_number;

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
     * @param string $tip_convenience_fee_indicator <b>Conditional.</b> Tip or Convenience Fee Indicator. This attribute will only be returned if businessApplicationId=MP.
     * @return $this
     */
    public function setTipConvenienceFeeIndicator($tip_convenience_fee_indicator)
    {
        $this->container['tip_convenience_fee_indicator'] = $tip_convenience_fee_indicator;

        return $this;
    }

    /**
     * Gets card_type
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     * @param string $card_type <b>Conditional.</b>  Card type description. Reference to Field 62.23 ??? Product ID of available card products. e.g. Visa Platinum. Only applicable if businessApplicationId = ???PP??? or ???CI???
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

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
     * @param string $convenience_fee_amount <b>Conditional.</b>  The convenience fee of a fixed amount. The format of the amount is the same as defined in tag 54. Convenience amount as provided by merchant shall be passed in Field 28 of ISO or transactionFeeAmt of API message, in the Visa specifications. This attribute will only be returned if businessApplicationId=MP.
     * @return $this
     */
    public function setConvenienceFeeAmount($convenience_fee_amount)
    {
        $this->container['convenience_fee_amount'] = $convenience_fee_amount;

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
     * @param string $point_of_initiation_method <b>Conditional.</b> In this two-digit field, the first character indicates the method by which the data is presented by the merchant. The second character indicates whether the data is static or dynamic. Static data refers to a situation wherein same data is presented for every transaction unlike a dynamic data wherein the information is specific to a transaction. <br>1st Character: <br>???1??? = QR <br>???2??? = BLE <br>???3??? = NFC <br>???4???-???9??? = Reserved for future use <br><br>2nd Character: <br>???1??? = Static <br>???2??? = Dynamic <br>???3???-???9??? = Reserved for future use <br><br>Example: ???11??? indicates QR static code, ???12??? indicates QR dynamic code <br>This attribute will only be returned if businessApplicationId=MP, CO
     * @return $this
     */
    public function setPointOfInitiationMethod($point_of_initiation_method)
    {
        $this->container['point_of_initiation_method'] = $point_of_initiation_method;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param string $postal_code Postal Code of the recipient. Recipient can be a consumer, merchant or agent.
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

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
     * @param string $recipient_name Depending on the businessApplicationId of the request, this attribute can contain the consumer name, merchant name or agent name. Regarding consumer name, this is composed of consumer???s first, middle and last name
     * @return $this
     */
    public function setRecipientName($recipient_name)
    {
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets issuer_name
     * @return string
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /**
     * Sets issuer_name
     * @param string $issuer_name <b>Conditional.</b>  This is the issuer name of recipient???s card. Only applicable if businessApplicationId = ???PP??? or ???CI???
     * @return $this
     */
    public function setIssuerName($issuer_name)
    {
        $this->container['issuer_name'] = $issuer_name;

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
     * @param string $convenience_fee_percentage <b>Conditional.</b> The percentage convenience fee, specified as numeric value from ???00.01??? (for 00.01%) to ???99.99??? (for 99.99%). Originators are required to derive the convenience fee amount and shall pass it in Field 28 of ISO or transactionFeeAmt of API message, in the Visa specifications. This attribute will only be returned if businessApplicationId=MP.
     * @return $this
     */
    public function setConvenienceFeePercentage($convenience_fee_percentage)
    {
        $this->container['convenience_fee_percentage'] = $convenience_fee_percentage;

        return $this;
    }

    /**
     * Gets account_look_up_info
     * @return \alias_100\model\AccountLookUpInfo
     */
    public function getAccountLookUpInfo()
    {
        return $this->container['account_look_up_info'];
    }

    /**
     * Sets account_look_up_info
     * @param \alias_100\model\AccountLookUpInfo $account_look_up_info
     * @return $this
     */
    public function setAccountLookUpInfo($account_look_up_info)
    {
        $this->container['account_look_up_info'] = $account_look_up_info;

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