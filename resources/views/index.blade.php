@extends('master')

@section('content')
<div class="title-block">
    <h1 class="display-2">Dashboard</h1>
</div>

<div class="container">
    <div class="row mb-4">
        <div class="card col border-primary" >
            <div class="card-header"><h2>Alumnos</h2></div>
            <div class="card-body text-primary">
              <h3 class="card-title">Hay un total de: <strong>{{$alumnoCount}}</strong> Alumnos</h3>
            </div>
          </div>
          <div class="card col border-secondary mx-2" >
            <div class="card-header"><h2>Edificios</h2></div>
            <div class="card-body text-secondary">
              <h3 class="card-title">Hay un total de: <strong>{{$edificioCount}}</strong> Edificios</h3>
              </div>
          </div>
          <div class="card col border-warning">
            <div class="card-header"><h2>Aulas</h2></div>
            <div class="card-body text-warning">
              <h3 class="card-title">Hay un total de: <strong>{{$aulaCount}}</strong> Aulas</h3>
            </div>
          </div>
          </div>
          
    </div>
    <div class="row">
        <div class="card border-success col-12">
            <div class="card-header"><h2>Secciones</h2></div>
            <div class="card-body text-success">
              <h5 class="card-title">Hay un total de: <strong>{{$seccionCount}}</strong> Secciones</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
</div>
@endsection