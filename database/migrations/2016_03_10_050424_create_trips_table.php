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
            $table->integer('subcon_id')->unsigned;
            $table->integer('dt_id')->unsigned;
            $table->integer('bh_id')->unsigned;
            $table->integer('load_id')->unsigned;
            $table->integer('type_id')->unsigned;
            $table->integer('total')->unsigned;     
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

            /*$table->foreign('subcon_id')
                    ->references('id')
                    ->on('subcons')
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
        Schema::drop('trips');
    }
}
 