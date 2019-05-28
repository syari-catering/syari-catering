<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    public function order() {
        $this->hasMany(Order::class,"packet_order");
    }

    public function packetRule() {
        $this->hasOne(PacketRule::class,"packet_packetRule");
    }
}
