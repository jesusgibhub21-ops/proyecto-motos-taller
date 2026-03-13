<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Esto le permite a Laravel guardar estos campos desde el formulario
    protected $fillable = [
        'nombre', 
        'telefono', 
        'direccion',
        'marca_moto', 
        'modelo_moto', 
        'saldo'
    ];
}
