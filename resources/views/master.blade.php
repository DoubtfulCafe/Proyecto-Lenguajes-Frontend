<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-lKuw6zZhlE6tFOWxYQr5e0GGPzh/9vFVEBRrW8BfcSmftgG2r0exNCX2qQVdB+Ed" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>SimUNI</title>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row mx-auto my-auto">
            <nav id="sidebar" class="d-flex flex-column justify-content-center col-md-3 col-lg-2 sidebar">
                <div class="position-sticky">
                    <ul id="menu" class="nav flex-column">
                        <li class="nav-item my-2">
                            <a class="nav-link active" href="{{route('index')}}">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link active" href="{{route('alumno.all')}}">
                                Alumnos
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link active" href="{{route('asignatura.all')}}">
                                Asignaturas
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link active" href="{{route('edificio.all')}}">
                                Edificios
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link active" href="{{route('aula.all')}}">
                                Aulas
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link active" href="{{route('tipoAula.all')}}">
                                Tipos de Aula
                            </a>
                        </li>
                        <li class="nav-item my-2">
                            <a class="nav-link active" href="{{route('seccion.all')}}">
                                Secciones
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="content col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
