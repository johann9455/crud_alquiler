
<h1>{{ $modo }} clientes </h1>

@if(count($errors)>0)

    <div
        class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
          <li>  {{ $error }}</li>
    @endforeach
    </ul>
        
    </div>
    
@endif


    <div class="form-group">

    <label for="Codigo Identificación">Codigo Identificación</label>
    <input type="text" class="form-control" name="id" value="{{ isset($clientes->id)?$clientes->id:old('id') }}" id="Codigo de identificacion">
    <br>

    </div>

    <div class="form-group">

    <label for="cedula">Numero de cedula</label>
    <input type="text" class="form-control" name="cedula" value="{{ isset($clientes->cedula)?$clientes->cedula:old('cedula') }}" id="Numero de cedula">
    <br>

    </div>

    <div class="form-group">

    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{isset($clientes->nombre)?$clientes->nombre:old('nombre') }}" id="Nombre">
    <br>

    </div>

    <div class="form-group">

    <label for="Número de telefono">Número de telefonico</label>
    <input type="text" class="form-control" name="numero_de_telefono" value="{{isset($clientes->numero_de_telefono)?$clientes->numero_de_telefono:old('numero_de_telefono') }}" id="Número_de_telefono">
    <br>

    </div>

    <div class="form-group">

    <label for="correo electronico">Correo electronico</label>
    <input type="text" class="form-control" name="correo_electronico" value="{{ isset($clientes->correo_electronico)?$clientes->correo_electronico:old('correo_electronico') }}" id="correo_electronico"> 
    <br>
    <br>

    </div>
    <input class="btn btn-primary" type="submit" value="{{ $modo }}">

    <a class="btn btn-success" href="{{ url('clientes/') }}"> Regresar </a>

    <br>