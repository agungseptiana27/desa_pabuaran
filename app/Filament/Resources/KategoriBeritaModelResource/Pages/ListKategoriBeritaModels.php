<?php

namespace App\Filament\Resources\KategoriBeritaModelResource\Pages;

use App\Filament\Resources\KategoriBeritaModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriBeritaModels extends ListRecords
{
    protected static string $resource = KategoriBeritaModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
