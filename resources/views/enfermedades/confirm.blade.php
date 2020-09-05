@extends('layouts.app')
@section('titulo','confirme la eliminacion')
@section('content')
<div class="container p-5">
<h1>Desea eliminar el registro {{$Enfermedad->name}}?</h1>
</div>
<div class="container p-5">
<form action="{{route('enfermedad.destroy',$Enfermedad->id)}}" method= "POST">
@method('DELETE')
      @csrf
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelarenfermedad')}}">cancelar</a>
      <button class="btn btn-danger btn-sm" type="submit">Eliminar
      </button>
</form>
</div>
@endsection
