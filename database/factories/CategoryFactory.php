<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;


$fakerUS = \Faker\Factory::create("ru_RU");

$factory->define(Category::class, function (Faker $faker ) use ($fakerUS)  {

    return [
        'name' => $fakerUS->sentence($nbWords = 1, $variableNbWords = true),
        'slug' => $faker->sentence($nbWords = 1, $variableNbWords = true),

    ];
});
