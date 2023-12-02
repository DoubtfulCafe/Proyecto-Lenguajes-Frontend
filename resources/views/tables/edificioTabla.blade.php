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
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>B2</td>
      <td>17</td>
      <td>
        <ul>
          <li>310</li>
          <li>420</li>
        </ul>
      </td>
    </tr>
  </tbody>
</table>
@endsection