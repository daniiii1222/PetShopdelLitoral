<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\TipoAlimento;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        $categorias = Categoria::all();

        return view('productos', compact('productos', 'categorias'));
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

   use App\Models\TipoAlimento;

    public function productosPorCategoria($id)
    {
        $categoria = Categoria::findOrFail($id);

        $query = Producto::with('categoria')
            ->where('categoria_id', $id);

        // FILTRO POR TIPO DE ALIMENTO
        if(request()->has('tipo')) {
            $query->where('tipoAlimento_id', request('tipo'));
        }

        $productos = $query->get();

        $categorias = Categoria::all();

        // SUBCATEGORIAS
        $tiposAlimentos = TipoAlimento::where('categoria_id', $id)
            ->where('activo', true)
            ->get();

        return view('productos', compact(
            'productos',
            'categorias',
            'categoria',
            'tiposAlimentos'
        ));
    }
    
}