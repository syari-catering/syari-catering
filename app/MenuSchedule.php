<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuSchedule extends Model
{
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function orderDetail()
    {
        return $this->belongsToMany(OrderDetail::class);
    }
}
