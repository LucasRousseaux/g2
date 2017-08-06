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
        'doctor_image' => $faker->imageUrl($width = 640, $height = 480),
        'doctor_gender' => $faker->randomElement($array = array ('male','female','other')) ,
        'doctor_birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'doctor_experience' => $faker->text($maxNbChars = 190),
        'doctor_upin' => $faker->regexify('[A-Z0-9]{6,6}'),
        'doctor_titles' => 'Doctor',
        'user_id' => 1,
    ];
});

$factory->define(App\Patient::class, function (Faker\Generator $faker) {

    return [
        'patient_name' => $faker->name,
        'patient_phone' => $faker->phoneNumber,
        'patient_image' => $faker->imageUrl($width = 640, $height = 480),
        'patient_gender' => $faker->randomElement($array = array('male','female','other')) ,
        'patient_birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'user_id' => 1,
    ];
});


$factory->define(App\Location::class, function (Faker\Generator $faker) {

    return [
        'location_name' => $faker->stateAbbr,
        'parent_location_id' => 1,
    ];
});

$factory->define(App\Specialty::class, function (Faker\Generator $faker) {

    return [
        'specialty_name' => $faker->sentence(2),
        'parent_specialty_id' => 1,
    ];
});


$factory->define(App\Institution::class, function (Faker\Generator $faker) {

    return [
        'institution_name' => $faker->sentence(2),
        'parent_institution_id' => 1,
        'institution_type_id' => 1,
    ];
});


$factory->define(App\InstitutionType::class, function (Faker\Generator $faker) {

    return [
        'institution_type_name' => $faker->sentence(2),
    ];
});


$factory->define(App\Recommendation::class, function (Faker\Generator $faker) {

    return [
        'recommended_grade' => $faker->randomElement($array = array (0,1,2)),
        'recommended_comment' => $faker->text($maxNbChars = 190),
        'recommended_from_user_id' => 1,
        'recommended_to_user_id' => 2,
    ];
});
