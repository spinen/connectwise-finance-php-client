<?php
/**
 * ExportAccountingBatchRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Finance
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Finance API
 *
 * ConnectWise Finance API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model;

use \ArrayAccess;

/**
 * ExportAccountingBatchRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExportAccountingBatchRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExportAccountingBatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_identifier' => 'string',
        'gl_interface_identifier' => 'string',
        'thru_date' => '\DateTime',
        'location_id' => 'int',
        'summarize_invoices' => 'string',
        'export_invoices_flag' => 'bool',
        'included_invoice_ids' => 'int[]',
        'excluded_invoice_ids' => 'int[]',
        'export_expenses_flag' => 'bool',
        'included_expense_ids' => 'int[]',
        'excluded_expense_ids' => 'int[]',
        'export_products_flag' => 'bool',
        'included_product_ids' => 'string[]',
        'excluded_product_ids' => 'string[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'batch_identifier' => 'batchIdentifier',
        'gl_interface_identifier' => 'glInterfaceIdentifier',
        'thru_date' => 'thruDate',
        'location_id' => 'locationId',
        'summarize_invoices' => 'summarizeInvoices',
        'export_invoices_flag' => 'exportInvoicesFlag',
        'included_invoice_ids' => 'includedInvoiceIds',
        'excluded_invoice_ids' => 'excludedInvoiceIds',
        'export_expenses_flag' => 'exportExpensesFlag',
        'included_expense_ids' => 'includedExpenseIds',
        'excluded_expense_ids' => 'excludedExpenseIds',
        'export_products_flag' => 'exportProductsFlag',
        'included_product_ids' => 'includedProductIds',
        'excluded_product_ids' => 'excludedProductIds'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'batch_identifier' => 'setBatchIdentifier',
        'gl_interface_identifier' => 'setGlInterfaceIdentifier',
        'thru_date' => 'setThruDate',
        'location_id' => 'setLocationId',
        'summarize_invoices' => 'setSummarizeInvoices',
        'export_invoices_flag' => 'setExportInvoicesFlag',
        'included_invoice_ids' => 'setIncludedInvoiceIds',
        'excluded_invoice_ids' => 'setExcludedInvoiceIds',
        'export_expenses_flag' => 'setExportExpensesFlag',
        'included_expense_ids' => 'setIncludedExpenseIds',
        'excluded_expense_ids' => 'setExcludedExpenseIds',
        'export_products_flag' => 'setExportProductsFlag',
        'included_product_ids' => 'setIncludedProductIds',
        'excluded_product_ids' => 'setExcludedProductIds'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'batch_identifier' => 'getBatchIdentifier',
        'gl_interface_identifier' => 'getGlInterfaceIdentifier',
        'thru_date' => 'getThruDate',
        'location_id' => 'getLocationId',
        'summarize_invoices' => 'getSummarizeInvoices',
        'export_invoices_flag' => 'getExportInvoicesFlag',
        'included_invoice_ids' => 'getIncludedInvoiceIds',
        'excluded_invoice_ids' => 'getExcludedInvoiceIds',
        'export_expenses_flag' => 'getExportExpensesFlag',
        'included_expense_ids' => 'getIncludedExpenseIds',
        'excluded_expense_ids' => 'getExcludedExpenseIds',
        'export_products_flag' => 'getExportProductsFlag',
        'included_product_ids' => 'getIncludedProductIds',
        'excluded_product_ids' => 'getExcludedProductIds'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const SUMMARIZE_INVOICES__DEFAULT = 'Default';
    const SUMMARIZE_INVOICES_CONDENSED = 'Condensed';
    const SUMMARIZE_INVOICES_DETAILED = 'Detailed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSummarizeInvoicesAllowableValues()
    {
        return [
            self::SUMMARIZE_INVOICES__DEFAULT,
            self::SUMMARIZE_INVOICES_CONDENSED,
            self::SUMMARIZE_INVOICES_DETAILED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['batch_identifier'] = isset($data['batch_identifier']) ? $data['batch_identifier'] : null;
        $this->container['gl_interface_identifier'] = isset($data['gl_interface_identifier']) ? $data['gl_interface_identifier'] : null;
        $this->container['thru_date'] = isset($data['thru_date']) ? $data['thru_date'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['summarize_invoices'] = isset($data['summarize_invoices']) ? $data['summarize_invoices'] : null;
        $this->container['export_invoices_flag'] = isset($data['export_invoices_flag']) ? $data['export_invoices_flag'] : null;
        $this->container['included_invoice_ids'] = isset($data['included_invoice_ids']) ? $data['included_invoice_ids'] : null;
        $this->container['excluded_invoice_ids'] = isset($data['excluded_invoice_ids']) ? $data['excluded_invoice_ids'] : null;
        $this->container['export_expenses_flag'] = isset($data['export_expenses_flag']) ? $data['export_expenses_flag'] : null;
        $this->container['included_expense_ids'] = isset($data['included_expense_ids']) ? $data['included_expense_ids'] : null;
        $this->container['excluded_expense_ids'] = isset($data['excluded_expense_ids']) ? $data['excluded_expense_ids'] : null;
        $this->container['export_products_flag'] = isset($data['export_products_flag']) ? $data['export_products_flag'] : null;
        $this->container['included_product_ids'] = isset($data['included_product_ids']) ? $data['included_product_ids'] : null;
        $this->container['excluded_product_ids'] = isset($data['excluded_product_ids']) ? $data['excluded_product_ids'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['batch_identifier'] === null) {
            $invalid_properties[] = "'batch_identifier' can't be null";
        }
        if ((strlen($this->container['batch_identifier']) > 50)) {
            $invalid_properties[] = "invalid value for 'batch_identifier', the character length must be smaller than or equal to 50.";
        }

        $allowed_values = ["Default", "Condensed", "Detailed"];
        if (!in_array($this->container['summarize_invoices'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'summarize_invoices', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['batch_identifier'] === null) {
            return false;
        }
        if (strlen($this->container['batch_identifier']) > 50) {
            return false;
        }
        $allowed_values = ["Default", "Condensed", "Detailed"];
        if (!in_array($this->container['summarize_invoices'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets batch_identifier
     * @return string
     */
    public function getBatchIdentifier()
    {
        return $this->container['batch_identifier'];
    }

    /**
     * Sets batch_identifier
     * @param string $batch_identifier
     * @return $this
     */
    public function setBatchIdentifier($batch_identifier)
    {
        if ((strlen($batch_identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $batch_identifier when calling ExportAccountingBatchRequest., must be smaller than or equal to 50.');
        }

        $this->container['batch_identifier'] = $batch_identifier;

        return $this;
    }

    /**
     * Gets gl_interface_identifier
     * @return string
     */
    public function getGlInterfaceIdentifier()
    {
        return $this->container['gl_interface_identifier'];
    }

    /**
     * Sets gl_interface_identifier
     * @param string $gl_interface_identifier
     * @return $this
     */
    public function setGlInterfaceIdentifier($gl_interface_identifier)
    {
        $this->container['gl_interface_identifier'] = $gl_interface_identifier;

        return $this;
    }

    /**
     * Gets thru_date
     * @return \DateTime
     */
    public function getThruDate()
    {
        return $this->container['thru_date'];
    }

    /**
     * Sets thru_date
     * @param \DateTime $thru_date
     * @return $this
     */
    public function setThruDate($thru_date)
    {
        $this->container['thru_date'] = $thru_date;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets summarize_invoices
     * @return string
     */
    public function getSummarizeInvoices()
    {
        return $this->container['summarize_invoices'];
    }

    /**
     * Sets summarize_invoices
     * @param string $summarize_invoices
     * @return $this
     */
    public function setSummarizeInvoices($summarize_invoices)
    {
        $allowed_values = array('Default', 'Condensed', 'Detailed');
        if (!is_null($summarize_invoices) && (!in_array($summarize_invoices, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'summarize_invoices', must be one of 'Default', 'Condensed', 'Detailed'");
        }
        $this->container['summarize_invoices'] = $summarize_invoices;

        return $this;
    }

    /**
     * Gets export_invoices_flag
     * @return bool
     */
    public function getExportInvoicesFlag()
    {
        return $this->container['export_invoices_flag'];
    }

    /**
     * Sets export_invoices_flag
     * @param bool $export_invoices_flag Batch export must include invoices, expenses, or products (procurement)
     * @return $this
     */
    public function setExportInvoicesFlag($export_invoices_flag)
    {
        $this->container['export_invoices_flag'] = $export_invoices_flag;

        return $this;
    }

    /**
     * Gets included_invoice_ids
     * @return int[]
     */
    public function getIncludedInvoiceIds()
    {
        return $this->container['included_invoice_ids'];
    }

    /**
     * Sets included_invoice_ids
     * @param int[] $included_invoice_ids
     * @return $this
     */
    public function setIncludedInvoiceIds($included_invoice_ids)
    {
        $this->container['included_invoice_ids'] = $included_invoice_ids;

        return $this;
    }

    /**
     * Gets excluded_invoice_ids
     * @return int[]
     */
    public function getExcludedInvoiceIds()
    {
        return $this->container['excluded_invoice_ids'];
    }

    /**
     * Sets excluded_invoice_ids
     * @param int[] $excluded_invoice_ids
     * @return $this
     */
    public function setExcludedInvoiceIds($excluded_invoice_ids)
    {
        $this->container['excluded_invoice_ids'] = $excluded_invoice_ids;

        return $this;
    }

    /**
     * Gets export_expenses_flag
     * @return bool
     */
    public function getExportExpensesFlag()
    {
        return $this->container['export_expenses_flag'];
    }

    /**
     * Sets export_expenses_flag
     * @param bool $export_expenses_flag Batch export must include invoices, expenses, or products (procurement)
     * @return $this
     */
    public function setExportExpensesFlag($export_expenses_flag)
    {
        $this->container['export_expenses_flag'] = $export_expenses_flag;

        return $this;
    }

    /**
     * Gets included_expense_ids
     * @return int[]
     */
    public function getIncludedExpenseIds()
    {
        return $this->container['included_expense_ids'];
    }

    /**
     * Sets included_expense_ids
     * @param int[] $included_expense_ids
     * @return $this
     */
    public function setIncludedExpenseIds($included_expense_ids)
    {
        $this->container['included_expense_ids'] = $included_expense_ids;

        return $this;
    }

    /**
     * Gets excluded_expense_ids
     * @return int[]
     */
    public function getExcludedExpenseIds()
    {
        return $this->container['excluded_expense_ids'];
    }

    /**
     * Sets excluded_expense_ids
     * @param int[] $excluded_expense_ids
     * @return $this
     */
    public function setExcludedExpenseIds($excluded_expense_ids)
    {
        $this->container['excluded_expense_ids'] = $excluded_expense_ids;

        return $this;
    }

    /**
     * Gets export_products_flag
     * @return bool
     */
    public function getExportProductsFlag()
    {
        return $this->container['export_products_flag'];
    }

    /**
     * Sets export_products_flag
     * @param bool $export_products_flag Batch export must include invoices, expenses, or products (procurement)
     * @return $this
     */
    public function setExportProductsFlag($export_products_flag)
    {
        $this->container['export_products_flag'] = $export_products_flag;

        return $this;
    }

    /**
     * Gets included_product_ids
     * @return string[]
     */
    public function getIncludedProductIds()
    {
        return $this->container['included_product_ids'];
    }

    /**
     * Sets included_product_ids
     * @param string[] $included_product_ids
     * @return $this
     */
    public function setIncludedProductIds($included_product_ids)
    {
        $this->container['included_product_ids'] = $included_product_ids;

        return $this;
    }

    /**
     * Gets excluded_product_ids
     * @return string[]
     */
    public function getExcludedProductIds()
    {
        return $this->container['excluded_product_ids'];
    }

    /**
     * Sets excluded_product_ids
     * @param string[] $excluded_product_ids
     * @return $this
     */
    public function setExcludedProductIds($excluded_product_ids)
    {
        $this->container['excluded_product_ids'] = $excluded_product_ids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Finance\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Finance\ObjectSerializer::sanitizeForSerialization($this));
    }
}

