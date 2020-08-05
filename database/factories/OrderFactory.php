<?php
 
/** @var \Illuminate\Database\Eloquent\Factory $factory */
 
use App\Order;
use Faker\Generator as Faker;
 
$factory->define(Order::class, function (Faker $faker) {
    return [
        "product_name"          =>  $faker->word,
        "product_id"            =>   $faker->numberBetween(1,100),
        "price"                =>  $faker->numberBetween(1, 100),
    ];
});