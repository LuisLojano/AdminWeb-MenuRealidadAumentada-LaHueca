<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VistaCompra extends Model
{
    protected $table = 'vistaCompra'; // Nombre de la vista en la base de datos
    public $timestamps = false; // Las vistas normalmente no tienen timestamps
    protected $primaryKey = 'id'; // Llave primaria de la vista
    protected $fillable = [
        'cedula',
        'nomapeClient',
        'estado_pago',
        'fecha',
        'metodo_pago',
        'producto',
        'costo',
        'cantidad',
        'total',
        'total_total',
        'tipo_entrega',
        'estado_producto',
    ];
}
