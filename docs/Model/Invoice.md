# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**invoice_number** | **string** |  | [optional] 
**type** | **string** |  | 
**status** | [**\Spinen\ConnectWise\Clients\Finance\Model\BillingStatusReference**](BillingStatusReference.md) |  | [optional] 
**company** | [**\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference**](CompanyReference.md) |  | 
**bill_to_company** | [**\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference**](CompanyReference.md) |  | [optional] 
**ship_to_company** | [**\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference**](CompanyReference.md) |  | [optional] 
**apply_to_type** | **string** |  | [optional] 
**apply_to_id** | **int** |  | [optional] 
**attention** | **string** |  | [optional] 
**billing_site** | [**\Spinen\ConnectWise\Clients\Finance\Model\SiteReference**](SiteReference.md) |  | [optional] 
**shipping_site** | [**\Spinen\ConnectWise\Clients\Finance\Model\SiteReference**](SiteReference.md) |  | [optional] 
**billing_terms** | [**\Spinen\ConnectWise\Clients\Finance\Model\BillingTermsReference**](BillingTermsReference.md) |  | [optional] 
**reference** | **string** |  | [optional] 
**customer_po** | **string** |  | [optional] 
**template_setup_id** | **int** | Can be obtained via InvoiceTemplate report | [optional] 
**email_template_id** | **int** | Can be obtained via InvoiceEmailTemplate report | [optional] 
**add_to_batch_email_list** | **bool** |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**restrict_downpayment_flag** | **bool** |  | [optional] 
**location_id** | **int** |  | [optional] 
**department_id** | **int** |  | [optional] 
**territory_id** | **int** |  | [optional] 
**top_comment** | **string** |  | [optional] 
**bottom_comment** | **string** |  | [optional] 
**taxable_flag** | **bool** |  | [optional] 
**tax_code** | [**\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference**](TaxCodeReference.md) |  | [optional] 
**internal_notes** | **string** |  | [optional] 
**downpayment_previously_taxed_flag** | **bool** |  | [optional] 
**service_total** | **double** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expense_total** | **double** |  | [optional] 
**product_total** | **double** |  | [optional] 
**previous_progress_applied** | **double** |  | [optional] 
**service_adjustment_amount** | **double** |  | [optional] 
**agreement_amount** | **double** |  | [optional] 
**downpayment_applied** | **double** |  | [optional] 
**subtotal** | **double** |  | [optional] 
**total** | **double** |  | [optional] 
**remaining_downpayment** | **double** |  | [optional] 
**sales_tax** | **double** |  | [optional] 
**adjustment_reason** | **string** |  | [optional] 
**adjusted_by** | **string** |  | [optional] 
**payments** | **double** |  | [optional] 
**credits** | **double** |  | [optional] 
**balance** | **double** |  | [optional] 
**special_invoice_flag** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


