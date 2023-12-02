<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\TipoAulaController;

//RUTA PRINCIPAL
Route::get('/', function () {
    return view('index');
})->name('index');

//RUTAS ALUMNO
Route::get('/crearAlumno', function () {
    return view('forms.alumnoForm');
})->name('alumno.crear');

Route::get('/alumno', function () {
    return view('tables.alumnoTabla');
})->name('alumno.all');

Route::post('/nuevoAlumno', [AlumnoController::class, 'nuevo'])->name('alumno.nuevo');

//RUTAS ASIGNATURA
Route::get('/crearAsignatura', function () {
    return view('forms.asignaturaForm');
})->name('asignatura.crear');

Route::get('/asignatura', function () {
    return view('tables.asignaturaTabla');
})->name('asignatura.all');

Route::post('/nuevaAsignatura', [AsignaturaController::class, 'nuevo'])->name('asignatura.nuevo');

//RUTAS AULA
Route::get('/crearAula', function () {
    return view('forms.aulaForm');
})->name('aula.crear');

Route::get('/aula', function () {
    return view('tables.aulaTabla');
})->name('aula.all');

Route::post('/nuevoAula', [AulaController::class, 'nuevo'])->name('aula.nuevo');

//RUTAS EDIFICIO
Route::get('/crearEdificio', function () {
    return view('forms.edificioForm');
})->name('edificio.crear');

Route::get('/edificio', function () {
    return view('tables.edificioTabla');
})->name('edificio.all');

Route::post('/nuevoEdificio', [EdificioController::class, 'nuevo'])->name('edificio.nuevo');

//RUTAS TIPO AULA
Route::get('/crearTipoAula', function () {
    return view('forms.tipoAulaForm');
})->name('tipoAula.crear');

Route::get('/tipoAula', function () {
    return view('tables.tipoAulaTabla');
})->name('tipoAula.all');

Route::post('/nuevoTipoAula', [TipoAulaController::class, 'nuevo'])->name('tipoAula.nuevo');