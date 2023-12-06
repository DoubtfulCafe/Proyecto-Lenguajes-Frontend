@extends('master')
<!-- FORMULARIO ASIGNATURA-->
@section('content')
<div class="form-block container">
    <form action="{{route('asignatura.update',$id)}}" method="post" id="myForm" class="row justify-content-center">
        @csrf
        @method("PUT")
        <div class="col-md-6">
            <h1>Asignatura</h1>
            <div class="mb-3">
                <label for="nombreAsignatura">Nombre Asignatura</label>
                <input type="text" value="{{$data->nombreAsignatura}}" name="nombre" class="form-control shadow-none" id="nombreAsignatura">
            </div>
            </div>
            <div class="my-3">
                <button class="btn btn-form" type="submit" >Actualizar!</button>    
            </div>
        </div>
    </form>
</div>
<script src="{{ asset('js/app.js')}}"></script>

@endsection