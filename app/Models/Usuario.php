<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
    'nombreRegistro',
    'correo',
    'telefono',
    'contraseña',
    'perfil_id',
    'estado',
    ];
}
