@extends('master')

@section('content')
<div class="title-block">
  <h1 class="display-2">Tipos de Aula</h1>
  <a href="{{route('tipoAula.crear')}}" class="btn btn-form">Crear</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laboratorio</td>
    </tr>
  </tbody>
</table>
@endsection