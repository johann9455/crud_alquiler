@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{ url('/reservas/'.$reservas->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}


@include('reservas.form',['modo'=>'Editar']);

</form>
</div>
@endsection