<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLeiturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('leituras', function(Blueprint $table)
		{
			$table->foreign('membros_id', 'fk_leituras_membros1')->references('id')->on('membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipos_leitura_id', 'fk_leituras_tipos_leitura1')->references('id')->on('tipos_leitura')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('leituras', function(Blueprint $table)
		{
			$table->dropForeign('fk_leituras_membros1');
			$table->dropForeign('fk_leituras_tipos_leitura1');
		});
	}

}
