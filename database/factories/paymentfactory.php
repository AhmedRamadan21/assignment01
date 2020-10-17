<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\payment::class, function (Faker $faker) {
    return [
        'Checknum' =>$faker->word,
        'CustmerId' =>factory(\App\customer::class)->create()->id,
        'PaymentDate' =>$faker->dateTime,
        'Amount' =>$faker->numberBetween(0,20)
    ];
});
