# Rakuten API PHP 

This is an API Binding in PHP for the new Rakuten API.
# Requirements

- PHP >= 7.3
- cURL Extension
- JSON Extension
- MBString Extension

# Installation

Just require this package via composer:

```
composer require goletter/rakuten-api-php
```

## Yahoo

For when you entered the in your developer profile:

```php
<?php

require_once './vendor/autoload.php';

$config = \Goletter\RakutenAPI\Configuration::getDefaultConfiguration();
$config->setDebug(true);
$config->setLicenseKey('xxxxxxx');
$config->setServiceSecret('xxxxxxx');
$config->setShopUrlName('xxxxxxx');

$orderTimeFrom = '2021-03-15';
$orderTimeTo = '2021-03-17';
$apiInstance = new \Goletter\RakutenAPI\Api\OrdersApi($config);
$result = $apiInstance->getOrders($orderTimeFrom, $orderTimeTo);
$orders = $result->getPayload();
print_r($orders);exit;
```