<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});
Route::get('/crearAlumno', function () {
    return view('alumnoForm');
});
Route::get('/crearAsignatura', function () {
    return view('asignaturaForm');
});
Route::get('/crearAula', function () {
    return view('aulaForm');
});
Route::get('/crearEdificio', function () {
    return view('edificioForm');
});
Route::get('/crearTipoAula', function () {
    return view('tipoAulaForm');
});