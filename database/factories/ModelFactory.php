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
        'remember_token' => str_random(10),
    ];
});



/** @var \Illuminate\Database\Eloquent\Factory $factory */
$grupos = ['Adolecentes', 'Jovens', 'Catequistas', 'Liturgia','Acolitos'];
$factory->define(App\Grupo::class, function (Faker\Generator $faker) use ($grupos) {
    return [
        'designacao' => $faker->unique()->randomElement($grupos),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$gruposDeOracao = ['Sagrado Coracao de Jesus', 'Imaculada', 'Sao Damasso', 'Sao Miguel'];
$factory->define(App\GrupoDeOracao::class, function (Faker\Generator $faker) use ($gruposDeOracao) {
    return [
        'designacao' => $faker->unique()->randomElement($gruposDeOracao),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$nucleos = ['Sao Damasso', 'Maria Mae De Jesus', 'Sao Pedro e Joao', 'Sagrado Menino'];
$gruposId = ['1','2','3','4'];
$factory->define(App\Nucleo::class, function (Faker\Generator $faker) use ($nucleos, $gruposId) {
    return [
        'designacao' => $faker->unique()->randomElement($nucleos),
        'grupos_de_oracao_id' => $faker->numberBetween(1, \App\GrupoDeOracao::all()->count()),
    ];
});
