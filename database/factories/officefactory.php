<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Office::class, function (Faker $faker) {
    return [
        'city' =>$faker->word,
        'phone' =>$faker->word,
        'address1' =>$faker->word,
        'address2' =>$faker->word,
        'state' =>$faker->word,
        'country' =>$faker->word,
        'postalcode' =>$faker->numberBetween(0,30),
        'territory' =>$faker->word
    ];
});
