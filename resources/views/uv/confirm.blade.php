@extends('layouts.app')
@section('titulo','confirme la eliminacion')
@section('content')
<div class="container p-5">
<h1>Desea eliminar el registro {{$Uv->name}}?</h1>
</div>
<form action="{{route('uv.destroy',$Uv->id)}}" method= "POST">
@method('DELETE')
      @csrf
      <a class="btn btn-outline-secondary btn-sm" href="{{route('cancelaruv')}}">cancelar</a>
      <button class="btn btn-danger btn-sm" type="submit">Eliminar
      </button>
</form>
@endsection
