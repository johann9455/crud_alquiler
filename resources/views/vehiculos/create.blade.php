@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/vehiculos')}}" method="post"enctype="mulripart/form-data" >
    @csrf
    @include('vehiculos.form', ['modo'=>'Crear']);
    
    
    </form>
</div>
@endsection
    