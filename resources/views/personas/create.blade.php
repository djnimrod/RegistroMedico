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
           <label for="persona">Descripcion</label>
           <input type="text" class="form-control" id="persona" aria-describedby="personaHelp" placeholder="persona" name="descripcion">
          <small id="personaHelp" class="form-text text-muted">nombre de la persona a registrar.</small>
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