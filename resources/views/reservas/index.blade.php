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



<a href="{{ url('reservas/create') }}" class="btn btn-primary" > Registrar nueva reserva </a>


<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <tr>fecha de inicio</tr>
            <tr>fecha final</tr>
            <tr> estado de la reserva </tr>
            <tr> tarifa total</tr>
            <tr>  Notas adicionales</tr>
            <tr>  clientes id</tr>
            <tr>  vehiculos id</tr>
           
        </tr>
    </thead>

    <tbody>
        @foreach($reservasv as $reservasva)
        <tr>
            <td>{{$reservasva->id}}</td>
            <td>{{$reservasva->Fecha_inicio}}</td>
            <td>{{$reservasva->Fecha_final}}</td>
            <td>{{$reservasva->Estado_de_la_reserva}}</td>
            <td>{{$reservasva->Tarifa_total}}</td>
            <td>{{$reservasva->Notas_adicionales}}</td>
            <td>{{$reservasva->clientes_id}}</td>
            <td>{{$reservasva->vehiculos_id}}</td>
            <td>
            <a href="{{ url('/reservas/'.$reservasva->id.'/edit') }}" class="btn btn-warning"  >

            Editar

            </a>    
            
             
            
            <form action="{{ url('/reservas/'.$reservasva->id) }}" class="d-inline" method="post">
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


<a href="{{ url('vehiculos/') }}" class="btn btn-success" > Regresar </a>