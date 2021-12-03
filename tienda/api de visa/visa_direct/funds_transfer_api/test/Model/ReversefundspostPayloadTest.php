<?php
/**
 * ReversefundspostPayloadTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ft_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Funds Transfer API
 *
 * The Funds Transfer API can pull funds from the sender&apos;s Visa account (in preparation for pushing funds to a recipient&apos;s account) in an Account Funding Transaction (AFT).  Additionally, the Funds Transfer API also provides functionality to push funds to the recipient&apos;s Visa account in an Original Credit Transaction (OCT).  If a transaction is declined, the Funds Transfer API can also return the funds to the sender&apos;s funding source in an Account Funding Transaction Reversal (AFTR). The API has been enhanced to allow originators to send their PushFundsTransactions(OCTs) and PullFundsTransactions(AFTs) to Visa for routing to multiple U.S. debit networks.
 *
 * OpenAPI spec version: v1
 * Contact: 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace ft_100\modeltest;

/**
 * ReversefundspostPayloadTest Class Doc Comment
 *
 * @category    Class */
// * @description Request body for creating in reverse funds transfer
/**
 * @package     ft_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReversefundspostPayloadTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "ReversefundspostPayload"
     */
    public function testReversefundspostPayload()
    {

    }

    /**
     * Test attribute "business_application_id"
     */
    public function testPropertyBusinessApplicationId()
    {

    }

    /**
     * Test attribute "transaction_identifier"
     */
    public function testPropertyTransactionIdentifier()
    {

    }

    /**
     * Test attribute "card_acceptor"
     */
    public function testPropertyCardAcceptor()
    {

    }

    /**
     * Test attribute "surcharge"
     */
    public function testPropertySurcharge()
    {

    }

    /**
     * Test attribute "network_id"
     */
    public function testPropertyNetworkId()
    {

    }

    /**
     * Test attribute "merchant_category_code"
     */
    public function testPropertyMerchantCategoryCode()
    {

    }

    /**
     * Test attribute "merchant_verification_value"
     */
    public function testPropertyMerchantVerificationValue()
    {

    }

    /**
     * Test attribute "sharing_group_code"
     */
    public function testPropertySharingGroupCode()
    {

    }

    /**
     * Test attribute "acquirer_country_code"
     */
    public function testPropertyAcquirerCountryCode()
    {

    }

    /**
     * Test attribute "systems_trace_audit_number"
     */
    public function testPropertySystemsTraceAuditNumber()
    {

    }

    /**
     * Test attribute "original_data_elements"
     */
    public function testPropertyOriginalDataElements()
    {

    }

    /**
     * Test attribute "member_comments"
     */
    public function testPropertyMemberComments()
    {

    }

    /**
     * Test attribute "national_reimbursement_fee"
     */
    public function testPropertyNationalReimbursementFee()
    {

    }

    /**
     * Test attribute "fee_program_indicator"
     */
    public function testPropertyFeeProgramIndicator()
    {

    }

    /**
     * Test attribute "retrieval_reference_number"
     */
    public function testPropertyRetrievalReferenceNumber()
    {

    }

    /**
     * Test attribute "acquiring_bin"
     */
    public function testPropertyAcquiringBin()
    {

    }

    /**
     * Test attribute "account_type"
     */
    public function testPropertyAccountType()
    {

    }

    /**
     * Test attribute "merchant_pseudo_aba_number"
     */
    public function testPropertyMerchantPseudoAbaNumber()
    {

    }

    /**
     * Test attribute "foreign_exchange_fee_transaction"
     */
    public function testPropertyForeignExchangeFeeTransaction()
    {

    }

    /**
     * Test attribute "point_of_service_data"
     */
    public function testPropertyPointOfServiceData()
    {

    }

    /**
     * Test attribute "sender_primary_account_number"
     */
    public function testPropertySenderPrimaryAccountNumber()
    {

    }

    /**
     * Test attribute "local_transaction_date_time"
     */
    public function testPropertyLocalTransactionDateTime()
    {

    }

    /**
     * Test attribute "sender_card_expiry_date"
     */
    public function testPropertySenderCardExpiryDate()
    {

    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {

    }

    /**
     * Test attribute "sender_currency_code"
     */
    public function testPropertySenderCurrencyCode()
    {

    }

    /**
     * Test attribute "point_of_service_capability"
     */
    public function testPropertyPointOfServiceCapability()
    {

    }

}


/**
* --------------------------------------------------------------------------------
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
* --------------------------------------------------------------------------------
*/