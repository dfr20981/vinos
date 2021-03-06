<?php
/**
 * Customer_rulesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  pmc_100
 * @author   Swagger Codegen team
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
 * Please update the test case below to test the endpoint.
 */

namespace pmc_100\apitest;

require_once (__DIR__.'/../../globalConfig.php');

use \globalConfig\GlobalConfig;

use \pmc_100\Configuration;
use \pmc_100\api\Customer_rulesApi;

/**
 * Customer_rulesApiTest Class Doc Comment
 *
 * @category Class
 * @package  pmc_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customer_rulesApiTest extends \PHPUnit\Framework\TestCase
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

        echo '\n.................Testing Customer_rulesApi...........................\n';
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
     * Test case for deletecardReplacement
     *
     * .
     *
     */
    public function testDeletecardReplacement()
    {
        echo "\nMaking a call to DeletecardReplacement()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->DeletecardReplacement($this->transformPayload('{"primaryAccountNumber":"4514170000000002"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for deletedeleteControlDocumentByDocId
     *
     * .
     *
     */
    public function testDeletedeleteControlDocumentByDocId()
    {
        echo "\nMaking a call to DeletedeleteControlDocumentByDocId()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->DeletedeleteControlDocumentByDocId($this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for deletemanageControls
     *
     * .
     *
     */
    public function testDeletemanageControls()
    {
        echo "\nMaking a call to DeletemanageControls()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->DeletemanageControls($this->addRandom('random'), $this->transformPayload('{"transactionControls":[{"isControlEnabled":true,"shouldAlertOnDecline":false,"alertThreshold":10,"declineThreshold":200,"controlType":"TCT_E_COMMERCE","userIdentifier":"abhi-539d-4f93-ba00-77ef9ff873a2","shouldDeclineAll":false}]}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for getapplicationConfiguration
     *
     * .
     *
     */
    public function testGetapplicationConfiguration()
    {
        echo "\nMaking a call to GetapplicationConfiguration()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->GetapplicationConfiguration();

        $this->assertNotNull($result);

    }

    /**
     * Test case for getmanageControls
     *
     * .
     *
     */
    public function testGetmanageControls()
    {
        echo "\nMaking a call to GetmanageControls()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->GetmanageControls($this->addRandom('random'), $this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for gettransactionControlDocumentHistory
     *
     * .
     *
     */
    public function testGettransactionControlDocumentHistory()
    {
        echo "\nMaking a call to GettransactionControlDocumentHistory()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->GettransactionControlDocumentHistory($this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postbatchEnrollment
     *
     * .
     *
     */
    public function testPostbatchEnrollment()
    {
        echo "\nMaking a call to PostbatchEnrollment()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostbatchEnrollment($this->addRandom('random'), $this->addRandom('random'), $this->transformPayload('{"enrolledCards":[{"accountIdentifier":"4321000001001000001","userIdentifier":"abc@visa.com"},{"accountIdentifier":"4321000001001000002"}],"cardsType":"PAN","controlRules":{"transactionControls":[{"isControlEnabled":true,"shouldAlertOnDecline":true,"alertThreshold":10,"declineThreshold":100,"controlType":"TCT_ATM_WITHDRAW","shouldDeclineAll":false}],"globalControl":{"alertThreshold":10,"shouldDeclineAll":false,"shouldAlertOnDecline":true,"isControlEnabled":true,"declineThreshold":100}},"forceEnrollment":true}'), $this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postcardReplacement
     *
     * .
     *
     */
    public function testPostcardReplacement()
    {
        echo "\nMaking a call to PostcardReplacement()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostcardReplacement($this->transformPayload('{"newAccountID":"4514170000000002","currentAccountID":"4514170000000001"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postconfigurationCardinquiry
     *
     * .
     *
     */
    public function testPostconfigurationCardinquiry()
    {
        echo "\nMaking a call to PostconfigurationCardinquiry()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostconfigurationCardinquiry($this->transformPayload('{"primaryAccountNumber":"4514170000000001"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postdecoupleTokens
     *
     * .
     *
     */
    public function testPostdecoupleTokens()
    {
        echo "\nMaking a call to PostdecoupleTokens()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostdecoupleTokens($this->addRandom('random'), $this->transformPayload('{"decoupleTokenRequest":[{"primaryAccountNumber":"4154710000000003","shouldDecouple":true,"paymentToken":"4514170000000002"}]}'), $this->addRandom('random'), $this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postmanageControls
     *
     * .
     *
     */
    public function testPostmanageControls()
    {
        echo "\nMaking a call to PostmanageControls()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostmanageControls($this->addRandom('random'), $this->transformPayload('{"globalControls":[{"shouldDeclineAll":false,"isControlEnabled":true,"shouldAlertOnDecline":false,"alertThreshold":15,"userIdentifier":"abhi-539d-4f93-ba00-77ef9ff873a2"}]}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postmerchantTypeControlsCardInquiry
     *
     * .
     *
     */
    public function testPostmerchantTypeControlsCardInquiry()
    {
        echo "\nMaking a call to PostmerchantTypeControlsCardInquiry()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostmerchantTypeControlsCardInquiry($this->transformPayload('{"primaryAccountNumber":"4514170000000001"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postmobileWalletServices
     *
     * .
     *
     */
    public function testPostmobileWalletServices()
    {
        echo "\nMaking a call to PostmobileWalletServices()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostmobileWalletServices($this->transformPayload('{"primaryAccountNumbers":["4514170000000002"],"documentIDs":["ctc-ip-98b195ed-138f-49a5-bc4e-cdc986e79960","ctc-ip-98b195ed-138f-49a5-bc4e-cdc986e79960"]}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for posttransactionControlHistoryByDocumentId
     *
     * .
     *
     */
    public function testPosttransactionControlHistoryByDocumentId()
    {
        echo "\nMaking a call to PosttransactionControlHistoryByDocumentId()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PosttransactionControlHistoryByDocumentId($this->transformPayload('{"primaryAccountNumber":"4514170000000001"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for posttransactionControls
     *
     * .
     *
     */
    public function testPosttransactionControls()
    {
        echo "\nMaking a call to PosttransactionControls()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PosttransactionControls($this->transformPayload('{"primaryAccountNumber":"4514170000000001"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for posttransactionControlsByPan
     *
     * .
     *
     */
    public function testPosttransactionControlsByPan()
    {
        echo "\nMaking a call to PosttransactionControlsByPan()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PosttransactionControlsByPan($this->transformPayload('{"primaryAccountNumber":"4514170000000001"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postvtcRegistration
     *
     * .
     *
     */
    public function testPostvtcRegistration()
    {
        echo "\nMaking a call to PostvtcRegistration()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PostvtcRegistration($this->transformPayload('{"primaryAccountNumber":"4514170000000001"}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for putapplicationConfiguration
     *
     * .
     *
     */
    public function testPutapplicationConfiguration()
    {
        echo "\nMaking a call to PutapplicationConfiguration()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PutapplicationConfiguration($this->transformPayload('{"callBackSettings":{"iscallBackEndpointLocal":true,"callBackEndpoint":"https://abc/com/enrollment","isCallBackDisabled":true}}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for putmanageControls
     *
     * .
     *
     */
    public function testPutmanageControls()
    {
        echo "\nMaking a call to PutmanageControls()\n";

        $api_instance = new Customer_rulesApi;
        $result = $api_instance->PutmanageControls($this->addRandom('random'), $this->transformPayload('{"transactionControls":[{"isControlEnabled":true,"shouldAlertOnDecline":false,"alertThreshold":10,"declineThreshold":200,"controlType":"TCT_E_COMMERCE","userIdentifier":"abhi-539d-4f93-ba00-77ef9ff873a2","shouldDeclineAll":false},{"isControlEnabled":true,"shouldAlertOnDecline":false,"alertThreshold":10,"declineThreshold":200,"controlType":"TCT_ATM_WITHDRAW","userIdentifier":"abhi-539d-4f93-ba00-77ef9ff873a2","shouldDeclineAll":false}]}'));

        $this->assertNotNull($result);

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