@extends('master')
<!-- FORMULARIO TIPO AULA-->
@section('content')

    <div class="form-block container">
        <form action="{{route('tipoAula.actualizar',$id->id)}}" method="post" class="row justify-content-center">
            @csrf
            @method("POST")
            <div class="col-md-6">
                <h1>Tipo Aula</h1>
                <div class="mb-3">
                    <label for="Descripcion">Descripcion</label>
                    <input name="descripcion" type="text" class="form-control shadow-none" id="Descripcion">
                </div>
                <div class="my-3">
                    <button class="btn btn-form" type="submit">Crear!</button>    
                </div>
            </div>
        </form>
    </div>
    @endsection 