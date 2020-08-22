@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
<div class="card">
<div class="card-header">
Editando {{$Sintoma->name}}
</div>
<div class="card-body">
<form action="{{route('sintoma.update', $Sintoma->id)}}" method= "PUT">
      @csrf
      <div class="form-group">
           <label for="sintoma">Descripcion</label>
           <input type="text" class="form-control" id="sintoma" aria-describedby="sintomHelp" placeholder="sintoma" name="descripcion" 
           value={{$Sintoma->name}}>
          <small id="sintomaHelp" class="form-text text-muted">nombre del sintoma a modificar.</small>
      </div>
      <button class="btn btn-primary" type="submit">modificar
      </button>
      <button class="btn btn-primary" type="submit">modificar
      </button>
</form>
</div>
</div>
</div>

@endsection

@section('js')
@endsection