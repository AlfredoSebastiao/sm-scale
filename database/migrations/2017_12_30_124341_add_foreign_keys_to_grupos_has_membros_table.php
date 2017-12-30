<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGruposHasMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupos_has_membros', function(Blueprint $table)
		{
			$table->foreign('grupos_id', 'fk_grupos_has_membros_grupos1')->references('id')->on('grupos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('membros_id', 'fk_grupos_has_membros_membros1')->references('id')->on('membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupos_has_membros', function(Blueprint $table)
		{
			$table->dropForeign('fk_grupos_has_membros_grupos1');
			$table->dropForeign('fk_grupos_has_membros_membros1');
		});
	}

}
