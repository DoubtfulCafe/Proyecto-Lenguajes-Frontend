@extends('master')

@section('content')
<div class="title-block">
  <h1 class="display-2 ">Asignaturas</h1>
  <a href="{{route('asignatura.crear')}}" class="btn btn-form">Crear</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo de Aula</th>
      <th scope="col">Requisito</th>
      <th scope="col">Secciones</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item['codigoAsignatura']}}</th>
      <td>{{$item['nombreAsignatura']}}</td>
      <td>{{$item['tipoAula']}}</td>
      <td>{{$item['asignaturaRequisito']}}</td>
      <td>{{$item['seccion']}}</td>
      <td><div class="container">
        <a href="{{route('asignatura.delete',$item['codigoAsignatura'])}}" class="btn btn-sm btn-danger">Eliminar</a>
        <a href="{{route('asignatura.editar',$item['codigoAsignatura'])}}" class="btn btn-sm btn-primary">Actualizar</a>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection