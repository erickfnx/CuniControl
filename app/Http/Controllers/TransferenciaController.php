<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;
use App\Area;
use App\Transferencia;

class TransferenciaController extends Controller
{
	public function create()
	{
		$areas = Area::all();
		$conejos = Conejo::all();

		return view('transferencia/create', [
			'conejos' => $conejos,
			'areas' => $areas
		]);
	}

	public function store(Request $request)
	{
		$transferencia = new Transferencia;

		$transferencia->Id_Conejo = $request->input('Id_Conejo');
		$transferencia->Id_Area = $request->input('Id_Area');
		$transferencia->Fecha_Baja = $request->input('Fecha_Baja');
		$transferencia->save();

		return redirect('/transferencia');
	}

	public function index(Request $request)
	{
     	if($request->Id_Conejo)
        {
          $transferencias = Transferencia::where('Id_Conejo', $request->Id_Conejo)->get();
        } else {
          $transferencias = Transferencia::all();
        }
        return view('transferencia/index', ['transferencias' => $transferencias]);
	}

	public function edit($id_transferencia)
	{
		$areas = Area::all();
		$conejos = Conejo::all();
		$transferencia = Transferencia::where('Id_Transferencia', $id_transferencia)->first();

		return view('transferencia/edit', [
			'conejos' => $conejos,
			'areas' => $areas,
			'transferencia' => $transferencia
		]);
	}

	public function update(Request $request, $id_transferencia)
	{
		$transferencia = Transferencia::where('Id_Transferencia', $id_transferencia)->first();
		$transferencia->Id_Area = $request->input('Id_Area');
		$transferencia->save();

		return redirect('/transferencia');
	}

	public function delete($id_transferencia)
	{
		$transferencia = Transferencia::where('Id_Transferencia',$id_transferencia)->first();
		$transferencia->delete();

		return redirect()->back();
	}
}
