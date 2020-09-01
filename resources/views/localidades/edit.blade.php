@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="card-header">
Editando {{$Localidad->name}}
</div>
<div class="card-body">
<form action="{{route('localidad.update',$Localidad->id)}}" method= "POST">
@method('PUT')
      @csrf
      <div class="form-group">
           <label for="localidad">Descripcion</label>
           <input type="text" class="form-control" id="localidad" aria-describedby="localidadHelp" placeholder="localidad" name="descripcion" 
           value="{{$Localidad->name}}">
          <small id="localidadHelp" class="form-text text-muted">nombre de la localidad a modificar.</small>
      </div>
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelarlocalidad')}}">cancelar</a>
      <button class="btn btn-primary btn-sm" type="submit">guardar
      </button>
</form>
</div>
</div>
</div>

@endsection
