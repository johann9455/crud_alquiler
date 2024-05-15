
<h1>{{ $modo }} vehiculos </h1>

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
    <input type="text" class="form-control" name="id" value="{{isset ($vehiculos->id)? $vehiculos->id:old('id') }}" id="Codigo de identificacion">
    <br>
    </div>

    <div class="form-group">

    <label for="Placa">Placa</label>
    <input type="text" class="form-control" name="Placa" value="{{ isset ($vehiculos->Placa)? $vehiculos->Placa:old('Placa') }}" id="Placa">
    <br>
    </div>

    <div class="form-group">

    <label for="Modelo">Modelo</label>
    <input type="text" class="form-control" name="Modelo" value="{{ isset ($vehiculos->Modelo)? $vehiculos->Modelo:old('Modelo') }}" id="Modelo">
    <br>
    </div>

    <div class="form-group">

    <label for="Año de fabricacion">Año de fabricacion</label>
    <input type="text" class="form-control" name="Año_de_fabricacion" value="{{ isset ($vehiculos->Año_de_fabricacion)? $vehiculos->Año_de_fabricacion:old('Año_de_fabricacion') }}" id="Año de fabricacion">
    <br>
    </div>

    <div class="form-group">

    <label for="Estado">Estado</label>
    <input type="text" class="form-control" name="Estado" value="{{ isset ($vehiculos->Estado)? $vehiculos->Estado:old('Estado') }}" id="Estado"> 
    <br>
    </div>

    <div class="form-group">

    <label for="Tarifas por día">Tarifas por dia</label>
    <input type="text" class="form-control" name="Tarifas_por_dia" value="{{ isset ($vehiculos->Tarifas_por_dia)? $vehiculos->Tarifas_por_dia:old('Tarifas_por_dia') }}" id="Tarifas por día"> 
    <br>
    </div>

    <input class="btn btn-primary" type="submit" value="{{ $modo }}"> 
    
    <a class="btn btn-success" href="{{ url('vehiculos/') }}"> Regresar </a>




    