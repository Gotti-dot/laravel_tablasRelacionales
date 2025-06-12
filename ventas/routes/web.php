<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExportController;

// Exportación de clientes
Route::get('/export/clientes/excel', [ExportController::class, 'exportExcelClientes']);
Route::get('/export/clientes/pdf', [ExportController::class, 'exportPdfClientes']);

// Exportación de productos
Route::get('/export/productos/excel', [ExportController::class, 'exportExcelProductos']);
Route::get('/export/productos/pdf', [ExportController::class, 'exportPdfProductos']);

// Exportación de ventas
Route::get('/export/ventas/excel', [ExportController::class, 'exportExcelVentas']);
Route::get('/export/ventas/pdf', [ExportController::class, 'exportPdfVentas']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', fn () => redirect('/clientes'));

Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('ventas', VentaController::class);

Route::get('/reportes/clientes', [ClienteController::class, 'reporte'])->name('clientes.reporte');
Route::get('/reportes/productos', [ProductoController::class, 'reporte'])->name('productos.reporte');
Route::get('/reportes/ventas', [VentaController::class, 'reporte'])->name('ventas.reporte');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación.
| Estas rutas son cargadas por RouteServiceProvider y estarán asignadas al "web" middleware.
| Crea algo increíble.
|
*/

Route::get('/', function () {
    return view('welcome');
});
