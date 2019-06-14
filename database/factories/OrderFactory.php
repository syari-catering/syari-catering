<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_name'=>$faker->name(),
        'address'=>$faker->address(),
        'phone'=>$faker->phoneNumber(),
        'email'=>$faker->email(),
        'date_ordered'=>$faker->date(),
        'total_cost'=>$faker->randomNumber(),
        'status'=>$faker->sentence(1)
    ];
});
