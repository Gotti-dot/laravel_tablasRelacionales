<?php

namespace App\Http\Controllers;

use App\Exports\ClientesExport;
use App\Exports\ProductosExport;
use App\Exports\VentasExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ExportController extends Controller
{
    // Exportar Excel clientes
    public function exportExcelClientes()
    {
        return Excel::download(new ClientesExport, 'clientes.xlsx');
    }

    // Exportar PDF clientes
    public function exportPdfClientes()
    {
        $clientes = \App\Models\Cliente::all();
        $pdf = PDF::loadView('exports.clientes_pdf', compact('clientes'));
        return $pdf->download('clientes.pdf');
    }

    // Exportar Excel productos
    public function exportExcelProductos()
    {
        return Excel::download(new ProductosExport, 'productos.xlsx');
    }

    // Exportar PDF productos
    public function exportPdfProductos()
    {
        $productos = \App\Models\Producto::all();
        $pdf = PDF::loadView('exports.productos_pdf', compact('productos'));
        return $pdf->download('productos.pdf');
    }

    // Exportar Excel ventas
    public function exportExcelVentas()
    {
        return Excel::download(new VentasExport, 'ventas.xlsx');
    }

    // Exportar PDF ventas
    public function exportPdfVentas()
    {
        $ventas = \App\Models\Venta::with('cliente', 'producto')->get();
        $pdf = PDF::loadView('exports.ventas_pdf', compact('ventas'));
        return $pdf->download('ventas.pdf');
    }
}
