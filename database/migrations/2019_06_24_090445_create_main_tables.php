<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable();
        });
        Schema::create('floors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable();
            $table->integer('building_id')->unsigned()->nullable();
            $table->foreign('building_id')->references('id')->on('buildings');
        });
        Schema::create('sensors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable();
            $table->integer('floor_id')->unsigned()->nullable();
            $table->foreign('floor_id')->references('id')->on('floors');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::table('floors', function ($table) {
            $table->dropForeign('floors_building_id_foreign');
            $table->dropColumn('building_id');
        });

        Schema::table('sensors', function ($table) {
            $table->dropForeign('sensors_floor_id_foreign');
            $table->dropColumn('floor_id');
        });

        Schema::table('sensors', function ($table) {
            $table->dropForeign('sensors_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::dropIfExists('buildings');
        Schema::dropIfExists('floors');
        Schema::dropIfExists('sensors');
    }
}
