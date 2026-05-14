<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $fillable = [
    'nombreRegistro',
    'apellido',
    'correo',
    'telefono',
    'contrasenia',
    'perfil_id',
    'estado',
    ];
}
