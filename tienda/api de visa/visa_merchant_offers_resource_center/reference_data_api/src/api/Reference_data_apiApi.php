<?php
/**
 * Reference_data_apiApi
 * PHP version 5
 *
 * @category Class
 * @package  vmorc_101
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reference Data API
 *
 * The Reference Data API provides developers the set of available reference data from VMORC. Use the &quot;key&quot; information of each reference data option to conduct filtered offer requests.
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

namespace vmorc_101\api;

use \vmorc_101\ApiClient;
use \vmorc_101\ApiException;
use \vmorc_101\Configuration;
use \vmorc_101\ObjectSerializer;

/**
 * Reference_data_apiApi Class Doc Comment
 *
 * @category Class
 * @package  vmorc_101
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reference_data_apiApi
{
    /**
     * API Client
     *
     * @var \vmorc_101\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \vmorc_101\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\vmorc_101\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \vmorc_101\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \vmorc_101\ApiClient $apiClient set the API client
     *
     * @return Reference_data_apiApi
     */
    public function setApiClient(\vmorc_101\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getretrieveDataByMerchant
     *
     * 
     *
     * @param string $start_index Optional. A maximum of 500 merchant records are returned in the response. The index indicates which merchant within the alphabetically sorted results to start returning in the response. Accepts an integer. Default set to 1 (optional)
     * @param string $program Optional. Returns merchant data for approved and active offers (includes expired offers) that belong to the specified program (optional)
     * @throws \vmorc_101\ApiException on non-2xx response
     * @return \vmorc_101\model\RetrieveDataByMerchantgetResponse
     */
    public function getretrieveDataByMerchant($start_index = null, $program = null)
    {
        list($response) = $this->getretrieveDataByMerchantWithHttpInfo($start_index, $program);
        return $response;
    }

    /**
     * Operation getretrieveDataByMerchantWithHttpInfo
     *
     * 
     *
     * @param string $start_index Optional. A maximum of 500 merchant records are returned in the response. The index indicates which merchant within the alphabetically sorted results to start returning in the response. Accepts an integer. Default set to 1 (optional)
     * @param string $program Optional. Returns merchant data for approved and active offers (includes expired offers) that belong to the specified program (optional)
     * @throws \vmorc_101\ApiException on non-2xx response
     * @return array of \vmorc_101\model\RetrieveDataByMerchantgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getretrieveDataByMerchantWithHttpInfo($start_index = null, $program = null)
    {
        // parse inputs
        $path = "/vmorc/data/v1/merchant";
        $resourcePath = "merchant";
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
        if ($start_index !== null) {
            $queryParams['start_index'] = $this->apiClient->getSerializer()->toQueryValue($start_index);
        }
        // query params
        if ($program !== null) {
            $queryParams['program'] = $this->apiClient->getSerializer()->toQueryValue($program);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\vmorc_101\model\RetrieveDataByMerchantgetResponse',
                '/vmorc/data/v1/merchant'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vmorc_101\model\RetrieveDataByMerchantgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vmorc_101\model\RetrieveDataByMerchantgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getretrieveDataByMerchantAddress
     *
     * 
     *
     * @param string $merchant_ids Required. Returns merchant address data for the requested merchant ids. Separate multiple ids by commas (required)
     * @param string $start_index Optional. A maximum of 500 address records are returned in the response. The index indicates which addresses within the sorted results (by merchant id) to start returning in the response. Accepts an integer. Default set to 1 (optional)
     * @throws \vmorc_101\ApiException on non-2xx response
     * @return \vmorc_101\model\RetrieveDataByMerchantAddressgetResponse
     */
    public function getretrieveDataByMerchantAddress($merchant_ids, $start_index = null)
    {
        list($response) = $this->getretrieveDataByMerchantAddressWithHttpInfo($merchant_ids, $start_index);
        return $response;
    }

    /**
     * Operation getretrieveDataByMerchantAddressWithHttpInfo
     *
     * 
     *
     * @param string $merchant_ids Required. Returns merchant address data for the requested merchant ids. Separate multiple ids by commas (required)
     * @param string $start_index Optional. A maximum of 500 address records are returned in the response. The index indicates which addresses within the sorted results (by merchant id) to start returning in the response. Accepts an integer. Default set to 1 (optional)
     * @throws \vmorc_101\ApiException on non-2xx response
     * @return array of \vmorc_101\model\RetrieveDataByMerchantAddressgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getretrieveDataByMerchantAddressWithHttpInfo($merchant_ids, $start_index = null)
    {
        // verify the required parameter 'merchant_ids' is set
        if ($merchant_ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_ids when calling getretrieveDataByMerchantAddress');
        }
        // parse inputs
        $path = "/vmorc/data/v1/merchantAddress";
        $resourcePath = "merchantAddress";
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
        if ($start_index !== null) {
            $queryParams['start_index'] = $this->apiClient->getSerializer()->toQueryValue($start_index);
        }
        // query params
        if ($merchant_ids !== null) {
            $queryParams['merchantIds'] = $this->apiClient->getSerializer()->toQueryValue($merchant_ids);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\vmorc_101\model\RetrieveDataByMerchantAddressgetResponse',
                '/vmorc/data/v1/merchantAddress'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vmorc_101\model\RetrieveDataByMerchantAddressgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vmorc_101\model\RetrieveDataByMerchantAddressgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getretrieveDataByReference
     *
     * 
     *
     * @param string $resources Optional. Request for specific reference data types in theresponse.Provide one reference data type or a comma-delimited string of reference data types. Default returns all available referece data types.   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#resources\&quot;&gt;resources&lt;/a&gt; for supported resource values. (optional)
     * @param string $languages Optional. A comma-delimited string of languageIds. For the reference data that may specify a language, the response will only return translations that match the requested languageIds. Default returns all existing translations.   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#resources\&quot;&gt;resources&lt;/a&gt; for supported resources that support a specific language. (optional)
     * @param string $program_ids Optional. Returns reference data for approved and active offers (includes expired offers) that belong to the specified program. Two additional responses of \&quot;promoting_countries\&quot; and \&quot;redemption_countries\&quot; are returned in this request. (optional)
     * @throws \vmorc_101\ApiException on non-2xx response
     * @return \vmorc_101\model\RetrieveDataByReferencegetResponse
     */
    public function getretrieveDataByReference($resources = null, $languages = null, $program_ids = null)
    {
        list($response) = $this->getretrieveDataByReferenceWithHttpInfo($resources, $languages, $program_ids);
        return $response;
    }

    /**
     * Operation getretrieveDataByReferenceWithHttpInfo
     *
     * 
     *
     * @param string $resources Optional. Request for specific reference data types in theresponse.Provide one reference data type or a comma-delimited string of reference data types. Default returns all available referece data types.   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#resources\&quot;&gt;resources&lt;/a&gt; for supported resource values. (optional)
     * @param string $languages Optional. A comma-delimited string of languageIds. For the reference data that may specify a language, the response will only return translations that match the requested languageIds. Default returns all existing translations.   Refer to &lt;a href&#x3D;\&quot;/guides/request_response_codes#resources\&quot;&gt;resources&lt;/a&gt; for supported resources that support a specific language. (optional)
     * @param string $program_ids Optional. Returns reference data for approved and active offers (includes expired offers) that belong to the specified program. Two additional responses of \&quot;promoting_countries\&quot; and \&quot;redemption_countries\&quot; are returned in this request. (optional)
     * @throws \vmorc_101\ApiException on non-2xx response
     * @return array of \vmorc_101\model\RetrieveDataByReferencegetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getretrieveDataByReferenceWithHttpInfo($resources = null, $languages = null, $program_ids = null)
    {
        // parse inputs
        $path = "/vmorc/data/v1/ref";
        $resourcePath = "ref";
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
        if ($resources !== null) {
            $queryParams['resources'] = $this->apiClient->getSerializer()->toQueryValue($resources);
        }
        // query params
        if ($languages !== null) {
            $queryParams['languages'] = $this->apiClient->getSerializer()->toQueryValue($languages);
        }
        // query params
        if ($program_ids !== null) {
            $queryParams['programIds'] = $this->apiClient->getSerializer()->toQueryValue($program_ids);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\vmorc_101\model\RetrieveDataByReferencegetResponse',
                '/vmorc/data/v1/ref'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vmorc_101\model\RetrieveDataByReferencegetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vmorc_101\model\RetrieveDataByReferencegetResponse', $e->getResponseHeaders());
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