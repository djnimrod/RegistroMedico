@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="card-body">
<form action="{{route('sintoma.store')}}" method= "POST">
@csrf
<div class="form-group">
     <label for="crearSintoma">Descripcion</label>
       <input type="text" class="form-control" id="crearSintoma" aria-describedby="sintomHelp" placeholder="sintoma">
     <small id="sintomaHelp" class="form-text text-muted">nombre del sintoma a registrar.</small>
</div>
<button class="btn btn-primary" type="submit">Enviar
</button>
</form>
</div>
</div>
</div>

@endsection
