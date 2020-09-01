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
<a href="{{route('sintoma.create')}}" class="btn btn-outline-info btn-sm float-right">Agregar Nuevo</a>
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
@foreach ($Sintoma as $sintomaItem)
<tr>
<td>{{$sintomaItem->id}}</td>
<td>{{$sintomaItem->name}}</td>
<td> 
<a class="btn btn-success btn-sm" href="{{route('sintoma.edit',$sintomaItem->id)}}">Editar</a>
<a class="btn btn-danger btn-sm" href="{{route('sintoma.confirm',$sintomaItem->id)}}">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
{{$Sintoma->links()}}
</div>
</div>

@endsection

@section('js')
@endsection