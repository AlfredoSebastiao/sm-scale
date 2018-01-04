<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDadosLinguaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dados_lingua', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('portugues')->nullable();
			$table->boolean('ingles')->nullable();
			$table->integer('membros_id')->index('fk_dados_lingua_membros1_idx');
            $table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dados_lingua');
	}

}
