<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\product::class, function (Faker $faker) {
    return [
        'Productlineid' =>factory(\App\productline::class)->create()->id,
        'name' =>$faker->word,
        'Scale' =>$faker ->randomNumber(),
        'vendor' =>$faker ->word,
        'Description' =>$faker ->word,
        'qtylnstock' =>$faker ->randomNumber(),
        'buyprice' =>$faker ->numberBetween(0,20),
        'msrp' =>$faker ->word
    ];
});
