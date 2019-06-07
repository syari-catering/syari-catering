<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacketRule extends Model
{
    public function packet()
    {
        return $this->belongsTo(Packet::class);
    }
}
