<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(10),
        'image' => 'uploads/products/book.png',
        'price' => 5000,
        'description' => $faker->paragraphs(5, true)
    ];
});