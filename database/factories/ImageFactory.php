<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Model;
use Faker\Generator as Faker;


$factory->define(Image::class, function (Faker $faker) {
    return [
        'url'=>$faker->imageUrl($width = 640, $height = 480),
        'alt' => $faker->text($maxNbChars = 200),
        'parent_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
