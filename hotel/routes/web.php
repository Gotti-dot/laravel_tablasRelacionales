<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HuespedController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportController;

// Exportación de huéspedes
Route::get('/export/huespedes/excel', [ExportController::class, 'exportExcelHuespedes']);
Route::get('/export/huespedes/pdf', [ExportController::class, 'exportPdfHuespedes']);

// Exportación de habitaciones
Route::get('/export/habitaciones/excel', [ExportController::class, 'exportExcelHabitaciones']);
Route::get('/export/habitaciones/pdf', [ExportController::class, 'exportPdfHabitaciones']);

// Exportación de reservas
Route::get('/export/reservas/excel', [ExportController::class, 'exportExcelReservas']);
Route::get('/export/reservas/pdf', [ExportController::class, 'exportPdfReservas']);

// Ruta para el dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Redirección a la página principal
Route::get('/', fn () => redirect('/huespedes'));

// Definición de recursos para CRUD
Route::resource('huespedes', HuespedController::class);
Route::resource('habitaciones', HabitacionController::class);
Route::resource('reservas', ReservaController::class);

// Reportes
Route::get('/reportes/huespedes', [HuespedController::class, 'reporte'])->name('huespedes.reporte');
Route::get('/reportes/habitaciones', [HabitacionController::class, 'reporte'])->name('habitaciones.reporte');
Route::get('/reportes/reservas', [ReservaController::class, 'reporte'])->name('reservas.reporte');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider y todas ellas
| estarán asignadas al grupo "web".
|
*/

Route::get('/', function () {
    return view('welcome');
});
