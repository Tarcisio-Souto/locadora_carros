<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('year');
            $table->string('board');
            $table->string('path_photo1')->nullable();
            $table->string('path_photo2')->nullable();
            $table->string('path_photo3')->nullable();
            $table->string('path_photo4')->nullable();
            $table->string('path_photo5')->nullable();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
