@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="card-header">
Editando {{$Enfermedad->name}}
</div>
<div class="card-body">
<form action="{{route('enfermedad.update',$Enfermedad->id)}}" method= "POST">
@method('PUT')
      @csrf
      <div class="form-group">
           <label for="enfermedad">Descripcion</label>
           <input type="text" class="form-control" id="enfermedad" aria-describedby="enfermedadHelp" placeholder="enfermedad" name="descripcion" 
           value={{$Enfermedad->name}}>
          <small id="enfermedadHelp" class="form-text text-muted">nombre de la enfermedad a modificar.</small>
      </div>
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelarenfermedad')}}">cancelar</a>
      <button class="btn btn-primary btn-sm" type="submit">guardar
      </button>
</form>
</div>
</div>
</div>

@endsection
