<?php

namespace App\Filament\Resources\KependudukanResource\Pages;

use App\Filament\Resources\KependudukanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKependudukans extends ListRecords
{
    protected static string $resource = KependudukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
