@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="card-header">
Editando {{$Sintoma->name}}
</div>
<div class="card-body">
<form action="{{route('sintoma.update',$Sintoma->id)}}" method= "POST">
@method('PUT')
      @csrf
      <div class="form-group">
           <label for="sintoma">Descripcion</label>
           <input type="text" class="form-control" id="sintoma" aria-describedby="sintomaHelp" placeholder="sintoma" name="descripcion" 
           value={{$Sintoma->name}}>
          <small id="sintomaHelp" class="form-text text-muted">nombre del sintoma a modificar.</small>
      </div>
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelar')}}">cancelar</a>
      <button class="btn btn-primary btn-sm" type="submit">guardar
      </button>
</form>
</div>
</div>
</div>

@endsection
