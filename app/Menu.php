<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menuSchedule()
    {
        return $this->hasOne(MenuSchedule::class);
    }
}
