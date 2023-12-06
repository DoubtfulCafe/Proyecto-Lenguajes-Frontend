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
            </div>
            <div class="my-3">
                <button class="btn btn-form" type="submit" >Crear!</button>    
            </div>
        </div>
    </form>
</div>
<script src="{{ asset('js/app.js')}}"></script>

@endsection