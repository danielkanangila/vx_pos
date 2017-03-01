<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyOnOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned()->index()->after('order_number');
            $table->integer('product_id')->unsigned()->index()->after('customer_id');

            $table->foreign('customer_id')
                ->references('customer_number')
                ->on('customers');

            $table->foreign('product_id')
                ->references('product_id')
                ->on('products');
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
