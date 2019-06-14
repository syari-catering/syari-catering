<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Packet;
use Faker\Generator as Faker;

$factory->define(Packet::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
    ];
});
