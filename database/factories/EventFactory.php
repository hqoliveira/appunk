<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Event;
use Faker\Generator as Faker;

$factory->define(App\Models\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'date' => $faker->date
    ];
});
