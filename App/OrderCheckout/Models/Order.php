<?php

namespace App\OrderCheckout\Models;

// Предполагается, что в приложении (вне папки OrderCheckout) прописаны модели
use App\Models\Model;
use App\Models\User;
use App\Models\Cart;

class Order extends Model
{
    protected $user;
    protected $cart;

    public function __construct(User $user, User $cart)
    {
        $this->user = $user;
        $this->cart = $cart;
    }

    public function getOrder(string $id) {
        // code...
    }

    public function saveOrder(string $id) {
        // code...
    }

    public function editOrder(string $id) {
        // code...
    }

    public function deleteOrder(string $id) {
        // code...
    }

}
