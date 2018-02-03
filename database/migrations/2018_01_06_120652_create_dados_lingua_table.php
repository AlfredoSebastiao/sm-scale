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
			$table->boolean('ronga')->nullable();
			$table->integer('funcao_has_membros_id')->index('fk_dados_lingua_funcao_has_membros1_idx');
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
