<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Number;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            BaseWidget\Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
            BaseWidget\Stat::make('Order Processing', Order::query()->where('status', 'processing')->count()),
            BaseWidget\Stat::make('Order Shipped', Order::query()->where('status', 'shipped')->count()),
            BaseWidget\Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total'), 'NPR')),
        ];
    }
}
