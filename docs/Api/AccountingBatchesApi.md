# Spinen\ConnectWise\Clients\Finance\AccountingBatchesApi
Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeAccountingBatchesCountGet**](AccountingBatchesApi.md#financeAccountingBatchesCountGet) | **GET** /finance/accounting/batches/count | 
[**financeAccountingBatchesGet**](AccountingBatchesApi.md#financeAccountingBatchesGet) | **GET** /finance/accounting/batches | 
[**financeAccountingBatchesIdDelete**](AccountingBatchesApi.md#financeAccountingBatchesIdDelete) | **DELETE** /finance/accounting/batches/{id} | 
[**financeAccountingBatchesIdExportPost**](AccountingBatchesApi.md#financeAccountingBatchesIdExportPost) | **POST** /finance/accounting/batches/{id}/export | 
[**financeAccountingBatchesIdGet**](AccountingBatchesApi.md#financeAccountingBatchesIdGet) | **GET** /finance/accounting/batches/{id} | 
[**financeAccountingBatchesPost**](AccountingBatchesApi.md#financeAccountingBatchesPost) | **POST** /finance/accounting/batches | 
[**financeAccountingExportPost**](AccountingBatchesApi.md#financeAccountingExportPost) | **POST** /finance/accounting/export | 


# **financeAccountingBatchesCountGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Count financeAccountingBatchesCountGet($conditions)



Get Batches Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AccountingBatchesApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->financeAccountingBatchesCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingBatchesApi->financeAccountingBatchesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAccountingBatchesGet**
> \Spinen\ConnectWise\Clients\Finance\Model\AccountingBatch[] financeAccountingBatchesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Batches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AccountingBatchesApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->financeAccountingBatchesGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingBatchesApi->financeAccountingBatchesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AccountingBatch[]**](../Model/AccountingBatch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAccountingBatchesIdDelete**
> financeAccountingBatchesIdDelete($id)



Delete Batch By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AccountingBatchesApi();
$id = 56; // int | 

try {
    $api_instance->financeAccountingBatchesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingBatchesApi->financeAccountingBatchesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAccountingBatchesIdExportPost**
> \Spinen\ConnectWise\Clients\Finance\Model\GLExport financeAccountingBatchesIdExportPost($id, $batch_export_parameters)



Re-export the payload data from an existing batch (RecreateBatch in SOAP)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AccountingBatchesApi();
$id = 56; // int | 
$batch_export_parameters = new \Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest(); // \Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest | 

try {
    $result = $api_instance->financeAccountingBatchesIdExportPost($id, $batch_export_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingBatchesApi->financeAccountingBatchesIdExportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **batch_export_parameters** | [**\Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\GLExport**](../Model/GLExport.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAccountingBatchesIdGet**
> \Spinen\ConnectWise\Clients\Finance\Model\AccountingBatch financeAccountingBatchesIdGet($id)



Get Batch By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AccountingBatchesApi();
$id = 56; // int | 

try {
    $result = $api_instance->financeAccountingBatchesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingBatchesApi->financeAccountingBatchesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AccountingBatch**](../Model/AccountingBatch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAccountingBatchesPost**
> \Spinen\ConnectWise\Clients\Finance\Model\GLExport financeAccountingBatchesPost($accounting_batch_parameters)



Creates the Accounting Batch and updates GL Records (UpdateBatch in SOAP)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AccountingBatchesApi();
$accounting_batch_parameters = new \Spinen\ConnectWise\Clients\Finance\Model\CreateAccountingBatchRequest(); // \Spinen\ConnectWise\Clients\Finance\Model\CreateAccountingBatchRequest | 

try {
    $result = $api_instance->financeAccountingBatchesPost($accounting_batch_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingBatchesApi->financeAccountingBatchesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_batch_parameters** | [**\Spinen\ConnectWise\Clients\Finance\Model\CreateAccountingBatchRequest**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\CreateAccountingBatchRequest.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\GLExport**](../Model/GLExport.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAccountingExportPost**
> \Spinen\ConnectWise\Clients\Finance\Model\GLExport financeAccountingExportPost($batch_export_parameters)



Exports accouting batch payload based on parameters (CreateBatch in SOAP)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AccountingBatchesApi();
$batch_export_parameters = new \Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest(); // \Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest | 

try {
    $result = $api_instance->financeAccountingExportPost($batch_export_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingBatchesApi->financeAccountingExportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_export_parameters** | [**\Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\ExportAccountingBatchRequest.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\GLExport**](../Model/GLExport.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

