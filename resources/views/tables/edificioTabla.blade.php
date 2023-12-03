@extends('master')

@section('content')
<div class="title-block">
  <h1 class="display-2">Edificios</h1>
  <a href="{{route('edificio.crear')}}" class="btn btn-form">Crear</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad de Aulas</th>
      <th scope="col">Aulas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item->codigoEdificio}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->cantidadAulas}}</td>
      <td>
      </td>
      <td><div class="container">
        <a href="{{route('edificio.delete',$item->codigoEdificio)}}" class="btn btn-sm btn-danger">Eliminar</a>
        <a href="{{route('edificio.update',$item->codigoEdificio)}}" class="btn btn-sm btn-primary">Actualizar</a>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection