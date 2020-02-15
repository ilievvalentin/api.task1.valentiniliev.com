<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hyperlink;
use Faker\Generator as Faker;

$factory->define(Hyperlink::class, function (Faker $faker) {
    return [
        'link' => $faker->url,
        'title' => $faker->domainName,
        'color' => $faker->hexColor
    ];
});
