@extends('master')

@section('content')
<div class="title-block">
  <h1 class="display-2 ">Aulas</h1>
  <a href="{{route('aula.crear')}}" class="btn btn-form">Crear</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código Aula</th>
      <th scope="col">Código Edificio</th>
      <th scope="col">Edificio Perteneciente</th>
      <th scope="col">Tipo Aula</th>
      <th scope="col">Capacidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item['codigoAula']}}</th>
      <td>{{$item['edificio']}}</td>
      <td>{{$item['tipoAula']}}</td>
      <td>{{$item['capacidad']}}</td>
      <td><div class="container">
        <form action="{{ route('aula.delete',$item['codigoAula']) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
      </form>
        <a href="{{route('aula.editar',$item['codigoAula'])}}" class="btn btn-sm btn-primary">Actualizar</a>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection