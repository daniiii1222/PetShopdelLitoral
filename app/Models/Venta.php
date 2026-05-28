<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

   
    protected $fillable = [

        'usuario_id',
        'total',
        'estado', 
        'fecha',
    ];

    protected $cast = [
        'fecha' => 'datetime', 
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function detalles()
    {
        //return $this->hasMany(DetalleVenta::class);
    }
}