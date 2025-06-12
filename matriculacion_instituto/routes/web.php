<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportController;


Route::get('/export/matriculas/excel', [ExportController::class, 'exportExcelMatriculas']);
Route::get('/export/matriculas/pdf', [ExportController::class, 'exportPdfMatriculas']);

Route::get('/export/materias/excel', [ExportController::class, 'exportExcelMaterias']);
Route::get('/export/materias/pdf', [ExportController::class, 'exportPdfMaterias']);


Route::get('/export/estudiantes/excel', [ExportController::class, 'exportExcelEstudiantes']);
Route::get('/export/estudiantes/pdf', [ExportController::class, 'exportPdfEstudiantes']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', fn () => redirect('/estudiantes'));
 
Route::resource('estudiantes', EstudianteController::class);
Route::resource('materias', MateriaController::class);
Route::resource('matriculas', MatriculaController::class);


Route::get('/reportes/estudiantes', [EstudianteController::class,'reporte'])->name('estudiantes.reporte');
Route::get('/reportes/materias', [MateriaController::class,'reporte'])->name('materias.reporte');
Route::get('/reportes/matriculas', [MatriculaController::class,'reporte'])->name('matriculas.reporte');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
