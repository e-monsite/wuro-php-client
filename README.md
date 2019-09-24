# SwaggerClient-php
API de votre espace Wuro, connectez-vous sur https://wuro.pro, dans les paramètres de votre entreprise \"Développeurs (API)\", créez une application avec un scope défini afin de demander un jeton d'accès (GET accessToken) avec vos identifiants

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/e-monsite/wuro-php-client.git"
    }
  ],
  "require": {
    "e-monsite/wuro-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://wuro.pro/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**accessTokenGet**](docs/Api/AuthApi.md#accesstokenget) | **GET** /accessToken | 
*CompaniesApi* | [**companyCompanyIdGet**](docs/Api/CompaniesApi.md#companycompanyidget) | **GET** /company/{companyId} | 
*CompaniesApi* | [**documentModelsGet**](docs/Api/CompaniesApi.md#documentmodelsget) | **GET** /document-models | 
*InvoicesApi* | [**invoicePost**](docs/Api/InvoicesApi.md#invoicepost) | **POST** /invoice | 
*MiscellaneousApi* | [**vatRatesGet**](docs/Api/MiscellaneousApi.md#vatratesget) | **GET** /vat-rates | 

## Documentation For Models

 - [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
 - [CompanyResponse](docs/Model/CompanyResponse.md)
 - [DocumentModel](docs/Model/DocumentModel.md)
 - [DocumentModelFooter](docs/Model/DocumentModelFooter.md)
 - [DocumentModelHeader](docs/Model/DocumentModelHeader.md)
 - [DocumentModelsResponse](docs/Model/DocumentModelsResponse.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceCreatedResponse](docs/Model/InvoiceCreatedResponse.md)
 - [InvoiceLine](docs/Model/InvoiceLine.md)
 - [VatRate](docs/Model/VatRate.md)
 - [VatRatesResponse](docs/Model/VatRatesResponse.md)

## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



