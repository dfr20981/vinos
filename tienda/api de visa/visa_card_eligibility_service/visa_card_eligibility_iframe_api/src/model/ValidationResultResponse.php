<?php
/**
 * ValidationResultResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  vces_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visa Card Eligibility iFrame API
 *
 * Visa Card Eligibility Service REST iFrame API
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

namespace vces_101\model;

use \ArrayAccess;

/**
 * ValidationResultResponse Class Doc Comment
 *
 * @category    Class
 * @description returns card elgibility and attributes
 * @package     vces_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ValidationResultResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'validationResultResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bin_indicator' => 'string',
        'acct_fund_srce' => 'string',
        'country_code' => 'string',
        'product_sub_type' => 'string',
        'acct_fund_srce_sub_typ' => 'string',
        'eligibility_level' => 'string',
        'is_eligible' => 'string',
        'card_holder_id' => 'string',
        'correlation_id' => 'string',
        'product_type' => 'string',
        'card_id' => 'string',
        'issuer_bid' => 'string',
        'status_description' => 'string',
        'response_time_stamp' => 'string',
        'status_code' => 'string'
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
        'bin_indicator' => 'binIndicator',
        'acct_fund_srce' => 'acctFundSrce',
        'country_code' => 'countryCode',
        'product_sub_type' => 'productSubType',
        'acct_fund_srce_sub_typ' => 'acctFundSrceSubTyp',
        'eligibility_level' => 'eligibilityLevel',
        'is_eligible' => 'isEligible',
        'card_holder_id' => 'cardHolderId',
        'correlation_id' => 'correlationId',
        'product_type' => 'productType',
        'card_id' => 'cardId',
        'issuer_bid' => 'issuerBid',
        'status_description' => 'statusDescription',
        'response_time_stamp' => 'responseTimeStamp',
        'status_code' => 'statusCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bin_indicator' => 'setBinIndicator',
        'acct_fund_srce' => 'setAcctFundSrce',
        'country_code' => 'setCountryCode',
        'product_sub_type' => 'setProductSubType',
        'acct_fund_srce_sub_typ' => 'setAcctFundSrceSubTyp',
        'eligibility_level' => 'setEligibilityLevel',
        'is_eligible' => 'setIsEligible',
        'card_holder_id' => 'setCardHolderId',
        'correlation_id' => 'setCorrelationId',
        'product_type' => 'setProductType',
        'card_id' => 'setCardId',
        'issuer_bid' => 'setIssuerBid',
        'status_description' => 'setStatusDescription',
        'response_time_stamp' => 'setResponseTimeStamp',
        'status_code' => 'setStatusCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bin_indicator' => 'getBinIndicator',
        'acct_fund_srce' => 'getAcctFundSrce',
        'country_code' => 'getCountryCode',
        'product_sub_type' => 'getProductSubType',
        'acct_fund_srce_sub_typ' => 'getAcctFundSrceSubTyp',
        'eligibility_level' => 'getEligibilityLevel',
        'is_eligible' => 'getIsEligible',
        'card_holder_id' => 'getCardHolderId',
        'correlation_id' => 'getCorrelationId',
        'product_type' => 'getProductType',
        'card_id' => 'getCardId',
        'issuer_bid' => 'getIssuerBid',
        'status_description' => 'getStatusDescription',
        'response_time_stamp' => 'getResponseTimeStamp',
        'status_code' => 'getStatusCode'
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
        $this->container['bin_indicator'] = isset($data['bin_indicator']) ? $data['bin_indicator'] : null;
        $this->container['acct_fund_srce'] = isset($data['acct_fund_srce']) ? $data['acct_fund_srce'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['product_sub_type'] = isset($data['product_sub_type']) ? $data['product_sub_type'] : null;
        $this->container['acct_fund_srce_sub_typ'] = isset($data['acct_fund_srce_sub_typ']) ? $data['acct_fund_srce_sub_typ'] : null;
        $this->container['eligibility_level'] = isset($data['eligibility_level']) ? $data['eligibility_level'] : null;
        $this->container['is_eligible'] = isset($data['is_eligible']) ? $data['is_eligible'] : null;
        $this->container['card_holder_id'] = isset($data['card_holder_id']) ? $data['card_holder_id'] : null;
        $this->container['correlation_id'] = isset($data['correlation_id']) ? $data['correlation_id'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['issuer_bid'] = isset($data['issuer_bid']) ? $data['issuer_bid'] : null;
        $this->container['status_description'] = isset($data['status_description']) ? $data['status_description'] : null;
        $this->container['response_time_stamp'] = isset($data['response_time_stamp']) ? $data['response_time_stamp'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['correlation_id'] === null) {
            $invalid_properties[] = "'correlation_id' can't be null";
        }
        if ($this->container['status_description'] === null) {
            $invalid_properties[] = "'status_description' can't be null";
        }
        if ($this->container['response_time_stamp'] === null) {
            $invalid_properties[] = "'response_time_stamp' can't be null";
        }
        if ($this->container['status_code'] === null) {
            $invalid_properties[] = "'status_code' can't be null";
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

        if ($this->container['correlation_id'] === null) {
            return false;
        }
        if ($this->container['status_description'] === null) {
            return false;
        }
        if ($this->container['response_time_stamp'] === null) {
            return false;
        }
        if ($this->container['status_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bin_indicator
     * @return string
     */
    public function getBinIndicator()
    {
        return $this->container['bin_indicator'];
    }

    /**
     * Sets bin_indicator
     * @param string $bin_indicator Bin Indicator
     * @return $this
     */
    public function setBinIndicator($bin_indicator)
    {
        $this->container['bin_indicator'] = $bin_indicator;

        return $this;
    }

    /**
     * Gets acct_fund_srce
     * @return string
     */
    public function getAcctFundSrce()
    {
        return $this->container['acct_fund_srce'];
    }

    /**
     * Sets acct_fund_srce
     * @param string $acct_fund_srce Account Funding Source
     * @return $this
     */
    public function setAcctFundSrce($acct_fund_srce)
    {
        $this->container['acct_fund_srce'] = $acct_fund_srce;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code 
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets product_sub_type
     * @return string
     */
    public function getProductSubType()
    {
        return $this->container['product_sub_type'];
    }

    /**
     * Sets product_sub_type
     * @param string $product_sub_type 
     * @return $this
     */
    public function setProductSubType($product_sub_type)
    {
        $this->container['product_sub_type'] = $product_sub_type;

        return $this;
    }

    /**
     * Gets acct_fund_srce_sub_typ
     * @return string
     */
    public function getAcctFundSrceSubTyp()
    {
        return $this->container['acct_fund_srce_sub_typ'];
    }

    /**
     * Sets acct_fund_srce_sub_typ
     * @param string $acct_fund_srce_sub_typ Account Funding Source Sub Type
     * @return $this
     */
    public function setAcctFundSrceSubTyp($acct_fund_srce_sub_typ)
    {
        $this->container['acct_fund_srce_sub_typ'] = $acct_fund_srce_sub_typ;

        return $this;
    }

    /**
     * Gets eligibility_level
     * @return string
     */
    public function getEligibilityLevel()
    {
        return $this->container['eligibility_level'];
    }

    /**
     * Sets eligibility_level
     * @param string $eligibility_level Elgibility Level based on levels defined for the program
     * @return $this
     */
    public function setEligibilityLevel($eligibility_level)
    {
        $this->container['eligibility_level'] = $eligibility_level;

        return $this;
    }

    /**
     * Gets is_eligible
     * @return string
     */
    public function getIsEligible()
    {
        return $this->container['is_eligible'];
    }

    /**
     * Sets is_eligible
     * @param string $is_eligible Card is eligible or Ineligible
     * @return $this
     */
    public function setIsEligible($is_eligible)
    {
        $this->container['is_eligible'] = $is_eligible;

        return $this;
    }

    /**
     * Gets card_holder_id
     * @return string
     */
    public function getCardHolderId()
    {
        return $this->container['card_holder_id'];
    }

    /**
     * Sets card_holder_id
     * @param string $card_holder_id CardHolder ID
     * @return $this
     */
    public function setCardHolderId($card_holder_id)
    {
        $this->container['card_holder_id'] = $card_holder_id;

        return $this;
    }

    /**
     * Gets correlation_id
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlation_id'];
    }

    /**
     * Sets correlation_id
     * @param string $correlation_id Status Code
     * @return $this
     */
    public function setCorrelationId($correlation_id)
    {
        $this->container['correlation_id'] = $correlation_id;

        return $this;
    }

    /**
     * Gets product_type
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     * @param string $product_type 
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets card_id
     * @return string
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     * @param string $card_id Distinct Card ID
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets issuer_bid
     * @return string
     */
    public function getIssuerBid()
    {
        return $this->container['issuer_bid'];
    }

    /**
     * Sets issuer_bid
     * @param string $issuer_bid Issuer BID Information
     * @return $this
     */
    public function setIssuerBid($issuer_bid)
    {
        $this->container['issuer_bid'] = $issuer_bid;

        return $this;
    }

    /**
     * Gets status_description
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     * @param string $status_description ..
     * @return $this
     */
    public function setStatusDescription($status_description)
    {
        $this->container['status_description'] = $status_description;

        return $this;
    }

    /**
     * Gets response_time_stamp
     * @return string
     */
    public function getResponseTimeStamp()
    {
        return $this->container['response_time_stamp'];
    }

    /**
     * Sets response_time_stamp
     * @param string $response_time_stamp Time stamp of the request
     * @return $this
     */
    public function setResponseTimeStamp($response_time_stamp)
    {
        $this->container['response_time_stamp'] = $response_time_stamp;

        return $this;
    }

    /**
     * Gets status_code
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     * @param string $status_code Web API response code
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

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
            return json_encode(\vces_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vces_101\ObjectSerializer::sanitizeForSerialization($this));
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