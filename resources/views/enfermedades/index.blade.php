@extends('layouts.app')
@section('css')
@endsection
@section('titulo','Inicio')
@section('content')
<div class="container">
@if(session('datosenfermedad'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('datosenfermedad')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif
@if(session('cancelarenfermedad'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{session('cancelarenfermedad')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif

<div class="card">
<div class="card-header">
Enfermedades 
<a href="{{route('enfermedad.create')}}" class="btn btn-outline-info btn-sm float-right">Agregar Nuevo</a>
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
@foreach ($Enfermedad as $enfermedadItem)
<tr>
<td>{{$enfermedadItem->id}}</td>
<td>{{$enfermedadItem->name}}</td>
<td> 
<a class="btn btn-success btn-sm" href="{{route('enfermedad.edit',$enfermedadItem->id)}}">Editar</a>
<a class="btn btn-danger btn-sm" href="{{route('enfermedad.confirm',$enfermedadItem->id)}}">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
{{$Enfermedad->links()}}
</div>
</div>

@endsection

@section('js')
@endsection