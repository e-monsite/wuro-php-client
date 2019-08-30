# Wuro\Api\InvoicesApi

All URIs are relative to *https://wuro.pro/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoicePost**](InvoicesApi.md#invoicepost) | **POST** /invoice | 

# **invoicePost**
> \Wuro\Api\Model\InvoiceCreatedResponse invoicePost($body)



Add a invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wuro\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wuro\Api\Wuro\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wuro\Api\Model\Invoice(); // \Wuro\Api\Model\Invoice | invoice to add

try {
    $result = $apiInstance->invoicePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wuro\Api\Model\Invoice**](../Model/Invoice.md)| invoice to add |

### Return type

[**\Wuro\Api\Model\InvoiceCreatedResponse**](../Model/InvoiceCreatedResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

