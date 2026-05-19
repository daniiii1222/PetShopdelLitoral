<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    // Decirle a Laravel cuál es el campo de email y contraseña
    protected $primaryKey = 'id';
    
    public function getAuthIdentifierName() { return 'correo'; }
    public function getAuthPassword()       { return $this->contrasenia; }

    // También necesitás esto para que Auth sepa qué columna usar
    protected $authPasswordName = 'contrasenia';

    protected $fillable = [
        'nombreRegistro', 'apellido', 'correo',
        'telefono', 'contrasenia', 'perfil_id', 'estado',
    ];
}
