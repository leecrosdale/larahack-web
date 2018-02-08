<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventIdToVariousTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->integer('event_id')->default(1)->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->integer('event_id')->default(1)->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
        });

        Schema::table('sponsors', function (Blueprint $table) {
            $table->integer('event_id')->default(1)->unsigned();
            $table->foreign('event_id')->references('id')->on('events');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
