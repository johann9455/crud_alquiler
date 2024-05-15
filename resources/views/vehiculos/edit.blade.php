@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{ url('/vehiculos/'.$vehiculos->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}



@include('vehiculos.form', ['modo'=>'Editar']);

</form>
</div>
@endsection