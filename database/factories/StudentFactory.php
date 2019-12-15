<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'stu_name' => $faker->firstName,
        'stu_lastName' => $faker->lastName,
        'stu_idCard' => $faker->numberBetween($min=1700000000, $max=1799999999),
        'stu_birthDate' => $faker->date,
        'stu_address' => $faker->streetAddress,
        'stu_city' => $faker->city,
        'stu_gender' => 'Masculino',
        'stu_phone' => $faker->numberBetween($min=9841111111, $max=9999999999),
        'stu_email' => $faker->safeEmail,
        'stu_photo' => 'cara2.jpg',
    ];
});
