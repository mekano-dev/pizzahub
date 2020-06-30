<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
