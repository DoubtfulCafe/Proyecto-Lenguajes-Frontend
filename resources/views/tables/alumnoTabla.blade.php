@extends('master')

@section('content')
<div class="title-block">
  <h1 class="display-2">Alumnos</h1>
  <a href="{{route('alumno.crear')}}" class="btn btn-form">Crear</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col"># Cuenta</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
      </tr>
    </tbody>
</table>
@endsection