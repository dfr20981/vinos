<?php
/**
 * CompanyProfile
 *
 * PHP version 5
 *
 * @category Class
 * @package  vba_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bank API
 *
 * The VISA B2B Connect REST API allows developers to perform operations from a company or bank perspective. The VISA B2B Connect API allows you to create and update profiles or retreive information that is relevant to you.
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

namespace vba_101\model;

use \ArrayAccess;

/**
 * CompanyProfile Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     vba_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanyProfile implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'companyProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'remit_reconcile_profile' => '\vba_101\model\RemitReconcileProfile',
        'bank_account_number' => 'string',
        'default_currency' => 'string',
        'industry_code' => 'string',
        'business_registration_number' => 'string',
        'primary_contact' => '\vba_101\model\PrimaryContact',
        'doing_business_as' => 'string',
        'taxid' => 'string',
        'ownership_details' => '\vba_101\model\OwnershipDetails',
        'swift_lei' => 'string',
        'enterprise_id' => 'string',
        'default_currency_iso_code' => 'int',
        'chips_uid' => 'string',
        'address' => '\vba_101\model\Address',
        'clabe' => 'string',
        'iban' => 'string',
        'bank_routing_number' => 'string',
        'industry_name' => 'string',
        'authorized_signatory' => '\vba_101\model\AuthorizedSignatory',
        'secondary_contact' => '\vba_101\model\SecondaryContact',
        'corporate_legal_name' => 'string'
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
        'remit_reconcile_profile' => 'remitReconcileProfile',
        'bank_account_number' => 'bankAccountNumber',
        'default_currency' => 'defaultCurrency',
        'industry_code' => 'industryCode',
        'business_registration_number' => 'businessRegistrationNumber',
        'primary_contact' => 'primaryContact',
        'doing_business_as' => 'doingBusinessAs',
        'taxid' => 'taxid',
        'ownership_details' => 'ownershipDetails',
        'swift_lei' => 'swiftLEI',
        'enterprise_id' => 'enterpriseId',
        'default_currency_iso_code' => 'defaultCurrencyIsoCode',
        'chips_uid' => 'chipsUid',
        'address' => 'address',
        'clabe' => 'clabe',
        'iban' => 'iban',
        'bank_routing_number' => 'bankRoutingNumber',
        'industry_name' => 'industryName',
        'authorized_signatory' => 'authorizedSignatory',
        'secondary_contact' => 'secondaryContact',
        'corporate_legal_name' => 'corporateLegalName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'remit_reconcile_profile' => 'setRemitReconcileProfile',
        'bank_account_number' => 'setBankAccountNumber',
        'default_currency' => 'setDefaultCurrency',
        'industry_code' => 'setIndustryCode',
        'business_registration_number' => 'setBusinessRegistrationNumber',
        'primary_contact' => 'setPrimaryContact',
        'doing_business_as' => 'setDoingBusinessAs',
        'taxid' => 'setTaxid',
        'ownership_details' => 'setOwnershipDetails',
        'swift_lei' => 'setSwiftLei',
        'enterprise_id' => 'setEnterpriseId',
        'default_currency_iso_code' => 'setDefaultCurrencyIsoCode',
        'chips_uid' => 'setChipsUid',
        'address' => 'setAddress',
        'clabe' => 'setClabe',
        'iban' => 'setIban',
        'bank_routing_number' => 'setBankRoutingNumber',
        'industry_name' => 'setIndustryName',
        'authorized_signatory' => 'setAuthorizedSignatory',
        'secondary_contact' => 'setSecondaryContact',
        'corporate_legal_name' => 'setCorporateLegalName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'remit_reconcile_profile' => 'getRemitReconcileProfile',
        'bank_account_number' => 'getBankAccountNumber',
        'default_currency' => 'getDefaultCurrency',
        'industry_code' => 'getIndustryCode',
        'business_registration_number' => 'getBusinessRegistrationNumber',
        'primary_contact' => 'getPrimaryContact',
        'doing_business_as' => 'getDoingBusinessAs',
        'taxid' => 'getTaxid',
        'ownership_details' => 'getOwnershipDetails',
        'swift_lei' => 'getSwiftLei',
        'enterprise_id' => 'getEnterpriseId',
        'default_currency_iso_code' => 'getDefaultCurrencyIsoCode',
        'chips_uid' => 'getChipsUid',
        'address' => 'getAddress',
        'clabe' => 'getClabe',
        'iban' => 'getIban',
        'bank_routing_number' => 'getBankRoutingNumber',
        'industry_name' => 'getIndustryName',
        'authorized_signatory' => 'getAuthorizedSignatory',
        'secondary_contact' => 'getSecondaryContact',
        'corporate_legal_name' => 'getCorporateLegalName'
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
        $this->container['remit_reconcile_profile'] = isset($data['remit_reconcile_profile']) ? $data['remit_reconcile_profile'] : null;
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['default_currency'] = isset($data['default_currency']) ? $data['default_currency'] : null;
        $this->container['industry_code'] = isset($data['industry_code']) ? $data['industry_code'] : null;
        $this->container['business_registration_number'] = isset($data['business_registration_number']) ? $data['business_registration_number'] : null;
        $this->container['primary_contact'] = isset($data['primary_contact']) ? $data['primary_contact'] : null;
        $this->container['doing_business_as'] = isset($data['doing_business_as']) ? $data['doing_business_as'] : null;
        $this->container['taxid'] = isset($data['taxid']) ? $data['taxid'] : null;
        $this->container['ownership_details'] = isset($data['ownership_details']) ? $data['ownership_details'] : null;
        $this->container['swift_lei'] = isset($data['swift_lei']) ? $data['swift_lei'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['default_currency_iso_code'] = isset($data['default_currency_iso_code']) ? $data['default_currency_iso_code'] : null;
        $this->container['chips_uid'] = isset($data['chips_uid']) ? $data['chips_uid'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['clabe'] = isset($data['clabe']) ? $data['clabe'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bank_routing_number'] = isset($data['bank_routing_number']) ? $data['bank_routing_number'] : null;
        $this->container['industry_name'] = isset($data['industry_name']) ? $data['industry_name'] : null;
        $this->container['authorized_signatory'] = isset($data['authorized_signatory']) ? $data['authorized_signatory'] : null;
        $this->container['secondary_contact'] = isset($data['secondary_contact']) ? $data['secondary_contact'] : null;
        $this->container['corporate_legal_name'] = isset($data['corporate_legal_name']) ? $data['corporate_legal_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['remit_reconcile_profile'] === null) {
            $invalid_properties[] = "'remit_reconcile_profile' can't be null";
        }
        if ($this->container['bank_account_number'] === null) {
            $invalid_properties[] = "'bank_account_number' can't be null";
        }
        if ($this->container['industry_code'] === null) {
            $invalid_properties[] = "'industry_code' can't be null";
        }
        if ($this->container['business_registration_number'] === null) {
            $invalid_properties[] = "'business_registration_number' can't be null";
        }
        if ($this->container['primary_contact'] === null) {
            $invalid_properties[] = "'primary_contact' can't be null";
        }
        if ($this->container['doing_business_as'] === null) {
            $invalid_properties[] = "'doing_business_as' can't be null";
        }
        if ($this->container['ownership_details'] === null) {
            $invalid_properties[] = "'ownership_details' can't be null";
        }
        if ($this->container['swift_lei'] === null) {
            $invalid_properties[] = "'swift_lei' can't be null";
        }
        if ($this->container['default_currency_iso_code'] === null) {
            $invalid_properties[] = "'default_currency_iso_code' can't be null";
        }
        if ($this->container['chips_uid'] === null) {
            $invalid_properties[] = "'chips_uid' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalid_properties[] = "'address' can't be null";
        }
        if ($this->container['clabe'] === null) {
            $invalid_properties[] = "'clabe' can't be null";
        }
        if ($this->container['iban'] === null) {
            $invalid_properties[] = "'iban' can't be null";
        }
        if ($this->container['bank_routing_number'] === null) {
            $invalid_properties[] = "'bank_routing_number' can't be null";
        }
        if ($this->container['authorized_signatory'] === null) {
            $invalid_properties[] = "'authorized_signatory' can't be null";
        }
        if ($this->container['secondary_contact'] === null) {
            $invalid_properties[] = "'secondary_contact' can't be null";
        }
        if ($this->container['corporate_legal_name'] === null) {
            $invalid_properties[] = "'corporate_legal_name' can't be null";
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

        if ($this->container['remit_reconcile_profile'] === null) {
            return false;
        }
        if ($this->container['bank_account_number'] === null) {
            return false;
        }
        if ($this->container['industry_code'] === null) {
            return false;
        }
        if ($this->container['business_registration_number'] === null) {
            return false;
        }
        if ($this->container['primary_contact'] === null) {
            return false;
        }
        if ($this->container['doing_business_as'] === null) {
            return false;
        }
        if ($this->container['ownership_details'] === null) {
            return false;
        }
        if ($this->container['swift_lei'] === null) {
            return false;
        }
        if ($this->container['default_currency_iso_code'] === null) {
            return false;
        }
        if ($this->container['chips_uid'] === null) {
            return false;
        }
        if ($this->container['address'] === null) {
            return false;
        }
        if ($this->container['clabe'] === null) {
            return false;
        }
        if ($this->container['iban'] === null) {
            return false;
        }
        if ($this->container['bank_routing_number'] === null) {
            return false;
        }
        if ($this->container['authorized_signatory'] === null) {
            return false;
        }
        if ($this->container['secondary_contact'] === null) {
            return false;
        }
        if ($this->container['corporate_legal_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets remit_reconcile_profile
     * @return \vba_101\model\RemitReconcileProfile
     */
    public function getRemitReconcileProfile()
    {
        return $this->container['remit_reconcile_profile'];
    }

    /**
     * Sets remit_reconcile_profile
     * @param \vba_101\model\RemitReconcileProfile $remit_reconcile_profile
     * @return $this
     */
    public function setRemitReconcileProfile($remit_reconcile_profile)
    {
        $this->container['remit_reconcile_profile'] = $remit_reconcile_profile;

        return $this;
    }

    /**
     * Gets bank_account_number
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     * @param string $bank_account_number 
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {
        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets default_currency
     * @return string
     */
    public function getDefaultCurrency()
    {
        return $this->container['default_currency'];
    }

    /**
     * Sets default_currency
     * @param string $default_currency 
     * @return $this
     */
    public function setDefaultCurrency($default_currency)
    {
        $this->container['default_currency'] = $default_currency;

        return $this;
    }

    /**
     * Gets industry_code
     * @return string
     */
    public function getIndustryCode()
    {
        return $this->container['industry_code'];
    }

    /**
     * Sets industry_code
     * @param string $industry_code 
     * @return $this
     */
    public function setIndustryCode($industry_code)
    {
        $this->container['industry_code'] = $industry_code;

        return $this;
    }

    /**
     * Gets business_registration_number
     * @return string
     */
    public function getBusinessRegistrationNumber()
    {
        return $this->container['business_registration_number'];
    }

    /**
     * Sets business_registration_number
     * @param string $business_registration_number 
     * @return $this
     */
    public function setBusinessRegistrationNumber($business_registration_number)
    {
        $this->container['business_registration_number'] = $business_registration_number;

        return $this;
    }

    /**
     * Gets primary_contact
     * @return \vba_101\model\PrimaryContact
     */
    public function getPrimaryContact()
    {
        return $this->container['primary_contact'];
    }

    /**
     * Sets primary_contact
     * @param \vba_101\model\PrimaryContact $primary_contact
     * @return $this
     */
    public function setPrimaryContact($primary_contact)
    {
        $this->container['primary_contact'] = $primary_contact;

        return $this;
    }

    /**
     * Gets doing_business_as
     * @return string
     */
    public function getDoingBusinessAs()
    {
        return $this->container['doing_business_as'];
    }

    /**
     * Sets doing_business_as
     * @param string $doing_business_as 
     * @return $this
     */
    public function setDoingBusinessAs($doing_business_as)
    {
        $this->container['doing_business_as'] = $doing_business_as;

        return $this;
    }

    /**
     * Gets taxid
     * @return string
     */
    public function getTaxid()
    {
        return $this->container['taxid'];
    }

    /**
     * Sets taxid
     * @param string $taxid 
     * @return $this
     */
    public function setTaxid($taxid)
    {
        $this->container['taxid'] = $taxid;

        return $this;
    }

    /**
     * Gets ownership_details
     * @return \vba_101\model\OwnershipDetails
     */
    public function getOwnershipDetails()
    {
        return $this->container['ownership_details'];
    }

    /**
     * Sets ownership_details
     * @param \vba_101\model\OwnershipDetails $ownership_details
     * @return $this
     */
    public function setOwnershipDetails($ownership_details)
    {
        $this->container['ownership_details'] = $ownership_details;

        return $this;
    }

    /**
     * Gets swift_lei
     * @return string
     */
    public function getSwiftLei()
    {
        return $this->container['swift_lei'];
    }

    /**
     * Sets swift_lei
     * @param string $swift_lei 
     * @return $this
     */
    public function setSwiftLei($swift_lei)
    {
        $this->container['swift_lei'] = $swift_lei;

        return $this;
    }

    /**
     * Gets enterprise_id
     * @return string
     */
    public function getEnterpriseId()
    {
        return $this->container['enterprise_id'];
    }

    /**
     * Sets enterprise_id
     * @param string $enterprise_id 
     * @return $this
     */
    public function setEnterpriseId($enterprise_id)
    {
        $this->container['enterprise_id'] = $enterprise_id;

        return $this;
    }

    /**
     * Gets default_currency_iso_code
     * @return int
     */
    public function getDefaultCurrencyIsoCode()
    {
        return $this->container['default_currency_iso_code'];
    }

    /**
     * Sets default_currency_iso_code
     * @param int $default_currency_iso_code 
     * @return $this
     */
    public function setDefaultCurrencyIsoCode($default_currency_iso_code)
    {
        $this->container['default_currency_iso_code'] = $default_currency_iso_code;

        return $this;
    }

    /**
     * Gets chips_uid
     * @return string
     */
    public function getChipsUid()
    {
        return $this->container['chips_uid'];
    }

    /**
     * Sets chips_uid
     * @param string $chips_uid 
     * @return $this
     */
    public function setChipsUid($chips_uid)
    {
        $this->container['chips_uid'] = $chips_uid;

        return $this;
    }

    /**
     * Gets address
     * @return \vba_101\model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \vba_101\model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets clabe
     * @return string
     */
    public function getClabe()
    {
        return $this->container['clabe'];
    }

    /**
     * Sets clabe
     * @param string $clabe 
     * @return $this
     */
    public function setClabe($clabe)
    {
        $this->container['clabe'] = $clabe;

        return $this;
    }

    /**
     * Gets iban
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     * @param string $iban 
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bank_routing_number
     * @return string
     */
    public function getBankRoutingNumber()
    {
        return $this->container['bank_routing_number'];
    }

    /**
     * Sets bank_routing_number
     * @param string $bank_routing_number 
     * @return $this
     */
    public function setBankRoutingNumber($bank_routing_number)
    {
        $this->container['bank_routing_number'] = $bank_routing_number;

        return $this;
    }

    /**
     * Gets industry_name
     * @return string
     */
    public function getIndustryName()
    {
        return $this->container['industry_name'];
    }

    /**
     * Sets industry_name
     * @param string $industry_name 
     * @return $this
     */
    public function setIndustryName($industry_name)
    {
        $this->container['industry_name'] = $industry_name;

        return $this;
    }

    /**
     * Gets authorized_signatory
     * @return \vba_101\model\AuthorizedSignatory
     */
    public function getAuthorizedSignatory()
    {
        return $this->container['authorized_signatory'];
    }

    /**
     * Sets authorized_signatory
     * @param \vba_101\model\AuthorizedSignatory $authorized_signatory
     * @return $this
     */
    public function setAuthorizedSignatory($authorized_signatory)
    {
        $this->container['authorized_signatory'] = $authorized_signatory;

        return $this;
    }

    /**
     * Gets secondary_contact
     * @return \vba_101\model\SecondaryContact
     */
    public function getSecondaryContact()
    {
        return $this->container['secondary_contact'];
    }

    /**
     * Sets secondary_contact
     * @param \vba_101\model\SecondaryContact $secondary_contact
     * @return $this
     */
    public function setSecondaryContact($secondary_contact)
    {
        $this->container['secondary_contact'] = $secondary_contact;

        return $this;
    }

    /**
     * Gets corporate_legal_name
     * @return string
     */
    public function getCorporateLegalName()
    {
        return $this->container['corporate_legal_name'];
    }

    /**
     * Sets corporate_legal_name
     * @param string $corporate_legal_name 
     * @return $this
     */
    public function setCorporateLegalName($corporate_legal_name)
    {
        $this->container['corporate_legal_name'] = $corporate_legal_name;

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
            return json_encode(\vba_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vba_101\ObjectSerializer::sanitizeForSerialization($this));
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