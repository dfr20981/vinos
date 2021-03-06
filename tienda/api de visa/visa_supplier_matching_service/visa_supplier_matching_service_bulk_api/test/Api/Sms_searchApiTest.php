<?php
/**
 * Sms_searchApiTest
 * PHP version 5
 *
 * @category Class
 * @package  sms_101
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visa Supplier Matching Service Bulk API
 *
 * VISA Supplier Matching Service
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

namespace sms_101\apitest;

require_once (__DIR__.'/../../globalConfig.php');

use \globalConfig\GlobalConfig;

use \sms_101\Configuration;
use \sms_101\api\Sms_searchApi;

/**
 * Sms_searchApiTest Class Doc Comment
 *
 * @category Class
 * @package  sms_101
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sms_searchApiTest extends \PHPUnit\Framework\TestCase
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

        echo '\n.................Testing Sms_searchApi...........................\n';
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
     * Test case for getdownload
     *
     * .
     *
     */
    public function testGetdownload()
    {
        echo "\nMaking a call to Getdownload()\n";

        $api_instance = new Sms_searchApi;
        $result = $api_instance->Getdownload($this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for getstatus
     *
     * .
     *
     */
    public function testGetstatus()
    {
        echo "\nMaking a call to Getstatus()\n";

        $api_instance = new Sms_searchApi;
        $result = $api_instance->Getstatus($this->addRandom('random'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for postupload
     *
     * .
     *
     */
    public function testPostupload()
    {
        echo "\nMaking a call to Postupload()\n";

        $api_instance = new Sms_searchApi;
        $result = $api_instance->Postupload($this->addRandom('random'));

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