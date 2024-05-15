
<h1>{{ $modo }} reservas </h1>

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
    <input type="text" class="form-control" name="id" value="{{isset ($reservas->id)? $reservas->id:old('id') }}" id="Codigo de identificacion">
    <br>
    </div>

    <div class="form-group">

    <label for="Fecha inicio">Fecha inicio</label>
    <input type="text"class="form-control" name="Fecha_inicio" value="{{ isset ($reservas->Fecha_inicio)? $reservas->Fecha_inicio:old('Fecha_inicio') }}" id="Fecha inicio">
    <br>
    </div>

    <div class="form-group">

    <label for="Fecha terminacion">Fecha final</label>
    <input type="text" class="form-control" name="Fecha_final" value="{{ isset ($reservas->Fecha_final)? $reservas->Fecha_final:old('Fecha_final') }}" id="Fecha final">
    <br>
    </div>

    <div class="form-group">

    <label for="Estado de la reserva">Estado de la reserva</label>
    <input type="text" class="form-control" name="Estado_de_la_reserva" value="{{ isset ($reservas->Estado_de_la_reserva)? $reservas->Estado_de_la_reserva:old('Estado_de_la_reserva') }}" id="Estado de la reserva">
    <br>
    </div>

    <div class="form-group">

    <label for="Tarifa total">Tarifa total</label>
    <input type="text" class="form-control" name="Tarifa_total" value="{{ isset ($reservas->Tarifa_total)? $reservas->Tarifa_total:old('Tarifa_total') }}" id="Tarifa total"> 
    <br>
    </div>

    <div class="form-group">

    <label for="Notas adicionales">Notas adicionales</label>
    <input type="text" class="form-control" name="Notas_adicionales" value="{{ isset ($reservas->Notas_adicionales)? $reservas->Notas_adicionales:old('Notas_adicionales') }}" id="Notas  adicionales"> 
    <br>
    </div>

    <div class="form-group">

    <label for="clientes_id">clientes id</label>
    <input type="text" class="form-control" name="clientes_id" value="{{ isset ($reservas->clientes_id)? $reservas->clientes_id:old('clientes_id') }}" id="clientes_id"> 
    <br>
    </div>

    <div class="form-group">

    <label for="vehiculos_id">vehiculos id</label>
    <input type="text" class="form-control" name="vehiculos_id"value="{{ isset ($reservas->vehiculos_id)? $reservas->vehiculos_id:old('vehiculos_id') }}" id="vehiculos_id"> 
    <br>
    </div>

    <input class="btn btn-primary" type="submit" value="{{ $modo }}">

    <a class="btn btn-success" href="{{ url('reservas/') }}" > Regresar </a>

    <br>