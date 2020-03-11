# Wuro\Api\QuotesApi

All URIs are relative to *https://wuro.pro/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotePost**](QuotesApi.md#quotepost) | **POST** /quote | 
[**quoteQuoteIdGet**](QuotesApi.md#quotequoteidget) | **GET** /quote/{quoteId} | 
[**quotesGet**](QuotesApi.md#quotesget) | **GET** /quotes | 

# **quotePost**
> \Wuro\Api\Model\QuoteCreatedResponse quotePost($body)



Add a quota

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\Quote(); // \Wuro\Api\Model\Quote | quota to add

try {
    $result = $apiInstance->quotePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\Quote**](../Model/Quote.md)| quota to add |

### Return type

[**\Wuro\Api\Model\QuoteCreatedResponse**](../Model/QuoteCreatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteQuoteIdGet**
> \Wuro\Api\Model\QuoteResponse quoteQuoteIdGet($quote_id)



Retrieve an quote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_id = "quote_id_example"; // string | Quote ID

try {
    $result = $apiInstance->quoteQuoteIdGet($quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quoteQuoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_id** | **string**| Quote ID |

### Return type

[**\Wuro\Api\Model\QuoteResponse**](../Model/QuoteResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotesGet**
> \Wuro\Api\Model\QuotesResponse quotesGet()



Returns all quotes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->quotesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wuro\Api\Model\QuotesResponse**](../Model/QuotesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

