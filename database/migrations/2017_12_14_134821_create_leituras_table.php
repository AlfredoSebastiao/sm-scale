<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeiturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leituras', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->date('data')->nullable();
			$table->integer('tipos_leitura_id')->index('fk_leituras_tipos_leitura1_idx');
			$table->integer('membros_id')->index('fk_leituras_membros1_idx');
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
		Schema::drop('leituras');
	}

}
