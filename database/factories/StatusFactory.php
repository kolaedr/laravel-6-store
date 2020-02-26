<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 1, $variableNbWords = true),
    ];
});
