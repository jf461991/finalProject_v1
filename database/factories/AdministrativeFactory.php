<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Administrative;
use Faker\Generator as Faker;

$factory->define(Administrative::class, function (Faker $faker) {
    return [
        
        'adm_name' => $faker->firstName,
        'adm_lastName' => $faker->lastName,
        'adm_idCard' => $faker->numberBetween($min=1700000000, $max=1799999999),
        'adm_birthDate' => $faker->date,
        'adm_address' => $faker->streetAddress,
        'adm_city' => $faker->city,
        'adm_gender' => 'Masculino',
        'adm_phone' => $faker->numberBetween($min=9841111111, $max=9999999999),
        'adm_email' => $faker->safeEmail,
        'adm_photo' => 'aa.jpg',
    ];
});
