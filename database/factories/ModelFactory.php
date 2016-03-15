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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Bap::class, function (Faker\Generator $faker) {
    return [

        'title' => $faker->text(20),
        'client' => $faker->text(20),
        'adress' => $faker->text(30),
        'email' => $faker->text(10).'@wannadoo.fr',
        'phone' => $faker->str_random(10),
        'description' => $faker->text(200),
        'type' => $faker->text(10),
        'contexte' => $faker->text(200),
        'demande' => $faker->text(200),
        'objectif' => $faker->text(200),
        'contraintes' => $faker->text(200),
    ];
});
