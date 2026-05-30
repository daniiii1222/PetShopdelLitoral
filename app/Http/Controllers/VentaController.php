<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
    if (Auth::user()->perfil_id != 2) {
        return redirect()->route('principal');
    }

    $ventas = Venta::with('usuario')
                   ->latest()
                   ->get();

    return view('vistaVenta', compact('ventas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $productos = Producto::all();

        
        return view('ventas.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'total' => 'required|numeric'
        ]);
        
        $venta = Venta::create([

           
            'usuario_id' => Auth::id(),

            'total' => $request->total,

            'estado' => 'completada',

            'fecha' => now(),

        ]);

        return redirect()
                ->route('ventas.index')
                ->with('mensaje', 'Venta registrada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
    
        $venta = Venta::with([
                    'usuario',
                    'detalles.producto'
                 ]);

        // retorna la vista detalle
        return view('ventas.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
