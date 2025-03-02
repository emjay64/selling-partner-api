<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class ExcludedBenefit extends Dto
{
    protected static array $attributeMap = ['benefit' => 'Benefit', 'reasonCodes' => 'ReasonCodes'];

    /**
     * @param  ?string  $benefit  A benefit that is being excluded from a shipment.
     * @param  ?string[]  $reasonCodes  List of reasons why a benefit is excluded for a shipping offer (for example, `LATE_DELIVERY_RISK`).
     */
    public function __construct(
        public ?string $benefit = null,
        public ?array $reasonCodes = null,
    ) {}
}
