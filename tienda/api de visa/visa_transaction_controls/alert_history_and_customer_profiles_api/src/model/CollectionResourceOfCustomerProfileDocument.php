<?php
/**
 * CollectionResourceOfCustomerProfileDocument
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
 * CollectionResourceOfCustomerProfileDocument Class Doc Comment
 *
 * @category    Class
 * @description OK
 * @package     pmc_105
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CollectionResourceOfCustomerProfileDocument implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CollectionResourceOfCustomerProfileDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'processing_timein_ms' => 'int',
        'received_timestamp' => 'string',
        'resource' => '\pmc_105\model\Resource'
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
        'processing_timein_ms' => 'processingTimeinMs',
        'received_timestamp' => 'receivedTimestamp',
        'resource' => 'resource'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'processing_timein_ms' => 'setProcessingTimeinMs',
        'received_timestamp' => 'setReceivedTimestamp',
        'resource' => 'setResource'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'processing_timein_ms' => 'getProcessingTimeinMs',
        'received_timestamp' => 'getReceivedTimestamp',
        'resource' => 'getResource'
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
        $this->container['processing_timein_ms'] = isset($data['processing_timein_ms']) ? $data['processing_timein_ms'] : null;
        $this->container['received_timestamp'] = isset($data['received_timestamp']) ? $data['received_timestamp'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['processing_timein_ms'] === null) {
            $invalid_properties[] = "'processing_timein_ms' can't be null";
        }
        if ($this->container['received_timestamp'] === null) {
            $invalid_properties[] = "'received_timestamp' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalid_properties[] = "'resource' can't be null";
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

        if ($this->container['processing_timein_ms'] === null) {
            return false;
        }
        if ($this->container['received_timestamp'] === null) {
            return false;
        }
        if ($this->container['resource'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets processing_timein_ms
     * @return int
     */
    public function getProcessingTimeinMs()
    {
        return $this->container['processing_timein_ms'];
    }

    /**
     * Sets processing_timein_ms
     * @param int $processing_timein_ms The processing time in milliseconds
     * @return $this
     */
    public function setProcessingTimeinMs($processing_timein_ms)
    {
        $this->container['processing_timein_ms'] = $processing_timein_ms;

        return $this;
    }

    /**
     * Gets received_timestamp
     * @return string
     */
    public function getReceivedTimestamp()
    {
        return $this->container['received_timestamp'];
    }

    /**
     * Sets received_timestamp
     * @param string $received_timestamp The time the request is received.  Value is in GMT time
     * @return $this
     */
    public function setReceivedTimestamp($received_timestamp)
    {
        $this->container['received_timestamp'] = $received_timestamp;

        return $this;
    }

    /**
     * Gets resource
     * @return \pmc_105\model\Resource
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     * @param \pmc_105\model\Resource $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

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