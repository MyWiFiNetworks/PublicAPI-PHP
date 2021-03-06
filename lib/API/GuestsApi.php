<?php
/**
 * GuestsApi
 * PHP version 5
 *
 * @category Class
 * @package  GuestNetworks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Guest Networks API
 *
 * This is the public API for the [Guest Networks platform](https://www.mywifinetworks.com).  All requests must include an App Secret Key for authentication. To get your App Secret Key: 1. Log in to your MyWiFi Control Panel 1. Navigate to Branding section 1. Note your API key, located in the App Secret Key field   <br/> # Available SDKs [PHP API Client](https://github.com/MyWiFiNetworks/PublicAPI-PHP)
 *
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GuestNetworks\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuestNetworks\ApiException;
use GuestNetworks\Configuration;
use GuestNetworks\HeaderSelector;
use GuestNetworks\ObjectSerializer;

/**
 * GuestsApi Class Doc Comment
 *
 * @category Class
 * @package  GuestNetworks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GuestsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSocialUserProfile
     *
     * Retrieve Guest Profile(s) data for one or multiple Guest(s) that have connected through the login experience
     *
     * @param  int[] $user_ids A comma-separated list of social user IDs. (required)
     *
     * @throws \GuestNetworks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function getSocialUserProfile($user_ids)
    {
        $this->getSocialUserProfileWithHttpInfo($user_ids);
    }

    /**
     * Operation getSocialUserProfileWithHttpInfo
     *
     * Retrieve Guest Profile(s) data for one or multiple Guest(s) that have connected through the login experience
     *
     * @param  int[] $user_ids A comma-separated list of social user IDs. (required)
     *
     * @throws \GuestNetworks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSocialUserProfileWithHttpInfo($user_ids)
    {
        $returnType = '';
        $request = $this->getSocialUserProfileRequest($user_ids);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation getSocialUserProfileAsync
     *
     * Retrieve Guest Profile(s) data for one or multiple Guest(s) that have connected through the login experience
     *
     * @param  int[] $user_ids A comma-separated list of social user IDs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSocialUserProfileAsync($user_ids)
    {
        return $this->getSocialUserProfileAsyncWithHttpInfo($user_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSocialUserProfileAsyncWithHttpInfo
     *
     * Retrieve Guest Profile(s) data for one or multiple Guest(s) that have connected through the login experience
     *
     * @param  int[] $user_ids A comma-separated list of social user IDs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSocialUserProfileAsyncWithHttpInfo($user_ids)
    {
        $returnType = '';
        $request = $this->getSocialUserProfileRequest($user_ids);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSocialUserProfile'
     *
     * @param  int[] $user_ids A comma-separated list of social user IDs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSocialUserProfileRequest($user_ids)
    {
        // verify the required parameter 'user_ids' is set
        if ($user_ids === null || (is_array($user_ids) && count($user_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_ids when calling getSocialUserProfile'
            );
        }

        $resourcePath = '/get-social-user-profile';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($user_ids)) {
            $user_ids = ObjectSerializer::serializeCollection($user_ids, 'multi', true);
        }
        if ($user_ids !== null) {
            $queryParams['user_ids'] = ObjectSerializer::toQueryValue($user_ids);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('identifier');
        if ($apiKey !== null) {
            $headers['identifier'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation socialUserList
     *
     * List of Guest [ids] that have connected through the login experience
     *
     * @param  int[] $location_ids A comma-separated list of location IDs. (required)
     * @param  \DateTime $from_date The start date format should be YYYY-MM-DD (required)
     * @param  \DateTime $to_date The end date format should be YYYY-MM-DD (required)
     * @param  int $campaign_id Optional campaign ID to filter by (optional)
     * @param  string $social_network Optional social network to filter by (optional)
     *
     * @throws \GuestNetworks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function socialUserList($location_ids, $from_date, $to_date, $campaign_id = null, $social_network = null)
    {
        $this->socialUserListWithHttpInfo($location_ids, $from_date, $to_date, $campaign_id, $social_network);
    }

    /**
     * Operation socialUserListWithHttpInfo
     *
     * List of Guest [ids] that have connected through the login experience
     *
     * @param  int[] $location_ids A comma-separated list of location IDs. (required)
     * @param  \DateTime $from_date The start date format should be YYYY-MM-DD (required)
     * @param  \DateTime $to_date The end date format should be YYYY-MM-DD (required)
     * @param  int $campaign_id Optional campaign ID to filter by (optional)
     * @param  string $social_network Optional social network to filter by (optional)
     *
     * @throws \GuestNetworks\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function socialUserListWithHttpInfo($location_ids, $from_date, $to_date, $campaign_id = null, $social_network = null)
    {
        $returnType = '';
        $request = $this->socialUserListRequest($location_ids, $from_date, $to_date, $campaign_id, $social_network);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation socialUserListAsync
     *
     * List of Guest [ids] that have connected through the login experience
     *
     * @param  int[] $location_ids A comma-separated list of location IDs. (required)
     * @param  \DateTime $from_date The start date format should be YYYY-MM-DD (required)
     * @param  \DateTime $to_date The end date format should be YYYY-MM-DD (required)
     * @param  int $campaign_id Optional campaign ID to filter by (optional)
     * @param  string $social_network Optional social network to filter by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function socialUserListAsync($location_ids, $from_date, $to_date, $campaign_id = null, $social_network = null)
    {
        return $this->socialUserListAsyncWithHttpInfo($location_ids, $from_date, $to_date, $campaign_id, $social_network)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation socialUserListAsyncWithHttpInfo
     *
     * List of Guest [ids] that have connected through the login experience
     *
     * @param  int[] $location_ids A comma-separated list of location IDs. (required)
     * @param  \DateTime $from_date The start date format should be YYYY-MM-DD (required)
     * @param  \DateTime $to_date The end date format should be YYYY-MM-DD (required)
     * @param  int $campaign_id Optional campaign ID to filter by (optional)
     * @param  string $social_network Optional social network to filter by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function socialUserListAsyncWithHttpInfo($location_ids, $from_date, $to_date, $campaign_id = null, $social_network = null)
    {
        $returnType = '';
        $request = $this->socialUserListRequest($location_ids, $from_date, $to_date, $campaign_id, $social_network);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'socialUserList'
     *
     * @param  int[] $location_ids A comma-separated list of location IDs. (required)
     * @param  \DateTime $from_date The start date format should be YYYY-MM-DD (required)
     * @param  \DateTime $to_date The end date format should be YYYY-MM-DD (required)
     * @param  int $campaign_id Optional campaign ID to filter by (optional)
     * @param  string $social_network Optional social network to filter by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function socialUserListRequest($location_ids, $from_date, $to_date, $campaign_id = null, $social_network = null)
    {
        // verify the required parameter 'location_ids' is set
        if ($location_ids === null || (is_array($location_ids) && count($location_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $location_ids when calling socialUserList'
            );
        }
        // verify the required parameter 'from_date' is set
        if ($from_date === null || (is_array($from_date) && count($from_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_date when calling socialUserList'
            );
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null || (is_array($to_date) && count($to_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to_date when calling socialUserList'
            );
        }

        $resourcePath = '/social-user-list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($location_ids)) {
            $location_ids = ObjectSerializer::serializeCollection($location_ids, 'multi', true);
        }
        if ($location_ids !== null) {
            $queryParams['location_ids'] = ObjectSerializer::toQueryValue($location_ids);
        }
        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id);
        }
        // query params
        if ($social_network !== null) {
            $queryParams['social_network'] = ObjectSerializer::toQueryValue($social_network);
        }
        // query params
        if ($from_date !== null) {
            $queryParams['from_date'] = ObjectSerializer::toQueryValue($from_date);
        }
        // query params
        if ($to_date !== null) {
            $queryParams['to_date'] = ObjectSerializer::toQueryValue($to_date);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('identifier');
        if ($apiKey !== null) {
            $headers['identifier'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
