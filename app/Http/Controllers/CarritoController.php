<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use App\Models\VentaDetalle;
use Illuminate\Http\Request;
use App\Http\Requests\FinalizarCompraRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

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

    
    public function index()
    {
        $carrito = $this->obtenerCarrito();

        $items = $carrito->detalles()
                         ->with('producto')
                         ->get();

        return view('carrito.index', compact('carrito', 'items'));
    }


    public function create()
    {
        $productos = Producto::all();

        return view('carrito.create', compact('productos'));
    }

    
    public function store(Request $request)
    {
        
         if (!Auth::check()) {
            return redirect()->back()
            ->with('alerta_login', 'Debés iniciar sesión para agregar productos al carrito.');
        }

        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $producto = Producto::findOrFail($request->producto_id);
        
        if ($producto->stock_producto <= 0) {
        return back()->with('error', 'Este producto no tiene stock disponible.');
        }

        $carrito = $this->obtenerCarrito();
        
        $item = $carrito->detalles()
                        ->where('producto_id', $producto->id)
                        ->first();

        $cantidadActual = $item ? $item->cantidad : 0;
        $cantidadDeseada = $cantidadActual + $request->cantidad;

        if ($cantidadDeseada > $producto->stock_producto) {
            return back()->with('error', "No hay suficiente stock disponible. Quedan {$producto->stock_producto} unidades en total.");
        }

        if ($item) {
            $item->cantidad = $cantidadDeseada;
            $item->subtotal = $item->cantidad * $item->precio_unitario;
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


    public function show(string $id)
    {
        $item = VentaDetalle::with('producto')
                            ->findOrFail($id);

        return view('carrito.show', compact('item'));
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
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
    public function confirmar(FinalizarCompraRequest $request)
    {

        $carrito = $this->obtenerCarrito();

           $usuario = Usuario::find(Auth::id());


            $usuario->direccion = $request->direccion;
            $usuario->ciudad = $request->ciudad;
            $usuario->provincia = $request->provincia;
            $usuario->codigo_postal = $request->codigo_postal;

            $usuario->save();

    

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
                ->route('carrito.finalizarCompra')
                ->with(
                    'mensaje',
                    'Compra realizada correctamente'
                );
    }

    public function checkout()
    {
        return view('carrito.finalizarCompra');
    }
}