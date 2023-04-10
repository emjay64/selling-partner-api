<?php
/**
 * UnfulfillablePreviewItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * UnfulfillablePreviewItem Class Doc Comment
 *
 * @category Class
 * @description Information about unfulfillable items in a fulfillment order preview.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UnfulfillablePreviewItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnfulfillablePreviewItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'quantity' => 'int',
        'seller_fulfillment_order_item_id' => 'string',
        'item_unfulfillable_reasons' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_sku' => null,
        'quantity' => 'int32',
        'seller_fulfillment_order_item_id' => null,
        'item_unfulfillable_reasons' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'quantity' => 'quantity',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'item_unfulfillable_reasons' => 'itemUnfulfillableReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'quantity' => 'setQuantity',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'item_unfulfillable_reasons' => 'setItemUnfulfillableReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'quantity' => 'getQuantity',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'item_unfulfillable_reasons' => 'getItemUnfulfillableReasons'
    ];


    
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['item_unfulfillable_reasons'] = $data['item_unfulfillable_reasons'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if ((mb_strlen($this->container['seller_sku']) > 50)) {
            $invalidProperties[] = "invalid value for 'seller_sku', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if ((mb_strlen($this->container['seller_fulfillment_order_item_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'seller_fulfillment_order_item_id', the character length must be smaller than or equal to 50.";
        }

        return $invalidProperties;
    }


    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        if ((mb_strlen($seller_sku) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_sku when calling UnfulfillablePreviewItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The item quantity.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Gets seller_fulfillment_order_item_id
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id
     *
     * @param string $seller_fulfillment_order_item_id A fulfillment order item identifier created with a call to the getFulfillmentPreview operation.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        if ((mb_strlen($seller_fulfillment_order_item_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $seller_fulfillment_order_item_id when calling UnfulfillablePreviewItem., must be smaller than or equal to 50.');
        }

        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }
    /**
     * Gets item_unfulfillable_reasons
     *
     * @return string[]|null
     */
    public function getItemUnfulfillableReasons()
    {
        return $this->container['item_unfulfillable_reasons'];
    }

    /**
     * Sets item_unfulfillable_reasons
     *
     * @param string[]|null $item_unfulfillable_reasons item_unfulfillable_reasons
     *
     * @return self
     */
    public function setItemUnfulfillableReasons($item_unfulfillable_reasons)
    {
        $this->container['item_unfulfillable_reasons'] = $item_unfulfillable_reasons;

        return $this;
    }
}


