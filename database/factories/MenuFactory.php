<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'price'=>$faker->money_format('IDR'),
        'detail'=>$faker->sentence(20),
        'image'=>$faker->imageUrl(),
    ];
});
