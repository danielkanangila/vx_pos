<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
             $table->engine = 'InnoDB';

             $table->increments('order_number');
             $table->integer('quantity');
             $table->string('status');
             $table->timestamps();
            //ADD PRODUCT_ID, PRICE_ID & CUSTOMER_ID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
