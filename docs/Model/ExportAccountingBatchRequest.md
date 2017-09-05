# ExportAccountingBatchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_identifier** | **string** |  | 
**gl_interface_identifier** | **string** |  | [optional] 
**thru_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**location_id** | **int** |  | [optional] 
**summarize_invoices** | **string** |  | [optional] 
**export_invoices_flag** | **bool** | Batch export must include invoices, expenses, or products (procurement) | [optional] 
**included_invoice_ids** | **int[]** |  | [optional] 
**excluded_invoice_ids** | **int[]** |  | [optional] 
**export_expenses_flag** | **bool** | Batch export must include invoices, expenses, or products (procurement) | [optional] 
**included_expense_ids** | **int[]** |  | [optional] 
**excluded_expense_ids** | **int[]** |  | [optional] 
**export_products_flag** | **bool** | Batch export must include invoices, expenses, or products (procurement) | [optional] 
**included_product_ids** | **string[]** |  | [optional] 
**excluded_product_ids** | **string[]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


