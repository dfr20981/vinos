<?php
/**
 * Authorization_decisionApiTest
 * PHP version 5
 *
 * @category Class
 * @package  pmc_101
 * @author   Swagger Codegen team
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
 * Please update the test case below to test the endpoint.
 */

namespace pmc_101\apitest;

require_once (__DIR__.'/../../globalConfig.php');

use \globalConfig\GlobalConfig;

use \pmc_101\Configuration;
use \pmc_101\api\Authorization_decisionApi;

/**
 * Authorization_decisionApiTest Class Doc Comment
 *
 * @category Class
 * @package  pmc_101
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Authorization_decisionApiTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {

        $gc=new GlobalConfig();
        $config = Configuration::getDefaultConfiguration();

        // Configure HTTP basic authorization
        $config->setUsername($gc->getUserName());
        $config->setPassword($gc->getPassword());
        $config->setCertificatePath($gc->getCertificatePath());
        $config->setPrivateKey($gc->getPrivateKeyPath());
        $config->setCaCertPath($gc->getCaCertPath());

        // Configure API key authorization:
        $config->setSharedSecret($gc->getSharedSecret());
        $config->setApiKey("apikey", $gc->getApiKey());

        // Configure proxy settings
        $config->setCurlProxyHost($gc->getProxyHost());
        $config->setCurlProxyPort($gc->getProxyPort());
        $config->setCurlProxyUser($gc->getProxyUser());
        $config->setCurlProxyPassword($gc->getProxyPassword());

        echo '\n.................Testing Authorization_decisionApi...........................\n';
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }
    public function transformPayload($oldPayload){
        $payload = $this->editLocalTime($oldPayload);
        $payload = $this->addRandom($payload);
        $payload= json_decode($payload,true);
        return $payload;
    }
    public function editLocalTime($oldPayload){

        date_default_timezone_set("America/Los_Angeles");
        $timestamp = date("Y-m-d\TH:i:s");
        $pattern = '/"localTransactionDateTime":".{19}"/i';
        $replacement = '"localTransactionDateTime": "'.$timestamp.'"';
        $oldPayload = preg_replace($pattern, $replacement, $oldPayload);

        $timestamp = date("mdHis");
        $pattern = '/"dateTimeLocal":".{10}"/i';
        $replacement = '"dateTimeLocal": "'.$timestamp.'"';
        return preg_replace($pattern, $replacement, $oldPayload);

    }
    public function addRandom($oldPayload){
        $pattern = '/random/i';
        $replacement = $this->generateRandomString(5);
        $oldPayload = preg_replace($pattern, $replacement, $oldPayload);

        $pattern = '/random_integer/i';
        return preg_replace($pattern, '1', $oldPayload);
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
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Test case for getdecisionRequestActions
     *
     * .
     *
     */
    public function testGetdecisionRequestActions()
    {
        echo "\nMaking a call to GetdecisionRequestActions()\n";

        $api_instance = new Authorization_decisionApi;
        $result = $api_instance->GetdecisionRequestActions($this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for getdecisionsHistory
     *
     * .
     *
     */
    public function testGetdecisionsHistory()
    {
        echo "\nMaking a call to GetdecisionsHistory()\n";

        $api_instance = new Authorization_decisionApi;
        $result = $api_instance->GetdecisionsHistory($this->addRandom('random'), $this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postdecisionInquiry
     *
     * .
     *
     */
    public function testPostdecisionInquiry()
    {
        echo "\nMaking a call to PostdecisionInquiry()\n";

        $api_instance = new Authorization_decisionApi;
        $result = $api_instance->PostdecisionInquiry($this->transformPayload('{"cardAcceptorTerminalID":"string","retrievalReferenceNumber":"000000000002","dateTimeLocal":"0322080000"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postdecisionRequest
     *
     * .
     *
     */
    public function testPostdecisionRequest()
    {
        echo "\nMaking a call to PostdecisionRequest()\n";

        $api_instance = new Authorization_decisionApi;
        $result = $api_instance->PostdecisionRequest($this->transformPayload('{"processingCode":"000000","dateTimeLocal":"0322080000","retrievalReferenceNumber":"000000000002","messageType":"0100","primaryAccountNumber":"4514170000000001","merchantInfo":{"city":"Highlands Ranch","merchantCategoryCode":"5310","name":"POS at ","countryCode":"USA","region":"CO","transactionAmount":10,"addressLines":["6675 Business Center Dr"],"postalCode":"80130","currencyCode":"840"},"pointOfServiceInfo":{"securityCondition":"IDENTIFICATION_VERIFIED","terminalEntryCapability":"MAG_STRIPE_READ","terminalType":"POS_TERMINAL","terminalClass":{"howOperated":"CUSTOMER_OPERATED","deviceLocation":"ON_PREMISE","isAttended":false},"presentationData":{"howPresented":"CUSTOMER_PRESENT","isCardPresent":true}},"transactionID":"2132133231","cardholderBillAmount":100,"decisionType":"RECOMMENDED"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postdecisionRequestByPan
     *
     * .
     *
     */
    public function testPostdecisionRequestByPan()
    {
        echo "\nMaking a call to PostdecisionRequestByPan()\n";

        $api_instance = new Authorization_decisionApi;
        $result = $api_instance->PostdecisionRequestByPan($this->transformPayload('{"primaryAccountNumber":"4514170000000001","paginationData":{"startIndex":"1","pageLimit":"10"}}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postpreevaluations
     *
     * .
     *
     */
    public function testPostpreevaluations()
    {
        echo "\nMaking a call to Postpreevaluations()\n";

        $api_instance = new Authorization_decisionApi;
        $result = $api_instance->Postpreevaluations($this->transformPayload('{"processingCode":"000000","dateTimeLocal":"0322080000","retrievalReferenceNumber":"000000000002","messageType":"0100","primaryAccountNumber":"4514170000000001","merchantInfo":{"city":"Highlands Ranch","merchantCategoryCode":"5310","name":"POS at ","countryCode":"USA","currencyCode":"840","addressLines":["6675 Business Center Dr"],"postalCode":"80130","region":"CO"},"pointOfServiceInfo":{"securityCondition":"IDENTIFICATION_VERIFIED","terminalEntryCapability":"MAG_STRIPE_READ","terminalType":"POS_TERMINAL","terminalClass":{"howOperated":"CUSTOMER_OPERATED","deviceLocation":"ON_PREMISE","isAttended":false},"presentationData":{"howPresented":"CUSTOMER_PRESENT","isCardPresent":true}},"cardholderBillAmount":100,"decisionType":"PREEVAL"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for putdecisionRequestActions
     *
     * .
     *
     */
    public function testPutdecisionRequestActions()
    {
        echo "\nMaking a call to PutdecisionRequestActions()\n";

        $api_instance = new Authorization_decisionApi;
        $result = $api_instance->PutdecisionRequestActions($this->addRandom('random'), $this->transformPayload('{"decisionType":"COMPLETE","transactionApproved":"DECLINED","isDeclineResultOfTransactionControl":true}'));

        $this->assertNotNull($result);

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