<?php
/**
 * ShipmentInformation
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ShipmentInformation Class Doc Comment
 *
 * @category Class
 * @description Shipment Information details for Label request.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentInformation extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendor_details' => '\SellingPartnerApi\Model\VendorShippingV1\VendorDetails',
        'buyer_reference_number' => 'string',
        'ship_to_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'ship_from_party' => '\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification',
        'warehouse_id' => 'string',
        'master_tracking_id' => 'string',
        'total_label_count' => 'int',
        'ship_mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vendor_details' => null,
        'buyer_reference_number' => null,
        'ship_to_party' => null,
        'ship_from_party' => null,
        'warehouse_id' => null,
        'master_tracking_id' => null,
        'total_label_count' => null,
        'ship_mode' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'vendor_details' => 'vendorDetails',
        'buyer_reference_number' => 'buyerReferenceNumber',
        'ship_to_party' => 'shipToParty',
        'ship_from_party' => 'shipFromParty',
        'warehouse_id' => 'warehouseId',
        'master_tracking_id' => 'masterTrackingId',
        'total_label_count' => 'totalLabelCount',
        'ship_mode' => 'shipMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendor_details' => 'setVendorDetails',
        'buyer_reference_number' => 'setBuyerReferenceNumber',
        'ship_to_party' => 'setShipToParty',
        'ship_from_party' => 'setShipFromParty',
        'warehouse_id' => 'setWarehouseId',
        'master_tracking_id' => 'setMasterTrackingId',
        'total_label_count' => 'setTotalLabelCount',
        'ship_mode' => 'setShipMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendor_details' => 'getVendorDetails',
        'buyer_reference_number' => 'getBuyerReferenceNumber',
        'ship_to_party' => 'getShipToParty',
        'ship_from_party' => 'getShipFromParty',
        'warehouse_id' => 'getWarehouseId',
        'master_tracking_id' => 'getMasterTrackingId',
        'total_label_count' => 'getTotalLabelCount',
        'ship_mode' => 'getShipMode'
    ];



    const SHIP_MODE_SMALL_PARCEL = 'SmallParcel';
    const SHIP_MODE_LTL = 'LTL';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShipModeAllowableValues()
    {
        $baseVals = [
            self::SHIP_MODE_SMALL_PARCEL,
            self::SHIP_MODE_LTL,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['vendor_details'] = $data['vendor_details'] ?? null;
        $this->container['buyer_reference_number'] = $data['buyer_reference_number'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['warehouse_id'] = $data['warehouse_id'] ?? null;
        $this->container['master_tracking_id'] = $data['master_tracking_id'] ?? null;
        $this->container['total_label_count'] = $data['total_label_count'] ?? null;
        $this->container['ship_mode'] = $data['ship_mode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getShipModeAllowableValues();
        if (
            !is_null($this->container['ship_mode']) &&
            !in_array(strtoupper($this->container['ship_mode']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ship_mode', must be one of '%s'",
                $this->container['ship_mode'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }


    /**
     * Gets vendor_details
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\VendorDetails|null
     */
    public function getVendorDetails()
    {
        return $this->container['vendor_details'];
    }

    /**
     * Sets vendor_details
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\VendorDetails|null $vendor_details vendor_details
     *
     * @return self
     */
    public function setVendorDetails($vendor_details)
    {
        $this->container['vendor_details'] = $vendor_details;

        return $this;
    }
    /**
     * Gets buyer_reference_number
     *
     * @return string|null
     */
    public function getBuyerReferenceNumber()
    {
        return $this->container['buyer_reference_number'];
    }

    /**
     * Sets buyer_reference_number
     *
     * @param string|null $buyer_reference_number Buyer Reference number which is a unique number.
     *
     * @return self
     */
    public function setBuyerReferenceNumber($buyer_reference_number)
    {
        $this->container['buyer_reference_number'] = $buyer_reference_number;

        return $this;
    }
    /**
     * Gets ship_to_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification|null
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification|null $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }
    /**
     * Gets ship_from_party
     *
     * @return \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification|null
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SellingPartnerApi\Model\VendorShippingV1\PartyIdentification|null $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }
    /**
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id Vendor Warehouse ID from where the shipment is scheduled to be picked up by buyer / Carrier.
     *
     * @return self
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }
    /**
     * Gets master_tracking_id
     *
     * @return string|null
     */
    public function getMasterTrackingId()
    {
        return $this->container['master_tracking_id'];
    }

    /**
     * Sets master_tracking_id
     *
     * @param string|null $master_tracking_id Unique Id with  which  the shipment can be tracked for Small Parcels.
     *
     * @return self
     */
    public function setMasterTrackingId($master_tracking_id)
    {
        $this->container['master_tracking_id'] = $master_tracking_id;

        return $this;
    }
    /**
     * Gets total_label_count
     *
     * @return int|null
     */
    public function getTotalLabelCount()
    {
        return $this->container['total_label_count'];
    }

    /**
     * Sets total_label_count
     *
     * @param int|null $total_label_count Number of Labels that are created as part of this shipment.
     *
     * @return self
     */
    public function setTotalLabelCount($total_label_count)
    {
        $this->container['total_label_count'] = $total_label_count;

        return $this;
    }
    /**
     * Gets ship_mode
     *
     * @return string|null
     */
    public function getShipMode()
    {
        return $this->container['ship_mode'];
    }

    /**
     * Sets ship_mode
     *
     * @param string|null $ship_mode Type of shipment whether it is Small Parcel
     *
     * @return self
     */
    public function setShipMode($ship_mode)
    {
        $allowedValues = $this->getShipModeAllowableValues();
        if (!is_null($ship_mode) &&!in_array(strtoupper($ship_mode), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ship_mode', must be one of '%s'",
                    $ship_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ship_mode'] = $ship_mode;

        return $this;
    }
}


