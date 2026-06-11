<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use App\Models\VentaDetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Obtiene el carrito activo del usuario
     */
    private function obtenerCarrito()
    {
        return Venta::firstOrCreate(
            [
                'usuario_id' => Auth::id(),
                'estado' => 'pendiente'
            ],
            [
                'total' => 0
            ]
        );
    }

    /**
     * Recalcula el total del carrito
     */
    private function recalcularTotal(Venta $carrito)
    {
        $total = $carrito->detalles()->sum('subtotal');

        $carrito->total = $total;

        $carrito->save();

        [
            'calculado' => $total,
            'guardado' => $carrito->fresh()->total
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carrito = $this->obtenerCarrito();

        $items = $carrito->detalles()
                         ->with('producto')
                         ->get();

        return view('carrito.index', compact('carrito', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all();

        return view('carrito.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $producto = Producto::findOrFail($request->producto_id);
        
        $carrito = $this->obtenerCarrito();
        
        $item = $carrito->detalles()
                        ->where('producto_id', $producto->id)
                        ->first();
   
        if ($item) {

            $item->cantidad += $request->cantidad;

            $item->subtotal =
                $item->cantidad * $item->precio_unitario;

            $item->save();

        } else {

            VentaDetalle::create([
                'venta_id' => $carrito->id,
                'producto_id' => $producto->id,
                'cantidad' => $request->cantidad,
                'precio_unitario' => $producto->precio_producto,
                'subtotal' => $producto->precio_producto * $request->cantidad
            ]);
            
        }

        $this->recalcularTotal($carrito);

       return back()->with('carritoAbierto', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = VentaDetalle::with('producto')
                            ->findOrFail($id);

        return view('carrito.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carrito = $this->obtenerCarrito();

        $carrito->detalles()
                ->where('id', $id)
                ->delete();

        $this->recalcularTotal($carrito);

        return redirect()
                ->route('carrito.index')
                ->with('mensaje', 'Producto eliminado');
    }

    /**
     * Confirmar compra
     */
    public function confirmar()
    {
        $carrito = $this->obtenerCarrito();

        if ($carrito->detalles()->count() == 0) {

            return back()->with(
                'error',
                'El carrito está vacío'
            );
        }

        foreach ($carrito->detalles as $detalle) {

            $producto = $detalle->producto;

            $producto->stock_producto -= $detalle->cantidad;

            $producto->save();
        }

        $carrito->update([
            'estado' => 'completada',
            'fecha' => now()
        ]);

        return redirect()
                ->route('ventas.index')
                ->with(
                    'mensaje',
                    'Compra realizada correctamente'
                );
    }
}