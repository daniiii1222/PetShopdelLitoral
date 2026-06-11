<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Venta;
use App\Models\Producto;
use App\Models\Contacto;

class AdminController extends Controller
{
    public function dashboard()
    {
        // TOTAL DE USUARIOS
        $usuarios = Usuario::count();

        // TOTAL DE PRODUCTOS
        $productos = Producto::count();

        // TOTAL DE PEDIDOS
        $ventas = Venta::count();

        // TOTAL DE CONSULTAS
        $consultas = Contacto::count();

        // ULTIMAS CONSULTAS
        $ultimasConsultas = Contacto::latest()->take(5)->get();

        // RETORNA LA VISTA
        return view('dashboard', compact(
            'usuarios',
            'productos',
            'ventas',
            'consultas',
            'ultimasConsultas'
        ));
    }
}