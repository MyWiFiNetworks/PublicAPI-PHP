# GuestNetworks\GuestsApi

All URIs are relative to *https://www.mywifi.io/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSocialUserProfile**](GuestsApi.md#getsocialuserprofile) | **GET** /get-social-user-profile | Retrieve Guest Profile(s) data for one or multiple Guest(s) that have connected through the login experience
[**socialUserList**](GuestsApi.md#socialuserlist) | **GET** /social-user-list | List of Guest [ids] that have connected through the login experience

# **getSocialUserProfile**
> getSocialUserProfile($user_ids)

Retrieve Guest Profile(s) data for one or multiple Guest(s) that have connected through the login experience

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_ids = array(56); // int[] | A comma-separated list of social user IDs.

try {
    $apiInstance->getSocialUserProfile($user_ids);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->getSocialUserProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_ids** | [**int[]**](../Model/int.md)| A comma-separated list of social user IDs. |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialUserList**
> socialUserList($location_ids, $from_date, $to_date, $campaign_id, $social_network)

List of Guest [ids] that have connected through the login experience

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_ids = array(56); // int[] | A comma-separated list of location IDs.
$from_date = new \DateTime("2013-10-20"); // \DateTime | The start date format should be YYYY-MM-DD
$to_date = new \DateTime("2013-10-20"); // \DateTime | The end date format should be YYYY-MM-DD
$campaign_id = 56; // int | Optional campaign ID to filter by
$social_network = "social_network_example"; // string | Optional social network to filter by

try {
    $apiInstance->socialUserList($location_ids, $from_date, $to_date, $campaign_id, $social_network);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->socialUserList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_ids** | [**int[]**](../Model/int.md)| A comma-separated list of location IDs. |
 **from_date** | **\DateTime**| The start date format should be YYYY-MM-DD |
 **to_date** | **\DateTime**| The end date format should be YYYY-MM-DD |
 **campaign_id** | **int**| Optional campaign ID to filter by | [optional]
 **social_network** | **string**| Optional social network to filter by | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

