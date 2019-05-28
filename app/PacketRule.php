<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacketRule extends Model
{
    public function packet() {
        $this->belongsTo(Packet::class,"packetRule_packet");
    }
}
