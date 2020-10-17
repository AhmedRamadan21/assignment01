<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\employee::class, function (Faker $faker) {
    return [
        'OfficeCode' =>factory(\App\Office::class)->create()->Code,
        'reportsTo' =>$faker->word,
        'LastName' =>$faker->word,
        'FirstName' =>$faker->word,
        'Extension' =>$faker->word,
        'Email' =>$faker->word,
        'JobTitle' =>$faker->word,
    ];
});
