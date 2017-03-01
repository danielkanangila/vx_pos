<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyShopStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_stocks', function (Blueprint $table) {
            $table->integer('sales_site_id')->unsigned()->index()->after('id');
            $table->integer('store_id')->unsigned()->index()->after('sales_site_id');

            $table->foreign('sales_site_id')->references('id')->on('sales_sites');
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_stocks', function (Blueprint $table) {
            //
        });
    }
}
