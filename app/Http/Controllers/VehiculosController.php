<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['vehiculosv'] = vehiculos::paginate(5);
        return view('vehiculos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'Placa' => 'required|string|max:100',
            'Modelo' => 'required|string|max:100',
            'Año_de_fabricacion' => 'integer|string|max:100',
            'Estado' => 'required|string|max:100',
            'Tarifas_por_dia' => 'required|integer|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);


        //$datosVehiculos = request()->all();
        $datosVehiculos = request()->except('_token');
        vehiculos::insert($datosVehiculos);

        //return response()->json($datosVehiculos);
        return  redirect('vehiculos')->with('mensaje','Cliente agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $vehiculos=vehiculos::findOrFail($id);
        return view('vehiculos.edit',compact('vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'Placa' => 'required|string|max:100',
            'Modelo' => 'required|string|max:100',
            'Año_de_fabricacion' => 'integer|string|max:100',
            'Estado' => 'required|string|max:100',
            'Tarifas_por_dia' => 'required|integer|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);




        //
        $datosVehiculos = request()->except(['_token','_method']);
        vehiculos::where('id','=',$id)->update($datosVehiculos);

        $vehiculos=vehiculos::findOrFail($id);
        return view('vehiculos.edit',compact('vehiculos'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        vehiculos::destroy($id);
        return redirect('vehiculos')->with('mensaje','Vehiculo Borrado');
    }
}
