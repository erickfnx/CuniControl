<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoAdquisicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tipo_Adquisicion', function (Blueprint $table) {
          $table->string('Id_Adquisicion',6)->primary('Id_Adquisicion');
          $table->string('Nombre_Adquisicion',50);
          $table->string('Descripcion_Adquisicion',200);
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
        Schema::dropIfExists('Tipo_Adquisicion');
    }
}
