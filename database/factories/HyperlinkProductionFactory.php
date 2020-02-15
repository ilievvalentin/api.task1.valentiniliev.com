<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hyperlink;
use Faker\Generator as Faker;

$factory->define(Hyperlink::class, function (Faker $faker) {
    return [
        'link' => 'https://taks1.valentiniliev.com/admin-dashboard',
        'title' => 'Task1',
        'color' => '#ffffff'
    ];
});
