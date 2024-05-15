
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

<a href="{{ url('clientes/create') }}" class="btn btn-primary" > Registrar Nuevo Usuario </a>
<br/>
<br/>
<br/>

<a href="{{ url('vehiculos/') }}" class="btn btn-primary"> Siguiente formulario </a>


<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>cedula</th>
            <th>nombre</th>
            <th>numero de telefono</th>
            <th>correo electronico</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach($clientesv as $clientesva)
        <tr>
            <td>{{$clientesva->id}}</td>
            <td>{{$clientesva->cedula}}</td>
            <td>{{$clientesva->nombre}}</td>
            <td>{{$clientesva->numero_de_telefono}}</td>
            <td>{{$clientesva->correo_electronico}}</td>
            <td>
            
            <a href="{{ url('/clientes/'.$clientesva->id.'/edit') }}" class="btn btn-warning" >

            Editar

            </a>
              
                
            <form action="{{ url('/clientes/'.$clientesva->id) }}" class="d-inline" method="post">
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
