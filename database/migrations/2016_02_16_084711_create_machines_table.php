<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('reference');
            $table->string('description', 450);
            $table->string('use_common');//Uso comun
            $table->string('variables');
            $table->string('maintenance_intervals');//Periocidad mantenimiento
            $table->string('location');
            $table->string('maximun_capacity');
            $table->string('general_manintenance');
            //Datos de proveedor
            $table->string('manufacturer');//Fabricante
            $table->string('name_provider');
            $table->string('contact_provider');
            $table->string('billing_provider');//Facturacion
            $table->string('catalog_provider');//Catalogo
            $table->string('data_sheet_provider');//Ficha Technica
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
        Schema::drop('machines');
    }
}
