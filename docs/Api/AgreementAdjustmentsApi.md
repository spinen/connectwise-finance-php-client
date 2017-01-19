# Spinen\ConnectWise\Clients\Finance\AgreementAdjustmentsApi
Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeAgreementsIdAdjustmentsAdjustmentIdDelete**](AgreementAdjustmentsApi.md#financeAgreementsIdAdjustmentsAdjustmentIdDelete) | **DELETE** /finance/agreements/{id}/adjustments/{adjustmentId} | 
[**financeAgreementsIdAdjustmentsAdjustmentIdGet**](AgreementAdjustmentsApi.md#financeAgreementsIdAdjustmentsAdjustmentIdGet) | **GET** /finance/agreements/{id}/adjustments/{adjustmentId} | 
[**financeAgreementsIdAdjustmentsAdjustmentIdPatch**](AgreementAdjustmentsApi.md#financeAgreementsIdAdjustmentsAdjustmentIdPatch) | **PATCH** /finance/agreements/{id}/adjustments/{adjustmentId} | 
[**financeAgreementsIdAdjustmentsAdjustmentIdPut**](AgreementAdjustmentsApi.md#financeAgreementsIdAdjustmentsAdjustmentIdPut) | **PUT** /finance/agreements/{id}/adjustments/{adjustmentId} | 
[**financeAgreementsIdAdjustmentsCountGet**](AgreementAdjustmentsApi.md#financeAgreementsIdAdjustmentsCountGet) | **GET** /finance/agreements/{id}/adjustments/count | 
[**financeAgreementsIdAdjustmentsGet**](AgreementAdjustmentsApi.md#financeAgreementsIdAdjustmentsGet) | **GET** /finance/agreements/{id}/adjustments | 
[**financeAgreementsIdAdjustmentsPost**](AgreementAdjustmentsApi.md#financeAgreementsIdAdjustmentsPost) | **POST** /finance/agreements/{id}/adjustments | 


# **financeAgreementsIdAdjustmentsAdjustmentIdDelete**
> financeAgreementsIdAdjustmentsAdjustmentIdDelete($id, $adjustment_id)



Delete Adjustment By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementAdjustmentsApi();
$id = 56; // int | 
$adjustment_id = 56; // int | 

try {
    $api_instance->financeAgreementsIdAdjustmentsAdjustmentIdDelete($id, $adjustment_id);
} catch (Exception $e) {
    echo 'Exception when calling AgreementAdjustmentsApi->financeAgreementsIdAdjustmentsAdjustmentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **adjustment_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdAdjustmentsAdjustmentIdGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Adjustment financeAgreementsIdAdjustmentsAdjustmentIdGet($id, $adjustment_id)



Get Adjustment By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementAdjustmentsApi();
$id = 56; // int | 
$adjustment_id = 56; // int | 

try {
    $result = $api_instance->financeAgreementsIdAdjustmentsAdjustmentIdGet($id, $adjustment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementAdjustmentsApi->financeAgreementsIdAdjustmentsAdjustmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **adjustment_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Adjustment**](../Model/Adjustment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdAdjustmentsAdjustmentIdPatch**
> \Spinen\ConnectWise\Clients\Finance\Model\Adjustment financeAgreementsIdAdjustmentsAdjustmentIdPatch($id, $adjustment_id, $operations)



Update Adjustment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementAdjustmentsApi();
$id = 56; // int | 
$adjustment_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] | 

try {
    $result = $api_instance->financeAgreementsIdAdjustmentsAdjustmentIdPatch($id, $adjustment_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementAdjustmentsApi->financeAgreementsIdAdjustmentsAdjustmentIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **adjustment_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Adjustment**](../Model/Adjustment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdAdjustmentsAdjustmentIdPut**
> \Spinen\ConnectWise\Clients\Finance\Model\Adjustment financeAgreementsIdAdjustmentsAdjustmentIdPut($id, $adjustment_id, $adjustment)



Replace Adjustment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementAdjustmentsApi();
$id = 56; // int | 
$adjustment_id = 56; // int | 
$adjustment = new \Spinen\ConnectWise\Clients\Finance\Model\Adjustment(); // \Spinen\ConnectWise\Clients\Finance\Model\Adjustment | 

try {
    $result = $api_instance->financeAgreementsIdAdjustmentsAdjustmentIdPut($id, $adjustment_id, $adjustment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementAdjustmentsApi->financeAgreementsIdAdjustmentsAdjustmentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **adjustment_id** | **int**|  |
 **adjustment** | [**\Spinen\ConnectWise\Clients\Finance\Model\Adjustment**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\Adjustment.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Adjustment**](../Model/Adjustment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdAdjustmentsCountGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Count financeAgreementsIdAdjustmentsCountGet($id, $conditions, $custom_field_conditions)



Get Adjustments Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementAdjustmentsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$custom_field_conditions = "custom_field_conditions_example"; // string | 

try {
    $result = $api_instance->financeAgreementsIdAdjustmentsCountGet($id, $conditions, $custom_field_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementAdjustmentsApi->financeAgreementsIdAdjustmentsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **custom_field_conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdAdjustmentsGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Adjustment[] financeAgreementsIdAdjustmentsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Adjustments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementAdjustmentsApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->financeAgreementsIdAdjustmentsGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementAdjustmentsApi->financeAgreementsIdAdjustmentsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Finance\Model\Adjustment[]**](../Model/Adjustment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdAdjustmentsPost**
> \Spinen\ConnectWise\Clients\Finance\Model\Adjustment financeAgreementsIdAdjustmentsPost($id, $adjustment)



Create Adjustment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementAdjustmentsApi();
$id = 56; // int | 
$adjustment = new \Spinen\ConnectWise\Clients\Finance\Model\Adjustment(); // \Spinen\ConnectWise\Clients\Finance\Model\Adjustment | 

try {
    $result = $api_instance->financeAgreementsIdAdjustmentsPost($id, $adjustment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementAdjustmentsApi->financeAgreementsIdAdjustmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **adjustment** | [**\Spinen\ConnectWise\Clients\Finance\Model\Adjustment**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\Adjustment.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Adjustment**](../Model/Adjustment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
