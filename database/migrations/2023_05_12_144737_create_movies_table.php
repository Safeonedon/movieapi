<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('adult');
            $table->string('backdrop_path');
            $table->string('belongs_to_collection');
            $table->string('budget');
            $table->string('homepage');
             $table->string('imdb_id');
            $table->string('original_language');
            $table->string('original_title');
            $table->text('overview');
            $table->string('popularity');
            $table->string('poster_path');
            $table->string('release_date');
            $table->string('revenue');
            $table->string('runtime');
            $table->string('status');
            $table->string('tagline');
            $table->string('title');
            $table->string('video');
            $table->string('vote_average');
            $table->string('vote_count');
            $table->integer('deleted');
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
        Schema::dropIfExists('movies');
    }




};
