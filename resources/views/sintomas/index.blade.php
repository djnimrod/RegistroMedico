@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
<div class="card">

<div>
{{$datos}} data
</div>


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
<a class="btn btn-danger btn-sm" href="{{route('sintoma.destroy',$sintomaItem->id)}}">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
</div>
</div>

@endsection

@section('js')
@endsection