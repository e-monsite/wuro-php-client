<?php
/**
 * QuoteLine
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
 * Swagger Codegen version: 3.0.19
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
 * QuoteLine Class Doc Comment
 *
 * @category Class
 * @package  Wuro\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuoteLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QuoteLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'string',
'reference' => 'string',
'title' => 'string',
'description' => 'string',
'product' => 'object',
'category' => 'object',
'image' => 'string',
'price_ht' => 'float',
'price_ttc' => 'float',
'price_ht_eur' => 'float',
'price_ttc_eur' => 'float',
'quantity' => 'float',
'total_ht' => 'float',
'tva' => 'string',
'tva_rate' => 'float',
'discount_ht' => 'float',
'discount_type' => 'string',
'page' => 'float',
'order' => 'float',
'url' => 'string',
'analytical_code' => 'string',
'global_discount' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
'reference' => null,
'title' => null,
'description' => null,
'product' => null,
'category' => null,
'image' => null,
'price_ht' => null,
'price_ttc' => null,
'price_ht_eur' => null,
'price_ttc_eur' => null,
'quantity' => null,
'total_ht' => null,
'tva' => null,
'tva_rate' => null,
'discount_ht' => null,
'discount_type' => null,
'page' => null,
'order' => null,
'url' => null,
'analytical_code' => null,
'global_discount' => null    ];

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
'reference' => 'reference',
'title' => 'title',
'description' => 'description',
'product' => 'product',
'category' => 'category',
'image' => 'image',
'price_ht' => 'price_ht',
'price_ttc' => 'price_ttc',
'price_ht_eur' => 'price_ht_eur',
'price_ttc_eur' => 'price_ttc_eur',
'quantity' => 'quantity',
'total_ht' => 'total_ht',
'tva' => 'tva',
'tva_rate' => 'tva_rate',
'discount_ht' => 'discount_ht',
'discount_type' => 'discount_type',
'page' => 'page',
'order' => 'order',
'url' => 'url',
'analytical_code' => 'analytical_code',
'global_discount' => 'globalDiscount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
'reference' => 'setReference',
'title' => 'setTitle',
'description' => 'setDescription',
'product' => 'setProduct',
'category' => 'setCategory',
'image' => 'setImage',
'price_ht' => 'setPriceHt',
'price_ttc' => 'setPriceTtc',
'price_ht_eur' => 'setPriceHtEur',
'price_ttc_eur' => 'setPriceTtcEur',
'quantity' => 'setQuantity',
'total_ht' => 'setTotalHt',
'tva' => 'setTva',
'tva_rate' => 'setTvaRate',
'discount_ht' => 'setDiscountHt',
'discount_type' => 'setDiscountType',
'page' => 'setPage',
'order' => 'setOrder',
'url' => 'setUrl',
'analytical_code' => 'setAnalyticalCode',
'global_discount' => 'setGlobalDiscount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
'reference' => 'getReference',
'title' => 'getTitle',
'description' => 'getDescription',
'product' => 'getProduct',
'category' => 'getCategory',
'image' => 'getImage',
'price_ht' => 'getPriceHt',
'price_ttc' => 'getPriceTtc',
'price_ht_eur' => 'getPriceHtEur',
'price_ttc_eur' => 'getPriceTtcEur',
'quantity' => 'getQuantity',
'total_ht' => 'getTotalHt',
'tva' => 'getTva',
'tva_rate' => 'getTvaRate',
'discount_ht' => 'getDiscountHt',
'discount_type' => 'getDiscountType',
'page' => 'getPage',
'order' => 'getOrder',
'url' => 'getUrl',
'analytical_code' => 'getAnalyticalCode',
'global_discount' => 'getGlobalDiscount'    ];

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
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['price_ht'] = isset($data['price_ht']) ? $data['price_ht'] : null;
        $this->container['price_ttc'] = isset($data['price_ttc']) ? $data['price_ttc'] : null;
        $this->container['price_ht_eur'] = isset($data['price_ht_eur']) ? $data['price_ht_eur'] : null;
        $this->container['price_ttc_eur'] = isset($data['price_ttc_eur']) ? $data['price_ttc_eur'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['total_ht'] = isset($data['total_ht']) ? $data['total_ht'] : null;
        $this->container['tva'] = isset($data['tva']) ? $data['tva'] : null;
        $this->container['tva_rate'] = isset($data['tva_rate']) ? $data['tva_rate'] : null;
        $this->container['discount_ht'] = isset($data['discount_ht']) ? $data['discount_ht'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['analytical_code'] = isset($data['analytical_code']) ? $data['analytical_code'] : null;
        $this->container['global_discount'] = isset($data['global_discount']) ? $data['global_discount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets product
     *
     * @return object
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param object $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets category
     *
     * @return object
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param object $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * Gets price_ttc
     *
     * @return float
     */
    public function getPriceTtc()
    {
        return $this->container['price_ttc'];
    }

    /**
     * Sets price_ttc
     *
     * @param float $price_ttc price_ttc
     *
     * @return $this
     */
    public function setPriceTtc($price_ttc)
    {
        $this->container['price_ttc'] = $price_ttc;

        return $this;
    }

    /**
     * Gets price_ht_eur
     *
     * @return float
     */
    public function getPriceHtEur()
    {
        return $this->container['price_ht_eur'];
    }

    /**
     * Sets price_ht_eur
     *
     * @param float $price_ht_eur price_ht_eur
     *
     * @return $this
     */
    public function setPriceHtEur($price_ht_eur)
    {
        $this->container['price_ht_eur'] = $price_ht_eur;

        return $this;
    }

    /**
     * Gets price_ttc_eur
     *
     * @return float
     */
    public function getPriceTtcEur()
    {
        return $this->container['price_ttc_eur'];
    }

    /**
     * Sets price_ttc_eur
     *
     * @param float $price_ttc_eur price_ttc_eur
     *
     * @return $this
     */
    public function setPriceTtcEur($price_ttc_eur)
    {
        $this->container['price_ttc_eur'] = $price_ttc_eur;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total_ht
     *
     * @return float
     */
    public function getTotalHt()
    {
        return $this->container['total_ht'];
    }

    /**
     * Sets total_ht
     *
     * @param float $total_ht total_ht
     *
     * @return $this
     */
    public function setTotalHt($total_ht)
    {
        $this->container['total_ht'] = $total_ht;

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
     * Gets discount_ht
     *
     * @return float
     */
    public function getDiscountHt()
    {
        return $this->container['discount_ht'];
    }

    /**
     * Sets discount_ht
     *
     * @param float $discount_ht discount_ht
     *
     * @return $this
     */
    public function setDiscountHt($discount_ht)
    {
        $this->container['discount_ht'] = $discount_ht;

        return $this;
    }

    /**
     * Gets discount_type
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string $discount_type discount_type
     *
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets page
     *
     * @return float
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param float $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets order
     *
     * @return float
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param float $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * Gets global_discount
     *
     * @return bool
     */
    public function getGlobalDiscount()
    {
        return $this->container['global_discount'];
    }

    /**
     * Sets global_discount
     *
     * @param bool $global_discount global_discount
     *
     * @return $this
     */
    public function setGlobalDiscount($global_discount)
    {
        $this->container['global_discount'] = $global_discount;

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
