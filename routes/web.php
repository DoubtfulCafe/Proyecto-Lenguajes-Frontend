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

//Route::get('/alumno', [AlumnoController::class, 'listar'])->name('alumno.all');
Route::delete('/eliminarAlumno/{id}', [AlumnoController::class, 'eliminar'])->name('alumno.delete');
Route::put('/actualizarAlumno/{id}', [AlumnoController::class, 'actualizar'])->name('alumno.update');
Route::get('/editarAlumno/{id}', [AlumnoController::class, 'editar'])->name('alumno.editar');
Route::post('/nuevoAlumno', [AlumnoController::class, 'nuevo'])->name('alumno.nuevo');


//RUTAS ASIGNATURA
Route::get('/crearAsignatura', function () {
    return view('forms.asignaturaForm');
})->name('asignatura.crear');

Route::get('/asignatura', function () {
    return view('tables.asignaturaTabla');
})->name('asignatura.all');

//Route::get('/asignatura', [AsignaturaController::class, 'listar'])->name('asignatura.all');
Route::delete('/eliminarAsignatura/{id}', [AsignaturaController::class, 'eliminar'])->name('asignatura.delete');
Route::put('/actualizarAsignatura/{id}', [AsignaturaController::class, 'actualizar'])->name('asignatura.update');
Route::get('/editarAsignatura/{id}', [AsignaturaController::class, 'editar'])->name('asignatura.editar');
Route::post('/nuevaAsignatura', [AsignaturaController::class, 'nuevo'])->name('asignatura.nuevo');


//RUTAS AULA
Route::get('/crearAula', function () {
    return view('forms.aulaForm');
})->name('aula.crear');

Route::get('/aula', function () {
    return view('tables.aulaTabla');
})->name('aula.all');
//Route::get('/aula', [AulaController::class, 'listar'])->name('aula.all');
Route::delete('/eliminarAula/{id}', [AulaController::class, 'eliminar'])->name('aula.delete');
Route::put('/actualizarAula/{id}', [AulaController::class, 'actualizar'])->name('aula.update');
Route::get('/editarAula/{id}', [AulaController::class, 'editar'])->name('aula.editar');
Route::post('/nuevoAula', [AulaController::class, 'nuevo'])->name('aula.nuevo');


//RUTAS EDIFICIO
Route::get('/crearEdificio', function () {
    return view('forms.edificioForm');
})->name('edificio.crear');

Route::get('/edificio', function () {
    return view('tables.edificioTabla');
})->name('edificio.all');
//Route::get('/edificio', [EdificioController::class, 'listar'])->name('edificio.all');
Route::delete('/eliminarEdificio/{id}', [EdificioController::class, 'eliminar'])->name('edificio.delete');
Route::put('/actualizarEdificio/{id}', [EdificioController::class, 'actualizar'])->name('edificio.update');
Route::get('/editarEdificio/{id}', [EdificioController::class, 'editar'])->name('edificio.editar');
Route::post('/nuevoEdificio', [EdificioController::class, 'nuevo'])->name('edificio.nuevo');


//RUTAS TIPO AULA
Route::get('/crearTipoAula', function () {
    return view('forms.tipoAulaForm');
})->name('tipoAula.crear');

Route::get('/tipoAula', function () {
    return view('tables.tipoAulaTabla');
})->name('tipoAula.all');
//Route::get('/tipoAula', [TipoAulaController::class, 'listar'])->name('tipoAula.all');
Route::delete('/eliminarTipoAula/{id}', [TipoAulaController::class, 'eliminar'])->name('tipoAula.delete');
Route::put('/actualizarTipoAula/{id}', [TipoAulaController::class, 'actualizar'])->name('tipoAula.update');
Route::get('/editarTipoAula/{id}', [TipoAulaController::class, 'editar'])->name('tipoAula.editar');
Route::post('/nuevoTipoAula', [TipoAulaController::class, 'nuevo'])->name('tipoAula.nuevo');


//RUTAS SECCION
Route::get('/seccion', function () {
    return view('tables.seccionTabla');
})->name('seccion.all');
//Route::get('/seccion', [SeccionController::class, 'listar'])->name('seccion.all');
Route::delete('/eliminarSeccion/{id}', [SeccionController::class, 'eliminar'])->name('seccion.delete');
Route::put('/actualizarSeccion/{id}', [SeccionController::class, 'actualizar'])->name('seccion.update');
