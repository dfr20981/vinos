<?php
/**
 * LoadFundsToCardpostResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  dcas_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Card Services API
 *
 * Manage cardholder’s card and account information, notification settings, and balance information.
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

namespace dcas_101\model;

use \ArrayAccess;

/**
 * LoadFundsToCardpostResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     dcas_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LoadFundsToCardpostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'loadFundsToCardpostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'processing_time_in_ms' => 'int',
        'received_timestamp' => 'string',
        'errors' => 'string',
        'resource' => 'string'
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
        'processing_time_in_ms' => 'processingTimeInMs',
        'received_timestamp' => 'receivedTimestamp',
        'errors' => 'errors',
        'resource' => 'resource'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'processing_time_in_ms' => 'setProcessingTimeInMs',
        'received_timestamp' => 'setReceivedTimestamp',
        'errors' => 'setErrors',
        'resource' => 'setResource'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'processing_time_in_ms' => 'getProcessingTimeInMs',
        'received_timestamp' => 'getReceivedTimestamp',
        'errors' => 'getErrors',
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
        $this->container['processing_time_in_ms'] = isset($data['processing_time_in_ms']) ? $data['processing_time_in_ms'] : null;
        $this->container['received_timestamp'] = isset($data['received_timestamp']) ? $data['received_timestamp'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
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
     * Gets processing_time_in_ms
     * @return int
     */
    public function getProcessingTimeInMs()
    {
        return $this->container['processing_time_in_ms'];
    }

    /**
     * Sets processing_time_in_ms
     * @param int $processing_time_in_ms The time, in milliseconds, taken to process the request.
     * @return $this
     */
    public function setProcessingTimeInMs($processing_time_in_ms)
    {
        $this->container['processing_time_in_ms'] = $processing_time_in_ms;

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
     * @param string $received_timestamp The time the request was received. Value is in GMT.
     * @return $this
     */
    public function setReceivedTimestamp($received_timestamp)
    {
        $this->container['received_timestamp'] = $received_timestamp;

        return $this;
    }

    /**
     * Gets errors
     * @return string
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param string $errors Provides one or more short descriptions in the event of errors.
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets resource
     * @return string
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     * @param string $resource The response data computed from processing the request. Will not be present in the event of an error.
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
            return json_encode(\dcas_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\dcas_101\ObjectSerializer::sanitizeForSerialization($this));
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