<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use App\Models\Transaction;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ZIncomeChart extends ChartWidget
{
    use InteractsWithPageFilters;
    
    protected static ?string $heading = 'Pemasukan';

    protected static string $color = 'success';
    

    protected function getData(): array
    {

        $startDate = $this->pageFilters['startDate'] ?? null;
        $endDate   = $this->pageFilters['endDate'] ?? null;

        // ✅ Kalau tidak ada filter, ambil default
        if ($startDate) {
            $startDate = Carbon::parse($startDate)->startOfDay();
        } else {
            $startDate = Transaction::min('date_transaction')
                ? Carbon::parse(Transaction::min('date_transaction'))->startOfDay()
                : now()->startOfDay(); // fallback kalau belum ada data sama sekali
        }

        if ($endDate) {
            $endDate = Carbon::parse($endDate)->endOfDay();
        } else {
            $endDate = now()->endOfDay();
        }
        
        $data = Trend::query(Transaction::incomes())
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
                    'label' => 'pemasukan perhari',
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