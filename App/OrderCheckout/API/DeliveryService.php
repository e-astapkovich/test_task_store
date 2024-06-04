<?php

namespace App\OrderCheckout\API;

interface Delivery{

	public function registerShipment(): string;
    public function getStatus(string $deliveryId): string;
}
