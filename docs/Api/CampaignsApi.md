# GuestNetworks\CampaignsApi

All URIs are relative to *https://www.mywifi.io/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignList**](CampaignsApi.md#campaignlist) | **GET** /campaign-list | Retrieve list of all Campaigns
[**createOrUpdateCampaign**](CampaignsApi.md#createorupdatecampaign) | **POST** /create-or-update-campaign | Create or Update a Campaign
[**deleteCampaign**](CampaignsApi.md#deletecampaign) | **POST** /delete-campaign | Delete a Campaign
[**getCampaign**](CampaignsApi.md#getcampaign) | **GET** /get-campaign | Retrieve data for multiple or single Campaign(s)

# **campaignList**
> campaignList()

Retrieve list of all Campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->campaignList();
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->campaignList: ', $e->getMessage(), PHP_EOL;
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

# **createOrUpdateCampaign**
> createOrUpdateCampaign($name, $campaign_id, $template_campaign_id, $login_options, $ssid, $text_color, $background, $footer_text, $title_text, $custom_terms, $redirect_url, $login_facebook, $login_custom, $login_twitter, $login_instagram, $login_linkedin)

Create or Update a Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$campaign_id = 56; // int | 
$template_campaign_id = 56; // int | 
$login_options = "login_options_example"; // string | 
$ssid = "ssid_example"; // string | 
$text_color = "text_color_example"; // string | 
$background = "background_example"; // string | 
$footer_text = "footer_text_example"; // string | 
$title_text = "title_text_example"; // string | 
$custom_terms = "custom_terms_example"; // string | 
$redirect_url = "redirect_url_example"; // string | 
$login_facebook = 56; // int | 
$login_custom = 56; // int | 
$login_twitter = 56; // int | 
$login_instagram = 56; // int | 
$login_linkedin = 56; // int | 

try {
    $apiInstance->createOrUpdateCampaign($name, $campaign_id, $template_campaign_id, $login_options, $ssid, $text_color, $background, $footer_text, $title_text, $custom_terms, $redirect_url, $login_facebook, $login_custom, $login_twitter, $login_instagram, $login_linkedin);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createOrUpdateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **campaign_id** | **int**|  | [optional]
 **template_campaign_id** | **int**|  | [optional]
 **login_options** | **string**|  | [optional]
 **ssid** | **string**|  | [optional]
 **text_color** | **string**|  | [optional]
 **background** | **string**|  | [optional]
 **footer_text** | **string**|  | [optional]
 **title_text** | **string**|  | [optional]
 **custom_terms** | **string**|  | [optional]
 **redirect_url** | **string**|  | [optional]
 **login_facebook** | **int**|  | [optional]
 **login_custom** | **int**|  | [optional]
 **login_twitter** | **int**|  | [optional]
 **login_instagram** | **int**|  | [optional]
 **login_linkedin** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateCampaign**
> createOrUpdateCampaign($body)

Create or Update a Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\Campaign(); // \GuestNetworks\Model\Campaign | 

try {
    $apiInstance->createOrUpdateCampaign($body);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createOrUpdateCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\Campaign**](../Model/Campaign.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCampaign**
> deleteCampaign($campaign_id)

Delete a Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 

try {
    $apiInstance->deleteCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCampaign**
> deleteCampaign($body)

Delete a Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GuestNetworks\Model\DeleteCampaign(); // \GuestNetworks\Model\DeleteCampaign | 

try {
    $apiInstance->deleteCampaign($body);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\GuestNetworks\Model\DeleteCampaign**](../Model/DeleteCampaign.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaign**
> getCampaign($campaign_ids)

Retrieve data for multiple or single Campaign(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKey('identifier', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GuestNetworks\Configuration::getDefaultConfiguration()->setApiKeyPrefix('identifier', 'Bearer');

$apiInstance = new GuestNetworks\API\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_ids = array(56); // int[] | A comma-separated list of campaign IDs.

try {
    $apiInstance->getCampaign($campaign_ids);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_ids** | [**int[]**](../Model/int.md)| A comma-separated list of campaign IDs. |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

