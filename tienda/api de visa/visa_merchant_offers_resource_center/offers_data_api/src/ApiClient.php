<?php
/**
 * ApiClient
 *
 * PHP version 5
 *
 * @category Class
 * @package  vmorc_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Offers Data API
 *
 * The Offers Data API provides developers a quick and easy way to retrieve offer information from VMORC. The API allows you to retrieve all your available offers or retrieve specific offers. In an offer-specific request, you may choose to filter your accessible offers by certain offer attributes or you may request for offers by its identifiers.
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

namespace vmorc_100;

/**
 * ApiClient Class Doc Comment
 *
 * @category Class
 * @package  vmorc_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiClient
{
    public static $PATCH = "PATCH";
    public static $POST = "POST";
    public static $GET = "GET";
    public static $HEAD = "HEAD";
    public static $OPTIONS = "OPTIONS";
    public static $PUT = "PUT";
    public static $DELETE = "DELETE";

    /**
     * Configuration
     *
     * @var Configuration
     */
    protected $config;

    /**
     * Object Serializer
     *
     * @var ObjectSerializer
     */
    protected $serializer;

    /**
     * Constructor of the class
     *
     * @param Configuration $config config for this ApiClient
     */
    public function __construct(\vmorc_100\Configuration $config = null)
    {
        if ($config === null) {
            $config = Configuration::getDefaultConfiguration();
        }

        $this->config = $config;
        $this->serializer = new ObjectSerializer();
    }

    /**
     * Get the config
     *
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Get the serializer
     *
     * @return ObjectSerializer
     */
    public function getSerializer()
    {
        return $this->serializer;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param  string $apiKeyIdentifier name of apikey
     * @param  array $queryParams key value pair of name and apikeys
     * @param  string $resourcePath resource path of the endpoint
     * @param  object $body http request body
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier,  $queryParams, $resourcePath, $body)
    {
        $prefix = $this->config->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->config->getApiKey($apiKeyIdentifier, $queryParams, $resourcePath, $body);

        if (!isset($apiKey)) {
            return null;
            }

        if (isset($prefix)) {
            $keyWithPrefix = $prefix." ".$apiKey;
        } else {
            $keyWithPrefix = $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Make the HTTP call (Sync)
     *
     * @param string $path path to method endpoint
     * @param string $resourcePath resourcePath of the endpoint
     * @param string $method       method to call
     * @param array  $queryParams  parameters to be place in query URL
     * @param array  $postData     parameters to be placed in POST body
     * @param array  $headerParams parameters to be place in request header
     * @param string $responseType expected response type of the endpoint
     * @param string $endpointPath path to method endpoint before expanding parameters
     *
     * @throws \vmorc_100\ApiException on a non 2xx response
     * @return mixed
     */
    public function callApi($path, $resourcePath, $method, $queryParams, $postData, $headerParams, $responseType = null, $endpointPath = null)
    {
        $headers = [];

        // construct the http header
        $headerParams = array_merge(
            (array)$this->config->getDefaultHeaders(),
            (array)$headerParams
        );

        foreach ($headerParams as $key => $val) {
            $headers[] = "$key: $val";
        }

        // form data
        if ($postData and in_array('Content-Type: application/x-www-form-urlencoded', $headers, true)) {
            $postData = http_build_query($postData);
        } elseif ((is_object($postData) or is_array($postData)) and !in_array('Content-Type: multipart/form-data', $headers, true)) { // json model
            $postData = json_encode(\vmorc_100\ObjectSerializer::sanitizeForSerialization($postData));
        }

        $url = $this->config->getHost() . $path;

        $curl = curl_init();
        // set timeout, if needed
        if ($this->config->getCurlTimeout() !== 0) {
            curl_setopt($curl, CURLOPT_TIMEOUT, $this->config->getCurlTimeout());
        }
        // set connect timeout, if needed
        if ($this->config->getCurlConnectTimeout() != 0) {
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->config->getCurlConnectTimeout());
        }
        
        // return the result on success, rather than just true
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        // disable SSL verification, if needed
        if ($this->config->getSSLVerification() === false) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        }

        if ($this->config->getCurlProxyHost()) {
            curl_setopt($curl, CURLOPT_PROXY, $this->config->getCurlProxyHost());
        }

        if ($this->config->getCurlProxyPort()) {
            curl_setopt($curl, CURLOPT_PROXYPORT, $this->config->getCurlProxyPort());
        }

        if ($this->config->getCertificatePath()) {
            curl_setopt($curl, CURLOPT_SSLCERT, $this->config->getCertificatePath());
        }

        if ($this->config->getPrivateKey()) {
            curl_setopt($curl, CURLOPT_SSLKEY, $this->config->getPrivateKey());
        }

        if ($this->config->getCaCertPath()) {
            curl_setopt($curl, CURLOPT_CAINFO, $this->config->getCaCertPath());
        }

        if ($this->config->getCurlProxyType()) {
            curl_setopt($curl, CURLOPT_PROXYTYPE, $this->config->getCurlProxyType());
        }

        if ($this->config->getCurlProxyUser()) {
            curl_setopt($curl, CURLOPT_PROXYUSERPWD, $this->config->getCurlProxyUser() . ':' .$this->config->getCurlProxyPassword());
        }

        if (!empty($queryParams)) {
            $url = ($url . '?' . http_build_query($queryParams));
        }

        if ($method === self::$POST) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$HEAD) {
            curl_setopt($curl, CURLOPT_NOBODY, true);
        } elseif ($method === self::$OPTIONS) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "OPTIONS");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$PATCH) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$PUT) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method === self::$DELETE) {
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        } elseif ($method !== self::$GET) {
            throw new ApiException('Method ' . $method . ' is not recognized.');
        }
        curl_setopt($curl, CURLOPT_URL, $url);

        // Set user agent
        curl_setopt($curl, CURLOPT_USERAGENT, $this->config->getUserAgent());

        // debugging for curl
        if ($this->config->getDebug()) {
            error_log("[DEBUG] HTTP Request body  ~BEGIN~".PHP_EOL.print_r($postData, true).PHP_EOL."~END~".PHP_EOL, 3, $this->config->getDebugFile());

            curl_setopt($curl, CURLOPT_VERBOSE, 1);
            curl_setopt($curl, CURLOPT_STDERR, fopen($this->config->getDebugFile(), 'a'));
        } else {
            curl_setopt($curl, CURLOPT_VERBOSE, 0);
        }

        // obtain the HTTP response headers
        curl_setopt($curl, CURLOPT_HEADER, 1);

        // Make the request
        $response = curl_exec($curl);

        $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $http_header = $this->httpParseHeaders(substr($response, 0, $http_header_size));
        $http_body = substr($response, $http_header_size);
        $response_info = curl_getinfo($curl);
        // debug HTTP response body
        if ($this->config->getDebug()) {
            error_log("[DEBUG] HTTP Response body ~BEGIN~".PHP_EOL.print_r($http_body, true).PHP_EOL."~END~".PHP_EOL, 3, $this->config->getDebugFile());
        }

        // Handle the response
        if ($response_info['http_code'] === 0) {
            $curl_error_message = curl_error($curl);

            // curl_exec can sometimes fail but still return a blank message from curl_error().
            if (!empty($curl_error_message)) {
                $error_message = "API call to $url failed: $curl_error_message";
            } else {
                $error_message = "API call to $url failed, but for an unknown reason. " .
                    "This could happen if you are disconnected from the network.";
            }

            $exception = new ApiException($error_message, 0, null, null);
            $exception->setResponseObject($response_info);
            throw $exception;
        } elseif ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 299) {
            echo "Your call returned with a success code - ".$response_info['http_code']."\n\n";
            // return raw body if response is a file
            if ($responseType === '\SplFileObject' || $responseType === 'string') {
                return [$http_body, $response_info['http_code'], $http_header];
            }

            $data = json_decode($http_body);

            if (json_last_error() > 0) { // if response is a string
                $data = $http_body;
            }
        } else {

            echo "\n --   ".$response_info['http_code']."   --\n";
            $data = json_decode($http_body);
            if (json_last_error() > 0) { // if response is a string
                $data = $http_body;
            }

            throw new ApiException(
                "[".$response_info['http_code']."] Error connecting to the API ($url)",
                $response_info['http_code'],
                $http_header,
                $data
            );
        }
        return [$data, $response_info['http_code'], $http_header];
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    public function selectHeaderAccept($accept)
    {
        if (count($accept) === 0 or (count($accept) === 1 and $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $content_type Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    public function selectHeaderContentType($content_type)
    {
        if (count($content_type) === 0 or (count($content_type) === 1 and $content_type[0] === '')) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $content_type)) {
            return 'application/json';
        } else {
            return implode(',', $content_type);
        }
    }

    public function convertQueryParamsToSting($query_params)
    {
        $result = "";
        foreach ($query_params as $key => $value) {
            $result=$result."&".$key."=".$value;
        }
        return substr($result,1);
    }

   /**
    * Return an array of HTTP response headers
    *
    * @param string $raw_headers A string of raw HTTP response headers
    *
    * @return string[] Array of HTTP response heaers
    */
    protected function httpParseHeaders($raw_headers)
    {
        // ref/credit: http://php.net/manual/en/function.http-parse-headers.php#112986
        $headers = [];
        $key = '';

        foreach (explode("\n", $raw_headers) as $h) {
            $h = explode(':', $h, 2);

            if (isset($h[1])) {
                if (!isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1]);
                } elseif (is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1])]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
                }

                $key = $h[0];
            } else {
                if (substr($h[0], 0, 1) === "\t") {
                    $headers[$key] .= "\r\n\t".trim($h[0]);
                } elseif (!$key) {
                    $headers[0] = trim($h[0]);
                }
                trim($h[0]);
            }
        }

        return $headers;
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