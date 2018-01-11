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
        'grupos_de_oracao_id' => $faker->numberBetween(1, 4),
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$funcoes = ['Leitor', 'Acolhimento', 'Acolito', 'Salmista'];
$factory->define(App\Funcao::class, function (Faker\Generator $faker) use ($funcoes) {
    return [
        'id' => $faker->unique()->numberBetween(1,4),
        'designacao' => $faker->unique()->randomElement($funcoes),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Membro::class, function (Faker\Generator $faker) {
    return [
        'apelido' => $faker->lastName,
        'nome' => $faker->firstName,
        'data_nascimento' => $faker->date(),
        'nr_telefone' => $faker->unique()->e164PhoneNumber,
        'email' => $faker->unique()->email,
        'is_masculino' => $faker->boolean(50),
        'is_baptizado' => $faker->boolean(100),
        'is_crismado' => $faker->boolean(60),
        'is_casado' => $faker->boolean(30),
        'nucleos_id' => $faker->numberBetween(1,4)

    ];
});

$factory->define(App\FuncaoDoMembro::class, function (Faker\Generator $faker) {
    return [
        'funcao_id' => $faker->numberBetween(1, \App\Funcao::all()->count()),
        'membros_id' => $faker->numberBetween(1, \App\Membro::all()->count()),
        'qnt_exercida' => $faker->numberBetween(1, 98),
        'proximo_de' => $faker->unique()->numberBetween(0, 30),

    ];
});

$factory->define(App\DadosLingua::class, function (Faker\Generator $faker) {
    return [
        'portugues' => $faker->boolean(90),
        'ronga' => $faker->boolean(70),
        'funcao_has_membros_id' =>  $faker->numberBetween(1, \App\FuncaoDoMembro::all()->count()),

    ];
});

$factory->define(App\EscalaDeLeitura::class, function (Faker\Generator $faker) {
    return [
        'data' => $faker->date(),
        'primeira_portugues_id' => $faker->numberBetween(1, \App\FuncaoDoMembro::all()->count()),
        'primeira_ronga_id' => $faker->numberBetween(1, \App\FuncaoDoMembro::all()->count()),
        'segunda_portugues_id' => $faker->numberBetween(1, \App\FuncaoDoMembro::all()->count()),
        'segunda_ronga_id' => $faker->numberBetween(1, \App\FuncaoDoMembro::all()->count()),
        'envagelho_id' => $faker->numberBetween(1, \App\FuncaoDoMembro::all()->count()),
        'salmos_id' => $faker->numberBetween(1, \App\FuncaoDoMembro::all()->count()),
    ];
});