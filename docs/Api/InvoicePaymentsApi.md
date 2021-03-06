# Spinen\ConnectWise\Clients\Finance\InvoicePaymentsApi
Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeInvoicesIdPaymentsGet**](InvoicePaymentsApi.md#financeInvoicesIdPaymentsGet) | **GET** /finance/invoices/{id}/payments | 
[**financeInvoicesIdPaymentsPaymentIdDelete**](InvoicePaymentsApi.md#financeInvoicesIdPaymentsPaymentIdDelete) | **DELETE** /finance/invoices/{id}/payments/{paymentId} | 
[**financeInvoicesIdPaymentsPaymentIdGet**](InvoicePaymentsApi.md#financeInvoicesIdPaymentsPaymentIdGet) | **GET** /finance/invoices/{id}/payments/{paymentId} | 
[**financeInvoicesIdPaymentsPaymentIdPatch**](InvoicePaymentsApi.md#financeInvoicesIdPaymentsPaymentIdPatch) | **PATCH** /finance/invoices/{id}/payments/{paymentId} | 
[**financeInvoicesIdPaymentsPaymentIdPut**](InvoicePaymentsApi.md#financeInvoicesIdPaymentsPaymentIdPut) | **PUT** /finance/invoices/{id}/payments/{paymentId} | 
[**financeInvoicesIdPaymentsPost**](InvoicePaymentsApi.md#financeInvoicesIdPaymentsPost) | **POST** /finance/invoices/{id}/payments | 


# **financeInvoicesIdPaymentsGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Payment[] financeInvoicesIdPaymentsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Payments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\InvoicePaymentsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->financeInvoicesIdPaymentsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->financeInvoicesIdPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Payment[]**](../Model/Payment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeInvoicesIdPaymentsPaymentIdDelete**
> financeInvoicesIdPaymentsPaymentIdDelete($id, $payment_id)



Delete Payment By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\InvoicePaymentsApi();
$id = 56; // int | 
$payment_id = 56; // int | 

try {
    $api_instance->financeInvoicesIdPaymentsPaymentIdDelete($id, $payment_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->financeInvoicesIdPaymentsPaymentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **payment_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeInvoicesIdPaymentsPaymentIdGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Payment financeInvoicesIdPaymentsPaymentIdGet($id, $payment_id)



Get Payment By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\InvoicePaymentsApi();
$id = 56; // int | 
$payment_id = 56; // int | 

try {
    $result = $api_instance->financeInvoicesIdPaymentsPaymentIdGet($id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->financeInvoicesIdPaymentsPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **payment_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Payment**](../Model/Payment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeInvoicesIdPaymentsPaymentIdPatch**
> \Spinen\ConnectWise\Clients\Finance\Model\Payment financeInvoicesIdPaymentsPaymentIdPatch($id, $payment_id, $operations)



Update Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\InvoicePaymentsApi();
$id = 56; // int | 
$payment_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] | 

try {
    $result = $api_instance->financeInvoicesIdPaymentsPaymentIdPatch($id, $payment_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->financeInvoicesIdPaymentsPaymentIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **payment_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Payment**](../Model/Payment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeInvoicesIdPaymentsPaymentIdPut**
> \Spinen\ConnectWise\Clients\Finance\Model\Payment financeInvoicesIdPaymentsPaymentIdPut($id, $payment_id, $payment)



Replace Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\InvoicePaymentsApi();
$id = 56; // int | 
$payment_id = 56; // int | 
$payment = new \Spinen\ConnectWise\Clients\Finance\Model\Payment(); // \Spinen\ConnectWise\Clients\Finance\Model\Payment | 

try {
    $result = $api_instance->financeInvoicesIdPaymentsPaymentIdPut($id, $payment_id, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->financeInvoicesIdPaymentsPaymentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **payment_id** | **int**|  |
 **payment** | [**\Spinen\ConnectWise\Clients\Finance\Model\Payment**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\Payment.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Payment**](../Model/Payment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeInvoicesIdPaymentsPost**
> \Spinen\ConnectWise\Clients\Finance\Model\Payment financeInvoicesIdPaymentsPost($id, $payment)



Create Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\InvoicePaymentsApi();
$id = 56; // int | 
$payment = new \Spinen\ConnectWise\Clients\Finance\Model\Payment(); // \Spinen\ConnectWise\Clients\Finance\Model\Payment | 

try {
    $result = $api_instance->financeInvoicesIdPaymentsPost($id, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePaymentsApi->financeInvoicesIdPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **payment** | [**\Spinen\ConnectWise\Clients\Finance\Model\Payment**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\Payment.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Payment**](../Model/Payment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

