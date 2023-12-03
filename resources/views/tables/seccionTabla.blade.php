@extends('master')

@section('content')
<div class="title-block">
  <h1 class="display-2">Secciones</h1>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Código Asignatura</th>
      <th scope="col">Código Aula</th>
      <th scope="col">Cupos</th>
      <th scope="col">Año</th>
      <th scope="col">Periodo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item->codigoseccion}}</th>
      <td>{{$item->codigoasignatura}}</td>
      <td>{{$item->codigoaula}}</td>
      <td>{{$item->cupos}}</td>
      <td>{{$item->anio}}</td>
      <td>{{$item->periodo}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection