   @extends('master')
   <!-- FORMULARIO ALUMNO-->
   @section('content')
   <div class="form-block container">
       <form action="{{route('alumno.actualizar', $id->id)}}" method="post" class="row justify-content-center">
        @csrf
        @method("POST")
        <div class="col-md-6">
            <h1>Alumno</h1>
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input name="nombre" value="{{$data->nombre}}" type="text" class="form-control shadow-none" id="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido">Apellido</label>
                <input name="apellido" value="{{$data->apellido}}" type="text" class="form-control shadow-none" id="apellido">
            </div>
            <div class="my-3">
                <button class="btn btn-form" type="submit">Crear!</button>
            </div>
        </div>
    </form>
</div>

@endsection