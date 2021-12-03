<?php
/**
 * MvisaApi
 * PHP version 5
 *
 * @category Class
 * @package  mvs_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * mVisa API
 *
 * mVisa is a simple, secure and fast way to pay and be paid using mobile phones. mVisa enables a range of payment use cases and is technology agnostic-leveraging evolving POS environment such as QR codes and works on both smart or feature phones.
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

namespace mvs_100\api;

use \mvs_100\ApiClient;
use \mvs_100\ApiException;
use \mvs_100\Configuration;
use \mvs_100\ObjectSerializer;

/**
 * MvisaApi Class Doc Comment
 *
 * @category Class
 * @package  mvs_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MvisaApi
{
    /**
     * API Client
     *
     * @var \mvs_100\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \mvs_100\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\mvs_100\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \mvs_100\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \mvs_100\ApiClient $apiClient set the API client
     *
     * @return MvisaApi
     */
    public function setApiClient(\mvs_100\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getcashInPushPaymentsGet
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return \mvs_100\model\CashInPushPaymentsGetgetResponse
     */
    public function getcashInPushPaymentsGet($status_identifier)
    {
        list($response) = $this->getcashInPushPaymentsGetWithHttpInfo($status_identifier);
        return $response;
    }

    /**
     * Operation getcashInPushPaymentsGetWithHttpInfo
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return array of \mvs_100\model\CashInPushPaymentsGetgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getcashInPushPaymentsGetWithHttpInfo($status_identifier)
    {
        // verify the required parameter 'status_identifier' is set
        if ($status_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $status_identifier when calling getcashInPushPaymentsGet');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/cashinpushpayments/{statusIdentifier}";
        $resourcePath = "cashinpushpayments/{statusIdentifier}";
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
                '\mvs_100\model\CashInPushPaymentsGetgetResponse',
                '/visadirect/mvisa/v1/cashinpushpayments/{statusIdentifier}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvs_100\model\CashInPushPaymentsGetgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvs_100\model\CashInPushPaymentsGetgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getcashOutPaymentsGet
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return \mvs_100\model\CashOutPaymentsGetgetResponse
     */
    public function getcashOutPaymentsGet($status_identifier)
    {
        list($response) = $this->getcashOutPaymentsGetWithHttpInfo($status_identifier);
        return $response;
    }

    /**
     * Operation getcashOutPaymentsGetWithHttpInfo
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return array of \mvs_100\model\CashOutPaymentsGetgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getcashOutPaymentsGetWithHttpInfo($status_identifier)
    {
        // verify the required parameter 'status_identifier' is set
        if ($status_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $status_identifier when calling getcashOutPaymentsGet');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/cashoutpushpayments/{statusIdentifier}";
        $resourcePath = "cashoutpushpayments/{statusIdentifier}";
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
                '\mvs_100\model\CashOutPaymentsGetgetResponse',
                '/visadirect/mvisa/v1/cashoutpushpayments/{statusIdentifier}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvs_100\model\CashOutPaymentsGetgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvs_100\model\CashOutPaymentsGetgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getmerchantPushPaymentGet
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return \mvs_100\model\MerchantPushPaymentGetgetResponse
     */
    public function getmerchantPushPaymentGet($status_identifier)
    {
        list($response) = $this->getmerchantPushPaymentGetWithHttpInfo($status_identifier);
        return $response;
    }

    /**
     * Operation getmerchantPushPaymentGetWithHttpInfo
     *
     * 
     *
     * @param string $status_identifier Status Identifier (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return array of \mvs_100\model\MerchantPushPaymentGetgetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getmerchantPushPaymentGetWithHttpInfo($status_identifier)
    {
        // verify the required parameter 'status_identifier' is set
        if ($status_identifier === null) {
            throw new \InvalidArgumentException('Missing the required parameter $status_identifier when calling getmerchantPushPaymentGet');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/merchantpushpayments/{statusIdentifier}";
        $resourcePath = "merchantpushpayments/{statusIdentifier}";
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
                '\mvs_100\model\MerchantPushPaymentGetgetResponse',
                '/visadirect/mvisa/v1/merchantpushpayments/{statusIdentifier}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvs_100\model\MerchantPushPaymentGetgetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvs_100\model\MerchantPushPaymentGetgetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postcashInPushPayments
     *
     * 
     *
     * @param \mvs_100\model\CashInPushPaymentspostPayload $cash_in_push_paymentspost_payload Request body for creating in cash in push payment (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return \mvs_100\model\CashInPushPaymentspostResponse
     */
    public function postcashInPushPayments($cash_in_push_paymentspost_payload)
    {
        list($response) = $this->postcashInPushPaymentsWithHttpInfo($cash_in_push_paymentspost_payload);
        return $response;
    }

    /**
     * Operation postcashInPushPaymentsWithHttpInfo
     *
     * 
     *
     * @param \mvs_100\model\CashInPushPaymentspostPayload $cash_in_push_paymentspost_payload Request body for creating in cash in push payment (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return array of \mvs_100\model\CashInPushPaymentspostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postcashInPushPaymentsWithHttpInfo($cash_in_push_paymentspost_payload)
    {
        // verify the required parameter 'cash_in_push_paymentspost_payload' is set
        if ($cash_in_push_paymentspost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cash_in_push_paymentspost_payload when calling postcashInPushPayments');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/cashinpushpayments";
        $resourcePath = "cashinpushpayments";
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
        if (isset($cash_in_push_paymentspost_payload)) {
            $_tempBody = $cash_in_push_paymentspost_payload;
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
                '\mvs_100\model\CashInPushPaymentspostResponse',
                '/visadirect/mvisa/v1/cashinpushpayments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvs_100\model\CashInPushPaymentspostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvs_100\model\CashInPushPaymentspostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postcashOutPushPaymentsPost
     *
     * 
     *
     * @param \mvs_100\model\CashOutPushPaymentsPostpostPayload $cash_out_push_payments_postpost_payload Request body for creating in cash out push payment (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return \mvs_100\model\CashOutPushPaymentsPostpostResponse
     */
    public function postcashOutPushPaymentsPost($cash_out_push_payments_postpost_payload)
    {
        list($response) = $this->postcashOutPushPaymentsPostWithHttpInfo($cash_out_push_payments_postpost_payload);
        return $response;
    }

    /**
     * Operation postcashOutPushPaymentsPostWithHttpInfo
     *
     * 
     *
     * @param \mvs_100\model\CashOutPushPaymentsPostpostPayload $cash_out_push_payments_postpost_payload Request body for creating in cash out push payment (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return array of \mvs_100\model\CashOutPushPaymentsPostpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postcashOutPushPaymentsPostWithHttpInfo($cash_out_push_payments_postpost_payload)
    {
        // verify the required parameter 'cash_out_push_payments_postpost_payload' is set
        if ($cash_out_push_payments_postpost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cash_out_push_payments_postpost_payload when calling postcashOutPushPaymentsPost');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/cashoutpushpayments";
        $resourcePath = "cashoutpushpayments";
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
        if (isset($cash_out_push_payments_postpost_payload)) {
            $_tempBody = $cash_out_push_payments_postpost_payload;
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
                '\mvs_100\model\CashOutPushPaymentsPostpostResponse',
                '/visadirect/mvisa/v1/cashoutpushpayments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvs_100\model\CashOutPushPaymentsPostpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvs_100\model\CashOutPushPaymentsPostpostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postmerchantPushPaymentsPost
     *
     * 
     *
     * @param \mvs_100\model\MerchantPushPaymentsPostpostPayload $merchant_push_payments_postpost_payload Request body for creating in merchant push payment (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return \mvs_100\model\MerchantPushPaymentsPostpostResponse
     */
    public function postmerchantPushPaymentsPost($merchant_push_payments_postpost_payload)
    {
        list($response) = $this->postmerchantPushPaymentsPostWithHttpInfo($merchant_push_payments_postpost_payload);
        return $response;
    }

    /**
     * Operation postmerchantPushPaymentsPostWithHttpInfo
     *
     * 
     *
     * @param \mvs_100\model\MerchantPushPaymentsPostpostPayload $merchant_push_payments_postpost_payload Request body for creating in merchant push payment (required)
     * @throws \mvs_100\ApiException on non-2xx response
     * @return array of \mvs_100\model\MerchantPushPaymentsPostpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postmerchantPushPaymentsPostWithHttpInfo($merchant_push_payments_postpost_payload)
    {
        // verify the required parameter 'merchant_push_payments_postpost_payload' is set
        if ($merchant_push_payments_postpost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_push_payments_postpost_payload when calling postmerchantPushPaymentsPost');
        }
        // parse inputs
        $path = "/visadirect/mvisa/v1/merchantpushpayments";
        $resourcePath = "merchantpushpayments";
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
        if (isset($merchant_push_payments_postpost_payload)) {
            $_tempBody = $merchant_push_payments_postpost_payload;
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
                '\mvs_100\model\MerchantPushPaymentsPostpostResponse',
                '/visadirect/mvisa/v1/merchantpushpayments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\mvs_100\model\MerchantPushPaymentsPostpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\mvs_100\model\MerchantPushPaymentsPostpostResponse', $e->getResponseHeaders());
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