# GuestNetworks\AnalyticsApi

All URIs are relative to *https://www.mywifi.io/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSocialLogins**](AnalyticsApi.md#getsociallogins) | **GET** /get-social-logins | Retrieve aggregated guest logins for a Location
[**getVisits**](AnalyticsApi.md#getvisits) | **GET** /get-visits | Retrieve aggregated visit data for a Location

# **getSocialLogins**
> getSocialLogins($location_id, $start_date, $end_date, $agg)

Retrieve aggregated guest logins for a Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = array(56); // int[] | A comma-separated list of location IDs.
$start_date = new \DateTime("2013-10-20"); // \DateTime | The start date format should be YYYY-MM-DD
$end_date = new \DateTime("2013-10-20"); // \DateTime | The end date format should be YYYY-MM-DD
$agg = "agg_example"; // string | The interval to group results by

try {
    $apiInstance->getSocialLogins($location_id, $start_date, $end_date, $agg);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getSocialLogins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | [**int[]**](../Model/int.md)| A comma-separated list of location IDs. |
 **start_date** | **\DateTime**| The start date format should be YYYY-MM-DD |
 **end_date** | **\DateTime**| The end date format should be YYYY-MM-DD |
 **agg** | **string**| The interval to group results by | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVisits**
> getVisits($location_id, $start_date, $end_date, $agg)

Retrieve aggregated visit data for a Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = array(56); // int[] | A comma-separated list of location IDs.
$start_date = new \DateTime("2013-10-20"); // \DateTime | The start date format should be YYYY-MM-DD
$end_date = new \DateTime("2013-10-20"); // \DateTime | The end date format should be YYYY-MM-DD
$agg = "agg_example"; // string | The interval to group results by

try {
    $apiInstance->getVisits($location_id, $start_date, $end_date, $agg);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getVisits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | [**int[]**](../Model/int.md)| A comma-separated list of location IDs. |
 **start_date** | **\DateTime**| The start date format should be YYYY-MM-DD |
 **end_date** | **\DateTime**| The end date format should be YYYY-MM-DD |
 **agg** | **string**| The interval to group results by | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

