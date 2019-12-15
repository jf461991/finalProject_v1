<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'tea_name' => $faker->firstName,
        'tea_lastName' => $faker->lastName,
        'tea_idCard' => $faker->numberBetween($min=1700000000, $max=1799999999),
        'tea_birthDate' => $faker->date,
        'tea_address' => $faker->streetAddress,
        'tea_city' => $faker->city,
        'tea_gender' => 'Masculino',
        'tea_phone' => $faker->numberBetween($min=9841111111, $max=9999999999),
        'tea_email' => $faker->safeEmail,
        'tea_photo' => 'cara1.jpg',
    ];
});
