<?php
/**
 * RetrieveOffersByOfferIdgetResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  vmorc_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Offers Data API
 *
 * The Offers Data API provides developers a quick and easy way to retrieve offer information from VMORC. The API allows you to retrieve all your available offers or retrieve specific offers. In an offer-specific request, you may choose to filter your accessible offers by certain offer attributes or you may request for offers by its identifiers.
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

namespace vmorc_100\model;

use \ArrayAccess;

/**
 * RetrieveOffersByOfferIdgetResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     vmorc_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RetrieveOffersByOfferIdgetResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'retrieveOffersByOfferIdgetResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'returned_results' => 'int',
        'offers' => '\vmorc_100\model\Offers',
        'total_found_results' => 'int',
        'start_index' => 'int'
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
        'returned_results' => 'ReturnedResults',
        'offers' => 'Offers',
        'total_found_results' => 'TotalFoundResults',
        'start_index' => 'StartIndex'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'returned_results' => 'setReturnedResults',
        'offers' => 'setOffers',
        'total_found_results' => 'setTotalFoundResults',
        'start_index' => 'setStartIndex'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'returned_results' => 'getReturnedResults',
        'offers' => 'getOffers',
        'total_found_results' => 'getTotalFoundResults',
        'start_index' => 'getStartIndex'
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
        $this->container['returned_results'] = isset($data['returned_results']) ? $data['returned_results'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
        $this->container['total_found_results'] = isset($data['total_found_results']) ? $data['total_found_results'] : null;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : null;
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
     * Gets returned_results
     * @return int
     */
    public function getReturnedResults()
    {
        return $this->container['returned_results'];
    }

    /**
     * Sets returned_results
     * @param int $returned_results The number of offers returned in the offer reponse. A maximum of 500 offers are returned
     * @return $this
     */
    public function setReturnedResults($returned_results)
    {
        $this->container['returned_results'] = $returned_results;

        return $this;
    }

    /**
     * Gets offers
     * @return \vmorc_100\model\Offers
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     * @param \vmorc_100\model\Offers $offers
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets total_found_results
     * @return int
     */
    public function getTotalFoundResults()
    {
        return $this->container['total_found_results'];
    }

    /**
     * Sets total_found_results
     * @param int $total_found_results The total number of offers that match the request
     * @return $this
     */
    public function setTotalFoundResults($total_found_results)
    {
        $this->container['total_found_results'] = $total_found_results;

        return $this;
    }

    /**
     * Gets start_index
     * @return int
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     * @param int $start_index The index at which the offer response begins. The value corresponds with the start_index parameter. If it was not provided, defaults to 1
     * @return $this
     */
    public function setStartIndex($start_index)
    {
        $this->container['start_index'] = $start_index;

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
            return json_encode(\vmorc_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vmorc_100\ObjectSerializer::sanitizeForSerialization($this));
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