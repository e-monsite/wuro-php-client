<?php
/**
 * Product
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
 * Swagger Codegen version: 3.0.30
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Wuro\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'string',
'name' => 'string',
'description' => 'string',
'reference' => 'string',
'category' => 'string',
'company' => 'string',
'tva' => 'string',
'tva_rate' => 'float',
'ecotax' => 'float',
'cost_price' => 'float',
'price_ht' => 'float',
'analytical_code' => 'string',
'stock' => '\Wuro\Api\Model\ProductStock',
'specifications' => '\Wuro\Api\Model\ProductSpecifications',
'image' => '\Wuro\Api\Model\ProductImage',
'url_ext' => 'string',
'files' => 'object[]',
'state' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
'name' => null,
'description' => null,
'reference' => null,
'category' => null,
'company' => null,
'tva' => null,
'tva_rate' => null,
'ecotax' => null,
'cost_price' => null,
'price_ht' => null,
'analytical_code' => null,
'stock' => null,
'specifications' => null,
'image' => null,
'url_ext' => null,
'files' => null,
'state' => null    ];

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
        '_id' => '_id',
'name' => 'name',
'description' => 'description',
'reference' => 'reference',
'category' => 'category',
'company' => 'company',
'tva' => 'tva',
'tva_rate' => 'tva_rate',
'ecotax' => 'ecotax',
'cost_price' => 'cost_price',
'price_ht' => 'price_ht',
'analytical_code' => 'analytical_code',
'stock' => 'stock',
'specifications' => 'specifications',
'image' => 'image',
'url_ext' => 'url_ext',
'files' => 'files',
'state' => 'state'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
'name' => 'setName',
'description' => 'setDescription',
'reference' => 'setReference',
'category' => 'setCategory',
'company' => 'setCompany',
'tva' => 'setTva',
'tva_rate' => 'setTvaRate',
'ecotax' => 'setEcotax',
'cost_price' => 'setCostPrice',
'price_ht' => 'setPriceHt',
'analytical_code' => 'setAnalyticalCode',
'stock' => 'setStock',
'specifications' => 'setSpecifications',
'image' => 'setImage',
'url_ext' => 'setUrlExt',
'files' => 'setFiles',
'state' => 'setState'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
'name' => 'getName',
'description' => 'getDescription',
'reference' => 'getReference',
'category' => 'getCategory',
'company' => 'getCompany',
'tva' => 'getTva',
'tva_rate' => 'getTvaRate',
'ecotax' => 'getEcotax',
'cost_price' => 'getCostPrice',
'price_ht' => 'getPriceHt',
'analytical_code' => 'getAnalyticalCode',
'stock' => 'getStock',
'specifications' => 'getSpecifications',
'image' => 'getImage',
'url_ext' => 'getUrlExt',
'files' => 'getFiles',
'state' => 'getState'    ];

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

    const STATE_ACTIVE = 'active';
const STATE_INACTIVE = 'inactive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
self::STATE_INACTIVE,        ];
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
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['tva'] = isset($data['tva']) ? $data['tva'] : null;
        $this->container['tva_rate'] = isset($data['tva_rate']) ? $data['tva_rate'] : null;
        $this->container['ecotax'] = isset($data['ecotax']) ? $data['ecotax'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['price_ht'] = isset($data['price_ht']) ? $data['price_ht'] : null;
        $this->container['analytical_code'] = isset($data['analytical_code']) ? $data['analytical_code'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['specifications'] = isset($data['specifications']) ? $data['specifications'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['url_ext'] = isset($data['url_ext']) ? $data['url_ext'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets _id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string $_id _id
     *
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->container['tva'];
    }

    /**
     * Sets tva
     *
     * @param string $tva tva
     *
     * @return $this
     */
    public function setTva($tva)
    {
        $this->container['tva'] = $tva;

        return $this;
    }

    /**
     * Gets tva_rate
     *
     * @return float
     */
    public function getTvaRate()
    {
        return $this->container['tva_rate'];
    }

    /**
     * Sets tva_rate
     *
     * @param float $tva_rate tva_rate
     *
     * @return $this
     */
    public function setTvaRate($tva_rate)
    {
        $this->container['tva_rate'] = $tva_rate;

        return $this;
    }

    /**
     * Gets ecotax
     *
     * @return float
     */
    public function getEcotax()
    {
        return $this->container['ecotax'];
    }

    /**
     * Sets ecotax
     *
     * @param float $ecotax ecotax
     *
     * @return $this
     */
    public function setEcotax($ecotax)
    {
        $this->container['ecotax'] = $ecotax;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return float
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param float $cost_price cost_price
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets price_ht
     *
     * @return float
     */
    public function getPriceHt()
    {
        return $this->container['price_ht'];
    }

    /**
     * Sets price_ht
     *
     * @param float $price_ht price_ht
     *
     * @return $this
     */
    public function setPriceHt($price_ht)
    {
        $this->container['price_ht'] = $price_ht;

        return $this;
    }

    /**
     * Gets analytical_code
     *
     * @return string
     */
    public function getAnalyticalCode()
    {
        return $this->container['analytical_code'];
    }

    /**
     * Sets analytical_code
     *
     * @param string $analytical_code analytical_code
     *
     * @return $this
     */
    public function setAnalyticalCode($analytical_code)
    {
        $this->container['analytical_code'] = $analytical_code;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \Wuro\Api\Model\ProductStock
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \Wuro\Api\Model\ProductStock $stock stock
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets specifications
     *
     * @return \Wuro\Api\Model\ProductSpecifications
     */
    public function getSpecifications()
    {
        return $this->container['specifications'];
    }

    /**
     * Sets specifications
     *
     * @param \Wuro\Api\Model\ProductSpecifications $specifications specifications
     *
     * @return $this
     */
    public function setSpecifications($specifications)
    {
        $this->container['specifications'] = $specifications;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Wuro\Api\Model\ProductImage
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Wuro\Api\Model\ProductImage $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets url_ext
     *
     * @return string
     */
    public function getUrlExt()
    {
        return $this->container['url_ext'];
    }

    /**
     * Sets url_ext
     *
     * @param string $url_ext url_ext
     *
     * @return $this
     */
    public function setUrlExt($url_ext)
    {
        $this->container['url_ext'] = $url_ext;

        return $this;
    }

    /**
     * Gets files
     *
     * @return object[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param object[] $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
