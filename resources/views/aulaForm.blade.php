@extends('master')
    <!-- FORMULARIO AULA-->
    <div class="form-block container">
        <form action="{{route('aula.nuevo')}}" method="post" class="row justify-content-center">
            @csrf
            @method("POST")
            <div class="col-md-6">
                <h1>Aula</h1>
                <div class="mb-3">
                    <label for="codigoEdificio">Código Edificio</label>
                    <input name="codigo" type="text" class="form-control shadow-none" id="codigoEdificio">
                </div>
                <div class="mb-3">
                <label for="tipoAula">Tipo Aula</label>
                    <select class="shadow-none form-control" name="tipoAula" id="tipoAula">
                        <option value="1">Tipo1</option>
                        <option value="2">Tipo2</option>
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
    