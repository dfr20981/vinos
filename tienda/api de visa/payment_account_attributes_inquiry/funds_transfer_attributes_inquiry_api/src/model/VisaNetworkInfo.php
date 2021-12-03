<?php
/**
 * VisaNetworkInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  ca_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Funds Transfer Attributes Inquiry API
 *
 * The Funds Transfer Attributes Inquiry API is often used with a funds transfer to/from a Visa payment account to determine key characteristics of a recipient card before initiating the transfer like country, card-type, block status, etc.
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

namespace ca_100\model;

use \ArrayAccess;

/**
 * VisaNetworkInfo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ca_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VisaNetworkInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'visaNetworkInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_product_type' => 'string',
        'enhanced_non_money_transfer_oct_domestic' => 'string',
        'geo_restriction_ind' => 'string',
        'card_platform_code' => 'string',
        'card_sub_type_code' => 'string',
        'enhanced_non_money_transfer_oct_cross_border' => 'string',
        'billing_currency_minor_digits' => 'string',
        'enhanced_money_transfer_oct_cross_border' => 'string',
        'basic_money_transfer' => 'string',
        'gambling_oct_domestic' => 'string',
        'enhanced_money_transfer_oct_domestic' => 'string',
        'gambling_oct_cross_border' => 'string',
        'fast_funds_cross_border' => 'string',
        'fast_funds_domestic' => 'string',
        'combo_card_range' => 'string',
        'issuer_name' => 'string',
        'billing_currency' => 'int',
        'basic_non_money_transfer' => 'string',
        'issuer_country_code' => 'string'
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
        'card_product_type' => 'cardProductType',
        'enhanced_non_money_transfer_oct_domestic' => 'enhancedNonMoneyTransferOCTDomestic',
        'geo_restriction_ind' => 'geoRestrictionInd',
        'card_platform_code' => 'cardPlatformCode',
        'card_sub_type_code' => 'cardSubTypeCode',
        'enhanced_non_money_transfer_oct_cross_border' => 'enhancedNonMoneyTransferOCTCrossBorder',
        'billing_currency_minor_digits' => 'billingCurrencyMinorDigits',
        'enhanced_money_transfer_oct_cross_border' => 'enhancedMoneyTransferOCTCrossBorder',
        'basic_money_transfer' => 'basicMoneyTransfer',
        'gambling_oct_domestic' => 'gamblingOCTDomestic',
        'enhanced_money_transfer_oct_domestic' => 'enhancedMoneyTransferOCTDomestic',
        'gambling_oct_cross_border' => 'gamblingOCTCrossBorder',
        'fast_funds_cross_border' => 'fastFundsCrossBorder',
        'fast_funds_domestic' => 'fastFundsDomestic',
        'combo_card_range' => 'comboCardRange',
        'issuer_name' => 'issuerName',
        'billing_currency' => 'billingCurrency',
        'basic_non_money_transfer' => 'basicNonMoneyTransfer',
        'issuer_country_code' => 'issuerCountryCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'card_product_type' => 'setCardProductType',
        'enhanced_non_money_transfer_oct_domestic' => 'setEnhancedNonMoneyTransferOctDomestic',
        'geo_restriction_ind' => 'setGeoRestrictionInd',
        'card_platform_code' => 'setCardPlatformCode',
        'card_sub_type_code' => 'setCardSubTypeCode',
        'enhanced_non_money_transfer_oct_cross_border' => 'setEnhancedNonMoneyTransferOctCrossBorder',
        'billing_currency_minor_digits' => 'setBillingCurrencyMinorDigits',
        'enhanced_money_transfer_oct_cross_border' => 'setEnhancedMoneyTransferOctCrossBorder',
        'basic_money_transfer' => 'setBasicMoneyTransfer',
        'gambling_oct_domestic' => 'setGamblingOctDomestic',
        'enhanced_money_transfer_oct_domestic' => 'setEnhancedMoneyTransferOctDomestic',
        'gambling_oct_cross_border' => 'setGamblingOctCrossBorder',
        'fast_funds_cross_border' => 'setFastFundsCrossBorder',
        'fast_funds_domestic' => 'setFastFundsDomestic',
        'combo_card_range' => 'setComboCardRange',
        'issuer_name' => 'setIssuerName',
        'billing_currency' => 'setBillingCurrency',
        'basic_non_money_transfer' => 'setBasicNonMoneyTransfer',
        'issuer_country_code' => 'setIssuerCountryCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'card_product_type' => 'getCardProductType',
        'enhanced_non_money_transfer_oct_domestic' => 'getEnhancedNonMoneyTransferOctDomestic',
        'geo_restriction_ind' => 'getGeoRestrictionInd',
        'card_platform_code' => 'getCardPlatformCode',
        'card_sub_type_code' => 'getCardSubTypeCode',
        'enhanced_non_money_transfer_oct_cross_border' => 'getEnhancedNonMoneyTransferOctCrossBorder',
        'billing_currency_minor_digits' => 'getBillingCurrencyMinorDigits',
        'enhanced_money_transfer_oct_cross_border' => 'getEnhancedMoneyTransferOctCrossBorder',
        'basic_money_transfer' => 'getBasicMoneyTransfer',
        'gambling_oct_domestic' => 'getGamblingOctDomestic',
        'enhanced_money_transfer_oct_domestic' => 'getEnhancedMoneyTransferOctDomestic',
        'gambling_oct_cross_border' => 'getGamblingOctCrossBorder',
        'fast_funds_cross_border' => 'getFastFundsCrossBorder',
        'fast_funds_domestic' => 'getFastFundsDomestic',
        'combo_card_range' => 'getComboCardRange',
        'issuer_name' => 'getIssuerName',
        'billing_currency' => 'getBillingCurrency',
        'basic_non_money_transfer' => 'getBasicNonMoneyTransfer',
        'issuer_country_code' => 'getIssuerCountryCode'
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
        $this->container['card_product_type'] = isset($data['card_product_type']) ? $data['card_product_type'] : null;
        $this->container['enhanced_non_money_transfer_oct_domestic'] = isset($data['enhanced_non_money_transfer_oct_domestic']) ? $data['enhanced_non_money_transfer_oct_domestic'] : null;
        $this->container['geo_restriction_ind'] = isset($data['geo_restriction_ind']) ? $data['geo_restriction_ind'] : null;
        $this->container['card_platform_code'] = isset($data['card_platform_code']) ? $data['card_platform_code'] : null;
        $this->container['card_sub_type_code'] = isset($data['card_sub_type_code']) ? $data['card_sub_type_code'] : null;
        $this->container['enhanced_non_money_transfer_oct_cross_border'] = isset($data['enhanced_non_money_transfer_oct_cross_border']) ? $data['enhanced_non_money_transfer_oct_cross_border'] : null;
        $this->container['billing_currency_minor_digits'] = isset($data['billing_currency_minor_digits']) ? $data['billing_currency_minor_digits'] : null;
        $this->container['enhanced_money_transfer_oct_cross_border'] = isset($data['enhanced_money_transfer_oct_cross_border']) ? $data['enhanced_money_transfer_oct_cross_border'] : null;
        $this->container['basic_money_transfer'] = isset($data['basic_money_transfer']) ? $data['basic_money_transfer'] : null;
        $this->container['gambling_oct_domestic'] = isset($data['gambling_oct_domestic']) ? $data['gambling_oct_domestic'] : null;
        $this->container['enhanced_money_transfer_oct_domestic'] = isset($data['enhanced_money_transfer_oct_domestic']) ? $data['enhanced_money_transfer_oct_domestic'] : null;
        $this->container['gambling_oct_cross_border'] = isset($data['gambling_oct_cross_border']) ? $data['gambling_oct_cross_border'] : null;
        $this->container['fast_funds_cross_border'] = isset($data['fast_funds_cross_border']) ? $data['fast_funds_cross_border'] : null;
        $this->container['fast_funds_domestic'] = isset($data['fast_funds_domestic']) ? $data['fast_funds_domestic'] : null;
        $this->container['combo_card_range'] = isset($data['combo_card_range']) ? $data['combo_card_range'] : null;
        $this->container['issuer_name'] = isset($data['issuer_name']) ? $data['issuer_name'] : null;
        $this->container['billing_currency'] = isset($data['billing_currency']) ? $data['billing_currency'] : null;
        $this->container['basic_non_money_transfer'] = isset($data['basic_non_money_transfer']) ? $data['basic_non_money_transfer'] : null;
        $this->container['issuer_country_code'] = isset($data['issuer_country_code']) ? $data['issuer_country_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['card_product_type'] === null) {
            $invalid_properties[] = "'card_product_type' can't be null";
        }
        if ($this->container['enhanced_non_money_transfer_oct_domestic'] === null) {
            $invalid_properties[] = "'enhanced_non_money_transfer_oct_domestic' can't be null";
        }
        if ($this->container['card_platform_code'] === null) {
            $invalid_properties[] = "'card_platform_code' can't be null";
        }
        if ($this->container['enhanced_non_money_transfer_oct_cross_border'] === null) {
            $invalid_properties[] = "'enhanced_non_money_transfer_oct_cross_border' can't be null";
        }
        if ($this->container['billing_currency_minor_digits'] === null) {
            $invalid_properties[] = "'billing_currency_minor_digits' can't be null";
        }
        if ($this->container['enhanced_money_transfer_oct_cross_border'] === null) {
            $invalid_properties[] = "'enhanced_money_transfer_oct_cross_border' can't be null";
        }
        if ($this->container['basic_money_transfer'] === null) {
            $invalid_properties[] = "'basic_money_transfer' can't be null";
        }
        if ($this->container['gambling_oct_domestic'] === null) {
            $invalid_properties[] = "'gambling_oct_domestic' can't be null";
        }
        if ($this->container['enhanced_money_transfer_oct_domestic'] === null) {
            $invalid_properties[] = "'enhanced_money_transfer_oct_domestic' can't be null";
        }
        if ($this->container['gambling_oct_cross_border'] === null) {
            $invalid_properties[] = "'gambling_oct_cross_border' can't be null";
        }
        if ($this->container['combo_card_range'] === null) {
            $invalid_properties[] = "'combo_card_range' can't be null";
        }
        if ($this->container['issuer_name'] === null) {
            $invalid_properties[] = "'issuer_name' can't be null";
        }
        if ($this->container['basic_non_money_transfer'] === null) {
            $invalid_properties[] = "'basic_non_money_transfer' can't be null";
        }
        if ($this->container['issuer_country_code'] === null) {
            $invalid_properties[] = "'issuer_country_code' can't be null";
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

        if ($this->container['card_product_type'] === null) {
            return false;
        }
        if ($this->container['enhanced_non_money_transfer_oct_domestic'] === null) {
            return false;
        }
        if ($this->container['card_platform_code'] === null) {
            return false;
        }
        if ($this->container['enhanced_non_money_transfer_oct_cross_border'] === null) {
            return false;
        }
        if ($this->container['billing_currency_minor_digits'] === null) {
            return false;
        }
        if ($this->container['enhanced_money_transfer_oct_cross_border'] === null) {
            return false;
        }
        if ($this->container['basic_money_transfer'] === null) {
            return false;
        }
        if ($this->container['gambling_oct_domestic'] === null) {
            return false;
        }
        if ($this->container['enhanced_money_transfer_oct_domestic'] === null) {
            return false;
        }
        if ($this->container['gambling_oct_cross_border'] === null) {
            return false;
        }
        if ($this->container['combo_card_range'] === null) {
            return false;
        }
        if ($this->container['issuer_name'] === null) {
            return false;
        }
        if ($this->container['basic_non_money_transfer'] === null) {
            return false;
        }
        if ($this->container['issuer_country_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets card_product_type
     * @return string
     */
    public function getCardProductType()
    {
        return $this->container['card_product_type'];
    }

    /**
     * Sets card_product_type
     * @param string $card_product_type The code of account funding source for the card, e.g. Credit, Debit, Prepaid, Charge, Deferred Debit.<br>Refer to <a href=\"/request_response_codes#cardTypeCode\">cardProductType</a></br>
     * @return $this
     */
    public function setCardProductType($card_product_type)
    {
        $this->container['card_product_type'] = $card_product_type;

        return $this;
    }

    /**
     * Gets enhanced_non_money_transfer_oct_domestic
     * @return string
     */
    public function getEnhancedNonMoneyTransferOctDomestic()
    {
        return $this->container['enhanced_non_money_transfer_oct_domestic'];
    }

    /**
     * Sets enhanced_non_money_transfer_oct_domestic
     * @param string $enhanced_non_money_transfer_oct_domestic Indicates whether domestic enhanced non-money transfer OCTs (push funds) are allowed.<br>Y - Domestic enhanced non-money transfer OCTs are allowed.<br>N - Domestic enhanced non-money transfer OCTs are blocked.
     * @return $this
     */
    public function setEnhancedNonMoneyTransferOctDomestic($enhanced_non_money_transfer_oct_domestic)
    {
        $this->container['enhanced_non_money_transfer_oct_domestic'] = $enhanced_non_money_transfer_oct_domestic;

        return $this;
    }

    /**
     * Gets geo_restriction_ind
     * @return string
     */
    public function getGeoRestrictionInd()
    {
        return $this->container['geo_restriction_ind'];
    }

    /**
     * Sets geo_restriction_ind
     * @param string $geo_restriction_ind This field will determine if the recipient issuer can accept transactions from the Originator country. If the value is “Y”, transactions cannot be accepted from the sender country. If the value is “N”, transactions are allowed.
     * @return $this
     */
    public function setGeoRestrictionInd($geo_restriction_ind)
    {
        $this->container['geo_restriction_ind'] = $geo_restriction_ind;

        return $this;
    }

    /**
     * Gets card_platform_code
     * @return string
     */
    public function getCardPlatformCode()
    {
        return $this->container['card_platform_code'];
    }

    /**
     * Sets card_platform_code
     * @param string $card_platform_code Indicates the type of card. This is a 2-character alphabetic code.<br>BZ -  Business.<br>CN -  Consumer.<br>CO -  Commercial.<br>GV -  Government.
     * @return $this
     */
    public function setCardPlatformCode($card_platform_code)
    {
        $this->container['card_platform_code'] = $card_platform_code;

        return $this;
    }

    /**
     * Gets card_sub_type_code
     * @return string
     */
    public function getCardSubTypeCode()
    {
        return $this->container['card_sub_type_code'];
    }

    /**
     * Sets card_sub_type_code
     * @param string $card_sub_type_code Indicates the type of prepaid card. This is a single-character alphabetic code.<br>R -  Reloadable.<br>N -  Non-reloadable.
     * @return $this
     */
    public function setCardSubTypeCode($card_sub_type_code)
    {
        $this->container['card_sub_type_code'] = $card_sub_type_code;

        return $this;
    }

    /**
     * Gets enhanced_non_money_transfer_oct_cross_border
     * @return string
     */
    public function getEnhancedNonMoneyTransferOctCrossBorder()
    {
        return $this->container['enhanced_non_money_transfer_oct_cross_border'];
    }

    /**
     * Sets enhanced_non_money_transfer_oct_cross_border
     * @param string $enhanced_non_money_transfer_oct_cross_border Indicates whether cross-border enhanced non-money transfer OCTs (push funds) are allowed.<br>Y - Cross-border enhanced non-money transfer OCTs are allowed.<br>N - Cross-border enhanced non-money transfer OCTs are blocked.
     * @return $this
     */
    public function setEnhancedNonMoneyTransferOctCrossBorder($enhanced_non_money_transfer_oct_cross_border)
    {
        $this->container['enhanced_non_money_transfer_oct_cross_border'] = $enhanced_non_money_transfer_oct_cross_border;

        return $this;
    }

    /**
     * Gets billing_currency_minor_digits
     * @return string
     */
    public function getBillingCurrencyMinorDigits()
    {
        return $this->container['billing_currency_minor_digits'];
    }

    /**
     * Sets billing_currency_minor_digits
     * @param string $billing_currency_minor_digits Identifies the number of decimal positions that should be present in any amounts for the requested card's billing currency.
     * @return $this
     */
    public function setBillingCurrencyMinorDigits($billing_currency_minor_digits)
    {
        $this->container['billing_currency_minor_digits'] = $billing_currency_minor_digits;

        return $this;
    }

    /**
     * Gets enhanced_money_transfer_oct_cross_border
     * @return string
     */
    public function getEnhancedMoneyTransferOctCrossBorder()
    {
        return $this->container['enhanced_money_transfer_oct_cross_border'];
    }

    /**
     * Sets enhanced_money_transfer_oct_cross_border
     * @param string $enhanced_money_transfer_oct_cross_border Indicates whether cross-border enhanced money transfer OCTs (push funds) are allowed.<br>Y - Cross-border enhanced money transfer OCTs are allowed.<br>N - Cross-border enhanced money transfer OCTs are blocked.
     * @return $this
     */
    public function setEnhancedMoneyTransferOctCrossBorder($enhanced_money_transfer_oct_cross_border)
    {
        $this->container['enhanced_money_transfer_oct_cross_border'] = $enhanced_money_transfer_oct_cross_border;

        return $this;
    }

    /**
     * Gets basic_money_transfer
     * @return string
     */
    public function getBasicMoneyTransfer()
    {
        return $this->container['basic_money_transfer'];
    }

    /**
     * Sets basic_money_transfer
     * @param string $basic_money_transfer Indicates whether basic money transfer OCTs (push funds) are allowed.<br>Y - Basic money transfer OCTs are allowed.<br>N - Basic money transfer OCTs are blocked.
     * @return $this
     */
    public function setBasicMoneyTransfer($basic_money_transfer)
    {
        $this->container['basic_money_transfer'] = $basic_money_transfer;

        return $this;
    }

    /**
     * Gets gambling_oct_domestic
     * @return string
     */
    public function getGamblingOctDomestic()
    {
        return $this->container['gambling_oct_domestic'];
    }

    /**
     * Sets gambling_oct_domestic
     * @param string $gambling_oct_domestic Indicates whether domestic gambling OCTs (push funds) are allowed.<br>Y - Domestic gambling OCTs are allowed.<br>N - Domestic gambling OCTs are blocked.
     * @return $this
     */
    public function setGamblingOctDomestic($gambling_oct_domestic)
    {
        $this->container['gambling_oct_domestic'] = $gambling_oct_domestic;

        return $this;
    }

    /**
     * Gets enhanced_money_transfer_oct_domestic
     * @return string
     */
    public function getEnhancedMoneyTransferOctDomestic()
    {
        return $this->container['enhanced_money_transfer_oct_domestic'];
    }

    /**
     * Sets enhanced_money_transfer_oct_domestic
     * @param string $enhanced_money_transfer_oct_domestic Indicates whether domestic enhanced money transfer OCTs (push funds) are allowed.<br>Y - Domestic enhanced money transfer OCTs are allowed.<br>N - Domestic enhanced money transfer OCTs are blocked.
     * @return $this
     */
    public function setEnhancedMoneyTransferOctDomestic($enhanced_money_transfer_oct_domestic)
    {
        $this->container['enhanced_money_transfer_oct_domestic'] = $enhanced_money_transfer_oct_domestic;

        return $this;
    }

    /**
     * Gets gambling_oct_cross_border
     * @return string
     */
    public function getGamblingOctCrossBorder()
    {
        return $this->container['gambling_oct_cross_border'];
    }

    /**
     * Sets gambling_oct_cross_border
     * @param string $gambling_oct_cross_border Indicates whether cross-border gambling OCTs (push funds) are allowed.<br>Y - Cross-border gambling OCTs are allowed.<br>N - Cross-border gambling OCTs are blocked.
     * @return $this
     */
    public function setGamblingOctCrossBorder($gambling_oct_cross_border)
    {
        $this->container['gambling_oct_cross_border'] = $gambling_oct_cross_border;

        return $this;
    }

    /**
     * Gets fast_funds_cross_border
     * @return string
     */
    public function getFastFundsCrossBorder()
    {
        return $this->container['fast_funds_cross_border'];
    }

    /**
     * Sets fast_funds_cross_border
     * @param string $fast_funds_cross_border Indicates whether the issuer supports fast funds for cross-border enhanced money transfer OCTs (push funds).<br>Y - Cross-border fast funds are supported.<br>N - Cross-border fast funds are not supported.
     * @return $this
     */
    public function setFastFundsCrossBorder($fast_funds_cross_border)
    {
        $this->container['fast_funds_cross_border'] = $fast_funds_cross_border;

        return $this;
    }

    /**
     * Gets fast_funds_domestic
     * @return string
     */
    public function getFastFundsDomestic()
    {
        return $this->container['fast_funds_domestic'];
    }

    /**
     * Sets fast_funds_domestic
     * @param string $fast_funds_domestic Indicates whether the issuer supports fast funds for Domestic enhanced money transfer OCTs (push funds).<br>Y - Domestic fast funds are supported.<br>N - Domestic fast funds are not supported.
     * @return $this
     */
    public function setFastFundsDomestic($fast_funds_domestic)
    {
        $this->container['fast_funds_domestic'] = $fast_funds_domestic;

        return $this;
    }

    /**
     * Gets combo_card_range
     * @return string
     */
    public function getComboCardRange()
    {
        return $this->container['combo_card_range'];
    }

    /**
     * Sets combo_card_range
     * @param string $combo_card_range Indicates the type of Combo card.<br>0 -  Not a Combo card.<br>1 -  Combo card is Credit and Prepaid.<br>2 -  Combo card is Credit and Debit.
     * @return $this
     */
    public function setComboCardRange($combo_card_range)
    {
        $this->container['combo_card_range'] = $combo_card_range;

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
     * @param string $issuer_name Issuer name
     * @return $this
     */
    public function setIssuerName($issuer_name)
    {
        $this->container['issuer_name'] = $issuer_name;

        return $this;
    }

    /**
     * Gets billing_currency
     * @return int
     */
    public function getBillingCurrency()
    {
        return $this->container['billing_currency'];
    }

    /**
     * Sets billing_currency
     * @param int $billing_currency Use a 3-digit numeric currency code for the card billing currency of the PAN.<br>Refer to <a href=\"/request_response_codes#isoCodes\">ISO Codes</a></br>
     * @return $this
     */
    public function setBillingCurrency($billing_currency)
    {
        $this->container['billing_currency'] = $billing_currency;

        return $this;
    }

    /**
     * Gets basic_non_money_transfer
     * @return string
     */
    public function getBasicNonMoneyTransfer()
    {
        return $this->container['basic_non_money_transfer'];
    }

    /**
     * Sets basic_non_money_transfer
     * @param string $basic_non_money_transfer Indicates whether basic non-money transfer OCTs (push funds) are allowed.<br>Y - Basic non-money transfer OCTs are allowed.<br>N - Basic non-money transfer OCTs are blocked.
     * @return $this
     */
    public function setBasicNonMoneyTransfer($basic_non_money_transfer)
    {
        $this->container['basic_non_money_transfer'] = $basic_non_money_transfer;

        return $this;
    }

    /**
     * Gets issuer_country_code
     * @return string
     */
    public function getIssuerCountryCode()
    {
        return $this->container['issuer_country_code'];
    }

    /**
     * Sets issuer_country_code
     * @param string $issuer_country_code Refer to <a href=\"/request_response_codes#iso_country_codes\">ISO Codes</a>
     * @return $this
     */
    public function setIssuerCountryCode($issuer_country_code)
    {
        $this->container['issuer_country_code'] = $issuer_country_code;

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
            return json_encode(\ca_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ca_100\ObjectSerializer::sanitizeForSerialization($this));
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