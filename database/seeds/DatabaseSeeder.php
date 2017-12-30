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
      //  factory(\App\Grupo::class, 5)->create();
        factory(\App\Nucleo::class, 4)->create();
    }
}
