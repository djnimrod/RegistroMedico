@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="card-header">
Editando {{$Uv->name}}
</div>
<div class="card-body">
<form action="{{route('uv.update',$Uv->id)}}" method= "POST">
@method('PUT')
      @csrf
      <div class="form-group">
           <label for="uv">Descripcion</label>
           <input type="text" class="form-control" id="uv" aria-describedby="uvHelp" placeholder="uv" name="descripcion" 
           value={{$Uv->name}}>
          <small id="uvHelp" class="form-text text-muted">nombre de la Uv a modificar.</small>
      </div>
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelaruv')}}">cancelar</a>
      <button class="btn btn-primary btn-sm" type="submit">guardar
      </button>
</form>
</div>
</div>
</div>

@endsection
