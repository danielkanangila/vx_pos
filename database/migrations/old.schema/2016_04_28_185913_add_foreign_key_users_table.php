<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned()->index()->after('id');
            $table->integer('sales_site_id')->unsigned()->index()->after('role_id');

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('sales_site_id')->references('id')->on('sales_sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
