# UnpostedProcurement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**description** | **string** |  | [optional] 
**location_id** | **int** |  | [optional] 
**department_id** | **int** |  | [optional] 
**procurement_type** | **string** |  | [optional] 
**purchase_order** | [**\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\PurchaseOrderReference**](PurchaseOrderReference.md) |  | [optional] 
**purchase_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**tracking_number** | **string** |  | [optional] 
**billing_terms** | [**\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BillingTermsReference**](BillingTermsReference.md) |  | [optional] 
**currency** | [**\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference**](CurrencyReference.md) |  | [optional] 
**total** | **double** |  | [optional] 
**tax_code** | [**\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference**](TaxCodeReference.md) |  | [optional] 
**avalara_tax_flag** | **bool** | Used to determine if Avalara tax is enabled. | [optional] 
**item_taxable_flag** | **bool** |  | [optional] 
**purchase_order_taxable_flag** | **bool** |  | [optional] 
**state_tax_flag** | **bool** | Set to true if transaction is taxable at the state level. | [optional] 
**state_tax_xref** | **string** |  | [optional] 
**state_tax_amount** | **double** |  | [optional] 
**county_tax_flag** | **bool** | Set to true if transaction is taxable at the county level. | [optional] 
**county_tax_xref** | **string** |  | [optional] 
**county_tax_amount** | **double** |  | [optional] 
**city_tax_flag** | **bool** | Set to true if transaction is taxable at the city level. | [optional] 
**city_tax_xref** | **string** |  | [optional] 
**city_tax_amount** | **double** |  | [optional] 
**country_tax_flag** | **bool** | Set to true if transaction is taxable at the country level. | [optional] 
**country_tax_xref** | **string** |  | [optional] 
**country_tax_amount** | **double** |  | [optional] 
**composite_tax_flag** | **bool** | Set to true if transaction is taxable at the composite level. | [optional] 
**composite_tax_xref** | **string** |  | [optional] 
**composite_tax_amount** | **double** |  | [optional] 
**tax_total** | **double** |  | [optional] 
**customer** | [**\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference**](CompanyReference.md) |  | [optional] 
**vendor** | [**\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference**](CompanyReference.md) |  | [optional] 
**vendor_account_number** | **string** |  | [optional] 
**vendor_invoice_number** | **string** |  | [optional] 
**vendor_invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**tax_freight_flag** | **bool** |  | [optional] 
**freight_tax_total** | **double** |  | [optional] 
**freight_cost** | **double** |  | [optional] 
**date_closed** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

