<?php

namespace App\Filament\Resources\FullStrukturOrganisasiResource\Pages;

use App\Filament\Resources\FullStrukturOrganisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFullStrukturOrganisasi extends EditRecord
{
    protected static string $resource = FullStrukturOrganisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
