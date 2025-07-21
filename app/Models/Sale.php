<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductP;
use App\Models\ProductJ;

class Sale extends Model
{
    use HasFactory;

    // Define los campos que pueden ser asignados masivamente
    protected $fillable = [
        'customer_name', // Agrega este campo si manejas nombres de clientes
        'total',
        'pdf_path',
        'product_p_id', // Agrega este campo si está en la base de datos
        'product_j_id'  // Agrega este campo si está en la base de datos
    ];

    /**
     * Relación con el modelo ProductP (Platillos).
     * Asume que cada venta puede estar relacionada con un platillo.
     */
    public function platillo()
    {
        return $this->belongsTo(ProductP::class, 'product_p_id');
    }

    /**
     * Relación con el modelo ProductJ (Jugos).
     * Asume que cada venta puede estar relacionada con un jugo.
     */
    public function jugo()
    {
        return $this->belongsTo(ProductJ::class, 'product_j_id');
    }
}