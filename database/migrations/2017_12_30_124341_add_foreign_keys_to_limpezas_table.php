<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLimpezasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('limpezas', function(Blueprint $table)
		{
			$table->foreign('grupos_id', 'fk_limpezas_grupos1')->references('id')->on('grupos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('nucleos_id', 'fk_limpezas_nucleos1')->references('id')->on('nucleos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('limpezas', function(Blueprint $table)
		{
			$table->dropForeign('fk_limpezas_grupos1');
			$table->dropForeign('fk_limpezas_nucleos1');
		});
	}

}
