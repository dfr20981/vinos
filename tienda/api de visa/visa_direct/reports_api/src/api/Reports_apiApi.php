<?php
/**
 * Reports_apiApi
 * PHP version 5
 *
 * @category Class
 * @package  rpt_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reports API
 *
 * The Reports API provides reporting capabilities such as transaction reconciliation data API. The data needed for reconciliation includes both push(OCT) and pull(AFT) transaction details and any exceptions such as chargebacks & reversals. This data allows you to reconcile the transactions sent by your systems with what was processed through VisaNet.<br> <br> <b>Note: This functionality is currently available for US transactions ONLY.</b>
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

namespace rpt_100\api;

use \rpt_100\ApiClient;
use \rpt_100\ApiException;
use \rpt_100\Configuration;
use \rpt_100\ObjectSerializer;

/**
 * Reports_apiApi Class Doc Comment
 *
 * @category Class
 * @package  rpt_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reports_apiApi
{
    /**
     * API Client
     *
     * @var \rpt_100\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \rpt_100\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\rpt_100\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \rpt_100\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \rpt_100\ApiClient $apiClient set the API client
     *
     * @return Reports_apiApi
     */
    public function setApiClient(\rpt_100\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getreportingApi
     *
     * 
     *
     * @param string $from_date The beginning date. Example: 31032016 for 31st March 2016. (required)
     * @param string $to_date The end date. Example: 03042016 for 3rd April 2016. Currently, only upto 5 days worth of data can be retrieved.  Also, only the last 120 days of data can be searched from the current date. (required)
     * @param string $fields Required additional fields. Example: Add fields like amountInTransactionCurrency, currencyConversionRate,   reasonCodeValue, cardType, networkId, transactionStateCode, businessApplicationId, separated by comma. (optional)
     * @param string $offset This determines the page number for the pagination. Defalut is set to 1. (optional)
     * @param string $limit Total number of records that should be present in each page. Defalut is set to 100. (optional)
     * @throws \rpt_100\ApiException on non-2xx response
     * @return \rpt_100\model\ReportingApigetResponse
     */
    public function getreportingApi($from_date, $to_date, $fields = null, $offset = null, $limit = null)
    {
        list($response) = $this->getreportingApiWithHttpInfo($from_date, $to_date, $fields, $offset, $limit);
        return $response;
    }

    /**
     * Operation getreportingApiWithHttpInfo
     *
     * 
     *
     * @param string $from_date The beginning date. Example: 31032016 for 31st March 2016. (required)
     * @param string $to_date The end date. Example: 03042016 for 3rd April 2016. Currently, only upto 5 days worth of data can be retrieved.  Also, only the last 120 days of data can be searched from the current date. (required)
     * @param string $fields Required additional fields. Example: Add fields like amountInTransactionCurrency, currencyConversionRate,   reasonCodeValue, cardType, networkId, transactionStateCode, businessApplicationId, separated by comma. (optional)
     * @param string $offset This determines the page number for the pagination. Defalut is set to 1. (optional)
     * @param string $limit Total number of records that should be present in each page. Defalut is set to 100. (optional)
     * @throws \rpt_100\ApiException on non-2xx response
     * @return array of \rpt_100\model\ReportingApigetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getreportingApiWithHttpInfo($from_date, $to_date, $fields = null, $offset = null, $limit = null)
    {
        // verify the required parameter 'from_date' is set
        if ($from_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $from_date when calling getreportingApi');
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $to_date when calling getreportingApi');
        }
        // parse inputs
        $path = "/visadirect/reports/v1/transactiondata";
        $resourcePath = "transactiondata";
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
        if ($from_date !== null) {
            $queryParams['fromDate'] = $this->apiClient->getSerializer()->toQueryValue($from_date);
        }
        // query params
        if ($to_date !== null) {
            $queryParams['toDate'] = $this->apiClient->getSerializer()->toQueryValue($to_date);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
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
                '\rpt_100\model\ReportingApigetResponse',
                '/visadirect/reports/v1/transactiondata'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\rpt_100\model\ReportingApigetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\rpt_100\model\ReportingApigetResponse', $e->getResponseHeaders());
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