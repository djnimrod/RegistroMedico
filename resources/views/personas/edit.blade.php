@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="card-header">
Editando {{$Persona->nombres}}
</div>
<div class="card-body">
<form action="{{route('persona.update',$Persona->id)}}" method= "POST">
@method('PUT')
      @csrf
      <div class="form-group">
           <label for="nombres">Nombres</label>
           <input type="text" class="form-control" id="nombres" aria-describedby="nombresHelp" placeholder="nombres" name="nombres" value="{{$Persona->nombres}}">
          <small id="nombresHelp" class="form-text text-muted">nombres de la persona a registrar.</small>
      </div>
      <div class="form-group">
           <label for="apellidos">Apellidos</label>
           <input type="text" class="form-control" id="apellidos" aria-describedby="apellidosHelp" placeholder="apellidos" name="apellidos" value="{{$Persona->apellidos}}">
          <small id="apellidosHelp" class="form-text text-muted">apellidos de la persona a registrar.</small>
      </div>
      <div class="form-group">
      <label for="clase">Sexo:</label>
      <div class="form-control h-auto">
      <input type="radio" name="sexo" id="sexo" value="masculino"
      {{  ($Persona->sexo === "masculino" ? ' checked' : '') }} > <span> Masculino</span>  <br>
      <input type="radio" name="sexo" id="sexo" value="femenino" {{  ($Persona->sexo === "femenino" ? ' checked' : '') }} > <span> Femenino </span><br>
      </div>
          <small id="sexoHelp" class="form-text text-muted">sexo de la persona a registrar.</small>

      </div>
      <div class="form-group">
           <label for="telefono">Telefono</label>
           <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" placeholder="telefono" name="telefono" value="{{$Persona->telefono}}">
          <small id="telefonoHelp" class="form-text text-muted">telefono de la persona a registrar.</small>
      </div>
      <div class="form-group">
           <label for="fechaNacimiento">Fecha de Nacimiento</label>
           <input type="date" class="form-control" id="fechaNacimiento" aria-describedby="fechaNacimientoHelp" placeholder="fecha de Nacimiento" name="fechaNacimiento" value="{{$Persona->fechaNacimiento}}">
          <small id="fechaNacimientoHelp" class="form-text text-muted">fecha de Nacimiento de la persona a registrar.</small>
      </div>
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelarpersona')}}">cancelar</a>
      <button class="btn btn-primary btn-sm" type="submit">guardar
      </button>
</form>
</div>
</div>
</div>

@endsection
