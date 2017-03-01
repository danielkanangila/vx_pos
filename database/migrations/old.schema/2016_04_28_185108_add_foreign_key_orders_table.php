<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned()->index()->after('id');
            $table->integer('sales_site_id')->unsigned()->index()->after('customer_id');
            $table->integer('shop_stock_id')->unsigned()->index()->after('sales_site_id');

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('sales_site_id')->references('id')->on('sales_sites');
            $table->foreign('shop_stock_id')->references('id')->on('shop_stocks');
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
