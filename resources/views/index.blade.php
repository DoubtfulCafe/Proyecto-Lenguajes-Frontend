@extends('master')

@section('content')
<div class="title-block">
    <h1 class="display-2">Datos y Simulación</h1>
</div>

<div class="container">
    <div class="row mb-4">
        <div class="card col border-primary" >
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card col border-secondary mx-2" >
            <div class="card-header">Header</div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Secondary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card col border-danger">
            <div class="card-header">Header</div>
            <div class="card-body text-danger">
              <h5 class="card-title">Success card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          
    </div>
    <div class="row">
        <div class="card border-success col-12">
            <div class="card-header">Header</div>
            <div class="card-body text-success">
              <h5 class="card-title">Success card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
</div>
@endsection