<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

       // factory(\App\GrupoDeOracao::class, 4)->create();
      // factory(\App\Grupo::class, 5)->create();
       // factory(\App\Nucleo::class, 4)->create();
       // factory(\App\Funcao::class,4)->create();

       // factory(\App\Membro::class, 25)->create();
       // factory(\App\FuncaoDoMembro::class,30)->create();
        factory(\App\DadosLingua::class, 30)->create();
        factory(\App\EscalaDeLeitura::class, 10)->create();

    }
}
