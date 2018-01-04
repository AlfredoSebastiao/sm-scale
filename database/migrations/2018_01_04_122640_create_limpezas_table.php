<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLimpezasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('limpezas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('data');
			$table->integer('grupos_id')->nullable()->index('fk_limpezas_grupos1_idx');
			$table->integer('nucleos_id')->nullable()->index('fk_limpezas_nucleos1_idx');
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
		Schema::drop('limpezas');
	}

}
