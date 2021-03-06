<?php
/**
 * ReversefundspostResponseTest
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
 * ReversefundspostResponseTest Class Doc Comment
 *
 * @category    Class */
// * @description Reverse Funds Transfer Response
/**
 * @package     ft_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReversefundspostResponseTest extends \PHPUnit\Framework\TestCase
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
     * Test "ReversefundspostResponse"
     */
    public function testReversefundspostResponse()
    {

    }

    /**
     * Test attribute "network_id"
     */
    public function testPropertyNetworkId()
    {

    }

    /**
     * Test attribute "approval_code"
     */
    public function testPropertyApprovalCode()
    {

    }

    /**
     * Test attribute "fee_program_indicator"
     */
    public function testPropertyFeeProgramIndicator()
    {

    }

    /**
     * Test attribute "last4of_pan"
     */
    public function testPropertyLast4ofPan()
    {

    }

    /**
     * Test attribute "merchant_verification_value"
     */
    public function testPropertyMerchantVerificationValue()
    {

    }

    /**
     * Test attribute "status_identifier"
     */
    public function testPropertyStatusIdentifier()
    {

    }

    /**
     * Test attribute "transaction_identifier"
     */
    public function testPropertyTransactionIdentifier()
    {

    }

    /**
     * Test attribute "member_comments"
     */
    public function testPropertyMemberComments()
    {

    }

    /**
     * Test attribute "response_code"
     */
    public function testPropertyResponseCode()
    {

    }

    /**
     * Test attribute "action_code"
     */
    public function testPropertyActionCode()
    {

    }

    /**
     * Test attribute "transmission_date_time"
     */
    public function testPropertyTransmissionDateTime()
    {

    }

}


/**
* --------------------------------------------------------------------------------
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
* --------------------------------------------------------------------------------
*/