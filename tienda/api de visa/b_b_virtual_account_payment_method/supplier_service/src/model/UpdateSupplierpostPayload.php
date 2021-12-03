<?php
/**
 * UpdateSupplierpostPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  vpa_101
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier Service
 *
 * The Supplier web service is used for creating and maintaining a supplier.
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

namespace vpa_101\model;

use \ArrayAccess;

/**
 * UpdateSupplierpostPayload Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     vpa_101
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateSupplierpostPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'updateSupplierpostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'supplier_date' => 'string',
        'invoice_attachment_required' => 'string',
        'supplier_state' => 'string',
        'supplier_language' => 'string',
        'client_id' => 'string',
        'security_answers' => '\vpa_101\model\SecurityAnswers',
        'supplier_type' => 'string',
        'supplier_id' => 'string',
        'supplier_postal_code' => 'string',
        'reminder_notification_required' => 'string',
        'buyer_id' => 'string',
        'supplier_address_line2' => 'string',
        'supplier_address_line1' => 'string',
        'alternate_email_addresses' => '\vpa_101\model\AlternateEmailAddresses',
        'payment_control_required' => 'string',
        'default_currency_code' => 'string',
        'supplier_country_code' => 'string',
        'supplier_gl_code' => 'string',
        'payment_expiration_days' => 'string',
        'stp_id' => 'string',
        'security_code_required' => 'string',
        'reminder_notification_days' => 'string',
        'primary_email_address' => 'string',
        'message_id' => 'string',
        'supplier_city' => 'string',
        'enable_pin' => 'string',
        'supplier_name' => 'string'
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
        'supplier_date' => 'supplierDate',
        'invoice_attachment_required' => 'invoiceAttachmentRequired',
        'supplier_state' => 'supplierState',
        'supplier_language' => 'supplierLanguage',
        'client_id' => 'clientId',
        'security_answers' => 'securityAnswers',
        'supplier_type' => 'supplierType',
        'supplier_id' => 'supplierId',
        'supplier_postal_code' => 'supplierPostalCode',
        'reminder_notification_required' => 'reminderNotificationRequired',
        'buyer_id' => 'buyerId',
        'supplier_address_line2' => 'supplierAddressLine2',
        'supplier_address_line1' => 'supplierAddressLine1',
        'alternate_email_addresses' => 'alternateEmailAddresses',
        'payment_control_required' => 'paymentControlRequired',
        'default_currency_code' => 'defaultCurrencyCode',
        'supplier_country_code' => 'supplierCountryCode',
        'supplier_gl_code' => 'supplierGLCode',
        'payment_expiration_days' => 'paymentExpirationDays',
        'stp_id' => 'stpId',
        'security_code_required' => 'securityCodeRequired',
        'reminder_notification_days' => 'reminderNotificationDays',
        'primary_email_address' => 'primaryEmailAddress',
        'message_id' => 'messageId',
        'supplier_city' => 'supplierCity',
        'enable_pin' => 'enablePin',
        'supplier_name' => 'supplierName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'supplier_date' => 'setSupplierDate',
        'invoice_attachment_required' => 'setInvoiceAttachmentRequired',
        'supplier_state' => 'setSupplierState',
        'supplier_language' => 'setSupplierLanguage',
        'client_id' => 'setClientId',
        'security_answers' => 'setSecurityAnswers',
        'supplier_type' => 'setSupplierType',
        'supplier_id' => 'setSupplierId',
        'supplier_postal_code' => 'setSupplierPostalCode',
        'reminder_notification_required' => 'setReminderNotificationRequired',
        'buyer_id' => 'setBuyerId',
        'supplier_address_line2' => 'setSupplierAddressLine2',
        'supplier_address_line1' => 'setSupplierAddressLine1',
        'alternate_email_addresses' => 'setAlternateEmailAddresses',
        'payment_control_required' => 'setPaymentControlRequired',
        'default_currency_code' => 'setDefaultCurrencyCode',
        'supplier_country_code' => 'setSupplierCountryCode',
        'supplier_gl_code' => 'setSupplierGlCode',
        'payment_expiration_days' => 'setPaymentExpirationDays',
        'stp_id' => 'setStpId',
        'security_code_required' => 'setSecurityCodeRequired',
        'reminder_notification_days' => 'setReminderNotificationDays',
        'primary_email_address' => 'setPrimaryEmailAddress',
        'message_id' => 'setMessageId',
        'supplier_city' => 'setSupplierCity',
        'enable_pin' => 'setEnablePin',
        'supplier_name' => 'setSupplierName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'supplier_date' => 'getSupplierDate',
        'invoice_attachment_required' => 'getInvoiceAttachmentRequired',
        'supplier_state' => 'getSupplierState',
        'supplier_language' => 'getSupplierLanguage',
        'client_id' => 'getClientId',
        'security_answers' => 'getSecurityAnswers',
        'supplier_type' => 'getSupplierType',
        'supplier_id' => 'getSupplierId',
        'supplier_postal_code' => 'getSupplierPostalCode',
        'reminder_notification_required' => 'getReminderNotificationRequired',
        'buyer_id' => 'getBuyerId',
        'supplier_address_line2' => 'getSupplierAddressLine2',
        'supplier_address_line1' => 'getSupplierAddressLine1',
        'alternate_email_addresses' => 'getAlternateEmailAddresses',
        'payment_control_required' => 'getPaymentControlRequired',
        'default_currency_code' => 'getDefaultCurrencyCode',
        'supplier_country_code' => 'getSupplierCountryCode',
        'supplier_gl_code' => 'getSupplierGlCode',
        'payment_expiration_days' => 'getPaymentExpirationDays',
        'stp_id' => 'getStpId',
        'security_code_required' => 'getSecurityCodeRequired',
        'reminder_notification_days' => 'getReminderNotificationDays',
        'primary_email_address' => 'getPrimaryEmailAddress',
        'message_id' => 'getMessageId',
        'supplier_city' => 'getSupplierCity',
        'enable_pin' => 'getEnablePin',
        'supplier_name' => 'getSupplierName'
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
        $this->container['supplier_date'] = isset($data['supplier_date']) ? $data['supplier_date'] : null;
        $this->container['invoice_attachment_required'] = isset($data['invoice_attachment_required']) ? $data['invoice_attachment_required'] : null;
        $this->container['supplier_state'] = isset($data['supplier_state']) ? $data['supplier_state'] : null;
        $this->container['supplier_language'] = isset($data['supplier_language']) ? $data['supplier_language'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['security_answers'] = isset($data['security_answers']) ? $data['security_answers'] : null;
        $this->container['supplier_type'] = isset($data['supplier_type']) ? $data['supplier_type'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['supplier_postal_code'] = isset($data['supplier_postal_code']) ? $data['supplier_postal_code'] : null;
        $this->container['reminder_notification_required'] = isset($data['reminder_notification_required']) ? $data['reminder_notification_required'] : null;
        $this->container['buyer_id'] = isset($data['buyer_id']) ? $data['buyer_id'] : null;
        $this->container['supplier_address_line2'] = isset($data['supplier_address_line2']) ? $data['supplier_address_line2'] : null;
        $this->container['supplier_address_line1'] = isset($data['supplier_address_line1']) ? $data['supplier_address_line1'] : null;
        $this->container['alternate_email_addresses'] = isset($data['alternate_email_addresses']) ? $data['alternate_email_addresses'] : null;
        $this->container['payment_control_required'] = isset($data['payment_control_required']) ? $data['payment_control_required'] : null;
        $this->container['default_currency_code'] = isset($data['default_currency_code']) ? $data['default_currency_code'] : null;
        $this->container['supplier_country_code'] = isset($data['supplier_country_code']) ? $data['supplier_country_code'] : null;
        $this->container['supplier_gl_code'] = isset($data['supplier_gl_code']) ? $data['supplier_gl_code'] : null;
        $this->container['payment_expiration_days'] = isset($data['payment_expiration_days']) ? $data['payment_expiration_days'] : null;
        $this->container['stp_id'] = isset($data['stp_id']) ? $data['stp_id'] : null;
        $this->container['security_code_required'] = isset($data['security_code_required']) ? $data['security_code_required'] : null;
        $this->container['reminder_notification_days'] = isset($data['reminder_notification_days']) ? $data['reminder_notification_days'] : null;
        $this->container['primary_email_address'] = isset($data['primary_email_address']) ? $data['primary_email_address'] : null;
        $this->container['message_id'] = isset($data['message_id']) ? $data['message_id'] : null;
        $this->container['supplier_city'] = isset($data['supplier_city']) ? $data['supplier_city'] : null;
        $this->container['enable_pin'] = isset($data['enable_pin']) ? $data['enable_pin'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['client_id'] === null) {
            $invalid_properties[] = "'client_id' can't be null";
        }
        if ($this->container['supplier_id'] === null) {
            $invalid_properties[] = "'supplier_id' can't be null";
        }
        if ($this->container['buyer_id'] === null) {
            $invalid_properties[] = "'buyer_id' can't be null";
        }
        if ($this->container['message_id'] === null) {
            $invalid_properties[] = "'message_id' can't be null";
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

        if ($this->container['client_id'] === null) {
            return false;
        }
        if ($this->container['supplier_id'] === null) {
            return false;
        }
        if ($this->container['buyer_id'] === null) {
            return false;
        }
        if ($this->container['message_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets supplier_date
     * @return string
     */
    public function getSupplierDate()
    {
        return $this->container['supplier_date'];
    }

    /**
     * Sets supplier_date
     * @param string $supplier_date This field contains the Supplier Date Format. This is a mandatory field, if an empty value is supplied VPA will default the value to the Buyer’s date format. The valid values are   ● MMDDYYYY     ● DDMMYYYY     ● YYYYMMDD      ● DD/MM/YYYY     ● DD/MM/YY       ● YYYY/MM/DD     ● YY/MM/DD       ● MM/DD/YYYY     ● MM/DD/YY      ● DD/MMM/YYYY     ● DD/MMM/YY      ● YYYY/MMM/DD      ● YY/MMM/DD       ● MMM/DD/YYYY      ● MMMM/DD/YY      ● DD-MM-YYYY     ● DD-MM-YY     ● YYYY-MM-DD      ● YY-MM-DD      ● MM-DD-YYYY     ● MM-DD-YY     ● DD-MMM-YY      ● DD-MMM-YYYY      ● YYYY-MMM-DD      ● YY-MMM-DD      ● MMM-DD-YYYY     ● MMM-DD-YY
     * @return $this
     */
    public function setSupplierDate($supplier_date)
    {
        $this->container['supplier_date'] = $supplier_date;

        return $this;
    }

    /**
     * Gets invoice_attachment_required
     * @return string
     */
    public function getInvoiceAttachmentRequired()
    {
        return $this->container['invoice_attachment_required'];
    }

    /**
     * Sets invoice_attachment_required
     * @param string $invoice_attachment_required Invoice attachment indicator. Possible values are Y and N. If this field is not passed/set in the WS request then the value of this field is defaulted to N.
     * @return $this
     */
    public function setInvoiceAttachmentRequired($invoice_attachment_required)
    {
        $this->container['invoice_attachment_required'] = $invoice_attachment_required;

        return $this;
    }

    /**
     * Gets supplier_state
     * @return string
     */
    public function getSupplierState()
    {
        return $this->container['supplier_state'];
    }

    /**
     * Sets supplier_state
     * @param string $supplier_state Supplier state.
     * @return $this
     */
    public function setSupplierState($supplier_state)
    {
        $this->container['supplier_state'] = $supplier_state;

        return $this;
    }

    /**
     * Gets supplier_language
     * @return string
     */
    public function getSupplierLanguage()
    {
        return $this->container['supplier_language'];
    }

    /**
     * Sets supplier_language
     * @param string $supplier_language Supplier language. The valid values and corresponding language are       ● fr_FR- Corresponds to the French language.       ● en_US- Corresponds to the English (US) language.       ● en_GB- Corresponds to the English (UK) language.       ● es_ES- Corresponds to the Spanish language.       ● pt_BR- Corresponds to the Brazilian Portugese language.       ● English- Corresponds to the English (US) language.         ● IntlEnglish- Corresponds to the English (UK) language.       ● French- Corresponds to the French language.       ● SpanishLA- Corresponds to the Spanish language.       ● PortugueseBR- Corresponds to the Brazilian Portugese language.
     * @return $this
     */
    public function setSupplierLanguage($supplier_language)
    {
        $this->container['supplier_language'] = $supplier_language;

        return $this;
    }

    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id Client ID field is a unique identification of the financial institution. This will be provided by Visa at the time of setup.
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets security_answers
     * @return \vpa_101\model\SecurityAnswers
     */
    public function getSecurityAnswers()
    {
        return $this->container['security_answers'];
    }

    /**
     * Sets security_answers
     * @param \vpa_101\model\SecurityAnswers $security_answers
     * @return $this
     */
    public function setSecurityAnswers($security_answers)
    {
        $this->container['security_answers'] = $security_answers;

        return $this;
    }

    /**
     * Gets supplier_type
     * @return string
     */
    public function getSupplierType()
    {
        return $this->container['supplier_type'];
    }

    /**
     * Sets supplier_type
     * @param string $supplier_type Type of supplier. Valid values are ● VPA ● STP
     * @return $this
     */
    public function setSupplierType($supplier_type)
    {
        $this->container['supplier_type'] = $supplier_type;

        return $this;
    }

    /**
     * Gets supplier_id
     * @return string
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     * @param string $supplier_id Identifier used by the buyer to identify the supplier. This has to be unique for a buyer. It cannot contain spaces.
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets supplier_postal_code
     * @return string
     */
    public function getSupplierPostalCode()
    {
        return $this->container['supplier_postal_code'];
    }

    /**
     * Sets supplier_postal_code
     * @param string $supplier_postal_code Supplier postal code. It is mandatory for new suppliers and only if the country mandates it.
     * @return $this
     */
    public function setSupplierPostalCode($supplier_postal_code)
    {
        $this->container['supplier_postal_code'] = $supplier_postal_code;

        return $this;
    }

    /**
     * Gets reminder_notification_required
     * @return string
     */
    public function getReminderNotificationRequired()
    {
        return $this->container['reminder_notification_required'];
    }

    /**
     * Sets reminder_notification_required
     * @param string $reminder_notification_required Indicator to enable the supplier reminder notification feature. Possible values are Y and N. If this is not set or is set to N then reminder notification will not be sent to the supplier before payment expiration. Note If the suppress supplier notification option is enabled for the buyer, the reminder notification is not sent even if this flag is set to Y.
     * @return $this
     */
    public function setReminderNotificationRequired($reminder_notification_required)
    {
        $this->container['reminder_notification_required'] = $reminder_notification_required;

        return $this;
    }

    /**
     * Gets buyer_id
     * @return string
     */
    public function getBuyerId()
    {
        return $this->container['buyer_id'];
    }

    /**
     * Sets buyer_id
     * @param string $buyer_id Buyer ID is the buyer identifier as defined in Visa Payables Automation. Value format is 0–9.
     * @return $this
     */
    public function setBuyerId($buyer_id)
    {
        $this->container['buyer_id'] = $buyer_id;

        return $this;
    }

    /**
     * Gets supplier_address_line2
     * @return string
     */
    public function getSupplierAddressLine2()
    {
        return $this->container['supplier_address_line2'];
    }

    /**
     * Sets supplier_address_line2
     * @param string $supplier_address_line2 Supplier address line 2.
     * @return $this
     */
    public function setSupplierAddressLine2($supplier_address_line2)
    {
        $this->container['supplier_address_line2'] = $supplier_address_line2;

        return $this;
    }

    /**
     * Gets supplier_address_line1
     * @return string
     */
    public function getSupplierAddressLine1()
    {
        return $this->container['supplier_address_line1'];
    }

    /**
     * Sets supplier_address_line1
     * @param string $supplier_address_line1 Supplier address line 1.
     * @return $this
     */
    public function setSupplierAddressLine1($supplier_address_line1)
    {
        $this->container['supplier_address_line1'] = $supplier_address_line1;

        return $this;
    }

    /**
     * Gets alternate_email_addresses
     * @return \vpa_101\model\AlternateEmailAddresses
     */
    public function getAlternateEmailAddresses()
    {
        return $this->container['alternate_email_addresses'];
    }

    /**
     * Sets alternate_email_addresses
     * @param \vpa_101\model\AlternateEmailAddresses $alternate_email_addresses
     * @return $this
     */
    public function setAlternateEmailAddresses($alternate_email_addresses)
    {
        $this->container['alternate_email_addresses'] = $alternate_email_addresses;

        return $this;
    }

    /**
     * Gets payment_control_required
     * @return string
     */
    public function getPaymentControlRequired()
    {
        return $this->container['payment_control_required'];
    }

    /**
     * Sets payment_control_required
     * @param string $payment_control_required Specifies whether the supplier is enabled for payment controls. Valid values are    ● Y    ● N    If this field is not passed/set in the WS request then the value of this field is defaulted to Y if the Default Auth Control is enabled in the buyer profile else it is set to N.
     * @return $this
     */
    public function setPaymentControlRequired($payment_control_required)
    {
        $this->container['payment_control_required'] = $payment_control_required;

        return $this;
    }

    /**
     * Gets default_currency_code
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['default_currency_code'];
    }

    /**
     * Sets default_currency_code
     * @param string $default_currency_code Default currency code. All ISO alpha numerica currency codes will be supported. For example- USD. If default currency code is not provided, buyer currency code is used.  If the currency code supplied is not setup in the allowable currencies in the buyer profile, the request will be rejected.
     * @return $this
     */
    public function setDefaultCurrencyCode($default_currency_code)
    {
        $this->container['default_currency_code'] = $default_currency_code;

        return $this;
    }

    /**
     * Gets supplier_country_code
     * @return string
     */
    public function getSupplierCountryCode()
    {
        return $this->container['supplier_country_code'];
    }

    /**
     * Sets supplier_country_code
     * @param string $supplier_country_code Supplier country code. It is alphanumeric.VPA supports all ISO alpha numeric country code.For example- USA.
     * @return $this
     */
    public function setSupplierCountryCode($supplier_country_code)
    {
        $this->container['supplier_country_code'] = $supplier_country_code;

        return $this;
    }

    /**
     * Gets supplier_gl_code
     * @return string
     */
    public function getSupplierGlCode()
    {
        return $this->container['supplier_gl_code'];
    }

    /**
     * Sets supplier_gl_code
     * @param string $supplier_gl_code Supplier GL code
     * @return $this
     */
    public function setSupplierGlCode($supplier_gl_code)
    {
        $this->container['supplier_gl_code'] = $supplier_gl_code;

        return $this;
    }

    /**
     * Gets payment_expiration_days
     * @return string
     */
    public function getPaymentExpirationDays()
    {
        return $this->container['payment_expiration_days'];
    }

    /**
     * Sets payment_expiration_days
     * @param string $payment_expiration_days Determines the number of days within which a supplier must take his payment to avoid expiration of payment instruction. Its value must be greater than zero.  If this value is not provided, payment expiry days set in the buyer profile is used
     * @return $this
     */
    public function setPaymentExpirationDays($payment_expiration_days)
    {
        $this->container['payment_expiration_days'] = $payment_expiration_days;

        return $this;
    }

    /**
     * Gets stp_id
     * @return string
     */
    public function getStpId()
    {
        return $this->container['stp_id'];
    }

    /**
     * Sets stp_id
     * @param string $stp_id STP ID to be associated with supplier of type STP. Format- 0–9. STPID is required new STP suppliers.  You can get the STPID for the supplier you want to pay using the supplier matching service
     * @return $this
     */
    public function setStpId($stp_id)
    {
        $this->container['stp_id'] = $stp_id;

        return $this;
    }

    /**
     * Gets security_code_required
     * @return string
     */
    public function getSecurityCodeRequired()
    {
        return $this->container['security_code_required'];
    }

    /**
     * Sets security_code_required
     * @param string $security_code_required Specifies whether security code (CVV2) is required for a supplier to collect a payment. Possible values are Y and N. If this field is not passed/set in the WS request then the value of this field is defaulted to \"N\".
     * @return $this
     */
    public function setSecurityCodeRequired($security_code_required)
    {
        $this->container['security_code_required'] = $security_code_required;

        return $this;
    }

    /**
     * Gets reminder_notification_days
     * @return string
     */
    public function getReminderNotificationDays()
    {
        return $this->container['reminder_notification_days'];
    }

    /**
     * Sets reminder_notification_days
     * @param string $reminder_notification_days Specifies how many days before payment expiration will the reminder notification be sent. For example, if this value is set to 4, reminder notification will be sent to the supplier four days before payment expiration. This field is required if the reminder notification required field is set to Y.
     * @return $this
     */
    public function setReminderNotificationDays($reminder_notification_days)
    {
        $this->container['reminder_notification_days'] = $reminder_notification_days;

        return $this;
    }

    /**
     * Gets primary_email_address
     * @return string
     */
    public function getPrimaryEmailAddress()
    {
        return $this->container['primary_email_address'];
    }

    /**
     * Sets primary_email_address
     * @param string $primary_email_address Supplier primary email address. The value is mandatory in case the bank/buyer has the notification indicator set to Y.
     * @return $this
     */
    public function setPrimaryEmailAddress($primary_email_address)
    {
        $this->container['primary_email_address'] = $primary_email_address;

        return $this;
    }

    /**
     * Gets message_id
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     * @param string $message_id Unique identifier for this request.  Each request sent to VPA requires its own unique ID.
     * @return $this
     */
    public function setMessageId($message_id)
    {
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets supplier_city
     * @return string
     */
    public function getSupplierCity()
    {
        return $this->container['supplier_city'];
    }

    /**
     * Sets supplier_city
     * @param string $supplier_city Supplier city.
     * @return $this
     */
    public function setSupplierCity($supplier_city)
    {
        $this->container['supplier_city'] = $supplier_city;

        return $this;
    }

    /**
     * Gets enable_pin
     * @return string
     */
    public function getEnablePin()
    {
        return $this->container['enable_pin'];
    }

    /**
     * Sets enable_pin
     * @param string $enable_pin The EnablePin field is an indicator, which bank and buyer uses to specify if PIN can be enabled at supplier level. A supplier can set a PIN on his account only if EnablePin is set to Y. This field is used only for DPS buyers. This field should be set as Y only if bank and buyer are enabled for PIN.
     * @return $this
     */
    public function setEnablePin($enable_pin)
    {
        $this->container['enable_pin'] = $enable_pin;

        return $this;
    }

    /**
     * Gets supplier_name
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     * @param string $supplier_name Name of supplier to be paid. It is mandatory for new suppliers.
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

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
            return json_encode(\vpa_101\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\vpa_101\ObjectSerializer::sanitizeForSerialization($this));
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