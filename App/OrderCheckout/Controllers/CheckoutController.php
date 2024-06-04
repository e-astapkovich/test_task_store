<?php

namespace App\OrderCheckout\Controllers;

use App\OrderCheckout\API\DeliveryService;
use App\OrderCheckout\Models\Order;


class CheckoutController implements DeliveryService
{
    private $recipientName;
    private $recipientPhoneNumber;
    private $deliveryAddress;

    public function __construct(Order $order) {
        $this->recipientName = $order->userName;
        $this->recipientPhoneNumber = $order->phone;
        $this->deliveryAddress = $order->address;

    }

    public function registerShipment(): string
    {
        // implementation of method
    }

    public function getStatus(string $deliveryId): string
    {
        // implementation of method
    }
}
