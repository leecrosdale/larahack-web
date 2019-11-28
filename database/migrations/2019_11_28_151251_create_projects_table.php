<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hackathon_id');
            $table->string('title', 80);
            $table->text('description');
            $table->text('url')->nullable();
            $table->text('repo')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();

            $table->foreign('hackathon_id')->references('id')->on('hackathons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
