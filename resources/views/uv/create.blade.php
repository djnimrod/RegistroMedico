@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
<div class="card">
<div class="card-body">
<form action="{{route('uv.store')}}" method= "POST">
      @csrf
      <div class="form-group">
           <label for="uv">Descripcion</label>
           <input type="text" class="form-control" id="uv" aria-describedby="uvHelp" placeholder="uv" name="descripcion">
          <small id="uvHelp" class="form-text text-muted">nombre de la Uv a registrar.</small>
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