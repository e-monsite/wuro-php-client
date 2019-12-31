# Wuro\Api\ProductsApi

All URIs are relative to *https://wuro.pro/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productCategoriesGet**](ProductsApi.md#productcategoriesget) | **GET** /product-categories | 
[**productCategoryPost**](ProductsApi.md#productcategorypost) | **POST** /product-category | 
[**productCategoryProductCategoryIdGet**](ProductsApi.md#productcategoryproductcategoryidget) | **GET** /product-category/{productCategoryId} | 
[**productCategoryProductCategoryIdPatch**](ProductsApi.md#productcategoryproductcategoryidpatch) | **PATCH** /product-category/{productCategoryId} | 
[**productPost**](ProductsApi.md#productpost) | **POST** /product | 
[**productProductIdGet**](ProductsApi.md#productproductidget) | **GET** /product/{productId} | 
[**productProductIdPatch**](ProductsApi.md#productproductidpatch) | **PATCH** /product/{productId} | 
[**productsGet**](ProductsApi.md#productsget) | **GET** /products | 

# **productCategoriesGet**
> \Wuro\Api\Model\ProductCategoriesResponse productCategoriesGet()



Returns all product categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productCategoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wuro\Api\Model\ProductCategoriesResponse**](../Model/ProductCategoriesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCategoryPost**
> \Wuro\Api\Model\ProductCategoryCreatedResponse productCategoryPost($body)



Add a product category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\ProductCategory(); // \Wuro\Api\Model\ProductCategory | Product category to add

try {
    $result = $apiInstance->productCategoryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productCategoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\ProductCategory**](../Model/ProductCategory.md)| Product category to add |

### Return type

[**\Wuro\Api\Model\ProductCategoryCreatedResponse**](../Model/ProductCategoryCreatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCategoryProductCategoryIdGet**
> \Wuro\Api\Model\ProductCategoryResponse productCategoryProductCategoryIdGet($product_category_id)



Get a product category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_category_id = "product_category_id_example"; // string | Product Category UUID

try {
    $result = $apiInstance->productCategoryProductCategoryIdGet($product_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productCategoryProductCategoryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_category_id** | **string**| Product Category UUID |

### Return type

[**\Wuro\Api\Model\ProductCategoryResponse**](../Model/ProductCategoryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productCategoryProductCategoryIdPatch**
> \Wuro\Api\Model\ProductCategoryUpdatedResponse productCategoryProductCategoryIdPatch($body, $product_category_id)



Update a product category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\ProductCategory(); // \Wuro\Api\Model\ProductCategory | Product category to update
$product_category_id = "product_category_id_example"; // string | Product Category UUID

try {
    $result = $apiInstance->productCategoryProductCategoryIdPatch($body, $product_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productCategoryProductCategoryIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\ProductCategory**](../Model/ProductCategory.md)| Product category to update |
 **product_category_id** | **string**| Product Category UUID |

### Return type

[**\Wuro\Api\Model\ProductCategoryUpdatedResponse**](../Model/ProductCategoryUpdatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPost**
> \Wuro\Api\Model\ProductCreatedResponse productPost($body)



Add a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\Product(); // \Wuro\Api\Model\Product | Product to add

try {
    $result = $apiInstance->productPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\Product**](../Model/Product.md)| Product to add |

### Return type

[**\Wuro\Api\Model\ProductCreatedResponse**](../Model/ProductCreatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productProductIdGet**
> \Wuro\Api\Model\ProductResponse productProductIdGet($product_id)



Get a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | Product UUID

try {
    $result = $apiInstance->productProductIdGet($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productProductIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| Product UUID |

### Return type

[**\Wuro\Api\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productProductIdPatch**
> \Wuro\Api\Model\ProductUpdatedResponse productProductIdPatch($body, $product_id)



Update a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\Product(); // \Wuro\Api\Model\Product | Product to update
$product_id = "product_id_example"; // string | Product UUID

try {
    $result = $apiInstance->productProductIdPatch($body, $product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productProductIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\Product**](../Model/Product.md)| Product to update |
 **product_id** | **string**| Product UUID |

### Return type

[**\Wuro\Api\Model\ProductUpdatedResponse**](../Model/ProductUpdatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsGet**
> \Wuro\Api\Model\ProductsResponse productsGet()



Returns all products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wuro\Api\Model\ProductsResponse**](../Model/ProductsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

