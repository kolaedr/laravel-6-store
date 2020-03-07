<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;


$fakerUS = \Faker\Factory::create("ru_RU");

$factory->define(Category::class, function (Faker $faker )  {
    $name = $faker->words(2, true);
    
    return [
        'name' => $name,
        'slug' => \Str::slug($name, '-'),
        'parent_id' => null,
        // 'img' => $faker->imageUrl($width = 32, $height = 32),
        'img' => 'nvb',
        // 'img' => $faker->image($dir = '/images',640,480, null, false),

    ];
});

$factory->afterCreating(App\Category::class, function ($category, $faker) {
    $categories = Category::all('id')
    ->push(null)
    ->pluck('id')
    ->random();
    $category->parent_id = $categories;
    $category->save();
});
