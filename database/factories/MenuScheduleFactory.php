<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MenuSchedule;
use Faker\Generator as Faker;

$factory->define(MenuSchedule::class, function (Faker $faker) {
    return [
        'date'=>$faker->date(),
        'menu_id'=>$faker->randomNumber(),
    ];
});
