<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('membros', function(Blueprint $table)
		{
			$table->foreign('nucleos_id', 'fk_membros_nucleos1')->references('id')->on('nucleos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('membros', function(Blueprint $table)
		{
			$table->dropForeign('fk_membros_nucleos1');
		});
	}

}
