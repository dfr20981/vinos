<?php
/**
 * Payment_serviceApi
 * PHP version 5
 *
 * @category Class
 * @package  vpa_102
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Payment Service
 *
 * The Payment web service is used for processing payments and sending payment remittance information to the appropriate suppliers.
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

namespace vpa_102\api;

use \vpa_102\ApiClient;
use \vpa_102\ApiException;
use \vpa_102\Configuration;
use \vpa_102\ObjectSerializer;

/**
 * Payment_serviceApi Class Doc Comment
 *
 * @category Class
 * @package  vpa_102
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Payment_serviceApi
{
    /**
     * API Client
     *
     * @var \vpa_102\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \vpa_102\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\vpa_102\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \vpa_102\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \vpa_102\ApiClient $apiClient set the API client
     *
     * @return Payment_serviceApi
     */
    public function setApiClient(\vpa_102\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation postcancelPayment
     *
     * 
     *
     * @param \vpa_102\model\CancelPaymentpostPayload $cancel_paymentpost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return \vpa_102\model\CancelPaymentpostResponse
     */
    public function postcancelPayment($cancel_paymentpost_payload)
    {
        list($response) = $this->postcancelPaymentWithHttpInfo($cancel_paymentpost_payload);
        return $response;
    }

    /**
     * Operation postcancelPaymentWithHttpInfo
     *
     * 
     *
     * @param \vpa_102\model\CancelPaymentpostPayload $cancel_paymentpost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return array of \vpa_102\model\CancelPaymentpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postcancelPaymentWithHttpInfo($cancel_paymentpost_payload)
    {
        // verify the required parameter 'cancel_paymentpost_payload' is set
        if ($cancel_paymentpost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cancel_paymentpost_payload when calling postcancelPayment');
        }
        // parse inputs
        $path = "/vpa/v1/payment/CancelPayment";
        $resourcePath = "payment/CancelPayment";
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
        if (isset($cancel_paymentpost_payload)) {
            $_tempBody = $cancel_paymentpost_payload;
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
                '\vpa_102\model\CancelPaymentpostResponse',
                '/vpa/v1/payment/CancelPayment'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vpa_102\model\CancelPaymentpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vpa_102\model\CancelPaymentpostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postgetpaymentDetails
     *
     * 
     *
     * @param \vpa_102\model\GetpaymentDetailspostPayload $getpayment_detailspost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return \vpa_102\model\GetpaymentDetailspostResponse
     */
    public function postgetpaymentDetails($getpayment_detailspost_payload)
    {
        list($response) = $this->postgetpaymentDetailsWithHttpInfo($getpayment_detailspost_payload);
        return $response;
    }

    /**
     * Operation postgetpaymentDetailsWithHttpInfo
     *
     * 
     *
     * @param \vpa_102\model\GetpaymentDetailspostPayload $getpayment_detailspost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return array of \vpa_102\model\GetpaymentDetailspostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postgetpaymentDetailsWithHttpInfo($getpayment_detailspost_payload)
    {
        // verify the required parameter 'getpayment_detailspost_payload' is set
        if ($getpayment_detailspost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $getpayment_detailspost_payload when calling postgetpaymentDetails');
        }
        // parse inputs
        $path = "/vpa/v1/payment/GetPaymentDetails";
        $resourcePath = "payment/GetPaymentDetails";
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
        if (isset($getpayment_detailspost_payload)) {
            $_tempBody = $getpayment_detailspost_payload;
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
                '\vpa_102\model\GetpaymentDetailspostResponse',
                '/vpa/v1/payment/GetPaymentDetails'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vpa_102\model\GetpaymentDetailspostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vpa_102\model\GetpaymentDetailspostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postgetpaymentUrl
     *
     * 
     *
     * @param \vpa_102\model\GetpaymentUrlpostPayload $getpayment_urlpost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return \vpa_102\model\GetpaymentUrlpostResponse
     */
    public function postgetpaymentUrl($getpayment_urlpost_payload)
    {
        list($response) = $this->postgetpaymentUrlWithHttpInfo($getpayment_urlpost_payload);
        return $response;
    }

    /**
     * Operation postgetpaymentUrlWithHttpInfo
     *
     * 
     *
     * @param \vpa_102\model\GetpaymentUrlpostPayload $getpayment_urlpost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return array of \vpa_102\model\GetpaymentUrlpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postgetpaymentUrlWithHttpInfo($getpayment_urlpost_payload)
    {
        // verify the required parameter 'getpayment_urlpost_payload' is set
        if ($getpayment_urlpost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $getpayment_urlpost_payload when calling postgetpaymentUrl');
        }
        // parse inputs
        $path = "/vpa/v1/payment/GetPaymentDetailURL";
        $resourcePath = "payment/GetPaymentDetailURL";
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
        if (isset($getpayment_urlpost_payload)) {
            $_tempBody = $getpayment_urlpost_payload;
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
                '\vpa_102\model\GetpaymentUrlpostResponse',
                '/vpa/v1/payment/GetPaymentDetailURL'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vpa_102\model\GetpaymentUrlpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vpa_102\model\GetpaymentUrlpostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postprocessPayments
     *
     * 
     *
     * @param \vpa_102\model\ProcessPaymentspostPayload $process_paymentspost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return \vpa_102\model\ProcessPaymentspostResponse
     */
    public function postprocessPayments($process_paymentspost_payload)
    {
        list($response) = $this->postprocessPaymentsWithHttpInfo($process_paymentspost_payload);
        return $response;
    }

    /**
     * Operation postprocessPaymentsWithHttpInfo
     *
     * 
     *
     * @param \vpa_102\model\ProcessPaymentspostPayload $process_paymentspost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return array of \vpa_102\model\ProcessPaymentspostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postprocessPaymentsWithHttpInfo($process_paymentspost_payload)
    {
        // verify the required parameter 'process_paymentspost_payload' is set
        if ($process_paymentspost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $process_paymentspost_payload when calling postprocessPayments');
        }
        // parse inputs
        $path = "/vpa/v1/payment/ProcessPayments";
        $resourcePath = "payment/ProcessPayments";
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
        if (isset($process_paymentspost_payload)) {
            $_tempBody = $process_paymentspost_payload;
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
                '\vpa_102\model\ProcessPaymentspostResponse',
                '/vpa/v1/payment/ProcessPayments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vpa_102\model\ProcessPaymentspostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vpa_102\model\ProcessPaymentspostResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postresendPayment
     *
     * 
     *
     * @param \vpa_102\model\ResendPaymentpostPayload $resend_paymentpost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return \vpa_102\model\ResendPaymentpostResponse
     */
    public function postresendPayment($resend_paymentpost_payload)
    {
        list($response) = $this->postresendPaymentWithHttpInfo($resend_paymentpost_payload);
        return $response;
    }

    /**
     * Operation postresendPaymentWithHttpInfo
     *
     * 
     *
     * @param \vpa_102\model\ResendPaymentpostPayload $resend_paymentpost_payload  (required)
     * @throws \vpa_102\ApiException on non-2xx response
     * @return array of \vpa_102\model\ResendPaymentpostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postresendPaymentWithHttpInfo($resend_paymentpost_payload)
    {
        // verify the required parameter 'resend_paymentpost_payload' is set
        if ($resend_paymentpost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resend_paymentpost_payload when calling postresendPayment');
        }
        // parse inputs
        $path = "/vpa/v1/payment/ResendPayment";
        $resourcePath = "payment/ResendPayment";
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
        if (isset($resend_paymentpost_payload)) {
            $_tempBody = $resend_paymentpost_payload;
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
                '\vpa_102\model\ResendPaymentpostResponse',
                '/vpa/v1/payment/ResendPayment'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vpa_102\model\ResendPaymentpostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vpa_102\model\ResendPaymentpostResponse', $e->getResponseHeaders());
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