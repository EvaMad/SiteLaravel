<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
$factory->define(Car::class, function (Faker $faker) {
    return [
        'make' => $faker->name,
        'model' => Str::random(10),
        'produced_on' => now(),
    ];
});