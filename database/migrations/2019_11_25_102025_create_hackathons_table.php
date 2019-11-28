<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackathonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 60);
            $table->timestamp('start')->useCurrent();
            $table->timestamp('voting_start')->useCurrent();
            $table->timestamp('voting_end')->useCurrent();
            $table->timestamp('end')->useCurrent();
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
        Schema::dropIfExists('hackathons');
    }
}
