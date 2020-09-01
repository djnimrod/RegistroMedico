@extends('layouts.app')
@section('titulo','confirme la eliminacion')
@section('content')
<div class="container p-5">
<h1>Desea eliminar el registro {{$Localidad->name}}?</h1>
</div>
<form action="{{route('localidad.destroy',$Localidad->id)}}" method= "POST">
@method('DELETE')
      @csrf
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelarlocalidad')}}">cancelar</a>
      <button class="btn btn-danger btn-sm" type="submit">Eliminar
      </button>
</form>
{{$Localidad}}
@endsection
