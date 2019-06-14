<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KitchenCrew extends Model
{
    public function user() {
        $this->belongsTo(User::class,"kitchenCrew_user");
    }
}