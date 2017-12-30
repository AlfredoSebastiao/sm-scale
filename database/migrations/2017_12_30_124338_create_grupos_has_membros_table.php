<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGruposHasMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos_has_membros', function(Blueprint $table)
		{
			$table->integer('grupos_id', true);
			$table->integer('membros_id')->index('fk_grupos_has_membros_membros1_idx');
			$table->primary(['grupos_id','membros_id']);
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
		Schema::drop('grupos_has_membros');
	}

}
