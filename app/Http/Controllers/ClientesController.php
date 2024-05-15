<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;



class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['clientesv'] = clientes::paginate(5);
        return view('clientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $campos = [
        
            'cedula' => 'required|string|max:100',
            'nombre' => 'required|string|max:100',
            'numero_de_telefono' => 'required|string|max:100',
            'correo_electronico' => 'required|email',
        ];
        
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);



        //$datosClientes = request()->all();
        $datosclientes = request()->except('_token');
        clientes::insert($datosclientes);

        //return response()->json($datosclientes);

        return  redirect('clientes')->with('mensaje','Cliente agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit  ($id)
    {
        //
        $clientes=clientes::findOrFail($id);
        return view('clientes.edit',compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos = [
        
            'cedula' => 'required|string|max:100',
            'nombre' => 'required|string|max:100',
            'numero_de_telefono' => 'required|string|max:100',
            'correo_electronico' => 'required|email',
        ];
        
        $mensaje=[
            'required'=>'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);


        //
        $datosclientes = request()->except(['_token','_method']);
        clientes::where('id','=',$id)->update($datosclientes);

        $clientes=clientes::findOrFail($id);
        return view('clientes.edit',compact('clientes'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        clientes::destroy($id);
        return redirect('clientes')->with('mensaje','Cliente Borrado');
    }
}
