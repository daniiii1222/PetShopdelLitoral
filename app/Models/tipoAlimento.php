<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tipoAlimento extends Model

{
    protected $primaryKey = 'id';
  
    protected $fillable = [
        'nombreAnimal',
        'activo',
        
    ];
}