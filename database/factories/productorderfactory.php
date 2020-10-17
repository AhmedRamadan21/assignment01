<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\orderproduct;
use Faker\Generator as Faker;

$factory->define(orderproduct::class, function (Faker $faker) {
    return [
        'Orderid' =>factory(\App\order::class)->create()->id,
        'Productcode' =>factory(\App\product::class)->create()->Code,
        'Qty' =>$faker->randomNumber(),
        'PriceEach' =>$faker->numberBetween(0,20),
    ];
});
