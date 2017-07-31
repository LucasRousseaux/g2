<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'language' => 'Spanish',
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Doctor::class, function (Faker\Generator $faker) {

    return [
        'doctor_name' => $faker->name,
        'doctor_phone' => $faker->phoneNumber,
        'doctor_image' => imageUrl($width = 640, $height = 480),
        'doctor_gender' => $faker->randomElement($array = array ('male','female','other')) ,
        'doctor_birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'doctor_experience' => $faker->text,
        'doctor_upin' => $faker->regexify('[A-Z0-9]{6,6}'),
        'doctor_titles' => 'Doctor',
    ];
});

$factory->define(App\Patient::class, function (Faker\Generator $faker) {

    return [
        'patient_name' => $faker->name,
        'patient_phone' => $faker->phoneNumber,
        'patient_image' => imageUrl($width = 640, $height = 480),
        'patient_gender' => $faker->randomElement($array = array ('male','female','other')) ,
        'patient_birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
