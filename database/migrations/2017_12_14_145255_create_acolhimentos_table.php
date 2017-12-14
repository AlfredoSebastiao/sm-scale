<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcolhimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acolhimentos', function(Blueprint $table)
		{
			$table->integer('idacolhimentos')->primary();
			$table->date('data')->nullable();
			$table->integer('membros_id')->index('fk_acolhimentos_membros1_idx');
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
		Schema::drop('acolhimentos');
	}

}
