<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class AvailableCarrierWillPickUpOption extends Dto
{
    protected static array $attributeMap = ['carrierWillPickUpOption' => 'CarrierWillPickUpOption', 'charge' => 'Charge'];

    /**
     * @param  string  $carrierWillPickUpOption  Carrier will pick up option.
     * @param  CurrencyAmount  $charge  Currency type and amount.
     */
    public function __construct(
        public string $carrierWillPickUpOption,
        public CurrencyAmount $charge,
    ) {}
}
