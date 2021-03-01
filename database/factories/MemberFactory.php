<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Member;
use Faker\Generator as Faker;

$factory->define(App\Models\Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'id_office' => $faker->randomDigit,
        'id_ministries' => $faker->randomDigit
    ];
});
