<?php

namespace App\Filament\Widgets;

use App\Models\Album;
use App\Models\Gallery;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Albums', Album::count()),
            Card::make('Total Galleries', Gallery::count()),
            Card::make('Total News', '100'),
        ];
    }
}
