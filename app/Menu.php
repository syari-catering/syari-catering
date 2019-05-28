<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menuSchedule() {
        $this->hasOne(MenuSchedule::class,"menu_menuSchedule");
    }
}
