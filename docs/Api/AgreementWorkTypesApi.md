# Spinen\ConnectWise\Clients\Finance\AgreementWorkTypesApi
Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeAgreementsIdWorktypesCountGet**](AgreementWorkTypesApi.md#financeAgreementsIdWorktypesCountGet) | **GET** /finance/agreements/{id}/worktypes/count | 
[**financeAgreementsIdWorktypesGet**](AgreementWorkTypesApi.md#financeAgreementsIdWorktypesGet) | **GET** /finance/agreements/{id}/worktypes | 
[**financeAgreementsIdWorktypesPost**](AgreementWorkTypesApi.md#financeAgreementsIdWorktypesPost) | **POST** /finance/agreements/{id}/worktypes | 
[**financeAgreementsIdWorktypesWorktypeIdDelete**](AgreementWorkTypesApi.md#financeAgreementsIdWorktypesWorktypeIdDelete) | **DELETE** /finance/agreements/{id}/worktypes/{worktypeId} | 
[**financeAgreementsIdWorktypesWorktypeIdGet**](AgreementWorkTypesApi.md#financeAgreementsIdWorktypesWorktypeIdGet) | **GET** /finance/agreements/{id}/worktypes/{worktypeId} | 
[**financeAgreementsIdWorktypesWorktypeIdPatch**](AgreementWorkTypesApi.md#financeAgreementsIdWorktypesWorktypeIdPatch) | **PATCH** /finance/agreements/{id}/worktypes/{worktypeId} | 
[**financeAgreementsIdWorktypesWorktypeIdPut**](AgreementWorkTypesApi.md#financeAgreementsIdWorktypesWorktypeIdPut) | **PUT** /finance/agreements/{id}/worktypes/{worktypeId} | 


# **financeAgreementsIdWorktypesCountGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Count financeAgreementsIdWorktypesCountGet($id, $conditions)



Get Work Types Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementWorkTypesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->financeAgreementsIdWorktypesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementWorkTypesApi->financeAgreementsIdWorktypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdWorktypesGet**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType[] financeAgreementsIdWorktypesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Work Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementWorkTypesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->financeAgreementsIdWorktypesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementWorkTypesApi->financeAgreementsIdWorktypesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType[]**](../Model/AgreementWorkType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdWorktypesPost**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType financeAgreementsIdWorktypesPost($id, $work_type)



Create Work Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementWorkTypesApi();
$id = 56; // int | 
$work_type = new \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType(); // \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType | 

try {
    $result = $api_instance->financeAgreementsIdWorktypesPost($id, $work_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementWorkTypesApi->financeAgreementsIdWorktypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **work_type** | [**\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType**](../Model/AgreementWorkType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdWorktypesWorktypeIdDelete**
> financeAgreementsIdWorktypesWorktypeIdDelete($id, $worktype_id)



Delete Work Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementWorkTypesApi();
$id = 56; // int | 
$worktype_id = 56; // int | 

try {
    $api_instance->financeAgreementsIdWorktypesWorktypeIdDelete($id, $worktype_id);
} catch (Exception $e) {
    echo 'Exception when calling AgreementWorkTypesApi->financeAgreementsIdWorktypesWorktypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **worktype_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdWorktypesWorktypeIdGet**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType financeAgreementsIdWorktypesWorktypeIdGet($id, $worktype_id)



Get Work Type By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementWorkTypesApi();
$id = 56; // int | 
$worktype_id = 56; // int | 

try {
    $result = $api_instance->financeAgreementsIdWorktypesWorktypeIdGet($id, $worktype_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementWorkTypesApi->financeAgreementsIdWorktypesWorktypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **worktype_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType**](../Model/AgreementWorkType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdWorktypesWorktypeIdPatch**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType financeAgreementsIdWorktypesWorktypeIdPatch($id, $worktype_id, $operations)



Update Work Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementWorkTypesApi();
$id = 56; // int | 
$worktype_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] | 

try {
    $result = $api_instance->financeAgreementsIdWorktypesWorktypeIdPatch($id, $worktype_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementWorkTypesApi->financeAgreementsIdWorktypesWorktypeIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **worktype_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType**](../Model/AgreementWorkType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdWorktypesWorktypeIdPut**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType financeAgreementsIdWorktypesWorktypeIdPut($id, $worktype_id, $work_type)



Replace Work Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementWorkTypesApi();
$id = 56; // int | 
$worktype_id = 56; // int | 
$work_type = new \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType(); // \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType | 

try {
    $result = $api_instance->financeAgreementsIdWorktypesWorktypeIdPut($id, $worktype_id, $work_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementWorkTypesApi->financeAgreementsIdWorktypesWorktypeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **worktype_id** | **int**|  |
 **work_type** | [**\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkType**](../Model/AgreementWorkType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

