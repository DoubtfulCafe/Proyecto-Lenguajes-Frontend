@extends('master')
<!-- FORMULARIO ASIGNATURA-->
@section('content')
<div class="form-block container">
    <form action="{{route('asignatura.nuevo')}}" method="post" id="myForm" class="row justify-content-center">
        @csrf
        @method("POST") 
        <div class="col-md-6">
            <h1>Asignatura</h1>
            <div class="mb-3">
                <label for="codigoAsignatura">Codigo Asignatura</label>
                <input type="text" name="codigoAsignatura" class="form-control shadow-none" id="codigoAsignatura">
            </div>
            <div class="mb-3">
                <label for="nombreAsignatura">Nombre Asignatura</label>
                <input type="text" name="nombre" class="form-control shadow-none" id="nombreAsignatura">
            </div>
            <div class="mb-3">
                <label for="tipoAula">Tipo Aula</label>
                <select class="shadow-none form-control" name="tipoAula" id="tipoAula">
                    <option value="1">Tipo1</option>
                    <option value="2">Tipo2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="requisito">Requisito</label>
                <input type="text" class="form-control shadow-none" name="requisito" id="requisito">
            </div>
            <div class="mb-3">
                <div>
                    <label for="secciones">Secciones</label>
                    <select class="shadow-none form-control" multiple name="secciones[]" id="selection">
                        <option value="1">Seccion1</option>
                        <option value="2">Seccion2</option>
                        <option value="3">Seccion3</option>
                        <option value="4">Seccion4</option>
                    </select>
                </div>
                <div>
                    <ul class="list-group" id="seleccionados">
                    </ul>
                </div>
            </div>
            <div class="my-3">
                <button class="btn btn-form" type="submit" >Crear!</button>    
            </div>
        </div>
    </form>
</div>
<script src="{{ asset('js/app.js')}}"></script>

@endsection