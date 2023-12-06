@extends('master')
    <!-- FORMULARIO AULA-->
    @section('content')
    <div class="form-block container">
        <form action="{{route('aula.nuevo')}}" method="post" class="row justify-content-center">
            @csrf
            @method("POST")
            <div class="col-md-6">
                <h1>Aula</h1>
                <div class="mb-3">
                    <label for="codigoAula">Codigo Aula</label>
                    <input name="codigoAula" type="text" class="form-control shadow-none" id="codigoAula">
                </div>
                <div class="mb-3">
                    <label for="codigoEdificio">Edificio</label>
                    <select class="shadow-none form-control" name="codigoEdificio" id="codigoEdificio">
                        @foreach ($edificios as $item)
                        <option value="{{$item['codigoEdificio']}}">{{$item['nombre']}}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="mb-3">
                    <label for="tipoAula">Tipo Aula</label>
                    <select class="shadow-none form-control" name="tipoAula" id="tipoAula">
                        @foreach ($data as $item)
                        <option value="{{$item['idTipoAula']}}">{{$item['descripcion']}}</option>
                        @endforeach
                    </select>      
                </div>
                <div class="mb-3">
                    <label for="capacidad">Capacidad</label>
                    <input name="capacidad" type="number" class="form-control shadow-none" id="capacidad">
                </div>
                <div class="my-3">
                    <button class="btn btn-form" type="submit">Crear!</button>    
                </div>
            </div>
        </form>
    </div>
    
    @endsection