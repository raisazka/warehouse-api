<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'item_type_id' => $faker->numberBetween($min = 1, $max = 4),
        'item_description' => $faker->cityPrefix,
        'size' => 'M',
        'expiry_date' => $faker->date,
        'stock' => $faker->numberBetween($min = 1, $max = 50)
    ];
});
