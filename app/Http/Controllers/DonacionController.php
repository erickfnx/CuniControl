<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donacion;
use App\Parto;


class DonacionController extends Controller{
    //
     public function create(){
        $partos = Parto::all();
    	return view('Donacion.create',['partos' => $partos]);
    }

    public function edit($id_destete){
    	return view('Donacion.edit');
    }

    public function delete($id_destete){
    	return redirect()->back();
    }
    public function store(Request $request){
        $donacion = new Donacion;
        $donacion->Id_Parto_Donante = $request->input('Id_Parto_Donante');
        $donacion->Id_Parto_Donatorio = $request->input('Id_Parto_Donatorio');
        $donacion->Id_Donacion = $donacion->Id_Parto_Donante . $donacion->Id_Parto_Donatorio;
        $donacion->Cantidad_Gazapos = $request->input('Cantidad_Gazapos');
        $donacion->save();
        return redirect('/home');
    }
}
