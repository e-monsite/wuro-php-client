<?php
/**
 * ProductStock
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wuro\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wuro API
 *
 * API de votre espace Wuro, connectez-vous sur https://wuro.pro, dans les paramètres de votre entreprise \"Développeurs (API)\", créez une application avec un scope défini afin de demander un jeton d'accès (GET accessToken) avec vos identifiants
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.15
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Wuro\Api\Model;

use \ArrayAccess;
use \Wuro\Api\ObjectSerializer;

/**
 * ProductStock Class Doc Comment
 *
 * @category Class
 * @package  Wuro\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductStock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product_stock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nb_stock' => 'float',
'nb_alert' => 'float',
'nb_min' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nb_stock' => null,
'nb_alert' => null,
'nb_min' => null    ];

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
        'nb_stock' => 'nb_stock',
'nb_alert' => 'nb_alert',
'nb_min' => 'nb_min'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nb_stock' => 'setNbStock',
'nb_alert' => 'setNbAlert',
'nb_min' => 'setNbMin'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nb_stock' => 'getNbStock',
'nb_alert' => 'getNbAlert',
'nb_min' => 'getNbMin'    ];

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
        $this->container['nb_stock'] = isset($data['nb_stock']) ? $data['nb_stock'] : null;
        $this->container['nb_alert'] = isset($data['nb_alert']) ? $data['nb_alert'] : null;
        $this->container['nb_min'] = isset($data['nb_min']) ? $data['nb_min'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets nb_stock
     *
     * @return float
     */
    public function getNbStock()
    {
        return $this->container['nb_stock'];
    }

    /**
     * Sets nb_stock
     *
     * @param float $nb_stock nb_stock
     *
     * @return $this
     */
    public function setNbStock($nb_stock)
    {
        $this->container['nb_stock'] = $nb_stock;

        return $this;
    }

    /**
     * Gets nb_alert
     *
     * @return float
     */
    public function getNbAlert()
    {
        return $this->container['nb_alert'];
    }

    /**
     * Sets nb_alert
     *
     * @param float $nb_alert nb_alert
     *
     * @return $this
     */
    public function setNbAlert($nb_alert)
    {
        $this->container['nb_alert'] = $nb_alert;

        return $this;
    }

    /**
     * Gets nb_min
     *
     * @return float
     */
    public function getNbMin()
    {
        return $this->container['nb_min'];
    }

    /**
     * Sets nb_min
     *
     * @param float $nb_min nb_min
     *
     * @return $this
     */
    public function setNbMin($nb_min)
    {
        $this->container['nb_min'] = $nb_min;

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
