<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('dt_devolution');
            $table->float('price');
            $table->unsignedBigInteger('fk_user');
            $table->unsignedBigInteger('fk_car');
            $table->foreign('fk_user')->references('id')->on('users');
            $table->foreign('fk_car')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
