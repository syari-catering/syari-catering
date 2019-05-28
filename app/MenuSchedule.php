<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSchedule extends Model
{
    public function menu() {
        $this->belongsTo(Menu::class,"menuSchedule_menu");
    }

    public function orderDetail() {
        $this->belongsToMany(OrderDetail::class,"orderDetail_menuSchedule");
    }
}
