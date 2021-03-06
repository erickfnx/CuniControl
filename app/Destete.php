<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destete extends Model
{
    //
    public $incrementing=false;
    public $fillable=['Id_Destete','Id_Parto','Fecha_Destete','Numero_Destetados','Peso_Destete'];
    protected $table='Destete';
    protected $primaryKey='Id_Destete';
 	
 	public function parto()
 	{
 		return $this->belongsTo(Parto::class,'Id_Parto','Id_Parto');
 	}
 	public function conejo(){
    	return $this->hasMany('Conejo');
    }	
    
}
