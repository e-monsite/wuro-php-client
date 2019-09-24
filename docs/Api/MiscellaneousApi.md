# Wuro\Api\MiscellaneousApi

All URIs are relative to *https://wuro.pro/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vatRatesGet**](MiscellaneousApi.md#vatratesget) | **GET** /vat-rates | 

# **vatRatesGet**
> \Wuro\Api\Model\VatRatesResponse vatRatesGet()



Available VAT rates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Wuro\Api\Wuro\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->vatRatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->vatRatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wuro\Api\Model\VatRatesResponse**](../Model/VatRatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

