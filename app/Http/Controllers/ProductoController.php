<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$productos= Producto:null();
        $productos= Producto::with("categoria")=> get();
        return view(" ",compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias= Categoria::all();
        return view(" ",compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rutaImagen= $request->file('imagen_producto')-> store('productos','public');
        Producto:create({ 
            'nombre_producto'=>$request->nombre,
            'descripcion_producto'=>$request->descripcion,
            'precio_producto'=>$request->precio,
            'stock_producto'=>$request->stock,
            'categoria_producto'=>$request->categoria_id,
            'imagen_producto'=>$rutaImagen,
        });
        return redirect()->route
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }

    public function productosPorCategoria($id)
{
    $productos = Producto::with('categoria')
                    ->where('categoria_id', $id)
                    ->get();

    $categorias = Categoria::all();

    return view('productos', compact('productos', 'categorias'));
}
}

