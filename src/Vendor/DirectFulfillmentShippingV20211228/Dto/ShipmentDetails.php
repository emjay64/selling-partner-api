<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentDetails extends BaseDto
{
    /**
     * @param  string  $shippedDate This field indicates the date of the departure of the shipment from vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Amazon destination warehouse, whichever is sooner. Shipped date mentioned in the Shipment Confirmation should not be in the future.
     * @param  string  $shipmentStatus Indicate the shipment status.
     * @param  ?bool  $isPriorityShipment Provide the priority of the shipment.
     * @param  ?string  $vendorOrderNumber The vendor order number is a unique identifier generated by a vendor for their reference.
     * @param  ?string  $estimatedDeliveryDate Date on which the shipment is expected to reach the buyer's warehouse. It needs to be an estimate based on the average transit time between the ship-from location and the destination. The exact appointment time will be provided by buyer and is potentially not known when creating the shipment confirmation.
     */
    public function __construct(
        public readonly string $shippedDate,
        public readonly string $shipmentStatus,
        public readonly ?bool $isPriorityShipment = null,
        public readonly ?string $vendorOrderNumber = null,
        public readonly ?string $estimatedDeliveryDate = null,
    ) {
    }
}
