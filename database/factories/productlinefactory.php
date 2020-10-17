<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\productline::class, function (Faker $faker) {
    return [
        'Desctext' =>$faker->word,
        'DescHTML' =>$faker->word,
        'image' =>$faker->word
    ];
});
