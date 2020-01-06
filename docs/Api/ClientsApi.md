# Wuro\Api\ClientsApi

All URIs are relative to *https://wuro.pro/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientClientIdGet**](ClientsApi.md#clientclientidget) | **GET** /client/{clientId} | 
[**clientClientIdPatch**](ClientsApi.md#clientclientidpatch) | **PATCH** /client/{clientId} | 
[**clientPost**](ClientsApi.md#clientpost) | **POST** /client | 
[**clientsGet**](ClientsApi.md#clientsget) | **GET** /clients | 

# **clientClientIdGet**
> \Wuro\Api\Model\ClientResponse clientClientIdGet($client_id)



Get a client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = "client_id_example"; // string | Client UUID

try {
    $result = $apiInstance->clientClientIdGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientClientIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client UUID |

### Return type

[**\Wuro\Api\Model\ClientResponse**](../Model/ClientResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientClientIdPatch**
> \Wuro\Api\Model\ClientUpdatedResponse clientClientIdPatch($body, $client_id)



Update a client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\Client(); // \Wuro\Api\Model\Client | Client to update
$client_id = "client_id_example"; // string | Client UUID

try {
    $result = $apiInstance->clientClientIdPatch($body, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientClientIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\Client**](../Model/Client.md)| Client to update |
 **client_id** | **string**| Client UUID |

### Return type

[**\Wuro\Api\Model\ClientUpdatedResponse**](../Model/ClientUpdatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientPost**
> \Wuro\Api\Model\ClientCreatedResponse clientPost($body)



Add a client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\Client(); // \Wuro\Api\Model\Client | Client to add

try {
    $result = $apiInstance->clientPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\Client**](../Model/Client.md)| Client to add |

### Return type

[**\Wuro\Api\Model\ClientCreatedResponse**](../Model/ClientCreatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsGet**
> \Wuro\Api\Model\ClientsResponse clientsGet()



Returns all clients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clientsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wuro\Api\Model\ClientsResponse**](../Model/ClientsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

