<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDadosLinguaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dados_lingua', function(Blueprint $table)
		{
			$table->foreign('funcao_has_membros_id', 'fk_dados_lingua_funcao_has_membros1')->references('id')->on('funcao_has_membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dados_lingua', function(Blueprint $table)
		{
			$table->dropForeign('fk_dados_lingua_funcao_has_membros1');
		});
	}

}
