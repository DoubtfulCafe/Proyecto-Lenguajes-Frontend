@extends('master')
    <!-- FORMULARIO EDIFICIO-->
    @section('content')
    <div class="form-block container">
        <form action="{{route('edificio.update',$id)}}" method="post" class="row justify-content-center">
            @csrf
            @method("PUT")
            <div class="col-md-6">
                <h1>Edificio</h1>
                <div class="mb-3">
                    <label for="nombreEdificio">Nombre Edificio</label>
                    <input name="nombre" type="text" value="{{$data['nombre']}}" class="form-control shadow-none" id="nombreEdificio">
                </div>
                <div class="mb-3">
                    <label for="cantidad">Cantidad AUlas</label>
                    <input name="cantidad" type="text" value="{{$data['cantidadAulas']}}" class="form-control shadow-none" id="cantidad">
                </div>
    
                <div class="my-3">
                    <button class="btn btn-form" type="submit">Actualizar!</button>    
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    
    @endsection