<?php

declare(strict_types=1);

namespace App\Providers;

use App\Http\Resources\SaleResource;
use App\Http\Resources\SalesReportResource;
use App\MoonShine\Resources\ClienteResource;
use App\MoonShine\Resources\DatosGResource;
use App\MoonShine\Resources\DetalleCompraResource;
use App\MoonShine\Resources\FPagoResource;
use App\MoonShine\Resources\ProductJResource;
use App\MoonShine\Resources\ProductPResource;
use App\MoonShine\Resources\VistaCompraResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            // Menu de Administrador
            MenuGroup::make('Administrador', [
                MenuItem::make('Usuarios', new MoonShineUserResource()), // Menú para Usuarios
                MenuItem::make('Roles', new MoonShineUserRoleResource()), // Menú para Roles
                MenuItem::make('Datos Generales', new DatosGResource()), // Menú para Datos Generales
            ]),
            // Menu de Ventas
            MenuGroup::make('Reportes', [
                MenuItem::make('Reporte de Clientes', new ClienteResource()), // Menú para Ventas
                MenuItem::make('Reporte de Ventas', new VistaCompraResource()), // Menú para Reporte de Ventas
            ]),
            // Menu de Productos
            MenuGroup::make('Productos', [
                MenuItem::make('Platillos', new ProductPResource()), // Menú para Platillos
                MenuItem::make('Bebidas', new ProductJResource()), // Menú para Bebidas
            ]),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
