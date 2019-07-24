<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\level;
use Faker\Generator as Faker;

$factory->define(App\Level::class, function (Faker $faker) {
    return [
	    'name' => $faker->word,
	    'description' => $faker->sentence
    ];
});
