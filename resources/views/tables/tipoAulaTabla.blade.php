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
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item['idTipoAula']}}</th>
      <td>{{$item['descripcion']}}</td>
      <td><div class="container">
        <form action="{{ route('tipoAula.delete',$item['idTipoAula']) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
      </form>
        <a href="{{route('tipoAula.editar',$item['idTipoAula'])}}" class="btn btn-sm btn-primary">Actualizar</a>
      </div></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection