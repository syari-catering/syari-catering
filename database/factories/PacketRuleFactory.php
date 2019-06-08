<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PacketRule;
use Faker\Generator as Faker;

$factory->define(PacketRule::class, function (Faker $faker) {
    return [
        'packet_id'=>$faker->randomNumber(),
        'description'=>$faker->text(),
    ];
});
