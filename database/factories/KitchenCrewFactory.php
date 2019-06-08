<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\KitchenCrew;
use Faker\Generator as Faker;

$factory->define(KitchenCrew::class, function (Faker $faker) {
    return [
        'name'=>$faker->name('Female'),
        'cook_leader_id'=>$faker->numberBetween(1,4),
        'gender'=>$faker->sentence(2),
        'address'=>$faker->address,
        'phone'=>$faker->phoneNumber,
    ];
});
