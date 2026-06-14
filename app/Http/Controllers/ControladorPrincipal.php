<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\VentaDetalle;
use Illuminate\Support\Facades\DB;

class ControladorPrincipal extends Controller
{
    public function inicio()
    {
        $productosMasVendidos = VentaDetalle::select(
            'producto_id',
            DB::raw('SUM(cantidad) as total_vendido')
        )
        ->with('producto')
        ->groupBy('producto_id')
        ->orderByDesc('total_vendido')
        ->take(9)
        ->get();

    return view('principal', compact('productosMasVendidos'));
    }

    public function nosotros()
    {
        return view('quienesSomos');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function terminos()
    {
        return view('terminosYUsos');
    }

    public function categorias()
    {
        return view('categorias');
    }

    public function comercializacion()
    {
        return view('comercializacion');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}