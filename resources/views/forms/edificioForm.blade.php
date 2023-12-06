@extends('master')
    <!-- FORMULARIO EDIFICIO-->
    @section('content')
    <div class="form-block container">
        <form action="{{route('edificio.nuevo')}}" method="post" class="row justify-content-center">
            @csrf 
            @method("POST")
            <div class="col-md-6">
                <h1>Edificio</h1>
                <div class="mb-3">
                    <label for="codigoEdificio">Código Edificio</label>
                    <input name="codigoEdificio" type="text" class="form-control shadow-none" id="codigoEdificio">
                </div>
                <div class="mb-3">
                    <label for="nombreEdificio">Nombre Edificio</label>
                    <input name="nombre" type="text" class="form-control shadow-none" id="nombreEdificio">
                </div>
                <div class="mb-3 ">
                    <label for="cantidadAula">Cantidad Aulas</label>
                    <input name="cantidad" type="text" class="form-control shadow-none" id="cantidadAula">
                </div>
                <div class="my-3">
                    <button class="btn btn-form" type="submit">Crear!</button>    
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    
    @endsection