@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
<div class="card">
<div class="card-body">
<form action="{{route('persona.store')}}" method= "POST">
      @csrf
      <div class="form-group">
           <label for="nombres">Nombres</label>
           <input type="text" class="form-control" id="nombres" aria-describedby="nombresHelp" placeholder="nombres" name="nombres">
          <small id="nombresHelp" class="form-text text-muted">nombres de la persona a registrar.</small>
      </div>
      <div class="form-group">
           <label for="apellidos">Apellidos</label>
           <input type="text" class="form-control" id="apellidos" aria-describedby="apellidosHelp" placeholder="apellidos" name="apellidos">
          <small id="apellidosHelp" class="form-text text-muted">apellidos de la persona a registrar.</small>
      </div>
      <div class="form-group">
      <label for="clase">Sexo:</label>
      <div class="form-control h-auto">
      <input type="radio" name="sexo" id="sexo" value="masculino" checked> <span> Masculino</span>  <br>
            <input type="radio" name="sexo" id="sexo" value="femenino"> <span> Femenino </span><br>
      </div>
          <small id="sexoHelp" class="form-text text-muted">sexo de la persona a registrar.</small>

      </div>
      <div class="form-group">
           <label for="telefono">Telefono</label>
           <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" placeholder="telefono" name="telefono">
          <small id="telefonoHelp" class="form-text text-muted">telefono de la persona a registrar.</small>
      </div>
      <div class="form-group">
           <label for="fechaNacimiento">Fecha de Nacimiento</label>
           <input type="date" class="form-control" id="fechaNacimiento" aria-describedby="fechaNacimientoHelp" placeholder="fecha de Nacimiento" name="fechaNacimiento">
          <small id="fechaNacimientoHelp" class="form-text text-muted">fecha de Nacimiento de la persona a registrar.</small>
      </div>
      <button class="btn btn-primary" type="submit">Enviar
      </button>
</form>
</div>
</div>
</div>

@endsection

@section('js')
@endsection