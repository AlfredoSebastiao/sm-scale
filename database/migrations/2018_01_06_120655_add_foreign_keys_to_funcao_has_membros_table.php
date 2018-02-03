<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFuncaoHasMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('funcao_has_membros', function(Blueprint $table)
		{
			$table->foreign('funcao_id', 'fk_funcao_has_membros_funcao1')->references('id')->on('funcao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('membros_id', 'fk_funcao_has_membros_membros1')->references('id')->on('membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('funcao_has_membros', function(Blueprint $table)
		{
			$table->dropForeign('fk_funcao_has_membros_funcao1');
			$table->dropForeign('fk_funcao_has_membros_membros1');
		});
	}

}
