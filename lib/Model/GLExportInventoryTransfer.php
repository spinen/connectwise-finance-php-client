<?php
/**
 * GLExportInventoryTransfer
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
 * GLExportInventoryTransfer Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GLExportInventoryTransfer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GLExportInventoryTransfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'document_type' => 'string',
        'document_date' => '\DateTime',
        'account_number' => 'string',
        'gl_class' => 'string',
        'gl_type_id' => 'string',
        'description' => 'string',
        'sales_code' => 'string',
        'memo' => 'string',
        'cost_acccount_number' => 'string',
        'inventory_account_number' => 'string',
        'transfer_id' => 'int',
        'item' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\IvItemReference',
        'gl_item_id' => 'string',
        'sales_description' => 'string',
        'item_description' => 'string',
        'currency' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference',
        'item_price' => 'double',
        'taxable' => 'bool',
        'unit_of_measure' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\UnitOfMeasureReference',
        'quantity' => 'double',
        'cost' => 'double',
        'total' => 'double',
        'sub_category' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\ProductSubCategoryReference',
        'serialized_flag' => 'bool',
        'serial_numbers' => 'string',
        'shipment_method' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\ShipmentMethodReference',
        'bin' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference',
        'warehouse' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseReference',
        'transfer_from_bin' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference',
        'transfer_from_location_xref' => 'string',
        'transfer_to_bin' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference',
        'transfer_to_location_xref' => 'string',
        'location_xref' => 'string',
        'price_level_xref' => 'string',
        'uom_schedule_xref' => 'string',
        'item_type_xref' => 'string',
        'inventory_xref' => 'string',
        'cogs_xref' => 'string',
        'tax_note' => 'string',
        'tax_code' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference',
        'offset' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\GLExportInventoryTransferOffset'
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
        'id' => 'id',
        'document_type' => 'documentType',
        'document_date' => 'documentDate',
        'account_number' => 'accountNumber',
        'gl_class' => 'glClass',
        'gl_type_id' => 'glTypeId',
        'description' => 'description',
        'sales_code' => 'salesCode',
        'memo' => 'memo',
        'cost_acccount_number' => 'costAcccountNumber',
        'inventory_account_number' => 'inventoryAccountNumber',
        'transfer_id' => 'transferId',
        'item' => 'item',
        'gl_item_id' => 'glItemId',
        'sales_description' => 'salesDescription',
        'item_description' => 'itemDescription',
        'currency' => 'currency',
        'item_price' => 'itemPrice',
        'taxable' => 'taxable',
        'unit_of_measure' => 'unitOfMeasure',
        'quantity' => 'quantity',
        'cost' => 'cost',
        'total' => 'total',
        'sub_category' => 'subCategory',
        'serialized_flag' => 'serializedFlag',
        'serial_numbers' => 'serialNumbers',
        'shipment_method' => 'shipmentMethod',
        'bin' => 'bin',
        'warehouse' => 'warehouse',
        'transfer_from_bin' => 'transferFromBin',
        'transfer_from_location_xref' => 'transferFromLocationXref',
        'transfer_to_bin' => 'transferToBin',
        'transfer_to_location_xref' => 'transferToLocationXref',
        'location_xref' => 'locationXref',
        'price_level_xref' => 'priceLevelXref',
        'uom_schedule_xref' => 'uomScheduleXref',
        'item_type_xref' => 'itemTypeXref',
        'inventory_xref' => 'inventoryXref',
        'cogs_xref' => 'cogsXref',
        'tax_note' => 'taxNote',
        'tax_code' => 'taxCode',
        'offset' => 'offset'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_type' => 'setDocumentType',
        'document_date' => 'setDocumentDate',
        'account_number' => 'setAccountNumber',
        'gl_class' => 'setGlClass',
        'gl_type_id' => 'setGlTypeId',
        'description' => 'setDescription',
        'sales_code' => 'setSalesCode',
        'memo' => 'setMemo',
        'cost_acccount_number' => 'setCostAcccountNumber',
        'inventory_account_number' => 'setInventoryAccountNumber',
        'transfer_id' => 'setTransferId',
        'item' => 'setItem',
        'gl_item_id' => 'setGlItemId',
        'sales_description' => 'setSalesDescription',
        'item_description' => 'setItemDescription',
        'currency' => 'setCurrency',
        'item_price' => 'setItemPrice',
        'taxable' => 'setTaxable',
        'unit_of_measure' => 'setUnitOfMeasure',
        'quantity' => 'setQuantity',
        'cost' => 'setCost',
        'total' => 'setTotal',
        'sub_category' => 'setSubCategory',
        'serialized_flag' => 'setSerializedFlag',
        'serial_numbers' => 'setSerialNumbers',
        'shipment_method' => 'setShipmentMethod',
        'bin' => 'setBin',
        'warehouse' => 'setWarehouse',
        'transfer_from_bin' => 'setTransferFromBin',
        'transfer_from_location_xref' => 'setTransferFromLocationXref',
        'transfer_to_bin' => 'setTransferToBin',
        'transfer_to_location_xref' => 'setTransferToLocationXref',
        'location_xref' => 'setLocationXref',
        'price_level_xref' => 'setPriceLevelXref',
        'uom_schedule_xref' => 'setUomScheduleXref',
        'item_type_xref' => 'setItemTypeXref',
        'inventory_xref' => 'setInventoryXref',
        'cogs_xref' => 'setCogsXref',
        'tax_note' => 'setTaxNote',
        'tax_code' => 'setTaxCode',
        'offset' => 'setOffset'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_type' => 'getDocumentType',
        'document_date' => 'getDocumentDate',
        'account_number' => 'getAccountNumber',
        'gl_class' => 'getGlClass',
        'gl_type_id' => 'getGlTypeId',
        'description' => 'getDescription',
        'sales_code' => 'getSalesCode',
        'memo' => 'getMemo',
        'cost_acccount_number' => 'getCostAcccountNumber',
        'inventory_account_number' => 'getInventoryAccountNumber',
        'transfer_id' => 'getTransferId',
        'item' => 'getItem',
        'gl_item_id' => 'getGlItemId',
        'sales_description' => 'getSalesDescription',
        'item_description' => 'getItemDescription',
        'currency' => 'getCurrency',
        'item_price' => 'getItemPrice',
        'taxable' => 'getTaxable',
        'unit_of_measure' => 'getUnitOfMeasure',
        'quantity' => 'getQuantity',
        'cost' => 'getCost',
        'total' => 'getTotal',
        'sub_category' => 'getSubCategory',
        'serialized_flag' => 'getSerializedFlag',
        'serial_numbers' => 'getSerialNumbers',
        'shipment_method' => 'getShipmentMethod',
        'bin' => 'getBin',
        'warehouse' => 'getWarehouse',
        'transfer_from_bin' => 'getTransferFromBin',
        'transfer_from_location_xref' => 'getTransferFromLocationXref',
        'transfer_to_bin' => 'getTransferToBin',
        'transfer_to_location_xref' => 'getTransferToLocationXref',
        'location_xref' => 'getLocationXref',
        'price_level_xref' => 'getPriceLevelXref',
        'uom_schedule_xref' => 'getUomScheduleXref',
        'item_type_xref' => 'getItemTypeXref',
        'inventory_xref' => 'getInventoryXref',
        'cogs_xref' => 'getCogsXref',
        'tax_note' => 'getTaxNote',
        'tax_code' => 'getTaxCode',
        'offset' => 'getOffset'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_date'] = isset($data['document_date']) ? $data['document_date'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['gl_class'] = isset($data['gl_class']) ? $data['gl_class'] : null;
        $this->container['gl_type_id'] = isset($data['gl_type_id']) ? $data['gl_type_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sales_code'] = isset($data['sales_code']) ? $data['sales_code'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['cost_acccount_number'] = isset($data['cost_acccount_number']) ? $data['cost_acccount_number'] : null;
        $this->container['inventory_account_number'] = isset($data['inventory_account_number']) ? $data['inventory_account_number'] : null;
        $this->container['transfer_id'] = isset($data['transfer_id']) ? $data['transfer_id'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['gl_item_id'] = isset($data['gl_item_id']) ? $data['gl_item_id'] : null;
        $this->container['sales_description'] = isset($data['sales_description']) ? $data['sales_description'] : null;
        $this->container['item_description'] = isset($data['item_description']) ? $data['item_description'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['unit_of_measure'] = isset($data['unit_of_measure']) ? $data['unit_of_measure'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['sub_category'] = isset($data['sub_category']) ? $data['sub_category'] : null;
        $this->container['serialized_flag'] = isset($data['serialized_flag']) ? $data['serialized_flag'] : null;
        $this->container['serial_numbers'] = isset($data['serial_numbers']) ? $data['serial_numbers'] : null;
        $this->container['shipment_method'] = isset($data['shipment_method']) ? $data['shipment_method'] : null;
        $this->container['bin'] = isset($data['bin']) ? $data['bin'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['transfer_from_bin'] = isset($data['transfer_from_bin']) ? $data['transfer_from_bin'] : null;
        $this->container['transfer_from_location_xref'] = isset($data['transfer_from_location_xref']) ? $data['transfer_from_location_xref'] : null;
        $this->container['transfer_to_bin'] = isset($data['transfer_to_bin']) ? $data['transfer_to_bin'] : null;
        $this->container['transfer_to_location_xref'] = isset($data['transfer_to_location_xref']) ? $data['transfer_to_location_xref'] : null;
        $this->container['location_xref'] = isset($data['location_xref']) ? $data['location_xref'] : null;
        $this->container['price_level_xref'] = isset($data['price_level_xref']) ? $data['price_level_xref'] : null;
        $this->container['uom_schedule_xref'] = isset($data['uom_schedule_xref']) ? $data['uom_schedule_xref'] : null;
        $this->container['item_type_xref'] = isset($data['item_type_xref']) ? $data['item_type_xref'] : null;
        $this->container['inventory_xref'] = isset($data['inventory_xref']) ? $data['inventory_xref'] : null;
        $this->container['cogs_xref'] = isset($data['cogs_xref']) ? $data['cogs_xref'] : null;
        $this->container['tax_note'] = isset($data['tax_note']) ? $data['tax_note'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets document_type
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     * @param string $document_type
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_date
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     * @param \DateTime $document_date
     * @return $this
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     * @param string $account_number
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets gl_class
     * @return string
     */
    public function getGlClass()
    {
        return $this->container['gl_class'];
    }

    /**
     * Sets gl_class
     * @param string $gl_class
     * @return $this
     */
    public function setGlClass($gl_class)
    {
        $this->container['gl_class'] = $gl_class;

        return $this;
    }

    /**
     * Gets gl_type_id
     * @return string
     */
    public function getGlTypeId()
    {
        return $this->container['gl_type_id'];
    }

    /**
     * Sets gl_type_id
     * @param string $gl_type_id
     * @return $this
     */
    public function setGlTypeId($gl_type_id)
    {
        $this->container['gl_type_id'] = $gl_type_id;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets sales_code
     * @return string
     */
    public function getSalesCode()
    {
        return $this->container['sales_code'];
    }

    /**
     * Sets sales_code
     * @param string $sales_code
     * @return $this
     */
    public function setSalesCode($sales_code)
    {
        $this->container['sales_code'] = $sales_code;

        return $this;
    }

    /**
     * Gets memo
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     * @param string $memo
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets cost_acccount_number
     * @return string
     */
    public function getCostAcccountNumber()
    {
        return $this->container['cost_acccount_number'];
    }

    /**
     * Sets cost_acccount_number
     * @param string $cost_acccount_number
     * @return $this
     */
    public function setCostAcccountNumber($cost_acccount_number)
    {
        $this->container['cost_acccount_number'] = $cost_acccount_number;

        return $this;
    }

    /**
     * Gets inventory_account_number
     * @return string
     */
    public function getInventoryAccountNumber()
    {
        return $this->container['inventory_account_number'];
    }

    /**
     * Sets inventory_account_number
     * @param string $inventory_account_number
     * @return $this
     */
    public function setInventoryAccountNumber($inventory_account_number)
    {
        $this->container['inventory_account_number'] = $inventory_account_number;

        return $this;
    }

    /**
     * Gets transfer_id
     * @return int
     */
    public function getTransferId()
    {
        return $this->container['transfer_id'];
    }

    /**
     * Sets transfer_id
     * @param int $transfer_id
     * @return $this
     */
    public function setTransferId($transfer_id)
    {
        $this->container['transfer_id'] = $transfer_id;

        return $this;
    }

    /**
     * Gets item
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\IvItemReference
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\IvItemReference $item
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets gl_item_id
     * @return string
     */
    public function getGlItemId()
    {
        return $this->container['gl_item_id'];
    }

    /**
     * Sets gl_item_id
     * @param string $gl_item_id
     * @return $this
     */
    public function setGlItemId($gl_item_id)
    {
        $this->container['gl_item_id'] = $gl_item_id;

        return $this;
    }

    /**
     * Gets sales_description
     * @return string
     */
    public function getSalesDescription()
    {
        return $this->container['sales_description'];
    }

    /**
     * Sets sales_description
     * @param string $sales_description
     * @return $this
     */
    public function setSalesDescription($sales_description)
    {
        $this->container['sales_description'] = $sales_description;

        return $this;
    }

    /**
     * Gets item_description
     * @return string
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     * @param string $item_description
     * @return $this
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets currency
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets item_price
     * @return double
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     * @param double $item_price
     * @return $this
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool $taxable
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets unit_of_measure
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\UnitOfMeasureReference
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\UnitOfMeasureReference $unit_of_measure
     * @return $this
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets quantity
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param double $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets cost
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param double $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets total
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param double $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets sub_category
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\ProductSubCategoryReference
     */
    public function getSubCategory()
    {
        return $this->container['sub_category'];
    }

    /**
     * Sets sub_category
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\ProductSubCategoryReference $sub_category
     * @return $this
     */
    public function setSubCategory($sub_category)
    {
        $this->container['sub_category'] = $sub_category;

        return $this;
    }

    /**
     * Gets serialized_flag
     * @return bool
     */
    public function getSerializedFlag()
    {
        return $this->container['serialized_flag'];
    }

    /**
     * Sets serialized_flag
     * @param bool $serialized_flag
     * @return $this
     */
    public function setSerializedFlag($serialized_flag)
    {
        $this->container['serialized_flag'] = $serialized_flag;

        return $this;
    }

    /**
     * Gets serial_numbers
     * @return string
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers
     * @param string $serial_numbers
     * @return $this
     */
    public function setSerialNumbers($serial_numbers)
    {
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }

    /**
     * Gets shipment_method
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\ShipmentMethodReference
     */
    public function getShipmentMethod()
    {
        return $this->container['shipment_method'];
    }

    /**
     * Sets shipment_method
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\ShipmentMethodReference $shipment_method
     * @return $this
     */
    public function setShipmentMethod($shipment_method)
    {
        $this->container['shipment_method'] = $shipment_method;

        return $this;
    }

    /**
     * Gets bin
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference $bin
     * @return $this
     */
    public function setBin($bin)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets warehouse
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseReference
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseReference $warehouse
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets transfer_from_bin
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference
     */
    public function getTransferFromBin()
    {
        return $this->container['transfer_from_bin'];
    }

    /**
     * Sets transfer_from_bin
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference $transfer_from_bin
     * @return $this
     */
    public function setTransferFromBin($transfer_from_bin)
    {
        $this->container['transfer_from_bin'] = $transfer_from_bin;

        return $this;
    }

    /**
     * Gets transfer_from_location_xref
     * @return string
     */
    public function getTransferFromLocationXref()
    {
        return $this->container['transfer_from_location_xref'];
    }

    /**
     * Sets transfer_from_location_xref
     * @param string $transfer_from_location_xref
     * @return $this
     */
    public function setTransferFromLocationXref($transfer_from_location_xref)
    {
        $this->container['transfer_from_location_xref'] = $transfer_from_location_xref;

        return $this;
    }

    /**
     * Gets transfer_to_bin
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference
     */
    public function getTransferToBin()
    {
        return $this->container['transfer_to_bin'];
    }

    /**
     * Sets transfer_to_bin
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference $transfer_to_bin
     * @return $this
     */
    public function setTransferToBin($transfer_to_bin)
    {
        $this->container['transfer_to_bin'] = $transfer_to_bin;

        return $this;
    }

    /**
     * Gets transfer_to_location_xref
     * @return string
     */
    public function getTransferToLocationXref()
    {
        return $this->container['transfer_to_location_xref'];
    }

    /**
     * Sets transfer_to_location_xref
     * @param string $transfer_to_location_xref
     * @return $this
     */
    public function setTransferToLocationXref($transfer_to_location_xref)
    {
        $this->container['transfer_to_location_xref'] = $transfer_to_location_xref;

        return $this;
    }

    /**
     * Gets location_xref
     * @return string
     */
    public function getLocationXref()
    {
        return $this->container['location_xref'];
    }

    /**
     * Sets location_xref
     * @param string $location_xref
     * @return $this
     */
    public function setLocationXref($location_xref)
    {
        $this->container['location_xref'] = $location_xref;

        return $this;
    }

    /**
     * Gets price_level_xref
     * @return string
     */
    public function getPriceLevelXref()
    {
        return $this->container['price_level_xref'];
    }

    /**
     * Sets price_level_xref
     * @param string $price_level_xref
     * @return $this
     */
    public function setPriceLevelXref($price_level_xref)
    {
        $this->container['price_level_xref'] = $price_level_xref;

        return $this;
    }

    /**
     * Gets uom_schedule_xref
     * @return string
     */
    public function getUomScheduleXref()
    {
        return $this->container['uom_schedule_xref'];
    }

    /**
     * Sets uom_schedule_xref
     * @param string $uom_schedule_xref
     * @return $this
     */
    public function setUomScheduleXref($uom_schedule_xref)
    {
        $this->container['uom_schedule_xref'] = $uom_schedule_xref;

        return $this;
    }

    /**
     * Gets item_type_xref
     * @return string
     */
    public function getItemTypeXref()
    {
        return $this->container['item_type_xref'];
    }

    /**
     * Sets item_type_xref
     * @param string $item_type_xref
     * @return $this
     */
    public function setItemTypeXref($item_type_xref)
    {
        $this->container['item_type_xref'] = $item_type_xref;

        return $this;
    }

    /**
     * Gets inventory_xref
     * @return string
     */
    public function getInventoryXref()
    {
        return $this->container['inventory_xref'];
    }

    /**
     * Sets inventory_xref
     * @param string $inventory_xref
     * @return $this
     */
    public function setInventoryXref($inventory_xref)
    {
        $this->container['inventory_xref'] = $inventory_xref;

        return $this;
    }

    /**
     * Gets cogs_xref
     * @return string
     */
    public function getCogsXref()
    {
        return $this->container['cogs_xref'];
    }

    /**
     * Sets cogs_xref
     * @param string $cogs_xref
     * @return $this
     */
    public function setCogsXref($cogs_xref)
    {
        $this->container['cogs_xref'] = $cogs_xref;

        return $this;
    }

    /**
     * Gets tax_note
     * @return string
     */
    public function getTaxNote()
    {
        return $this->container['tax_note'];
    }

    /**
     * Sets tax_note
     * @param string $tax_note
     * @return $this
     */
    public function setTaxNote($tax_note)
    {
        $this->container['tax_note'] = $tax_note;

        return $this;
    }

    /**
     * Gets tax_code
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference $tax_code
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets offset
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\GLExportInventoryTransferOffset
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\GLExportInventoryTransferOffset $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

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

