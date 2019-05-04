<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovies extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("cast");
            $table->string("direction");
            $table->string("duration");

            $table->integer("genre_id")->unsigned();

            $table->foreign('genre_id')->references('id')->on('genres')->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('movies');
    }
}
