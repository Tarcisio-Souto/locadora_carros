<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('street');
            $table->string('number');
            $table->string('district');
            $table->text('reference');
            $table->string('state');
            $table->string('zipcode');
            $table->string('country');
        });

        DB::table('addresses')->insert(
            array(
                'street' => 'Rua Eurico Salles',                
                'number' => '99',
                'district' => 'Belo Bairro',
                'reference' => 'Ao lado da igreja',
                'state' => 'ES',
                'zipcode' => '2900000',
                'country' => 'Brasil'               
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
        Schema::dropIfExists('addresses');
    }
}
