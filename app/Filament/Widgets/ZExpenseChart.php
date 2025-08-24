<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use App\Models\Transaction;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ZExpenseChart extends ChartWidget
{

    use InteractsWithPageFilters;
    
    protected static ?string $heading = 'Pengeluaran';

    protected static string $color = 'danger';

    protected function getData(): array
    {

        $startDate = $this->pageFilters['startDate'] ?? null;
        $endDate   = $this->pageFilters['endDate'] ?? null;

        if ($startDate) {
            $startDate = Carbon::parse($startDate)->startOfDay();
        } else {
            $startDate = Transaction::min('date_transaction')
                ? Carbon::parse(Transaction::min('date_transaction'))->startOfDay()
                : now()->startOfDay();
        }

        if ($endDate) {
            $endDate = Carbon::parse($endDate)->endOfDay();
        } else {
            $endDate = now()->endOfDay();
        }
            
        $data = Trend::query(Transaction::expenses())
        ->dateColumn('date_transaction')
        ->between(
            start: $startDate,
            end: $endDate,
        )
        ->perDay()
        ->sum('amount');

        return [
            'datasets' => [
                [
                    'label' => 'Pengeluaran perhari',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}