<?php
/**
 * Supplier_matching_serviceApi
 * PHP version 5
 *
 * @category Class
 * @package  sms_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visa Supplier Matching Service API
 *
 * Visa Supplier Matching Service
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

namespace sms_100\api;

use \sms_100\ApiClient;
use \sms_100\ApiException;
use \sms_100\Configuration;
use \sms_100\ObjectSerializer;

/**
 * Supplier_matching_serviceApi Class Doc Comment
 *
 * @category Class
 * @package  sms_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Supplier_matching_serviceApi
{
    /**
     * API Client
     *
     * @var \sms_100\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \sms_100\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\sms_100\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \sms_100\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \sms_100\ApiClient $apiClient set the API client
     *
     * @return Supplier_matching_serviceApi
     */
    public function setApiClient(\sms_100\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation postsmsSearch
     *
     * 
     *
     * @param string $supplier_name Name of the Supplier (required)
     * @param string $supplier_country_code Country Code of the Supplier&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Country Codes&lt;/a&gt; (required)
     * @param string $supplier_street_address Address of Supplier (optional)
     * @param string $supplier_city City of the Supplier (optional)
     * @param string $supplier_state State of the Supplier (optional)
     * @param string $supplier_postal_code Postal Code of the Supplier (optional)
     * @param string $supplier_phone_number Phone number of the Supplier (optional)
     * @param string $supplier_tax_id Tax Id of the Supplier (optional)
     * @throws \sms_100\ApiException on non-2xx response
     * @return \sms_100\model\SmsSearchpostResponse
     */
    public function postsmsSearch($supplier_name, $supplier_country_code, $supplier_street_address = null, $supplier_city = null, $supplier_state = null, $supplier_postal_code = null, $supplier_phone_number = null, $supplier_tax_id = null)
    {
        list($response) = $this->postsmsSearchWithHttpInfo($supplier_name, $supplier_country_code, $supplier_street_address, $supplier_city, $supplier_state, $supplier_postal_code, $supplier_phone_number, $supplier_tax_id);
        return $response;
    }

    /**
     * Operation postsmsSearchWithHttpInfo
     *
     * 
     *
     * @param string $supplier_name Name of the Supplier (required)
     * @param string $supplier_country_code Country Code of the Supplier&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Country Codes&lt;/a&gt; (required)
     * @param string $supplier_street_address Address of Supplier (optional)
     * @param string $supplier_city City of the Supplier (optional)
     * @param string $supplier_state State of the Supplier (optional)
     * @param string $supplier_postal_code Postal Code of the Supplier (optional)
     * @param string $supplier_phone_number Phone number of the Supplier (optional)
     * @param string $supplier_tax_id Tax Id of the Supplier (optional)
     * @throws \sms_100\ApiException on non-2xx response
     * @return array of \sms_100\model\SmsSearchpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postsmsSearchWithHttpInfo($supplier_name, $supplier_country_code, $supplier_street_address = null, $supplier_city = null, $supplier_state = null, $supplier_postal_code = null, $supplier_phone_number = null, $supplier_tax_id = null)
    {
        // verify the required parameter 'supplier_name' is set
        if ($supplier_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $supplier_name when calling postsmsSearch');
        }
        // verify the required parameter 'supplier_country_code' is set
        if ($supplier_country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $supplier_country_code when calling postsmsSearch');
        }
        // parse inputs
        $path = "/visasuppliermatchingservice/v1/search?supplierName&#x3D;supplier1&amp;supplierCountryCode&#x3D;840";
        $resourcePath = "search?supplierName&#x3D;supplier1&amp;supplierCountryCode&#x3D;840";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($supplier_name !== null) {
            $queryParams['supplierName'] = $this->apiClient->getSerializer()->toQueryValue($supplier_name);
        }
        // query params
        if ($supplier_street_address !== null) {
            $queryParams['supplierStreetAddress'] = $this->apiClient->getSerializer()->toQueryValue($supplier_street_address);
        }
        // query params
        if ($supplier_city !== null) {
            $queryParams['supplierCity'] = $this->apiClient->getSerializer()->toQueryValue($supplier_city);
        }
        // query params
        if ($supplier_state !== null) {
            $queryParams['supplierState'] = $this->apiClient->getSerializer()->toQueryValue($supplier_state);
        }
        // query params
        if ($supplier_postal_code !== null) {
            $queryParams['supplierPostalCode'] = $this->apiClient->getSerializer()->toQueryValue($supplier_postal_code);
        }
        // query params
        if ($supplier_country_code !== null) {
            $queryParams['supplierCountryCode'] = $this->apiClient->getSerializer()->toQueryValue($supplier_country_code);
        }
        // query params
        if ($supplier_phone_number !== null) {
            $queryParams['supplierPhoneNumber'] = $this->apiClient->getSerializer()->toQueryValue($supplier_phone_number);
        }
        // query params
        if ($supplier_tax_id !== null) {
            $queryParams['supplierTaxId'] = $this->apiClient->getSerializer()->toQueryValue($supplier_tax_id);
        }
        // default format to json
        $path = str_replace("{format}", "json", $path);
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        if (sizeof($queryParams) !== 0){
            ksort($queryParams);
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $path,
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\sms_100\model\SmsSearchpostResponse',
                '/visasuppliermatchingservice/v1/search?supplierName&#x3D;supplier1&amp;supplierCountryCode&#x3D;840'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\sms_100\model\SmsSearchpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\sms_100\model\SmsSearchpostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
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