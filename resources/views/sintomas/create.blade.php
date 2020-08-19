@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
<div class="card">
<div class="card-body">
<form action="{{route('sintoma.store')}}" method= "POST">
      @csrf
      <div class="form-group">
           <label for="sintoma">Descripcion</label>
           <input type="text" class="form-control" id="sintoma" aria-describedby="sintomHelp" placeholder="sintoma" name="descripcion">
          <small id="sintomaHelp" class="form-text text-muted">nombre del sintoma a registrar.</small>
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