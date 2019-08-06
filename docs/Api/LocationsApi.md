# GuestNetworks\LocationsApi

All URIs are relative to *https://www.mywifi.io/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignCampaign**](LocationsApi.md#assigncampaign) | **POST** /location-assign-campaign | Assign Default Campaign to Location
[**assignDevice**](LocationsApi.md#assigndevice) | **POST** /device-assign-location | Assign Device to Location
[**createOrUpdateLocation**](LocationsApi.md#createorupdatelocation) | **POST** /create-or-update-location | Create or Update a Location
[**deleteLocation**](LocationsApi.md#deletelocation) | **POST** /delete-location | Delete a Location
[**getLocation**](LocationsApi.md#getlocation) | **GET** /get-location | Retrieve data for multiple or single Location(s)
[**getLocationDevices**](LocationsApi.md#getlocationdevices) | **GET** /get-location-devices | List all Devices assigned to Location
[**getLocationOptions**](LocationsApi.md#getlocationoptions) | **GET** /get-location-options | Retrieve Location Options / Settings [RADIUS Attributes]
[**locationList**](LocationsApi.md#locationlist) | **GET** /location-list | Retrieve list of all Locations
[**updateLocationOptions**](LocationsApi.md#updatelocationoptions) | **POST** /set-session-and-bandwidth-info | Update Location Options / Settings [RADIUS Attributes]

# **assignCampaign**
> assignCampaign($location_id, $campaign_id)

Assign Default Campaign to Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | 
$campaign_id = 56; // int | 

try {
    $apiInstance->assignCampaign($location_id, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->assignCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | [optional]
 **campaign_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignCampaign**
> assignCampaign($body)

Assign Default Campaign to Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\AssignCampaign(); // \GuestNetworks\Model\AssignCampaign | 

try {
    $apiInstance->assignCampaign($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->assignCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\AssignCampaign**](../Model/AssignCampaign.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignDevice**
> assignDevice($location_id, $device_id)

Assign Device to Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | 
$device_id = 56; // int | 

try {
    $apiInstance->assignDevice($location_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->assignDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | [optional]
 **device_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignDevice**
> assignDevice($body)

Assign Device to Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\AssignDevice(); // \GuestNetworks\Model\AssignDevice | 

try {
    $apiInstance->assignDevice($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->assignDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\AssignDevice**](../Model/AssignDevice.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateLocation**
> createOrUpdateLocation($location_id, $location_name, $address1, $town, $state, $zipcode, $country, $phone_number, $timezone)

Create or Update a Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | 
$location_name = "location_name_example"; // string | 
$address1 = "address1_example"; // string | 
$town = "town_example"; // string | 
$state = "state_example"; // string | 
$zipcode = "zipcode_example"; // string | 
$country = "country_example"; // string | 
$phone_number = "phone_number_example"; // string | 
$timezone = "timezone_example"; // string | 

try {
    $apiInstance->createOrUpdateLocation($location_id, $location_name, $address1, $town, $state, $zipcode, $country, $phone_number, $timezone);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->createOrUpdateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | [optional]
 **location_name** | **string**|  | [optional]
 **address1** | **string**|  | [optional]
 **town** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **zipcode** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **phone_number** | **string**|  | [optional]
 **timezone** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateLocation**
> createOrUpdateLocation($body)

Create or Update a Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\Location(); // \GuestNetworks\Model\Location | 

try {
    $apiInstance->createOrUpdateLocation($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->createOrUpdateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\Location**](../Model/Location.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocation**
> deleteLocation($location_id)

Delete a Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | 

try {
    $apiInstance->deleteLocation($location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->deleteLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocation**
> deleteLocation($body)

Delete a Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\DeleteLocation(); // \GuestNetworks\Model\DeleteLocation | 

try {
    $apiInstance->deleteLocation($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->deleteLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\DeleteLocation**](../Model/DeleteLocation.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocation**
> getLocation($location_ids)

Retrieve data for multiple or single Location(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_ids = array(56); // int[] | A comma-separated list of location IDs.

try {
    $apiInstance->getLocation($location_ids);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_ids** | [**int[]**](../Model/int.md)| A comma-separated list of location IDs. |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationDevices**
> getLocationDevices($location_id)

List all Devices assigned to Location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The Location ID

try {
    $apiInstance->getLocationDevices($location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The Location ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationOptions**
> getLocationOptions($location_id)

Retrieve Location Options / Settings [RADIUS Attributes]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | The Location ID

try {
    $apiInstance->getLocationOptions($location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| The Location ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationList**
> locationList()

Retrieve list of all Locations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->locationList();
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationList: ', $e->getMessage(), PHP_EOL;
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

# **updateLocationOptions**
> updateLocationOptions($location_id, $session_time_limit, $max_bandwidth, $max_bandwidth_up, $daily_bandwidth_cap, $content_filter)

Update Location Options / Settings [RADIUS Attributes]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | 
$session_time_limit = 56; // int | 
$max_bandwidth = 56; // int | 
$max_bandwidth_up = 56; // int | 
$daily_bandwidth_cap = 56; // int | 
$content_filter = 56; // int | 

try {
    $apiInstance->updateLocationOptions($location_id, $session_time_limit, $max_bandwidth, $max_bandwidth_up, $daily_bandwidth_cap, $content_filter);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->updateLocationOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  | [optional]
 **session_time_limit** | **int**|  | [optional]
 **max_bandwidth** | **int**|  | [optional]
 **max_bandwidth_up** | **int**|  | [optional]
 **daily_bandwidth_cap** | **int**|  | [optional]
 **content_filter** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocationOptions**
> updateLocationOptions($body)

Update Location Options / Settings [RADIUS Attributes]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\LocationOption(); // \GuestNetworks\Model\LocationOption | 

try {
    $apiInstance->updateLocationOptions($body);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->updateLocationOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\LocationOption**](../Model/LocationOption.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

