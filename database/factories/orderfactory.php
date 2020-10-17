<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\order::class, function (Faker $faker) {
    return [
        'Custmerid' =>factory(\App\customer::class)->create()->id,
        'OrderDate' =>$faker ->dateTime,
        'RequireDate' =>$faker ->dateTime,
        'ShippedDate' =>$faker ->dateTime,
        'Status' =>$faker ->numberBetween(0,30),
        'Comments' =>$faker ->word,
    ];
});
