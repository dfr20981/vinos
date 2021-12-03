<?php
/**
 * ManageControlsdeletePayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  pmc_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Customer Rules API
 *
 * The Customer Rules API enables consumers to establish control rules that will define the type of transactions they want to Manage.
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

namespace pmc_100\model;

use \ArrayAccess;

/**
 * ManageControlsdeletePayload Class Doc Comment
 *
 * @category    Class
 * @description request
 * @package     pmc_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageControlsdeletePayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'manageControlsdeletePayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'global_controls' => '\pmc_100\model\GlobalControls',
        'merchant_controls' => '\pmc_100\model\MerchantControls',
        'transaction_controls' => '\pmc_100\model\TransactionControls'
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
        'global_controls' => 'globalControls',
        'merchant_controls' => 'merchantControls',
        'transaction_controls' => 'transactionControls'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'global_controls' => 'setGlobalControls',
        'merchant_controls' => 'setMerchantControls',
        'transaction_controls' => 'setTransactionControls'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'global_controls' => 'getGlobalControls',
        'merchant_controls' => 'getMerchantControls',
        'transaction_controls' => 'getTransactionControls'
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
        $this->container['global_controls'] = isset($data['global_controls']) ? $data['global_controls'] : null;
        $this->container['merchant_controls'] = isset($data['merchant_controls']) ? $data['merchant_controls'] : null;
        $this->container['transaction_controls'] = isset($data['transaction_controls']) ? $data['transaction_controls'] : null;
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
     * Gets global_controls
     * @return \pmc_100\model\GlobalControls
     */
    public function getGlobalControls()
    {
        return $this->container['global_controls'];
    }

    /**
     * Sets global_controls
     * @param \pmc_100\model\GlobalControls $global_controls
     * @return $this
     */
    public function setGlobalControls($global_controls)
    {
        $this->container['global_controls'] = $global_controls;

        return $this;
    }

    /**
     * Gets merchant_controls
     * @return \pmc_100\model\MerchantControls
     */
    public function getMerchantControls()
    {
        return $this->container['merchant_controls'];
    }

    /**
     * Sets merchant_controls
     * @param \pmc_100\model\MerchantControls $merchant_controls
     * @return $this
     */
    public function setMerchantControls($merchant_controls)
    {
        $this->container['merchant_controls'] = $merchant_controls;

        return $this;
    }

    /**
     * Gets transaction_controls
     * @return \pmc_100\model\TransactionControls
     */
    public function getTransactionControls()
    {
        return $this->container['transaction_controls'];
    }

    /**
     * Sets transaction_controls
     * @param \pmc_100\model\TransactionControls $transaction_controls
     * @return $this
     */
    public function setTransactionControls($transaction_controls)
    {
        $this->container['transaction_controls'] = $transaction_controls;

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
            return json_encode(\pmc_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\pmc_100\ObjectSerializer::sanitizeForSerialization($this));
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