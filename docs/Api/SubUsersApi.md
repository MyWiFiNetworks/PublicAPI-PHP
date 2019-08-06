# GuestNetworks\SubUsersApi

All URIs are relative to *https://www.mywifi.io/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubUser**](SubUsersApi.md#createsubuser) | **POST** /create-sub-user | Create a SubUser
[**subuserList**](SubUsersApi.md#subuserlist) | **GET** /subuser-list | Retrieve SubUser Accounts for this Parent User Account

# **createSubUser**
> createSubUser($first_name, $last_name, $email, $phone_number, $password, $quickreport, $quickreport_location_id, $readonly)

Create a SubUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\SubUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = "first_name_example"; // string | 
$last_name = "last_name_example"; // string | 
$email = "email_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$password = "password_example"; // string | 
$quickreport = 56; // int | 
$quickreport_location_id = 56; // int | 
$readonly = 56; // int | 

try {
    $apiInstance->createSubUser($first_name, $last_name, $email, $phone_number, $password, $quickreport, $quickreport_location_id, $readonly);
} catch (Exception $e) {
    echo 'Exception when calling SubUsersApi->createSubUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**|  | [optional]
 **last_name** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **phone_number** | **string**|  | [optional]
 **password** | **string**|  | [optional]
 **quickreport** | **int**|  | [optional]
 **quickreport_location_id** | **int**|  | [optional]
 **readonly** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubUser**
> createSubUser($body)

Create a SubUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\SubUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\SubUser(); // \GuestNetworks\Model\SubUser | 

try {
    $apiInstance->createSubUser($body);
} catch (Exception $e) {
    echo 'Exception when calling SubUsersApi->createSubUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\SubUser**](../Model/SubUser.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subuserList**
> subuserList()

Retrieve SubUser Accounts for this Parent User Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\SubUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->subuserList();
} catch (Exception $e) {
    echo 'Exception when calling SubUsersApi->subuserList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

