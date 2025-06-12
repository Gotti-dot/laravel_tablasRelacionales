<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Venta;

class DashboardController extends Controller
{
    public function index()
    {
        $totalClientes = Cliente::count();
        $totalProductos = Producto::count();
        $totalVentas = Venta::count();

        return view('dashboard.index', compact('totalClientes', 'totalProductos', 'totalVentas'));
    }
}
