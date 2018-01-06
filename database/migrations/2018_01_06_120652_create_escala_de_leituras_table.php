<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscalaDeLeiturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escala_de_leituras', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->date('data')->unique('data_UNIQUE');
			$table->integer('primeira_portugues_id')->index('fk_escala_de_leituras_funcao_has_membros1_idx');
			$table->integer('primeira_ronga_id')->index('fk_escala_de_leituras_funcao_has_membros2_idx');
			$table->integer('segunda_portugues_id')->index('fk_escala_de_leituras_funcao_has_membros3_idx');
			$table->integer('segunda_ronga_id')->index('fk_escala_de_leituras_funcao_has_membros4_idx');
			$table->integer('envagelho_id')->index('fk_escala_de_leituras_funcao_has_membros5_idx');
			$table->integer('salmos_id')->index('fk_escala_de_leituras_funcao_has_membros6_idx');
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
		Schema::drop('escala_de_leituras');
	}

}
