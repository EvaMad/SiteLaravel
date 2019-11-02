<?php

use App\model;
use Faker\Generator as Faker;
use App\Article;


$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(8, 3, 1000),
        'description' => $faker->realText(300),
    ];
});
