<?php
/**
 * AlertsEnrollmentDetails
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
 * AlertsEnrollmentDetails Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     pmc_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AlertsEnrollmentDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'alertsEnrollmentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'first_name' => 'string',
        'preferred_language' => 'string',
        'last_name' => 'string',
        'default_alerts_preferences' => '\pmc_100\model\DefaultAlertsPreferences',
        'user_identifier' => 'string'
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
        'country_code' => 'countryCode',
        'first_name' => 'firstName',
        'preferred_language' => 'preferredLanguage',
        'last_name' => 'lastName',
        'default_alerts_preferences' => 'defaultAlertsPreferences',
        'user_identifier' => 'userIdentifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'first_name' => 'setFirstName',
        'preferred_language' => 'setPreferredLanguage',
        'last_name' => 'setLastName',
        'default_alerts_preferences' => 'setDefaultAlertsPreferences',
        'user_identifier' => 'setUserIdentifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'first_name' => 'getFirstName',
        'preferred_language' => 'getPreferredLanguage',
        'last_name' => 'getLastName',
        'default_alerts_preferences' => 'getDefaultAlertsPreferences',
        'user_identifier' => 'getUserIdentifier'
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
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['preferred_language'] = isset($data['preferred_language']) ? $data['preferred_language'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['default_alerts_preferences'] = isset($data['default_alerts_preferences']) ? $data['default_alerts_preferences'] : null;
        $this->container['user_identifier'] = isset($data['user_identifier']) ? $data['user_identifier'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['country_code'] === null) {
            $invalid_properties[] = "'country_code' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalid_properties[] = "'first_name' can't be null";
        }
        if ($this->container['preferred_language'] === null) {
            $invalid_properties[] = "'preferred_language' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalid_properties[] = "'last_name' can't be null";
        }
        if ($this->container['default_alerts_preferences'] === null) {
            $invalid_properties[] = "'default_alerts_preferences' can't be null";
        }
        if ($this->container['user_identifier'] === null) {
            $invalid_properties[] = "'user_identifier' can't be null";
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

        if ($this->container['country_code'] === null) {
            return false;
        }
        if ($this->container['first_name'] === null) {
            return false;
        }
        if ($this->container['preferred_language'] === null) {
            return false;
        }
        if ($this->container['last_name'] === null) {
            return false;
        }
        if ($this->container['default_alerts_preferences'] === null) {
            return false;
        }
        if ($this->container['user_identifier'] === null) {
            return false;
        }
        return true;
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
     * @param string $country_code Three letter ISO ALPHA-3 Code.
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name First name of the Customer, Maximum of 25 characters
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets preferred_language
     * @return string
     */
    public function getPreferredLanguage()
    {
        return $this->container['preferred_language'];
    }

    /**
     * Sets preferred_language
     * @param string $preferred_language Language codes supported are en-us (English US) and es-us (Spanish US).
     * @return $this
     */
    public function setPreferredLanguage($preferred_language)
    {
        $this->container['preferred_language'] = $preferred_language;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Last name of the Customer, Maximum of 25 characters
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets default_alerts_preferences
     * @return \pmc_100\model\DefaultAlertsPreferences
     */
    public function getDefaultAlertsPreferences()
    {
        return $this->container['default_alerts_preferences'];
    }

    /**
     * Sets default_alerts_preferences
     * @param \pmc_100\model\DefaultAlertsPreferences $default_alerts_preferences
     * @return $this
     */
    public function setDefaultAlertsPreferences($default_alerts_preferences)
    {
        $this->container['default_alerts_preferences'] = $default_alerts_preferences;

        return $this;
    }

    /**
     * Gets user_identifier
     * @return string
     */
    public function getUserIdentifier()
    {
        return $this->container['user_identifier'];
    }

    /**
     * Sets user_identifier
     * @param string $user_identifier Uniquely identifies the cardholder who is to receive the alert message. The notification Service Provider should use this value to identify an individual and their contact preferences.  The userIdentifier should be a GUID, but at minimum must be unique per enrolling application. It is mandatory for VTC notifications. Maximum of 72 characters
     * @return $this
     */
    public function setUserIdentifier($user_identifier)
    {
        $this->container['user_identifier'] = $user_identifier;

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