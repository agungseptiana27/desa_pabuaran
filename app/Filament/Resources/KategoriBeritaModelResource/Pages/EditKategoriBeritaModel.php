<?php

namespace App\Filament\Resources\KategoriBeritaModelResource\Pages;

use App\Filament\Resources\KategoriBeritaModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriBeritaModel extends EditRecord
{
    protected static string $resource = KategoriBeritaModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
