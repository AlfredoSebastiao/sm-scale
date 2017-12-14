<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNucleosHasMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nucleos_has_membros', function(Blueprint $table)
		{
			$table->integer('nucleos_id')->index('fk_nucleos_has_membros_nucleos1_idx');
			$table->integer('membros_id')->index('fk_nucleos_has_membros_membros1_idx');
			$table->timestamps();
			$table->primary(['nucleos_id','membros_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nucleos_has_membros');
	}

}
