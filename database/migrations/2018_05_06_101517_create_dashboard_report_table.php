<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboard_report', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('dashboard_id')->unsigned();
            $table->integer('report_id')->unsigned();
            $table->foreign('dashboard_id')->references('id')->on('dashboards');
            $table->foreign('report_id')->references('id')->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboard_report');
    }
}
