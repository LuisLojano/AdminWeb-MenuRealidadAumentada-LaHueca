<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Text;
use MoonShine\Fields\Number;

/**
 * @extends ModelResource<Cliente>
 */
class ClienteResource extends ModelResource
{
    protected string $model = Cliente::class;

    protected string $title = 'Clientes';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Cédula', 'cedula'), 
                Text::make('Nombre', 'nombre'),
                Text::make('Apellido', 'apellido'),
                Text::make('Email', 'email'),
                Text::make('Celular', 'celular'),
                Text::make('Usuario', 'usuario'),
                Text::make('Contraseña', 'contraseña'),
            ]),
        ];
    }

    /**
     * @param Cliente $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'cedula' => ['required', 'string', 'max:20'],
            'nombre' => ['required', 'string', 'max:50'],
            'apellido' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100'],
            'celular' => ['required', 'string', 'max:20'],
            'usuario' => ['required', 'string', 'max:20'],
            'contraseña' => ['required', 'string', 'max:1000'],
        ];
    }
}
