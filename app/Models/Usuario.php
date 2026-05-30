<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    // Decirle a Laravel cuál es el campo de email y contraseña
    protected $primaryKey = 'id';
    
    public function getAuthPassword()
    {
    return $this->contrasenia;
    }

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
