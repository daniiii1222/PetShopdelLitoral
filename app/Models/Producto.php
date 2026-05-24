<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre_producto',
        'descripcion_producto',
        'precio_producto',
        'stock_producto',
        'categoria_id',
        'imagen_producto',
        'activo',
    ];

    protected $casts = [
        'precio_producto' => 'decimal:2',
        'stock_producto' => 'integer',
        'activo' => 'boolean',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
