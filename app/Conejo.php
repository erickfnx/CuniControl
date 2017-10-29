<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conejo extends Model
{

    public $incrementing=false;
    public $fillable=['Id_Conejo','Tatuaje_Derecho','Tatuaje_Izquierdo','Fecha_Nacimiento','Id_Raza','Genero','Status_Conejo'];
    protected $table='Conejo';
    protected $primaryKey='Id_Conejo';
    }
