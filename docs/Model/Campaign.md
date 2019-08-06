# Campaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Campaign Name | 
**campaign_id** | **int** | If updating a Campaign, set this to the Campaign ID | [optional] 
**template_campaign_id** | **int** | If creating a Campaign, set this to the Campaign ID to use as a template | [optional] 
**login_options** | **string** | The login_options must be a validated JSON payload of the appropriate login options that will override all login_* parameters passed below | [optional] 
**ssid** | **string** | The SSID must be alphanumeric, the “#” symbol may also be used | [optional] 
**text_color** | **string** | The text_color is the hex code for the colour of the text that appears on the login page (without the leading # sign) | [optional] 
**background** | **string** | The background is the hex code for the colour of the background (without the leading # sign) | [optional] 
**footer_text** | **string** | The footer text | [optional] 
**title_text** | **string** | The title text | [optional] 
**custom_terms** | **string** | The custom_terms must be a string, and does accept html markup | [optional] 
**redirect_url** | **string** | The redirect_url must be a proper URL format (including http/https) | [optional] 
**login_facebook** | **int** | The login_facebook must be [1 / 0] - 0 if you want to not include this login option | [optional] [default to 0]
**login_custom** | **int** | The login_custom must be [1 / 0] - 0 if you want to not include this login option | [optional] [default to 0]
**login_twitter** | **int** | The login_twitter must be [1 / 0] - 0 if you want to not include this login option | [optional] [default to 0]
**login_instagram** | **int** | The login_instagram must be [1 / 0] - 0 if you want to not include this login option | [optional] [default to 0]
**login_linkedin** | **int** | The login_linkedin must be [1 / 0] - 0 if you want to not include this login option | [optional] [default to 0]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

