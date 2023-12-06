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
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <th scope="row">{{$item['numeroCuenta']}}</th>
        <td>{{$item['nombre']}}</td>
        <td>{{$item['apellido']}}</td>
        <td><div class="container">
          <form action="{{ route('alumno.delete',$item['numeroCuenta']) }}" method="POST">
            @csrf
            @method('DELETE')
            <!-- Other form fields go here -->
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
          <a href="{{route('alumno.editar',$item['numeroCuenta'])}}" class="btn btn-sm btn-primary">Actualizar</a>
        </div></td> 
      </tr>        
      @endforeach
    </tbody>
</table>
@endsection