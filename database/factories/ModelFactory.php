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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//Actividades
$factory->define(App\Activity::class, function (Faker\Generator $faker) {
    return [
      'name' => $faker->name,
      'reference' => $faker->name,
      'description' => $faker->text,
      'tolerance' => $faker->name,
      'acceptance_requirements' => $faker->name,
      'enable' => 'si'
    ];
});

//Maquinas
$factory->define(App\Machine::class, function (Faker\Generator $faker) {
    return [
      'name' => $faker->name,
			'reference' => $faker->name,
			'description' => $faker->text,
			'use_common' => $faker->name,
			'variables' => 'Energia',
			'location' => $faker->city,
			'name_provider' => $faker->name,
			'contact_provider' => $faker->phoneNumber,
			'billing_provider' => $faker->swiftBicNumber,
			'enable' => 'si'
    ];
});

//Materias primas
$factory->define(App\RawMaterial::class, function (Faker\Generator $faker) {
    return [
      'name' => $faker->name,
			'reference' => $faker->name,
			'description' => $faker->text,
			'enable' => 'si'
    ];
});
