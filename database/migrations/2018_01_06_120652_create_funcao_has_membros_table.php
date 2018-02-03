<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncaoHasMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcao_has_membros', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('funcao_id')->index('fk_funcao_has_membros_funcao1_idx');
			$table->integer('membros_id')->index('fk_funcao_has_membros_membros1_idx');
			$table->integer('qnt_exercida')->nullable()->default(0);
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
		Schema::drop('funcao_has_membros');
	}

}
