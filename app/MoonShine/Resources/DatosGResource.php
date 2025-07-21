<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\DatosG;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;

/**
 * @extends ModelResource<DatosG>
 */
class DatosGResource extends ModelResource
{
    protected string $model = DatosG::class;

    protected string $title = 'Datos Generales';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make('ID')->sortable(),
                Text::make('Nombre Empresa', 'nombre_empresa')->sortable(),
                Image::make('Logo')->nullable(),
                Text::make('RUC', 'ruc')->sortable(),
                Text::make('Correo', 'correo')->sortable(),
                Text::make('Teléfono', 'telefono')->sortable(),
                Text::make('Dirección', 'direccion')->sortable(),
            ]),
        ];
    }

    /**
     * Deshabilitar permisos para ciertas acciones
     */
    public function permissions(): array
    {
        return [
            'create' => false,  // Deshabilita la acción de crear
            'view' => true,     // Permitir ver
            'update' => true,   // Permitir editar
            'delete' => true,   // Permitir eliminar
        ];
    }

    /**
     * @param DatosG $item
     *
     * @return array<string, string[]|string>
     */
    public function rules(Model $item): array
    {
        return [
            'ruc' => ['max:13'],
            'correo' => ['email'],
        ];
    }
}