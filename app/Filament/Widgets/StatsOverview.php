<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    use InteractsWithPageFilters;
    
    
    protected function getStats(): array
    {

        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();
        
        $pemasukan = Transaction::incomes()
                        ->whereBetween('date_transaction', [$startDate, $endDate])
                        ->sum('amount');
        $pengeluaran = Transaction::expenses()
                        ->whereBetween('date_transaction', [$startDate, $endDate])
                        ->sum('amount');
        
        return [
            Stat::make('Total Pemasukan', 'Rp.'.' '.$pemasukan)
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Total Pengeluaran', 'Rp.'.' '.$pengeluaran)
                ->chart([17, 16, 14, 15, 14, 13, 12])
                ->color('danger'),
            Stat::make('Selisih', 'Rp.'. ($pemasukan - $pengeluaran))
                ->chart([15, 4, 10, 2, 12, 4, 12])
                ->color('warning'),
        ];
    }
}