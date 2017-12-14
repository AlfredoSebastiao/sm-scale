<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 45);
			$table->string('apelido', 45);
			$table->string('email', 45)->nullable()->unique('email_UNIQUE');
			$table->string('nr_telefone', 15)->unique('nr_telefone_UNIQUE');
			$table->date('data_nascimento')->nullable();
			$table->boolean('is_masculino')->nullable();
			$table->boolean('is_crismado')->nullable();
			$table->boolean('is_baptizado')->nullable();
			$table->boolean('is_casado')->nullable();
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
		Schema::drop('membros');
	}

}
