<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class AddRoot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Inserindo usuário padrão

        DB::table('users')->insert(
            array(
                'name' => 'Tarcisio Souto',                
                'email' => 'tss.labsi@gmail.com',
                'password' => Hash::make('123'),
                'fk_endereco' => 1,
                'tel_celular' => '027999999999',
                'naturalidade' => 'Vitória',
                'sexo' => 'm',
                'cpf' => '99999999999',
                'rg' => '3333333',
                'idade' => '28',
                'raca' => 'Negro',
                'created_at' => '2021-09-21 11:09:00',
                'updated_at' => '2021-09-21 11:09:00',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
