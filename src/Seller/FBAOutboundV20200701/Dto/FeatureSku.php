<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class FeatureSku extends Dto
{
    /**
     * @param  ?string  $sellerSku  Used to identify an item in the given marketplace. `SellerSKU` is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  ?string  $fnSku  The unique SKU used by Amazon's fulfillment network.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?float  $skuCount  The number of SKUs available for this service.
     * @param  ?string[]  $overlappingSkus  Other seller SKUs that are shared across the same inventory.
     */
    public function __construct(
        public ?string $sellerSku = null,
        public ?string $fnSku = null,
        public ?string $asin = null,
        public ?float $skuCount = null,
        public ?array $overlappingSkus = null,
    ) {}
}
