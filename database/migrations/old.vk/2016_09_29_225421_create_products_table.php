<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('product_id');
            $table->string('product_name');
            $table->integer('start_serial_number')->unique()->index();
            $table->integer('end_serial_number')->unique()->index();
            $table->date('expiration_date');
            $table->integer('quantity');
            $table->timestamps();
            //ADD CATEGORY_ID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
