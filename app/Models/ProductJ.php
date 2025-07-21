<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductJ extends Model
{
    use HasFactory;
    protected $table = 'product_j_s';
    protected $fillable = [
        'nombre',
        'costo',
        'imagen',
        'url_diseno_3d',
        'url_diseno_ra',
        'activo',
    ];

    // Definir el tipo de dato booleano para el campo "activo"
    protected $casts = [
        'activo' => 'boolean',
    ];
}
