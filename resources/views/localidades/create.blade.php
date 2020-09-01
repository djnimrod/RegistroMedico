@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
<div class="card">
<div class="card-body">
<form action="{{route('localidad.store')}}" method= "POST">
      @csrf
      <div class="form-group">
           <label for="localidad">Descripcion</label>
           <input type="text" class="form-control" id="localidad" aria-describedby="localidadHelp" placeholder="localidad" name="descripcion">
          <small id="localidadHelp" class="form-text text-muted">nombre de la localidad a registrar.</small>
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