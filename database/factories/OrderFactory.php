<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Order;
use App\Product;
use App\Status;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    // $faker->locate('ru_RU');
    $user_ids = User::pluck('id');
    $status_ids = Status::pluck('id');
    $price = Product::pluck('price');
    return [
        'user_id' => $user_ids->random(),
        'total_sum' => $price->random(),
        'status_id'=> $status_ids->random(),
    ];
});
