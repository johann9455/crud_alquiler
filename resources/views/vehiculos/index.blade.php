@extends('layouts.app')

@section('content')
<div class="container">

<div class="alert alert-succes alert-dismissible" role="alert"></div>
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<button type="button" class="close" data-dismiss="alert" aria-label="Close"
<span aria-hidden="true">&times;</span>
</button>
</div>

<a href="{{ url('vehiculos/create') }}" class="btn btn-primary"> Registrar nuevo vehiculo </a>
<br>
<br>
<br>
<br>
<a href="{{ url('reservas/') }}" class="btn btn-primary" > Siguiente formulario </a><
<a href="{{ url('clientes/') }}" class="btn btn-success" > Regresar </a>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <tr>placa</tr>
            <tr>modelo</tr>
            <tr> Año de fabricacion </tr>
            <tr> Estado </tr>
            <tr> Tarifas por dia </tr>
    
        </tr>
    </thead>

    <tbody>
        @foreach($vehiculosv as $vehiculosva)
        <tr>
            <td>{{$vehiculosva->id}}</td>
            <td>{{$vehiculosva->Placa}}</td>
            <td>{{$vehiculosva->Modelo}}</td>
            <td>{{$vehiculosva->Año_de_fabricacion}}</td>
            <td>{{$vehiculosva->Estado}}</td>
            <td>{{$vehiculosva->Tarifas_por_dia}}</td>
            <td>
                
            <a href="{{ url('/vehiculos/'.$vehiculosva->id.'/edit') }}" class="btn btn-warning" >

            Editar 

            </a>
            
           
                
            <form action="{{ url('/vehiculos/'.$vehiculosva->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
            </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection

