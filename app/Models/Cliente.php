<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // Nombre personalizado de la tabla
    protected $table = 'cliente';

    // Si usas una clave primaria diferente de "id"
    protected $primaryKey = 'id_Cliente';

    // Si la clave primaria no es un auto-incremento entero
    public $incrementing = true;

    // Si usas claves primarias no enteras, especifica el tipo
    protected $keyType = 'int';

    // Si no usas timestamps, desactívalos
    public $timestamps = false;

    // Aquí puedes agregar otras propiedades según sea necesario
}