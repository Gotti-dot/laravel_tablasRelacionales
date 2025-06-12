<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportController;

Route::get('/export/socios/excel', [ExportController::class, 'exportExcelSocios']);
Route::get('/export/socios/pdf', [ExportController::class, 'exportPdfSocios']);

Route::get('/export/libros/excel', [ExportController::class, 'exportExcelLibros']);
Route::get('/export/libros/pdf', [ExportController::class, 'exportPdfLibros']);

Route::get('/export/prestamos/excel', [ExportController::class, 'exportExcelPrestamos']);
Route::get('/export/prestamos/pdf', [ExportController::class, 'exportPdfPrestamos']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', fn () => redirect('/socios'));

Route::resource('socios', SocioController::class);
Route::resource('libros', LibroController::class);
Route::resource('prestamos', PrestamoController::class);

Route::get('/reportes/socios', [SocioController::class,'reporte'])->name('socios.reporte');
Route::get('/reportes/libros', [LibroController::class,'reporte'])->name('libros.reporte');
Route::get('/reportes/prestamos', [PrestamoController::class,'reporte'])->name('prestamos.reporte');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas serán
| asignadas al grupo "web". ¡Haz algo increíble!
|
*/

Route::get('/', function () {
    return view('welcome');
});
