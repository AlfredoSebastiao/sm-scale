<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEscalaDeLeiturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('escala_de_leituras', function(Blueprint $table)
		{
			$table->foreign('primeira_portugues_id', 'fk_escala_de_leituras_funcao_has_membros1')->references('id')->on('funcao_has_membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('primeira_ronga_id', 'fk_escala_de_leituras_funcao_has_membros2')->references('id')->on('funcao_has_membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('segunda_portugues_id', 'fk_escala_de_leituras_funcao_has_membros3')->references('id')->on('funcao_has_membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('segunda_ronga_id', 'fk_escala_de_leituras_funcao_has_membros4')->references('id')->on('funcao_has_membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('envagelho_id', 'fk_escala_de_leituras_funcao_has_membros5')->references('id')->on('funcao_has_membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('salmos_id', 'fk_escala_de_leituras_funcao_has_membros6')->references('id')->on('funcao_has_membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('escala_de_leituras', function(Blueprint $table)
		{
			$table->dropForeign('fk_escala_de_leituras_funcao_has_membros1');
			$table->dropForeign('fk_escala_de_leituras_funcao_has_membros2');
			$table->dropForeign('fk_escala_de_leituras_funcao_has_membros3');
			$table->dropForeign('fk_escala_de_leituras_funcao_has_membros4');
			$table->dropForeign('fk_escala_de_leituras_funcao_has_membros5');
			$table->dropForeign('fk_escala_de_leituras_funcao_has_membros6');
		});
	}

}
