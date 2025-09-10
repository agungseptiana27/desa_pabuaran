<?php

namespace App\Filament\Resources\FullStrukturOrganisasiResource\Pages;

use App\Filament\Resources\FullStrukturOrganisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFullStrukturOrganisasis extends ListRecords
{
    protected static string $resource = FullStrukturOrganisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
