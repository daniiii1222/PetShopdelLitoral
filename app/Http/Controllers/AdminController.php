<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
//use App\Models\Pedido;
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
       // $pedidos = Pedido::count();

        // TOTAL DE CONSULTAS
        $consultas = Contacto::count();

        // ULTIMAS CONSULTAS
        $ultimasConsultas = Contacto::latest()->take(5)->get();

        // RETORNA LA VISTA
        return view('dashboard', compact(
            'usuarios',
            'productos',
            //'pedidos',
            'consultas',
            'ultimasConsultas'
        ));
    }
}