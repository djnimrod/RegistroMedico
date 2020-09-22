@extends('layouts.app')
@section('titulo','confirme la eliminacion')
@section('content')
<div class="container p-5">
<h1>Desea eliminar el registro {{$Persona->nombres}}?</h1>
</div>
<div class="container p-5">
<form action="{{route('persona.destroy',$Persona->id)}}" method= "POST">
@method('DELETE')
      @csrf
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelar')}}">cancelar</a>
      <button class="btn btn-danger btn-sm" type="submit">Eliminar
      </button>
</form>
</div>
@endsection
