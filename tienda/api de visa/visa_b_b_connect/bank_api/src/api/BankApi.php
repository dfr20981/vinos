<?php
/**
 * BankApi
 * PHP version 5
 *
 * @category Class
 * @package  vba_101
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bank API
 *
 * The VISA B2B Connect REST API allows developers to perform operations from a company or bank perspective. The VISA B2B Connect API allows you to create and update profiles or retreive information that is relevant to you.
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

namespace vba_101\api;

use \vba_101\ApiClient;
use \vba_101\ApiException;
use \vba_101\Configuration;
use \vba_101\ObjectSerializer;

/**
 * BankApi Class Doc Comment
 *
 * @category Class
 * @package  vba_101
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankApi
{
    /**
     * API Client
     *
     * @var \vba_101\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \vba_101\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\vba_101\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \vba_101\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \vba_101\ApiClient $apiClient set the API client
     *
     * @return BankApi
     */
    public function setApiClient(\vba_101\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getgetBank
     *
     * 
     *
     * @param string $bank_id  (required)
     * @throws \vba_101\ApiException on non-2xx response
     * @return \vba_101\model\GetBankgetResponse
     */
    public function getgetBank($bank_id)
    {
        list($response) = $this->getgetBankWithHttpInfo($bank_id);
        return $response;
    }

    /**
     * Operation getgetBankWithHttpInfo
     *
     * 
     *
     * @param string $bank_id  (required)
     * @throws \vba_101\ApiException on non-2xx response
     * @return array of \vba_101\model\GetBankgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getgetBankWithHttpInfo($bank_id)
    {
        // verify the required parameter 'bank_id' is set
        if ($bank_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bank_id when calling getgetBank');
        }
        // parse inputs
        $path = "/visab2bconnect/v1/banks/{bankId}";
        $resourcePath = "banks/{bankId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($bank_id !== null) {
            $path = str_replace(
                "{" . "bankId" . "}",
                $this->apiClient->getSerializer()->toPathValue($bank_id),
                $path
            );
            $resourcePath = str_replace(
                "{" . "bankId" . "}",
                $this->apiClient->getSerializer()->toPathValue($bank_id),
                $resourcePath
            );
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
                '\vba_101\model\GetBankgetResponse',
                '/visab2bconnect/v1/banks/{bankId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vba_101\model\GetBankgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vba_101\model\GetBankgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getgetCompanies
     *
     * 
     *
     * @param string $bank_id  (required)
     * @param string $keyword  (optional)
     * @throws \vba_101\ApiException on non-2xx response
     * @return \vba_101\model\GetCompaniesgetResponse
     */
    public function getgetCompanies($bank_id, $keyword = null)
    {
        list($response) = $this->getgetCompaniesWithHttpInfo($bank_id, $keyword);
        return $response;
    }

    /**
     * Operation getgetCompaniesWithHttpInfo
     *
     * 
     *
     * @param string $bank_id  (required)
     * @param string $keyword  (optional)
     * @throws \vba_101\ApiException on non-2xx response
     * @return array of \vba_101\model\GetCompaniesgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getgetCompaniesWithHttpInfo($bank_id, $keyword = null)
    {
        // verify the required parameter 'bank_id' is set
        if ($bank_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bank_id when calling getgetCompanies');
        }
        // parse inputs
        $path = "/visab2bconnect/v1/companies/banks";
        $resourcePath = "companies/banks";
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
        if ($bank_id !== null) {
            $queryParams['bankId'] = $this->apiClient->getSerializer()->toQueryValue($bank_id);
        }
        // query params
        if ($keyword !== null) {
            $queryParams['keyword'] = $this->apiClient->getSerializer()->toQueryValue($keyword);
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
                '\vba_101\model\GetCompaniesgetResponse',
                '/visab2bconnect/v1/companies/banks'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vba_101\model\GetCompaniesgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vba_101\model\GetCompaniesgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getnetPosition
     *
     * 
     *
     * @param string $bank_id The BID (Visa issued Business ID). (required)
     * @param string $date Format - date (optional)
     * @throws \vba_101\ApiException on non-2xx response
     * @return \vba_101\model\NetPositiongetResponse
     */
    public function getnetPosition($bank_id, $date = null)
    {
        list($response) = $this->getnetPositionWithHttpInfo($bank_id, $date);
        return $response;
    }

    /**
     * Operation getnetPositionWithHttpInfo
     *
     * 
     *
     * @param string $bank_id The BID (Visa issued Business ID). (required)
     * @param string $date Format - date (optional)
     * @throws \vba_101\ApiException on non-2xx response
     * @return array of \vba_101\model\NetPositiongetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getnetPositionWithHttpInfo($bank_id, $date = null)
    {
        // verify the required parameter 'bank_id' is set
        if ($bank_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bank_id when calling getnetPosition');
        }
        // parse inputs
        $path = "/visab2bconnect/v1/banks/netPosition";
        $resourcePath = "banks/netPosition";
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
        if ($bank_id !== null) {
            $queryParams['bankId'] = $this->apiClient->getSerializer()->toQueryValue($bank_id);
        }
        // query params
        if ($date !== null) {
            $queryParams['date'] = $this->apiClient->getSerializer()->toQueryValue($date);
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
                '\vba_101\model\NetPositiongetResponse',
                '/visab2bconnect/v1/banks/netPosition'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vba_101\model\NetPositiongetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vba_101\model\NetPositiongetResponse', $e->getResponseHeaders());
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