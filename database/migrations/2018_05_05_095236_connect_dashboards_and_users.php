<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDashboardsAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dashboards', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dashboards', function (Blueprint $table) {
            $table->dropForeign('dashboards_user_id_foreign');

            $table->dropColumn('user_id');
        });
    }
}
