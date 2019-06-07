<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function packetRule()
    {
        return $this->hasOne(PacketRule::class);
    }
}
