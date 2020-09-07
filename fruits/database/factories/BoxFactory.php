<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Box;
use Faker\Generator as Faker;

$factory->define(Box::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->name,
        'fruit_id'=>factory(\App\Fruit::class),
        'capacity'=>$faker->numberBetween(1,100)
    ];
});
