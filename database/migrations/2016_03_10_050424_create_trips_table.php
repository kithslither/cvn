<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('delivery_number');
            $table->integer('sub_con_id');
            $table->integer('equipment_id');
            $table->integer('load_id');
            $table->integer('type_id');
            $table->integer('total');
            $table->string('stockpile');
            $table->string('source_area');
            $table->string('dump_area');
            $table->string('shift');
            $table->integer('rate');
            $table->integer('distance');
            $table->date('date');
            $table->time('time_dep');
            $table->time('time_arr');
            $table->rememberToken();
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
        Schema::drop('trips');
    }
}
