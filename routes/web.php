<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\TipoAulaController;

//RUTA PRINCIPAL
Route::get('/', function () {
    return view('master');
});

//RUTAS ALUMNO
Route::get('/crearAlumno', function () {
    return view('alumnoForm');
});
Route::post('/nuevoAlumno', [AlumnoController::class, 'nuevo'])->name('alumno.nuevo');

//RUTAS ASIGNATURA
Route::get('/crearAsignatura', function () {
    return view('asignaturaForm');
});
Route::post('/nuevaAsignatura', [AsignaturaController::class, 'nuevo'])->name('asignatura.nuevo');

//RUTAS AULA
Route::get('/crearAula', function () {
    return view('aulaForm');
});
Route::post('/nuevoAula', [AulaController::class, 'nuevo'])->name('aula.nuevo');

//RUTAS EDIFICIO
Route::get('/crearEdificio', function () {
    return view('edificioForm');
});
Route::post('/nuevoEdificio', [EdificioController::class, 'nuevo'])->name('edificio.nuevo');

//RUTAS TIPO AULA
Route::get('/crearTipoAula', function () {
    return view('tipoAulaForm');
});
Route::post('/nuevoTipoAula', [TipoAulaController::class, 'nuevo'])->name('tipoAula.nuevo');