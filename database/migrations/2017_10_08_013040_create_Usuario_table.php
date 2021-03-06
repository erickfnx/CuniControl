<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->string('CURP',18)->primary('CURP');
            $table->string('Nombre_Usuario',150);
            $table->string('Apellido_Paterno',75);
            $table->string('Apellido_Materno',75);
            $table->string('Correo',75);
            $table->string('Genero',1);
            $table->date('Fecha_Nacimiento');
            $table->string('Telefono',15)->nullable();
            $table->string('Celular',15);
            $table->string('password',255);
            $table->rememberToken();
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
        Schema::dropIfExists('Usuario');
    }
}
