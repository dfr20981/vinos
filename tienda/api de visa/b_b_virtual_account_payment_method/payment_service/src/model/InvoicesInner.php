<?php
/**
 * InvoicesInner
 *
 * PHP version 5
 *
 * @category Class
 * @package  vpa_102
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Payment Service
 *
 * The Payment web service is used for processing payments and sending payment remittance information to the appropriate suppliers.
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

namespace vpa_102\model;

use \ArrayAccess;

/**
 * InvoicesInner Class Doc Comment
 *
 * @category    Class
 * @package     vpa_102
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoicesInner implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'invoices_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference_fields' => 'string',
        'invoice_date' => 'string',
        'purchase_order_date' => 'string',
        'purchase_order_number' => 'string',
        'invoice_amount' => 'string',
        'partial_payment_indicator' => 'string',
        'invoice_number' => 'string'
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
        'reference_fields' => 'referenceFields',
        'invoice_date' => 'invoiceDate',
        'purchase_order_date' => 'purchaseOrderDate',
        'purchase_order_number' => 'purchaseOrderNumber',
        'invoice_amount' => 'invoiceAmount',
        'partial_payment_indicator' => 'partialPaymentIndicator',
        'invoice_number' => 'invoiceNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reference_fields' => 'setReferenceFields',
        'invoice_date' => 'setInvoiceDate',
        'purchase_order_date' => 'setPurchaseOrderDate',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'invoice_amount' => 'setInvoiceAmount',
        'partial_payment_indicator' => 'setPartialPaymentIndicator',
        'invoice_number' => 'setInvoiceNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reference_fields' => 'getReferenceFields',
        'invoice_date' => 'getInvoiceDate',
        'purchase_order_date' => 'getPurchaseOrderDate',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'invoice_amount' => 'getInvoiceAmount',
        'partial_payment_indicator' => 'getPartialPaymentIndicator',
        'invoice_number' => 'getInvoiceNumber'
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
        $this->container['reference_fields'] = isset($data['reference_fields']) ? $data['reference_fields'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['purchase_order_date'] = isset($data['purchase_order_date']) ? $data['purchase_order_date'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['invoice_amount'] = isset($data['invoice_amount']) ? $data['invoice_amount'] : null;
        $this->container['partial_payment_indicator'] = isset($data['partial_payment_indicator']) ? $data['partial_payment_indicator'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
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
     * Gets reference_fields
     * @return string
     */
    public function getReferenceFields()
    {
        return $this->container['reference_fields'];
    }

    /**
     * Sets reference_fields
     * @param string $reference_fields Reference value which the buyer wants to pass as part of the payment. The buyer can send any reference information about the payment as part of this field.  This field value can be optionally included in email notifications to suppliers and in the reconciliation file.
     * @return $this
     */
    public function setReferenceFields($reference_fields)
    {
        $this->container['reference_fields'] = $reference_fields;

        return $this;
    }

    /**
     * Gets invoice_date
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     * @param string $invoice_date This contains the date of the invoice being paid. Format is MM/dd/yy
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets purchase_order_date
     * @return string
     */
    public function getPurchaseOrderDate()
    {
        return $this->container['purchase_order_date'];
    }

    /**
     * Sets purchase_order_date
     * @param string $purchase_order_date This contains the date on which the  purchase order was created. Format is MM/dd/yy
     * @return $this
     */
    public function setPurchaseOrderDate($purchase_order_date)
    {
        $this->container['purchase_order_date'] = $purchase_order_date;

        return $this;
    }

    /**
     * Gets purchase_order_number
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     * @param string $purchase_order_number This contains the purchase order number associated with the invoice.
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets invoice_amount
     * @return string
     */
    public function getInvoiceAmount()
    {
        return $this->container['invoice_amount'];
    }

    /**
     * Sets invoice_amount
     * @param string $invoice_amount Invoice amount. maximum length is 16. Maximum number of decimals is two.Format is XXXXXXXXXX9999.99
     * @return $this
     */
    public function setInvoiceAmount($invoice_amount)
    {
        $this->container['invoice_amount'] = $invoice_amount;

        return $this;
    }

    /**
     * Gets partial_payment_indicator
     * @return string
     */
    public function getPartialPaymentIndicator()
    {
        return $this->container['partial_payment_indicator'];
    }

    /**
     * Sets partial_payment_indicator
     * @param string $partial_payment_indicator This field is used to indicate a partial payment. Valid values are Yes, No
     * @return $this
     */
    public function setPartialPaymentIndicator($partial_payment_indicator)
    {
        $this->container['partial_payment_indicator'] = $partial_payment_indicator;

        return $this;
    }

    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param string $invoice_number Invoice Number.
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

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
            return json_encode(\vpa_102\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vpa_102\ObjectSerializer::sanitizeForSerialization($this));
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