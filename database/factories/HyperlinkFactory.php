<?php

/** @var Factory $factory */

use App\Hyperlink;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Hyperlink::class, function (Faker $faker) {
    return [
        'link' => $faker->url,
        'title' => $faker->title,
        'color' => $faker->hexColor
    ];
});
