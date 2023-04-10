<?php
/**
 * SolutionProviderCreditEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * SolutionProviderCreditEvent Class Doc Comment
 *
 * @category Class
 * @description A credit given to a solution provider.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SolutionProviderCreditEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SolutionProviderCreditEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'provider_transaction_type' => 'string',
        'seller_order_id' => 'string',
        'marketplace_id' => 'string',
        'marketplace_country_code' => 'string',
        'seller_id' => 'string',
        'seller_store_name' => 'string',
        'provider_id' => 'string',
        'provider_store_name' => 'string',
        'transaction_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'transaction_creation_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'provider_transaction_type' => null,
        'seller_order_id' => null,
        'marketplace_id' => null,
        'marketplace_country_code' => null,
        'seller_id' => null,
        'seller_store_name' => null,
        'provider_id' => null,
        'provider_store_name' => null,
        'transaction_amount' => null,
        'transaction_creation_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'provider_transaction_type' => 'ProviderTransactionType',
        'seller_order_id' => 'SellerOrderId',
        'marketplace_id' => 'MarketplaceId',
        'marketplace_country_code' => 'MarketplaceCountryCode',
        'seller_id' => 'SellerId',
        'seller_store_name' => 'SellerStoreName',
        'provider_id' => 'ProviderId',
        'provider_store_name' => 'ProviderStoreName',
        'transaction_amount' => 'TransactionAmount',
        'transaction_creation_date' => 'TransactionCreationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'provider_transaction_type' => 'setProviderTransactionType',
        'seller_order_id' => 'setSellerOrderId',
        'marketplace_id' => 'setMarketplaceId',
        'marketplace_country_code' => 'setMarketplaceCountryCode',
        'seller_id' => 'setSellerId',
        'seller_store_name' => 'setSellerStoreName',
        'provider_id' => 'setProviderId',
        'provider_store_name' => 'setProviderStoreName',
        'transaction_amount' => 'setTransactionAmount',
        'transaction_creation_date' => 'setTransactionCreationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'provider_transaction_type' => 'getProviderTransactionType',
        'seller_order_id' => 'getSellerOrderId',
        'marketplace_id' => 'getMarketplaceId',
        'marketplace_country_code' => 'getMarketplaceCountryCode',
        'seller_id' => 'getSellerId',
        'seller_store_name' => 'getSellerStoreName',
        'provider_id' => 'getProviderId',
        'provider_store_name' => 'getProviderStoreName',
        'transaction_amount' => 'getTransactionAmount',
        'transaction_creation_date' => 'getTransactionCreationDate'
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
        $this->container['provider_transaction_type'] = $data['provider_transaction_type'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['marketplace_country_code'] = $data['marketplace_country_code'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['seller_store_name'] = $data['seller_store_name'] ?? null;
        $this->container['provider_id'] = $data['provider_id'] ?? null;
        $this->container['provider_store_name'] = $data['provider_store_name'] ?? null;
        $this->container['transaction_amount'] = $data['transaction_amount'] ?? null;
        $this->container['transaction_creation_date'] = $data['transaction_creation_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets provider_transaction_type
     *
     * @return string|null
     */
    public function getProviderTransactionType()
    {
        return $this->container['provider_transaction_type'];
    }

    /**
     * Sets provider_transaction_type
     *
     * @param string|null $provider_transaction_type The transaction type.
     *
     * @return self
     */
    public function setProviderTransactionType($provider_transaction_type)
    {
        $this->container['provider_transaction_type'] = $provider_transaction_type;

        return $this;
    }
    /**
     * Gets seller_order_id
     *
     * @return string|null
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id
     *
     * @param string|null $seller_order_id A seller-defined identifier for an order.
     *
     * @return self
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }
    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The identifier of the marketplace where the order was placed.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets marketplace_country_code
     *
     * @return string|null
     */
    public function getMarketplaceCountryCode()
    {
        return $this->container['marketplace_country_code'];
    }

    /**
     * Sets marketplace_country_code
     *
     * @param string|null $marketplace_country_code The two-letter country code of the country associated with the marketplace where the order was placed.
     *
     * @return self
     */
    public function setMarketplaceCountryCode($marketplace_country_code)
    {
        $this->container['marketplace_country_code'] = $marketplace_country_code;

        return $this;
    }
    /**
     * Gets seller_id
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string|null $seller_id The Amazon-defined identifier of the seller.
     *
     * @return self
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }
    /**
     * Gets seller_store_name
     *
     * @return string|null
     */
    public function getSellerStoreName()
    {
        return $this->container['seller_store_name'];
    }

    /**
     * Sets seller_store_name
     *
     * @param string|null $seller_store_name The store name where the payment event occurred.
     *
     * @return self
     */
    public function setSellerStoreName($seller_store_name)
    {
        $this->container['seller_store_name'] = $seller_store_name;

        return $this;
    }
    /**
     * Gets provider_id
     *
     * @return string|null
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string|null $provider_id The Amazon-defined identifier of the solution provider.
     *
     * @return self
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }
    /**
     * Gets provider_store_name
     *
     * @return string|null
     */
    public function getProviderStoreName()
    {
        return $this->container['provider_store_name'];
    }

    /**
     * Sets provider_store_name
     *
     * @param string|null $provider_store_name The store name where the payment event occurred.
     *
     * @return self
     */
    public function setProviderStoreName($provider_store_name)
    {
        $this->container['provider_store_name'] = $provider_store_name;

        return $this;
    }
    /**
     * Gets transaction_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $transaction_amount transaction_amount
     *
     * @return self
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }
    /**
     * Gets transaction_creation_date
     *
     * @return string|null
     */
    public function getTransactionCreationDate()
    {
        return $this->container['transaction_creation_date'];
    }

    /**
     * Sets transaction_creation_date
     *
     * @param string|null $transaction_creation_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setTransactionCreationDate($transaction_creation_date)
    {
        $this->container['transaction_creation_date'] = $transaction_creation_date;

        return $this;
    }
}


