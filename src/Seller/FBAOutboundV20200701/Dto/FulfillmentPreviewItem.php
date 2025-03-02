<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class FulfillmentPreviewItem extends Dto
{
    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  int  $quantity  The item quantity.
     * @param  string  $sellerFulfillmentOrderItemId  A fulfillment order item identifier that the seller created with a call to the `createFulfillmentOrder` operation.
     * @param  ?Weight  $estimatedShippingWeight  The weight.
     * @param  ?string  $shippingWeightCalculationMethod  The method used to calculate the estimated shipping weight.
     */
    public function __construct(
        public string $sellerSku,
        public int $quantity,
        public string $sellerFulfillmentOrderItemId,
        public ?Weight $estimatedShippingWeight = null,
        public ?string $shippingWeightCalculationMethod = null,
    ) {}
}
