<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Migracion de Materias Primas

class CreateRawMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('raw_materials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('reference');
			$table->string('description');
			$table->string('type');
			$table->string('unit_of_measure');//Unidad de medida
			$table->string('enable',10);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('raw_materials');
	}

}
