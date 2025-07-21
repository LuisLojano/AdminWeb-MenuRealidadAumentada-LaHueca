<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosG extends Model
{
    use HasFactory;

    // Especificar los campos que pueden ser rellenados masivamente
    protected $fillable = [
        'nombre_empresa',
        'logo',
        'ruc',
        'correo',
        'telefono',
        'direccion',
    ];
}
