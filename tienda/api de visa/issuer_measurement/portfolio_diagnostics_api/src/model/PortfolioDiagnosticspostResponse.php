<?php
/**
 * PortfolioDiagnosticspostResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  im_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Portfolio Diagnostics API
 *
 * Deliver Visa’s data insights and other key analytics to our clients through the Visa Developer Platform
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

namespace im_100\model;

use \ArrayAccess;

/**
 * PortfolioDiagnosticspostResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     im_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PortfolioDiagnosticspostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'portfolioDiagnosticspostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => '\im_100\model\Status',
        'request_data' => '\im_100\model\RequestData',
        'response_header' => '\im_100\model\ResponseHeader',
        'response' => '\im_100\model\Response'
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
        'status' => 'status',
        'request_data' => 'requestData',
        'response_header' => 'ResponseHeader',
        'response' => 'response'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'request_data' => 'setRequestData',
        'response_header' => 'setResponseHeader',
        'response' => 'setResponse'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'request_data' => 'getRequestData',
        'response_header' => 'getResponseHeader',
        'response' => 'getResponse'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['request_data'] = isset($data['request_data']) ? $data['request_data'] : null;
        $this->container['response_header'] = isset($data['response_header']) ? $data['response_header'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
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
     * Gets status
     * @return \im_100\model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \im_100\model\Status $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets request_data
     * @return \im_100\model\RequestData
     */
    public function getRequestData()
    {
        return $this->container['request_data'];
    }

    /**
     * Sets request_data
     * @param \im_100\model\RequestData $request_data
     * @return $this
     */
    public function setRequestData($request_data)
    {
        $this->container['request_data'] = $request_data;

        return $this;
    }

    /**
     * Gets response_header
     * @return \im_100\model\ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->container['response_header'];
    }

    /**
     * Sets response_header
     * @param \im_100\model\ResponseHeader $response_header
     * @return $this
     */
    public function setResponseHeader($response_header)
    {
        $this->container['response_header'] = $response_header;

        return $this;
    }

    /**
     * Gets response
     * @return \im_100\model\Response
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     * @param \im_100\model\Response $response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

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
            return json_encode(\im_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\im_100\ObjectSerializer::sanitizeForSerialization($this));
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