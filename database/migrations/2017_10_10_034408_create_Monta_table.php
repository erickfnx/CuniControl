<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMontaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Monta', function (Blueprint $table) {
            $table->string('Id_Monta')->primary('Id_Monta');
            $table->date('Fecha_Monta'); 
            $table->string('Id_Conejo_Hembra');
            $table->foreign('Id_Conejo_Hembra')->references('Id_Conejo')->on('Conejo');
            $table->string('Id_Conejo_Macho',10);
            $table->foreign('Id_Conejo_Macho')->references('Id_Conejo')->on('Conejo');
            $table->date('Fecha_Diagnostico')->nullable();
            $table->enum('Resultado_Diagnostico',['Positivo','Negativo'])->nullable();
            $table->date('Fecha_Parto')->nullable();
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
        Schema::dropIfExists('Monta');
    }
}
