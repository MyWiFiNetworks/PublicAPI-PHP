<?php
/**
 * Campaign
 *
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
 * This is the public API for the [Guest Networks platform](https://www.mywifinetworks.com).  All requests must include an App Secret Key for authentication. To get your App Secret Key: 1. Log in to your MyWiFi Control Panel 1. Navigate to Branding section 1. Note your API key, located in the App Secret Key field
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.10
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GuestNetworks\Model;

use \ArrayAccess;
use \GuestNetworks\ObjectSerializer;

/**
 * Campaign Class Doc Comment
 *
 * @category Class
 * @package  GuestNetworks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Campaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'campaign_id' => 'int',
'template_campaign_id' => 'int',
'login_options' => 'string',
'ssid' => 'string',
'text_color' => 'string',
'background' => 'string',
'footer_text' => 'string',
'title_text' => 'string',
'custom_terms' => 'string',
'redirect_url' => 'string',
'login_facebook' => 'int',
'login_custom' => 'int',
'login_twitter' => 'int',
'login_instagram' => 'int',
'login_linkedin' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'campaign_id' => null,
'template_campaign_id' => null,
'login_options' => 'json',
'ssid' => null,
'text_color' => null,
'background' => null,
'footer_text' => null,
'title_text' => null,
'custom_terms' => null,
'redirect_url' => 'url',
'login_facebook' => null,
'login_custom' => null,
'login_twitter' => null,
'login_instagram' => null,
'login_linkedin' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
'campaign_id' => 'campaign_id',
'template_campaign_id' => 'template_campaign_id',
'login_options' => 'login_options',
'ssid' => 'ssid',
'text_color' => 'text_color',
'background' => 'background',
'footer_text' => 'footer_text',
'title_text' => 'title_text',
'custom_terms' => 'custom_terms',
'redirect_url' => 'redirect_url',
'login_facebook' => 'login_facebook',
'login_custom' => 'login_custom',
'login_twitter' => 'login_twitter',
'login_instagram' => 'login_instagram',
'login_linkedin' => 'login_linkedin'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'campaign_id' => 'setCampaignId',
'template_campaign_id' => 'setTemplateCampaignId',
'login_options' => 'setLoginOptions',
'ssid' => 'setSsid',
'text_color' => 'setTextColor',
'background' => 'setBackground',
'footer_text' => 'setFooterText',
'title_text' => 'setTitleText',
'custom_terms' => 'setCustomTerms',
'redirect_url' => 'setRedirectUrl',
'login_facebook' => 'setLoginFacebook',
'login_custom' => 'setLoginCustom',
'login_twitter' => 'setLoginTwitter',
'login_instagram' => 'setLoginInstagram',
'login_linkedin' => 'setLoginLinkedin'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'campaign_id' => 'getCampaignId',
'template_campaign_id' => 'getTemplateCampaignId',
'login_options' => 'getLoginOptions',
'ssid' => 'getSsid',
'text_color' => 'getTextColor',
'background' => 'getBackground',
'footer_text' => 'getFooterText',
'title_text' => 'getTitleText',
'custom_terms' => 'getCustomTerms',
'redirect_url' => 'getRedirectUrl',
'login_facebook' => 'getLoginFacebook',
'login_custom' => 'getLoginCustom',
'login_twitter' => 'getLoginTwitter',
'login_instagram' => 'getLoginInstagram',
'login_linkedin' => 'getLoginLinkedin'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['template_campaign_id'] = isset($data['template_campaign_id']) ? $data['template_campaign_id'] : null;
        $this->container['login_options'] = isset($data['login_options']) ? $data['login_options'] : null;
        $this->container['ssid'] = isset($data['ssid']) ? $data['ssid'] : null;
        $this->container['text_color'] = isset($data['text_color']) ? $data['text_color'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['footer_text'] = isset($data['footer_text']) ? $data['footer_text'] : null;
        $this->container['title_text'] = isset($data['title_text']) ? $data['title_text'] : null;
        $this->container['custom_terms'] = isset($data['custom_terms']) ? $data['custom_terms'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['login_facebook'] = isset($data['login_facebook']) ? $data['login_facebook'] : 0;
        $this->container['login_custom'] = isset($data['login_custom']) ? $data['login_custom'] : 0;
        $this->container['login_twitter'] = isset($data['login_twitter']) ? $data['login_twitter'] : 0;
        $this->container['login_instagram'] = isset($data['login_instagram']) ? $data['login_instagram'] : 0;
        $this->container['login_linkedin'] = isset($data['login_linkedin']) ? $data['login_linkedin'] : 0;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Campaign Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id If updating a Campaign, set this to the Campaign ID
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets template_campaign_id
     *
     * @return int
     */
    public function getTemplateCampaignId()
    {
        return $this->container['template_campaign_id'];
    }

    /**
     * Sets template_campaign_id
     *
     * @param int $template_campaign_id If creating a Campaign, set this to the Campaign ID to use as a template
     *
     * @return $this
     */
    public function setTemplateCampaignId($template_campaign_id)
    {
        $this->container['template_campaign_id'] = $template_campaign_id;

        return $this;
    }

    /**
     * Gets login_options
     *
     * @return string
     */
    public function getLoginOptions()
    {
        return $this->container['login_options'];
    }

    /**
     * Sets login_options
     *
     * @param string $login_options The login_options must be a validated JSON payload of the appropriate login options that will override all login_* parameters passed below
     *
     * @return $this
     */
    public function setLoginOptions($login_options)
    {
        $this->container['login_options'] = $login_options;

        return $this;
    }

    /**
     * Gets ssid
     *
     * @return string
     */
    public function getSsid()
    {
        return $this->container['ssid'];
    }

    /**
     * Sets ssid
     *
     * @param string $ssid The SSID must be alphanumeric, the “#” symbol may also be used
     *
     * @return $this
     */
    public function setSsid($ssid)
    {
        $this->container['ssid'] = $ssid;

        return $this;
    }

    /**
     * Gets text_color
     *
     * @return string
     */
    public function getTextColor()
    {
        return $this->container['text_color'];
    }

    /**
     * Sets text_color
     *
     * @param string $text_color The text_color is the hex code for the colour of the text that appears on the login page (without the leading # sign)
     *
     * @return $this
     */
    public function setTextColor($text_color)
    {
        $this->container['text_color'] = $text_color;

        return $this;
    }

    /**
     * Gets background
     *
     * @return string
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param string $background The background is the hex code for the colour of the background (without the leading # sign)
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets footer_text
     *
     * @return string
     */
    public function getFooterText()
    {
        return $this->container['footer_text'];
    }

    /**
     * Sets footer_text
     *
     * @param string $footer_text The footer text
     *
     * @return $this
     */
    public function setFooterText($footer_text)
    {
        $this->container['footer_text'] = $footer_text;

        return $this;
    }

    /**
     * Gets title_text
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->container['title_text'];
    }

    /**
     * Sets title_text
     *
     * @param string $title_text The title text
     *
     * @return $this
     */
    public function setTitleText($title_text)
    {
        $this->container['title_text'] = $title_text;

        return $this;
    }

    /**
     * Gets custom_terms
     *
     * @return string
     */
    public function getCustomTerms()
    {
        return $this->container['custom_terms'];
    }

    /**
     * Sets custom_terms
     *
     * @param string $custom_terms The custom_terms must be a string, and does accept html markup
     *
     * @return $this
     */
    public function setCustomTerms($custom_terms)
    {
        $this->container['custom_terms'] = $custom_terms;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string $redirect_url The redirect_url must be a proper URL format (including http/https)
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets login_facebook
     *
     * @return int
     */
    public function getLoginFacebook()
    {
        return $this->container['login_facebook'];
    }

    /**
     * Sets login_facebook
     *
     * @param int $login_facebook The login_facebook must be [1 / 0] - 0 if you want to not include this login option
     *
     * @return $this
     */
    public function setLoginFacebook($login_facebook)
    {
        $this->container['login_facebook'] = $login_facebook;

        return $this;
    }

    /**
     * Gets login_custom
     *
     * @return int
     */
    public function getLoginCustom()
    {
        return $this->container['login_custom'];
    }

    /**
     * Sets login_custom
     *
     * @param int $login_custom The login_custom must be [1 / 0] - 0 if you want to not include this login option
     *
     * @return $this
     */
    public function setLoginCustom($login_custom)
    {
        $this->container['login_custom'] = $login_custom;

        return $this;
    }

    /**
     * Gets login_twitter
     *
     * @return int
     */
    public function getLoginTwitter()
    {
        return $this->container['login_twitter'];
    }

    /**
     * Sets login_twitter
     *
     * @param int $login_twitter The login_twitter must be [1 / 0] - 0 if you want to not include this login option
     *
     * @return $this
     */
    public function setLoginTwitter($login_twitter)
    {
        $this->container['login_twitter'] = $login_twitter;

        return $this;
    }

    /**
     * Gets login_instagram
     *
     * @return int
     */
    public function getLoginInstagram()
    {
        return $this->container['login_instagram'];
    }

    /**
     * Sets login_instagram
     *
     * @param int $login_instagram The login_instagram must be [1 / 0] - 0 if you want to not include this login option
     *
     * @return $this
     */
    public function setLoginInstagram($login_instagram)
    {
        $this->container['login_instagram'] = $login_instagram;

        return $this;
    }

    /**
     * Gets login_linkedin
     *
     * @return int
     */
    public function getLoginLinkedin()
    {
        return $this->container['login_linkedin'];
    }

    /**
     * Sets login_linkedin
     *
     * @param int $login_linkedin The login_linkedin must be [1 / 0] - 0 if you want to not include this login option
     *
     * @return $this
     */
    public function setLoginLinkedin($login_linkedin)
    {
        $this->container['login_linkedin'] = $login_linkedin;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}