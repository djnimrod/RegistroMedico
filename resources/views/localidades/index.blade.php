@extends('layouts.app')
@section('css')
@endsection
@section('titulo','Localidad')
@section('content')
<div class="container">
@if(session('datosLocalidad'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('datosLocalidad')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif
@if(session('cancelarlocalidad'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{session('cancelarlocalidad')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif

<div class="card">
<div class="card-header">
Localidad 
<a href="{{route('localidad.create')}}" class="btn btn-outline-info btn-sm float-right">Agregar Nuevo</a>
</div>
<div class="card-body">
<div class = "table-responsive">
<table class="table text-center">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">Descripcion</th>
<th scope="col">Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($Localidad as $localidadItem)
<tr>
<td>{{$localidadItem->id}}</td>
<td>{{$localidadItem->name}}</td>
<td> 
<a class="btn btn-success btn-sm" href="{{route('localidad.edit',$localidadItem->id)}}">Editar</a>
<a class="btn btn-danger btn-sm" href="{{route('localidad.confirm',$localidadItem->id)}}">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
{{$Localidad->links()}}
</div>
</div>

@endsection

@section('js')
@endsection