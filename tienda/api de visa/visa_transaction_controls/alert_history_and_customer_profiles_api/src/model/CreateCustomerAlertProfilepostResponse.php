<?php
/**
 * CreateCustomerAlertProfilepostResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  pmc_105
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alert History and Customer Profiles API
 *
 * The Alert History and Customer Profiles API is used to retrieve alert history information and for issuers using the VTC Alert Delivery Service to store cardholder contact information.
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

namespace pmc_105\model;

use \ArrayAccess;

/**
 * CreateCustomerAlertProfilepostResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     pmc_105
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCustomerAlertProfilepostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createCustomerAlertProfilepostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collection_resource_of_customer_profile_document' => '\pmc_105\model\CollectionResourceOfCustomerProfileDocument',
        'customer_profile_document' => '\pmc_105\model\CustomerProfileDocument'
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
        'collection_resource_of_customer_profile_document' => 'CollectionResourceOfCustomerProfileDocument',
        'customer_profile_document' => 'CustomerProfileDocument'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'collection_resource_of_customer_profile_document' => 'setCollectionResourceOfCustomerProfileDocument',
        'customer_profile_document' => 'setCustomerProfileDocument'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'collection_resource_of_customer_profile_document' => 'getCollectionResourceOfCustomerProfileDocument',
        'customer_profile_document' => 'getCustomerProfileDocument'
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
        $this->container['collection_resource_of_customer_profile_document'] = isset($data['collection_resource_of_customer_profile_document']) ? $data['collection_resource_of_customer_profile_document'] : null;
        $this->container['customer_profile_document'] = isset($data['customer_profile_document']) ? $data['customer_profile_document'] : null;
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
     * Gets collection_resource_of_customer_profile_document
     * @return \pmc_105\model\CollectionResourceOfCustomerProfileDocument
     */
    public function getCollectionResourceOfCustomerProfileDocument()
    {
        return $this->container['collection_resource_of_customer_profile_document'];
    }

    /**
     * Sets collection_resource_of_customer_profile_document
     * @param \pmc_105\model\CollectionResourceOfCustomerProfileDocument $collection_resource_of_customer_profile_document
     * @return $this
     */
    public function setCollectionResourceOfCustomerProfileDocument($collection_resource_of_customer_profile_document)
    {
        $this->container['collection_resource_of_customer_profile_document'] = $collection_resource_of_customer_profile_document;

        return $this;
    }

    /**
     * Gets customer_profile_document
     * @return \pmc_105\model\CustomerProfileDocument
     */
    public function getCustomerProfileDocument()
    {
        return $this->container['customer_profile_document'];
    }

    /**
     * Sets customer_profile_document
     * @param \pmc_105\model\CustomerProfileDocument $customer_profile_document
     * @return $this
     */
    public function setCustomerProfileDocument($customer_profile_document)
    {
        $this->container['customer_profile_document'] = $customer_profile_document;

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
            return json_encode(\pmc_105\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\pmc_105\ObjectSerializer::sanitizeForSerialization($this));
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