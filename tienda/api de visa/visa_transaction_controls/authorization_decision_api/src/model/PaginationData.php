<?php
/**
 * PaginationData
 *
 * PHP version 5
 *
 * @category Class
 * @package  pmc_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Authorization API
 *
 * The Authorization Decision API enables an authorization processor to request an authorization decision recommendation based on cardholder rules configured in consumer transaction controls.  In addition, the API enables the authorization processor to update an authorization decision with the actual decision that was rendered.
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

namespace pmc_101\model;

use \ArrayAccess;

/**
 * PaginationData Class Doc Comment
 *
 * @category    Class
 * @description Paging control information - Defaults to startIndex 1, pageLimit 10
 * @package     pmc_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaginationData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'paginationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_index' => 'string',
        'page_limit' => 'string'
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
        'start_index' => 'startIndex',
        'page_limit' => 'pageLimit'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'start_index' => 'setStartIndex',
        'page_limit' => 'setPageLimit'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'start_index' => 'getStartIndex',
        'page_limit' => 'getPageLimit'
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
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : null;
        $this->container['page_limit'] = isset($data['page_limit']) ? $data['page_limit'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['start_index'] === null) {
            $invalid_properties[] = "'start_index' can't be null";
        }
        if ($this->container['page_limit'] === null) {
            $invalid_properties[] = "'page_limit' can't be null";
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

        if ($this->container['start_index'] === null) {
            return false;
        }
        if ($this->container['page_limit'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets start_index
     * @return string
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     * @param string $start_index Page start location - must be numeric, max of 9 digits
     * @return $this
     */
    public function setStartIndex($start_index)
    {
        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets page_limit
     * @return string
     */
    public function getPageLimit()
    {
        return $this->container['page_limit'];
    }

    /**
     * Sets page_limit
     * @param string $page_limit Page size - must be numeric, between 1 to 50
     * @return $this
     */
    public function setPageLimit($page_limit)
    {
        $this->container['page_limit'] = $page_limit;

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
            return json_encode(\pmc_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\pmc_101\ObjectSerializer::sanitizeForSerialization($this));
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