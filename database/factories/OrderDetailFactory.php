<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    return [
        'order_id'=>$faker->randomNumber(),
        'schedule_id'=>$faker->randomNumber(),
        'delivered_on'=>$faker->time(),
        'qty'=>$faker->randomNumber(),
    ];
});
