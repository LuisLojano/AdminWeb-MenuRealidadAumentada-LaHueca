<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Pages\Page;
use MoonShine\Decorations\Block;
use App\Models\ProductP;
use App\Models\ProductJ;
use App\Models\User;

class Dashboard extends Page
{
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Inicio';
    }
    
    public function components(): array
    {
        $platillosCount = ProductP::count();
        $jugosCount = ProductJ::count();

        return [
            Block::make([
                view('dashboard-counts', compact('platillosCount', 'jugosCount'))
            ])
        ];
    }
}