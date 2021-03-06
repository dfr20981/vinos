<?php
/**
 * MerchantVerificationValue
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
 * MerchantVerificationValue Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     mvrf_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchantVerificationValue implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'merchantVerificationValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mvv_acquirer_assigned' => 'string',
        'mvv_visa_assigned' => 'string'
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
        'mvv_acquirer_assigned' => 'mvvAcquirerAssigned',
        'mvv_visa_assigned' => 'mvvVisaAssigned'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'mvv_acquirer_assigned' => 'setMvvAcquirerAssigned',
        'mvv_visa_assigned' => 'setMvvVisaAssigned'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'mvv_acquirer_assigned' => 'getMvvAcquirerAssigned',
        'mvv_visa_assigned' => 'getMvvVisaAssigned'
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
        $this->container['mvv_acquirer_assigned'] = isset($data['mvv_acquirer_assigned']) ? $data['mvv_acquirer_assigned'] : null;
        $this->container['mvv_visa_assigned'] = isset($data['mvv_visa_assigned']) ? $data['mvv_visa_assigned'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['mvv_acquirer_assigned'] === null) {
            $invalid_properties[] = "'mvv_acquirer_assigned' can't be null";
        }
        if ($this->container['mvv_visa_assigned'] === null) {
            $invalid_properties[] = "'mvv_visa_assigned' can't be null";
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

        if ($this->container['mvv_acquirer_assigned'] === null) {
            return false;
        }
        if ($this->container['mvv_visa_assigned'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets mvv_acquirer_assigned
     * @return string
     */
    public function getMvvAcquirerAssigned()
    {
        return $this->container['mvv_acquirer_assigned'];
    }

    /**
     * Sets mvv_acquirer_assigned
     * @param string $mvv_acquirer_assigned Visa assists the acquirer in assigning the last four. E.g. 98FC
     * @return $this
     */
    public function setMvvAcquirerAssigned($mvv_acquirer_assigned)
    {
        $this->container['mvv_acquirer_assigned'] = $mvv_acquirer_assigned;

        return $this;
    }

    /**
     * Gets mvv_visa_assigned
     * @return string
     */
    public function getMvvVisaAssigned()
    {
        return $this->container['mvv_visa_assigned'];
    }

    /**
     * Sets mvv_visa_assigned
     * @param string $mvv_visa_assigned Visa assigned MVV value. E.g. 0A45AF
     * @return $this
     */
    public function setMvvVisaAssigned($mvv_visa_assigned)
    {
        $this->container['mvv_visa_assigned'] = $mvv_visa_assigned;

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