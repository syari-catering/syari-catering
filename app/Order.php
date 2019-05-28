<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function packet() {
        return $this->belongsTo(Packet::class,'order_packet');
    }

    public function orderDetail() {
        return $this->hasMany(OrderDetail::class,'order_orderDetail');
    }
}
