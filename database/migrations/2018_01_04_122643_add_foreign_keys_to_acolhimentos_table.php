<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAcolhimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('acolhimentos', function(Blueprint $table)
		{
			$table->foreign('membros_id', 'fk_acolhimentos_membros1')->references('id')->on('membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('acolhimentos', function(Blueprint $table)
		{
			$table->dropForeign('fk_acolhimentos_membros1');
		});
	}

}
