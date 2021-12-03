<?php
/**
 * CompanyApiTest
 * PHP version 5
 *
 * @category Class
 * @package  vba_102
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Company API
 *
 * The VISA B2B Connect REST API allows developers to perform operations from a company or bank perspective.  The VISA B2B Connect API allows you to create and update profiles or retreive information that is relevant to you.
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

namespace vba_102\apitest;

require_once (__DIR__.'/../../globalConfig.php');

use \globalConfig\GlobalConfig;

use \vba_102\Configuration;
use \vba_102\api\CompanyApi;

/**
 * CompanyApiTest Class Doc Comment
 *
 * @category Class
 * @package  vba_102
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyApiTest extends \PHPUnit\Framework\TestCase
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

        echo '\n.................Testing CompanyApi...........................\n';
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
     * Test case for postaddCompany
     *
     * .
     *
     */
    public function testPostaddCompany()
    {
        echo "\nMaking a call to PostaddCompany()\n";

        $api_instance = new CompanyApi;
        $result = $api_instance->PostaddCompany($this->transformPayload('{"blockedCorridors":{"blockedCountries":[{"blockedDesc":"companyBlocked","isoCountryCode":4},{"blockedDesc":"bankBlocked","isoCountryCode":192}]},"companyId":9999,"bankId":123456,"companyProfile":{"remitReconcileProfile":{"remitProfile":{"frequency":"Every day","email":"absc@xyz.com","attachmentFormat":"PDF","deliveryMethod":"email"},"reconcileProfile":{"frequency":"Every day","email":"absc@xyz.com","attachmentFormat":"PDF","deliveryMethod":"email"}},"bankAccountNumber":"119191991","defaultCurrencyIsoCode":840,"doingBusinessAs":"VDP","businessRegistrationNumber":"1991991","taxId":"19191991","ownershipDetails":[{"entityOwner":"","countryOfResidence":"ALA","ownerIndividuals":[{"nationalityCountryCodeISO":8,"nationalityCountryName":"ALBANIA","countryOfResidenceName":"ALBANIA","address":"Austin - TX","active":true,"fullName":"Sam Doe","countryOfResidenceISO":8}],"entityName":"","address":"New York","email":"lacey@gmail.com","individual":true,"nationalityCountryCodeISO":248,"active":true,"fullName":"Kiara Kate","nationalityCountryCode":"ALA","countryOfResidenceISO":248}],"swiftLEI":"","enterpriseId":"V-USA-EUR-91211-0146","primaryContact":{"phone":"1991","email":"op@gmail.com","name":"OPJones","jobTitle":"SW"},"chipsUid":"","address":{"city":"Austin","countryDisplayName":null,"unitNo":"214","zipCode":78727,"line1":"Research Blvd","countryIsoCode":840,"state":"Texas"},"clabe":"101991919","iban":"191919199191919","authorizedSignatory":{"countryOfResidenceCodeISO":840,"fullName":"Lara Joseph","nationalityCountryCodeISO":356},"corporateLegalName":"VDPTEST","bankRoutingNumber":"191919191","industryCode":"22"},"transactionLimits":{"customLimits":true,"dailyVolume":9990,"singleTransaction":25}}'));

        $this->assertNotNull($result);

    }

    /**
     * Test case for puteditCompany
     *
     * .
     *
     */
    public function testPuteditCompany()
    {
        echo "\nMaking a call to PuteditCompany()\n";

        $api_instance = new CompanyApi;
        $result = $api_instance->PuteditCompany($this->addRandom('random'), $this->transformPayload('{"blockedCorridors":{"blockedCountries":[{"blockedDesc":"companyBlocked","isoCountryCode":4},{"blockedDesc":"bankBlocked","isoCountryCode":192}]},"bankId":"123456","companyId":"16","companyProfile":{"remitReconcileProfile":{"remitProfile":{"frequency":"Every day","email":"abc@xyz.com","attachmentFormat":"PDF","deliveryMethod":"email"},"reconcileProfile":{"frequency":"Every day","email":"abc@xyz.com","attachmentFormat":"PDF","deliveryMethod":"email"}},"bankAccountNumber":"","defaultCurrencyIsoCode":978,"doingBusinessAs":"NA","businessRegistrationNumber":"7889","taxId":"7889","ownershipDetails":[{"entityOwner":"","countryOfResidence":"ALA","entityName":"","address":"New York","email":"lacey@gmail.com","individual":true,"nationalityCountryCodeISO":248,"active":true,"fullName":"Lacey Kate","nationalityCountryCode":"ALA","countryOfResidenceISO":248}],"swiftLEI":"","enterpriseId":"V-USA-EUR-10080373-100000001-001","primaryContact":{"phone":"4768","email":"joe@gmail.com","name":"Joseph Jones","jobTitle":"SW"},"chipsUid":"","address":{"countryIsoCode":826,"unitNo":"214","line1":"Research Blvd"},"clabe":"3670954","iban":"","authorizedSignatory":{"countryOfResidenceCodeISO":840,"fullName":"Sarah Joseph","nationalityCountryCodeISO":356},"corporateLegalName":"HEB","bankRoutingNumber":"","industryCode":"22"},"transactionLimits":{"customLimits":true,"dailyVolume":99999999990,"singleTransaction":250000}}'));

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