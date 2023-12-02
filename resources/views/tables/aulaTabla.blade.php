@extends('master')

@section('content')
<div class="title-block">
  <h1 class="display-2 ">Aulas</h1>
  <a href="{{route('aula.crear')}}" class="btn btn-form">Crear</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Edificio Perteneciente</th>
      <th scope="col">Tipo Aula</th>
      <th scope="col">Capacidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>B1</td>
      <td>Laboratorio</td>
      <td>25</td>
    </tr>
  </tbody>
</table>
@endsection