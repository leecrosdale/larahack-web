<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 60);
            $table->timestamp('event_start')->useCurrent();
            $table->timestamp('event_voting_start')->useCurrent();
            $table->timestamp('event_voting_end')->useCurrent();
            $table->timestamp('event_end')->useCurrent();
            $table->tinyInteger('active')->unsigned()->default(0);
            $table->string('theme')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
