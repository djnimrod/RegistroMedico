@extends('layouts.app')
@section('css')
@endsection
@section('titulo','Inicio')
@section('content')
<div class="container">
@if(session('datos'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('datos')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif
@if(session('cancelar'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{session('cancelar')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif

<div class="card">
<div class="card-header">
Sintomas 
<a href="{{route('persona.create')}}" class="btn btn-outline-info btn-sm float-right">Agregar Nuevo</a>
</div>
<div class="card-body">
<div class = "table-responsive">
<table class="table text-center">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Nombres</th>
<th scope="col">Apellidos</th>
<th scope="col">Sexo</th>
<th scope="col">Telefono</th>
<th scope="col">Fecha de Nacimiento</th>
</tr>
</thead>
<tbody>
@foreach ($Persona as $personaItem)
<tr>
<td>{{$personaItem->id}}</td>
<td>{{$personaItem->nombres}}</td>
<td>{{$personaItem->apellidos}}</td>
<td>{{$personaItem->sexo}}</td>
<td>{{$personaItem->telefono}}</td>
<td>{{$personaItem->fechaNacimiento}}</td>
<td> 
<a class="btn btn-success btn-sm" href="{{route('persona.edit',$personaItem->id)}}">Editar</a>
<a class="btn btn-danger btn-sm" href="{{route('persona.confirm',$personaItem->id)}}">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
{{$Persona->links()}}
</div>
</div>

@endsection

@section('js')
@endsection