# Wuro\Api\AuthApi

All URIs are relative to *https://wuro.pro/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessTokenGet**](AuthApi.md#accesstokenget) | **GET** /accessToken | 

# **accessTokenGet**
> \Wuro\Api\Model\AccessTokenResponse accessTokenGet($app_id, $app_secret)



Get an access token for tierce dev

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Wuro\Api\Wuro\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = "app_id_example"; // string | Application ID
$app_secret = "app_secret_example"; // string | Application secret key

try {
    $result = $apiInstance->accessTokenGet($app_id, $app_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->accessTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application ID |
 **app_secret** | **string**| Application secret key |

### Return type

[**\Wuro\Api\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

