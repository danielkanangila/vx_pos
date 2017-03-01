<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('delivery_number');
            $table->integer('quantity');
            $table->integer('start_serial_number')->unique()->index();
            $table->integer('end_serial_number')->unique()->index();
            $table->string('status');
            $table->timestamps();
            //ADD ORDER_ID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deliveries', function (Blueprint $table) {
            //
        });
    }
}
