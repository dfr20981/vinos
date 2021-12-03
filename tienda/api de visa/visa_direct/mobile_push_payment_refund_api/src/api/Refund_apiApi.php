<?php
/**
 * Refund_apiApi
 * PHP version 5
 *
 * @category Class
 * @package  mvrf_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mobile Push Payment Refund API
 *
 * Mobile Push Payment is a simple, secure and fast way to pay and be paid using mobile phones. Mobile Push Payment enables a range of payment use cases and is technology agnostic-leveraging evolving POS environment such as QR codes and works on both smart or feature phones.
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

namespace mvrf_100\api;

use \mvrf_100\ApiClient;
use \mvrf_100\ApiException;
use \mvrf_100\Configuration;
use \mvrf_100\ObjectSerializer;

/**
 * Refund_apiApi Class Doc Comment
 *
 * @category Class
 * @package  mvrf_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Refund_apiApi
{
    /**
     * API Client
     *
     * @var \mvrf_100\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \mvrf_100\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\mvrf_100\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \mvrf_100\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \mvrf_100\ApiClient $apiClient set the API client
     *
     * @return Refund_apiApi
     */
    public function setApiClient(\mvrf_100\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getmerchandiseReturnGet
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return \mvrf_100\model\MerchandiseReturnGetgetResponse
     */
    public function getmerchandiseReturnGet($status_identifier)
    {
        list($response) = $this->getmerchandiseReturnGetWithHttpInfo($status_identifier);
        return $response;
    }

    /**
     * Operation getmerchandiseReturnGetWithHttpInfo
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return array of \mvrf_100\model\MerchandiseReturnGetgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getmerchandiseReturnGetWithHttpInfo($status_identifier)
    {
        // verify the required parameter 'status_identifier' is set
        if ($status_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $status_identifier when calling getmerchandiseReturnGet');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/mr/{statusIdentifier}";
        $resourcePath = "mr/{statusIdentifier}";
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
        if ($status_identifier !== null) {
            $path = str_replace(
                "{" . "statusIdentifier" . "}",
                $this->apiClient->getSerializer()->toPathValue($status_identifier),
                $path
            );
            $resourcePath = str_replace(
                "{" . "statusIdentifier" . "}",
                $this->apiClient->getSerializer()->toPathValue($status_identifier),
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
                '\mvrf_100\model\MerchandiseReturnGetgetResponse',
                '/visadirect/mvisa/v1/mr/{statusIdentifier}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvrf_100\model\MerchandiseReturnGetgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvrf_100\model\MerchandiseReturnGetgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getmerchandiseReturnReversalGet
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return \mvrf_100\model\MerchandiseReturnReversalGetgetResponse
     */
    public function getmerchandiseReturnReversalGet($status_identifier)
    {
        list($response) = $this->getmerchandiseReturnReversalGetWithHttpInfo($status_identifier);
        return $response;
    }

    /**
     * Operation getmerchandiseReturnReversalGetWithHttpInfo
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return array of \mvrf_100\model\MerchandiseReturnReversalGetgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getmerchandiseReturnReversalGetWithHttpInfo($status_identifier)
    {
        // verify the required parameter 'status_identifier' is set
        if ($status_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $status_identifier when calling getmerchandiseReturnReversalGet');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/mrr/{statusIdentifier}";
        $resourcePath = "mrr/{statusIdentifier}";
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
        if ($status_identifier !== null) {
            $path = str_replace(
                "{" . "statusIdentifier" . "}",
                $this->apiClient->getSerializer()->toPathValue($status_identifier),
                $path
            );
            $resourcePath = str_replace(
                "{" . "statusIdentifier" . "}",
                $this->apiClient->getSerializer()->toPathValue($status_identifier),
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
                '\mvrf_100\model\MerchandiseReturnReversalGetgetResponse',
                '/visadirect/mvisa/v1/mrr/{statusIdentifier}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvrf_100\model\MerchandiseReturnReversalGetgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvrf_100\model\MerchandiseReturnReversalGetgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postmerchandiseReturnPost
     *
     * 
     *
     * @param \mvrf_100\model\MerchandiseReturnPostpostPayload $merchandise_return_postpost_payload Request body for creating in merchandise return (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return \mvrf_100\model\MerchandiseReturnPostpostResponse
     */
    public function postmerchandiseReturnPost($merchandise_return_postpost_payload)
    {
        list($response) = $this->postmerchandiseReturnPostWithHttpInfo($merchandise_return_postpost_payload);
        return $response;
    }

    /**
     * Operation postmerchandiseReturnPostWithHttpInfo
     *
     * 
     *
     * @param \mvrf_100\model\MerchandiseReturnPostpostPayload $merchandise_return_postpost_payload Request body for creating in merchandise return (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return array of \mvrf_100\model\MerchandiseReturnPostpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postmerchandiseReturnPostWithHttpInfo($merchandise_return_postpost_payload)
    {
        // verify the required parameter 'merchandise_return_postpost_payload' is set
        if ($merchandise_return_postpost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchandise_return_postpost_payload when calling postmerchandiseReturnPost');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/mr";
        $resourcePath = "mr";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $path = str_replace("{format}", "json", $path);
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($merchandise_return_postpost_payload)) {
            $_tempBody = $merchandise_return_postpost_payload;
        }

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
                '\mvrf_100\model\MerchandiseReturnPostpostResponse',
                '/visadirect/mvisa/v1/mr'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvrf_100\model\MerchandiseReturnPostpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvrf_100\model\MerchandiseReturnPostpostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postmerchandiseReturnReversalPost
     *
     * 
     *
     * @param \mvrf_100\model\MerchandiseReturnReversalPostpostPayload $merchandise_return_reversal_postpost_payload Request body for creating in merchandise return reversal (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return \mvrf_100\model\MerchandiseReturnReversalPostpostResponse
     */
    public function postmerchandiseReturnReversalPost($merchandise_return_reversal_postpost_payload)
    {
        list($response) = $this->postmerchandiseReturnReversalPostWithHttpInfo($merchandise_return_reversal_postpost_payload);
        return $response;
    }

    /**
     * Operation postmerchandiseReturnReversalPostWithHttpInfo
     *
     * 
     *
     * @param \mvrf_100\model\MerchandiseReturnReversalPostpostPayload $merchandise_return_reversal_postpost_payload Request body for creating in merchandise return reversal (required)
     * @throws \mvrf_100\ApiException on non-2xx response
     * @return array of \mvrf_100\model\MerchandiseReturnReversalPostpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postmerchandiseReturnReversalPostWithHttpInfo($merchandise_return_reversal_postpost_payload)
    {
        // verify the required parameter 'merchandise_return_reversal_postpost_payload' is set
        if ($merchandise_return_reversal_postpost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchandise_return_reversal_postpost_payload when calling postmerchandiseReturnReversalPost');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/mrr";
        $resourcePath = "mrr";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $path = str_replace("{format}", "json", $path);
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($merchandise_return_reversal_postpost_payload)) {
            $_tempBody = $merchandise_return_reversal_postpost_payload;
        }

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
                '\mvrf_100\model\MerchandiseReturnReversalPostpostResponse',
                '/visadirect/mvisa/v1/mrr'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvrf_100\model\MerchandiseReturnReversalPostpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvrf_100\model\MerchandiseReturnReversalPostpostResponse', $e->getResponseHeaders());
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