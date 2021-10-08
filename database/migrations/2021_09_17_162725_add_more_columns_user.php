<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_endereco');
            $table->string('tel_celular');
            $table->string('naturalidade')->nullable();
            $table->char('sexo')->nullable();
            $table->string('cpf');
            $table->string('rg');
            $table->string('idade');
            $table->binary('photo')->nullable();

            $table->foreign('fk_endereco')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fk_endereco');
            $table->dropColumn('tel_celular');
            $table->dropColumn('naturalidade');
            $table->dropColumn('sexo');
            $table->dropColumn('cpf');
            $table->dropColumn('rg');
            $table->dropColumn('idade');
            $table->dropColumn('raca');
            $table->dropColumn('photo');
        });
    }
}
