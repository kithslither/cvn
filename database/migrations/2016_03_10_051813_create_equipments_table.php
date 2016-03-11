<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('trip_id')->unsigned();
            $table->string('equipment_cat');
            $table->string('equipment_id');
            $table->rememberToken();
            $table->timestamps();

            /*$table->foreign('trip_id')
                    ->references('id')
                    ->on('trips')
                    ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('equipments');
    }
}
