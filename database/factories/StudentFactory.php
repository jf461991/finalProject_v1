<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Masculino', 'Femenino']);
    $level = $faker->randomElement(['7', '8', '9', '10', '11', '12']);
    $photo = $faker->randomElement(['cara1.jpg', 'h.jpg', 'cara2.jpg', 'j.jpg', 'cara4.png', 'k.jpg', 'b.jpg', 'i.jpg']);
    return [
        'rol_id' => '4',
        'stu_name' => $faker->firstName($gender),
        'stu_lastName' => $faker->lastName,
        'stu_idCard' => $faker->numberBetween($min=1700000000, $max=1799999999),
        'stu_birthDate' => $faker->date,
        'stu_address' => $faker->streetAddress,
        'stu_city' => $faker->city,
        'stu_gender' => $gender,
        'stu_phone' => $faker->numberBetween($min=9841111111, $max=9999999999),
        'stu_lastLevelPass' => $level,
        'stu_email' => $faker->safeEmail,
        'email_verified_at' => now(),
        'stu_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'stu_photo' => $photo,
        'stu_status' => '1'
    ];
});
