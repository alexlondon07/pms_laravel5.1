<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesXMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('activities_x_machines', function(Blueprint $table) {
              $table->increments('id');
              $table->unsignedInteger('activity_id');
              $table->unsignedInteger('machine_id');
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
      Schema::drop('activities_x_machines');
    }
}
