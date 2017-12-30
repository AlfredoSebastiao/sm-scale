<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNucleosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nucleos', function(Blueprint $table)
		{
			$table->foreign('grupos_de_oracao_id', 'fk_nucleos_grupos_de_oracao')->references('id')->on('grupo_de_oracaos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nucleos', function(Blueprint $table)
		{
			$table->dropForeign('fk_nucleos_grupos_de_oracao');
		});
	}

}
