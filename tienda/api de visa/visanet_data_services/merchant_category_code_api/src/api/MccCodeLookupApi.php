<?php
/**
 * MccCodeLookupApi
 * PHP version 5
 *
 * @category Class
 * @package  vnds_102
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Merchant Category Code API
 *
 * look up for requested Merchant Category Code information
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

namespace vnds_102\api;

use \vnds_102\ApiClient;
use \vnds_102\ApiException;
use \vnds_102\Configuration;
use \vnds_102\ObjectSerializer;

/**
 * MccCodeLookupApi Class Doc Comment
 *
 * @category Class
 * @package  vnds_102
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MccCodeLookupApi
{
    /**
     * API Client
     *
     * @var \vnds_102\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \vnds_102\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\vnds_102\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \vnds_102\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \vnds_102\ApiClient $apiClient set the API client
     *
     * @return MccCodeLookupApi
     */
    public function setApiClient(\vnds_102\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation postmccCodeLookup
     *
     * 
     *
     * @param \vnds_102\model\MccCodeLookuppostPayload $mcc_code_lookuppost_payload Merchant Category Code request payload (required)
     * @throws \vnds_102\ApiException on non-2xx response
     * @return \vnds_102\model\MccCodeLookuppostResponse
     */
    public function postmccCodeLookup($mcc_code_lookuppost_payload)
    {
        list($response) = $this->postmccCodeLookupWithHttpInfo($mcc_code_lookuppost_payload);
        return $response;
    }

    /**
     * Operation postmccCodeLookupWithHttpInfo
     *
     * 
     *
     * @param \vnds_102\model\MccCodeLookuppostPayload $mcc_code_lookuppost_payload Merchant Category Code request payload (required)
     * @throws \vnds_102\ApiException on non-2xx response
     * @return array of \vnds_102\model\MccCodeLookuppostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function postmccCodeLookupWithHttpInfo($mcc_code_lookuppost_payload)
    {
        // verify the required parameter 'mcc_code_lookuppost_payload' is set
        if ($mcc_code_lookuppost_payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mcc_code_lookuppost_payload when calling postmccCodeLookup');
        }
        // parse inputs
        $path = "/visanetdataservice/getMccCodeLookup";
        $resourcePath = "getMccCodeLookup";
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
        if (isset($mcc_code_lookuppost_payload)) {
            $_tempBody = $mcc_code_lookuppost_payload;
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
                '\vnds_102\model\MccCodeLookuppostResponse',
                '/visanetdataservice/getMccCodeLookup'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\vnds_102\model\MccCodeLookuppostResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\vnds_102\model\MccCodeLookuppostResponse', $e->getResponseHeaders());
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