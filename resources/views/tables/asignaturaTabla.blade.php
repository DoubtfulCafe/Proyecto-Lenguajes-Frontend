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
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Laboratorio</td>
      <td>MM111</td>
      <td>
        <ul>
          <li>0900</li>
          <li>0700</li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>
@endsection