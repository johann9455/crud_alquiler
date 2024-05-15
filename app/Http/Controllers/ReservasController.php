<?php

namespace App\Http\Controllers;

use App\Models\reservas;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['reservasv'] = reservas::paginate(5);
        return view('reservas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'Fecha_inicio' => 'required|dateTime|max:100',
            'Fecha_final' => 'required|dateTime|max:100',
            'Estado_de_la_reserva' => 'required|string|max:100',
            'Tarifa_total' => 'required|integer|max:100',
            'Notas_adicionales' => 'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);



        //$datosReservas = request()->all();
        $datosReservas = request()->except('_token');
        reservas::insert($datosReservas);

        //return response()->json($datosReservas);

        return  redirect('reservas')->with('mensaje','Cliente agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(reservas $reservas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $reservas=reservas::findOrFail($id);
        return view('reservas.edit',compact('reservas'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $campos = [
            'Fecha_inicio' => 'required|dateTime|max:100',
            'Fecha_final' => 'required|dateTime|max:100',
            'Estado_de_la_reserva' => 'required|string|max:100',
            'Tarifa_total' => 'required|integer|max:100',
            'Notas_adicionales' => 'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);





        //
        $datosReservas = request()->except(['_token','_method']);
        reservas::where('id','=',$id)->update($datosReservas);

        $reservas=reservas::findOrFail($id);
        return view('reservas.edit',compact('reservas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        reservas::destroy($id);
        return redirect('reservas')->with('mensaje','Reserva  Borrada');;
    }
}
