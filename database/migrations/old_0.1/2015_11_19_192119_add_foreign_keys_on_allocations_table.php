<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysOnAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('allocations', function (Blueprint $table) {
            $table->integer('warehouse_id')->unsigned()->index()->after('id');
            $table->integer('product_id')->unsigned()->index()->after('id');
            $table->integer('price_id')->unsigned()->index()->after('quantity');


            $table->foreign('warehouse_id')->references('id')->on('warehouses');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('price_id')->references('id')->on('prices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('allocations', function (Blueprint $table) {
            //
        });
    }
}
