@extends('layouts.app')
@section('css')
@endsection
@section('titulo','Inicio')
@section('content')
<div class="container">
@if(session('datosuv'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('datosuv')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif
@if(session('cancelaruv'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{session('cancelaruv')}}
<button class="close" type="button" data-dismiss="alert" aria-label="close" >
<span aria-hidden="true">&times;</span></button>
</div>
@endif

<div class="card">
<div class="card-header">
Uv 
<a href="{{route('uv.create')}}" class="btn btn-outline-info btn-sm float-right">Agregar Nuevo</a>
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
@foreach ($Uv as $uvItem)
<tr>
<td>{{$uvItem->id}}</td>
<td>{{$uvItem->name}}</td>
<td> 
<a class="btn btn-success btn-sm" href="{{route('uv.edit',$uvItem->id)}}">Editar</a>
<a class="btn btn-danger btn-sm" href="{{route('uv.confirm',$uvItem->id)}}">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
{{$Uv->links()}}
</div>
</div>

@endsection

@section('js')
@endsection