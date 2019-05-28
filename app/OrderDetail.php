<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function order() {
        $this->belongsTo(Order::class,"orderDetail_order");
    }

    public function menuSchedule() {
        $this->belongsToMany(MenuSchedule::class,"orderDetail_menuSchedule");
    }
}
