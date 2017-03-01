<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->integer('delivery_id')->unsigned()->index()->after('id');
            $table->integer('price_id')->unsigned()->index()->after('delivery_id');

            $table->foreign('delivery_id')->references('id')->on('deliveries');
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
        Schema::table('invoices', function (Blueprint $table) {
            //
        });
    }
}
