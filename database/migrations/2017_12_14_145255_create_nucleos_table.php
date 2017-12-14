<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNucleosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nucleos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descricao', 50)->nullable();
			$table->integer('grupos_de_oracao_id')->index('fk_nucleos_grupos_de_oracao_idx');
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
		Schema::drop('nucleos');
	}

}
