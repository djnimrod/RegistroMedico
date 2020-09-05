@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
<div class="card">
<div class="card-body">
<form action="{{route('enfermedad.store')}}" method= "POST">
      @csrf
      <div class="form-group">
           <label for="enfermedad">Descripcion</label>
           <input type="text" class="form-control" id="enfermedad" aria-describedby="EnfermedadHelp" placeholder="enfermedad" name="descripcion">
          <small id="enfermedadHelp" class="form-text text-muted">nombre de la enfermedad a registrar.</small>
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