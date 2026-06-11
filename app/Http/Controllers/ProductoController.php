<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\TipoAlimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
   
 

    public function index()
    {
        if (!Auth::check() || Auth::user()->perfil_id != 2) {

            $productos = Producto::where('activo', true)
                                ->with('categoria')
                                ->get();

            $categorias = Categoria::all();

            $tiposAlimentos = collect();

            return view('productos', compact(
                'productos',
                'categorias',
                'tiposAlimentos'
            ));
        }

        $productos = Producto::with('categoria')->get();

        return view('vistaGestionProductos', compact('productos'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();

        $tiposAlimentos = TipoAlimento::where('activo', true)->get();

        return view('registroProductos', compact(
            'categorias',
            'tiposAlimentos'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->rules(), $this->messages());

        $rutaImagen = $request->file('imagen')->store('productos', 'public');

        Producto::create([
            'nombre_producto' => $request->nombre,
            'descripcion_producto' => $request->descripcion,
            'precio_producto' => $request->precio,
            'stock_producto' => $request->stock,
            'categoria_id' => $request->categoria,
            'tipoAlimento_id' => 
            $request->categoria == 1
            ? $request->tipoAlimento
            : null,
            'imagen_producto' => $rutaImagen,
            'activo' => true,
        ]);

        return redirect()
            ->route('productos.index')
            ->with('success_message', 'Producto creado exitosamente');
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:100',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria' => 'required|exists:categorias,id',
            'tipoAlimento' => 'nullable|exists:tipoAlimentos,id',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.max' => 'El nombre no puede tener más de 100 caracteres',

            'descripcion.required' => 'La descripción es obligatoria',
            'descripcion.max' => 'La descripción no puede tener más de 255 caracteres',

            'precio.required' => 'El precio es obligatorio',

            'stock.required' => 'El stock es obligatorio',

            'categoria.required' => 'La categoría es obligatoria',

            'imagen.required' => 'La imagen es obligatoria',
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        $categorias = Categoria::all();

        $tiposAlimentos = TipoAlimento::where('activo', true)->get();

        return view('modificarProducto', compact(
            'producto',
            'categorias',
            'tiposAlimentos'
        ));
    }

   public function update(Request $request, $id)
    {
        $request->validate([

            'nombre' => 'required|string|max:100',

            'descripcion' => 'required|string|max:255',

            'precio' => 'required|numeric|min:0',

            'stock' => 'required|integer|min:0',

            'categoria' => 'required|exists:categorias,id',

            'tipoAlimento' => 'nullable|exists:tipoAlimentos,id',

            // IMPORTANTE:
            // nullable porque estamos modificando
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $producto = Producto::findOrFail($id);

        // Si seleccionó una nueva imagen
        if ($request->hasFile('imagen')) {

            $rutaImagen = $request->file('imagen')
                                ->store('productos', 'public');

            $producto->imagen_producto = $rutaImagen;
        }

        $producto->nombre_producto = $request->nombre;

        $producto->descripcion_producto = $request->descripcion;

        $producto->precio_producto = $request->precio;

        $producto->stock_producto = $request->stock;

        $producto->categoria_id = $request->categoria;

        $producto->tipoAlimento_id =
            $request->categoria == 1
                ? $request->tipoAlimento
                : null;

        $producto->save();

        return redirect()
            ->route('productos.index')
            ->with('success_message', 'Producto modificado correctamente');
    }
        

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        $producto->activo = false;

        $producto->save();

        return redirect()
            ->route('productos.index')
            ->with('success_message', 'Producto dado de baja correctamente');
    }
    

        public function activar($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update(['activo' => true]);
        return redirect()->route('productos.index')
        ->with('success', 'Producto activado correctamente.');
    }


    public function productosPorCategoria($id, Request $request)
    {
        $categoria = Categoria::findOrFail($id);

        $query = Producto::with('categoria')
                        ->where('categoria_id', $id)
                        ->where('activo', true);

        if ($request->filled('tipo')) {
            $query->where('tipoAlimento_id', $request->tipo);
        }

        $productos = $query->get();

        $categorias = Categoria::all();

        $tiposAlimentos = TipoAlimento::where('activo', true)
                                    ->get();

        return view('productos', compact(
            'productos',
            'categorias',
            'categoria',
            'tiposAlimentos'
        ));
    }
    
}