@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{url('/reservas')}}" method="post"enctype="mulripart/form-data" >
    @csrf
    @include('reservas.form', ['modo'=>'Crear']);
    
    
    </form>
</div>
@endsection