<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportController;

Route::get('/export/inscripciones/excel', [ExportController::class, 'exportExcelInscripciones']);
Route::get('/export/inscripciones/pdf', [ExportController::class, 'exportPdfInscripciones']);

Route::get('/export/cursos/excel', [ExportController::class, 'exportExcelCursos']);
Route::get('/export/cursos/pdf', [ExportController::class, 'exportPdfCursos']);

Route::get('/export/estudiantes/excel', [ExportController::class, 'exportExcelEstudiantes']);
Route::get('/export/estudiantes/pdf', [ExportController::class, 'exportPdfEstudiantes']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', fn () => redirect('/estudiantes'));

Route::resource('estudiantes', EstudianteController::class);
Route::resource('cursos', CursoController::class);
Route::resource('inscripciones', InscripcionController::class);

Route::get('/reportes/estudiantes', [EstudianteController::class, 'reporte'])->name('estudiantes.reporte');
Route::get('/reportes/cursos', [CursoController::class, 'reporte'])->name('cursos.reporte');
Route::get('/reportes/inscripciones', [InscripcionController::class, 'reporte'])->name('inscripciones.reporte');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider y serán asignadas
| al middleware "web". ¡Haz que algo increíble suceda!
|
*/

Route::get('/', function () {
    return view('welcome');
});
