@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="card-header">
Editando {{$Persona->nombre}}
</div>
<div class="card-body">
<form action="{{route('persona.update',$Persona->id)}}" method= "POST">
@method('PUT')
      @csrf
      <div class="form-group">
           <label for="persona">Descripcion</label>
           <input type="text" class="form-control" id="persona" aria-describedby="personaHelp" placeholder="persona" name="descripcion" 
           value = "{{$Persona->nombre}}">
          <small id="personaHelp" class="form-text text-muted">nombre de la persona a modificar.</small>
      </div>
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelar')}}">cancelar</a>
      <button class="btn btn-primary btn-sm" type="submit">guardar
      </button>
</form>
</div>
</div>
</div>

@endsection
