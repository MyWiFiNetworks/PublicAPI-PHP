# GuestNetworks
This is the public API for the [Guest Networks platform](https://www.mywifinetworks.com).

All requests must include an App Secret Key for authentication.

To get your App Secret Key:

1. Log in to your MyWiFi Control Panel
1. Navigate to Branding section
1. Note your API key, located in the App Secret Key field

This PHP package is automatically generated:

- API version: 1.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GuestNetworks/PublicAPI.git"
    }
  ],
  "require": {
    "GuestNetworks/PublicAPI": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/GuestNetworks/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://www.mywifi.io/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnalyticsApi* | [**getSocialLogins**](docs/Api/AnalyticsApi.md#getsociallogins) | **GET** /get-social-logins | Retrieve aggregated guest logins for a Location
*AnalyticsApi* | [**getVisits**](docs/Api/AnalyticsApi.md#getvisits) | **GET** /get-visits | Retrieve aggregated visit data for a Location
*CampaignsApi* | [**campaignList**](docs/Api/CampaignsApi.md#campaignlist) | **GET** /campaign-list | Retrieve list of all Campaigns
*CampaignsApi* | [**createOrUpdateCampaign**](docs/Api/CampaignsApi.md#createorupdatecampaign) | **POST** /create-or-update-campaign | Create or Update a Campaign
*CampaignsApi* | [**deleteCampaign**](docs/Api/CampaignsApi.md#deletecampaign) | **POST** /delete-campaign | Delete a Campaign
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /get-campaign | Retrieve data for multiple or single Campaign(s)
*DevicesApi* | [**createDevice**](docs/Api/DevicesApi.md#createdevice) | **POST** /create-device | Create a Device
*DevicesApi* | [**deviceList**](docs/Api/DevicesApi.md#devicelist) | **GET** /device-list | Retrieve list of all Devices
*DevicesApi* | [**getDevice**](docs/Api/DevicesApi.md#getdevice) | **GET** /get-device | Retrieve data for multiple or single Device(s)
*GuestsApi* | [**getSocialUserProfile**](docs/Api/GuestsApi.md#getsocialuserprofile) | **GET** /get-social-user-profile | Retrieve Guest Profile(s) data for one or multiple Guest(s) that have connected through the login experience
*GuestsApi* | [**socialUserList**](docs/Api/GuestsApi.md#socialuserlist) | **GET** /social-user-list | List of Guest [ids] that have connected through the login experience
*LocationsApi* | [**assignCampaign**](docs/Api/LocationsApi.md#assigncampaign) | **POST** /location-assign-campaign | Assign Default Campaign to Location
*LocationsApi* | [**assignDevice**](docs/Api/LocationsApi.md#assigndevice) | **POST** /device-assign-location | Assign Device to Location
*LocationsApi* | [**createOrUpdateLocation**](docs/Api/LocationsApi.md#createorupdatelocation) | **POST** /create-or-update-location | Create or Update a Location
*LocationsApi* | [**deleteLocation**](docs/Api/LocationsApi.md#deletelocation) | **POST** /delete-location | Delete a Location
*LocationsApi* | [**getLocation**](docs/Api/LocationsApi.md#getlocation) | **GET** /get-location | Retrieve data for multiple or single Location(s)
*LocationsApi* | [**getLocationDevices**](docs/Api/LocationsApi.md#getlocationdevices) | **GET** /get-location-devices | List all Devices assigned to Location
*LocationsApi* | [**getLocationOptions**](docs/Api/LocationsApi.md#getlocationoptions) | **GET** /get-location-options | Retrieve Location Options / Settings [RADIUS Attributes]
*LocationsApi* | [**locationList**](docs/Api/LocationsApi.md#locationlist) | **GET** /location-list | Retrieve list of all Locations
*LocationsApi* | [**updateLocationOptions**](docs/Api/LocationsApi.md#updatelocationoptions) | **POST** /set-session-and-bandwidth-info | Update Location Options / Settings [RADIUS Attributes]
*SubUsersApi* | [**createSubUser**](docs/Api/SubUsersApi.md#createsubuser) | **POST** /create-sub-user | Create a SubUser
*SubUsersApi* | [**subuserList**](docs/Api/SubUsersApi.md#subuserlist) | **GET** /subuser-list | Retrieve SubUser Accounts for this Parent User Account

## Documentation For Models

 - [AssignCampaign](docs/Model/AssignCampaign.md)
 - [AssignDevice](docs/Model/AssignDevice.md)
 - [Campaign](docs/Model/Campaign.md)
 - [DeleteCampaign](docs/Model/DeleteCampaign.md)
 - [DeleteLocation](docs/Model/DeleteLocation.md)
 - [Device](docs/Model/Device.md)
 - [Location](docs/Model/Location.md)
 - [LocationOption](docs/Model/LocationOption.md)
 - [SubUser](docs/Model/SubUser.md)

## apiKey

- **Type**: API key
- **API key parameter name**: identifier
- **Location**: HTTP header
