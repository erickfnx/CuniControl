<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionGazapoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Donacion_Gazapo', function (Blueprint $table) {
            $table->string('Id_Donacion')->primary('Id_Donacion');
            $table->string('Id_Parto_Donante');
            $table->foreign('Id_Parto_Donante')->references('Id_Parto')->on('Parto');
            $table->string('Id_Parto_Donatorio');
            $table->smallInteger('Cantidad_Gazapos');
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
        Schema::dropIfExists('Donacion_Gazapo');
    }
}
