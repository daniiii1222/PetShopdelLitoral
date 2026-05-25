<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAlimento extends Model

{
    protected $primaryKey = 'id';
    
    protected $table = 'tipoAlimentos';


    protected $fillable = [
        'nombreAnimal',
        'activo',
        
    ];
}