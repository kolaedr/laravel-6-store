<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;



$factory->define(Product::class, function (Faker $faker) {
    $img=[
        '/images/product/1.jpg',
        '/images/product/2.jpg',
        '/images/product/3.jpg',
        '/images/product/4.jpg',
        '/images/product/5.jpg',
        '/images/product/6.jpg',
        '/images/product/7.jpg'
    ];
    // $img=[
    //     0 => 'images/product/1.jpg',
    //     1 => 'images/product/2.jpg',
    //     2 => 'images/product/3.jpg',
    //     3 => 'images/product/4.jpg',
    //     4 => 'images/product/5.jpg',
    //     5 => 'images/product/6.jpg',
    //     6 => 'images/product/7.jpg'
    // ];
    $name = $faker->words(4, true);
    return [
        'name' => $name,
        'slug' => \Str::slug($name, '-'),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 10000),
        'describe' => $faker->realText($maxNbChars = 500),
        'image' => $img[array_rand($img, 1)],
        'sku'=>$faker->unique()->numberBetween($min = 5000, $max = 10000),
        'favorite'=>$faker->boolean(),
    ];
});
