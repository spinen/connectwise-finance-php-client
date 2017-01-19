# Spinen\ConnectWise\Clients\Finance\AgreementSitesApi
Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeAgreementsIdSitesCountGet**](AgreementSitesApi.md#financeAgreementsIdSitesCountGet) | **GET** /finance/agreements/{id}/sites/count | 
[**financeAgreementsIdSitesGet**](AgreementSitesApi.md#financeAgreementsIdSitesGet) | **GET** /finance/agreements/{id}/sites | 
[**financeAgreementsIdSitesPost**](AgreementSitesApi.md#financeAgreementsIdSitesPost) | **POST** /finance/agreements/{id}/sites | 
[**financeAgreementsIdSitesSiteIdDelete**](AgreementSitesApi.md#financeAgreementsIdSitesSiteIdDelete) | **DELETE** /finance/agreements/{id}/sites/{siteId} | 
[**financeAgreementsIdSitesSiteIdGet**](AgreementSitesApi.md#financeAgreementsIdSitesSiteIdGet) | **GET** /finance/agreements/{id}/sites/{siteId} | 
[**financeAgreementsIdSitesSiteIdPatch**](AgreementSitesApi.md#financeAgreementsIdSitesSiteIdPatch) | **PATCH** /finance/agreements/{id}/sites/{siteId} | 
[**financeAgreementsIdSitesSiteIdPut**](AgreementSitesApi.md#financeAgreementsIdSitesSiteIdPut) | **PUT** /finance/agreements/{id}/sites/{siteId} | 


# **financeAgreementsIdSitesCountGet**
> \Spinen\ConnectWise\Clients\Finance\Model\Count financeAgreementsIdSitesCountGet($id, $conditions)



Get Sites Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementSitesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->financeAgreementsIdSitesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementSitesApi->financeAgreementsIdSitesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **financeAgreementsIdSitesGet**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite[] financeAgreementsIdSitesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementSitesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->financeAgreementsIdSitesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementSitesApi->financeAgreementsIdSitesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite[]**](../Model/AgreementSite.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdSitesPost**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite financeAgreementsIdSitesPost($id, $site)



Create Site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementSitesApi();
$id = 56; // int | 
$site = new \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite(); // \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite | 

try {
    $result = $api_instance->financeAgreementsIdSitesPost($id, $site);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementSitesApi->financeAgreementsIdSitesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **site** | [**\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite**](../Model/AgreementSite.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdSitesSiteIdDelete**
> financeAgreementsIdSitesSiteIdDelete($id, $site_id)



Delete Site By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementSitesApi();
$id = 56; // int | 
$site_id = 56; // int | 

try {
    $api_instance->financeAgreementsIdSitesSiteIdDelete($id, $site_id);
} catch (Exception $e) {
    echo 'Exception when calling AgreementSitesApi->financeAgreementsIdSitesSiteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **site_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdSitesSiteIdGet**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite financeAgreementsIdSitesSiteIdGet($id, $site_id)



Get Site By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementSitesApi();
$id = 56; // int | 
$site_id = 56; // int | 

try {
    $result = $api_instance->financeAgreementsIdSitesSiteIdGet($id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementSitesApi->financeAgreementsIdSitesSiteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **site_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite**](../Model/AgreementSite.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdSitesSiteIdPatch**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite financeAgreementsIdSitesSiteIdPatch($id, $site_id, $operations)



Update Site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementSitesApi();
$id = 56; // int | 
$site_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] | 

try {
    $result = $api_instance->financeAgreementsIdSitesSiteIdPatch($id, $site_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementSitesApi->financeAgreementsIdSitesSiteIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **site_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite**](../Model/AgreementSite.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAgreementsIdSitesSiteIdPut**
> \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite financeAgreementsIdSitesSiteIdPut($id, $site_id, $site)



Replace Site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Finance\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Finance\Api\AgreementSitesApi();
$id = 56; // int | 
$site_id = 56; // int | 
$site = new \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite(); // \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite | 

try {
    $result = $api_instance->financeAgreementsIdSitesSiteIdPut($id, $site_id, $site);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementSitesApi->financeAgreementsIdSitesSiteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **site_id** | **int**|  |
 **site** | [**\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite**](../Model/\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite**](../Model/AgreementSite.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
