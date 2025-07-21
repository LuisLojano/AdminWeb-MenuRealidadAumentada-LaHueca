<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table = 'vistaCompra'; // Nombre correcto de la tabla en la base de datos

    protected $primaryKey = 'id'; // Llave primaria

    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

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
        'estado_producto'
    ];
}
