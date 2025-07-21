<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\VistaCompra;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Fields\Select;

/**
 * @extends ModelResource<VistaCompra>
 */
class VistaCompraResource extends ModelResource
{
    protected string $model = VistaCompra::class; // Modelo asociado
    protected string $title = 'Vista de Compras'; // Título del recurso

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(), // Campo ID
                Text::make('Cédula', 'cedula')->sortable(),
                Text::make('Cliente', 'nomapeClient')->sortable(),
                Text::make('Estado de Pago', 'estado_pago')->sortable(),
                Text::make('Fecha', 'fecha')->sortable(),
                Text::make('Método de Pago', 'metodo_pago')->sortable(),
                Text::make('Producto', 'producto')->sortable(),

                Text::make('Costo', 'costo', fn($item) => '$' . number_format((float) $item->costo, 2))
                    ->sortable(),

                Number::make('Cantidad', 'cantidad')->sortable(),

                Text::make('Total', 'total', fn($item) => '$' . number_format((float) $item->total, 2))
                    ->sortable(),

                Text::make('Total General', 'total_total', fn($item) => '$' . number_format((float) $item->total_total, 2))
                    ->sortable(),

                Text::make('Tipo de Entrega', 'tipo_entrega')->sortable(),

                Select::make('Estado del Producto', 'estado_producto')
                    ->options([
                        'Procesando' => 'Procesando',
                        'Listo' => 'Listo',
                        'Entregado' => 'Entregado',
                    ])
                    ->sortable(),
            ]),
        ];
    }

    /**
     * @param VistaCompra $item
     *
     * @return array<string, string[]|string>
     */
    public function rules(Model $item): array
    {
        return [
            'cedula' => ['required', 'string', 'max:10'],
            'nomapeClient' => ['required', 'string', 'max:255'],
            'estado_pago' => ['required', 'string', 'max:50'],
            'fecha' => ['required', 'date'],
            'metodo_pago' => ['required', 'string', 'max:255'],
            'producto' => ['required', 'string', 'max:255'],
            'costo' => ['required', 'numeric', 'min:0'],
            'cantidad' => ['required', 'integer', 'min:1'],
            'total' => ['required', 'numeric', 'min:0'],
            'total_total' => ['required', 'numeric', 'min:0'],
            'tipo_entrega' => ['required', 'string', 'max:50'],
            'estado_producto' => ['required', 'string', 'max:50'],
        ];
    }
}
