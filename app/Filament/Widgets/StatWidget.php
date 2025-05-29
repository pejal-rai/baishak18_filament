<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Categories', Category::count()),
            Stat::make('Total Articles', Article::count()),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
