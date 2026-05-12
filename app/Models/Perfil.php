<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $primaryKey = 'perfil_id';

    protected $fillable = [
        'perfil_nombre',
    ];
}
