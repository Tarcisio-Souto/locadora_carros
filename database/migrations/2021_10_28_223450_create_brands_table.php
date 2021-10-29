<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('brand');
        });

        DB::table('brands')->insert(
            array(
                ['brand' => 'Adamo'],
                ['brand' => 'Agrale'],
                ['brand' => 'Aldee'],
                ['brand' => 'Alfa Romeo'],
                ['brand' => 'Americar'],
                ['brand' => 'Avallone'],
                ['brand' => 'Audi'],
                ['brand' => 'Aurora'],
                ['brand' => 'Bianco'],
                ['brand' => 'BMW'],
                ['brand' => 'Bola'],
                ['brand' => 'Brasinca'],
                ['brand' => 'CBP'],
                ['brand' => 'CBT'],
                ['brand' => 'Chamonix'],
                ['brand' => 'Chery'],
                ['brand' => 'Chevrolet'],
                ['brand' => 'Chrysler/Dodge'],
                ['brand' => 'Citroen'],
                ['brand' => 'Concorde'],
                ['brand' => 'Corona'],
                ['brand' => 'Cross Lander'],
                ['brand' => 'Daewoo'],
                ['brand' => 'Daihatsu'],
                ['brand' => 'Dankar'],
                ['brand' => 'DKW-Vemag'],
                ['brand' => 'Edra'],
                ['brand' => 'Emis'],
                ['brand' => 'Engerauto'],
                ['brand' => 'Engesa'],
                ['brand' => 'Envemo'],
                ['brand' => 'Envesa'],
                ['brand' => 'Effa'],
                ['brand' => 'Farus'],
                ['brand' => 'Fiat'],
                ['brand' => 'FNM'],
                ['brand' => 'Ford'],
                ['brand' => 'Furglass'],
                ['brand' => 'Geely'],
                ['brand' => 'Glaspac'],
                ['brand' => 'GMC'],
                ['brand' => 'Grancar'],
                ['brand' => 'Gurgel'],
                ['brand' => 'Hofstetter'],
                ['brand' => 'Honda'],
                ['brand' => 'Hummer'],
                ['brand' => 'Hyundai'],
                ['brand' => 'IBAP'],
                ['brand' => 'Inbrave'],
                ['brand' => 'Infiniti'],
                ['brand' => 'Ita'],
                ['brand' => 'JAC'],
                ['brand' => 'Jaguar'],
                ['brand' => 'Jeep'],
                ['brand' => 'JPX'],
                ['brand' => 'Kia'],
                ['brand' => 'Lada'],
                ['brand' => "L'Automobile/L'Auto Craft"],
                ['brand' => 'Lafer'],
                ['brand' => 'Land Rover'],
                ['brand' => 'Lexus'],
                ['brand' => 'LHM'],
                ['brand' => 'Lifan'],
                ['brand' => 'Lincoln'],
                ['brand' => 'Lobini'],
                ['brand' => 'Lorena'],
                ['brand' => 'Macan'],
                ['brand' => 'Mahindra'],
                ['brand' => 'Malzoni'],
                ['brand' => 'Matra Veículos'],
                ['brand' => 'Mazda'],
                ['brand' => 'Megastar Veículos'],
                ['brand' => 'Mercedes-Benz'],
                ['brand' => 'MG'],
                ['brand' => 'Mini'],
                ['brand' => 'Mirage'],
                ['brand' => 'Mitsubishi'],
                ['brand' => 'Miura'],
                ['brand' => 'Monarca'],
                ['brand' => 'NBM'],
                ['brand' => 'Nissan'],
                ['brand' => 'Nobre'],
                ['brand' => 'PAG/Dacon'],
                ['brand' => 'Peugeot'],
                ['brand' => 'Polystilo'],
                ['brand' => 'Puma'],
                ['brand' => 'Py Motors'],
                ['brand' => 'Ragge'],
                ['brand' => 'Renault'],
                ['brand' => 'Romi'],
                ['brand' => 'Saab'],
                ['brand' => 'Simca'],
                ['brand' => 'Santa Matilde'],
                ['brand' => 'San Vito'],
                ['brand' => 'SEAT'],
                ['brand' => 'SEAT'],
                ['brand' => 'STV'],
                ['brand' => 'Spiller Mattei'],
                ['brand' => 'SR Veículos Especiais'],
                ['brand' => 'Subaru'],
                ['brand' => 'Suzuki'],
                ['brand' => 'SsangYong'],
                ['brand' => 'TAC Motors'],
                ['brand' => 'Tanger'],
                ['brand' => 'Toyota'],
                ['brand' => 'Trimax'],
                ['brand' => 'Troller'],
                ['brand' => 'Villa'],
                ['brand' => 'Volvo'],
                ['brand' => 'Volkswagen'],
                ['brand' => 'WMV'],
                ['brand' => 'Willys Overland']
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
        Schema::dropIfExists('brands');
    }
}
