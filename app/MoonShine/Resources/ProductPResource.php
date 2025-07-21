<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductP;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Text;
use MoonShine\Fields\File;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Number;
use MoonShine\Fields\Image;

/**
 * @extends ModelResource<ProductP>
 */
class ProductPResource extends ModelResource
{
    protected string $model = ProductP::class;

    protected string $title = 'Platillos';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre', 'nombre'), 
                Number::make('Costo', 'costo') 
                    ->step(0.01), 
                Image::make('Imagen', 'imagen'),
                Text::make('URL Diseño 3D', 'url_diseno_3d'),
                Text::make('URL Diseño RA', 'url_diseno_ra'), 
                Switcher::make('Activo', 'activo')->default(true), 
            ]),
        ];
    }

    /**
     * @param ProductP $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
