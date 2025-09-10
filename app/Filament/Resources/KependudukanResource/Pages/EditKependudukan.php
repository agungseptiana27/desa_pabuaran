<?php

namespace App\Filament\Resources\KependudukanResource\Pages;

use App\Filament\Resources\KependudukanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKependudukan extends EditRecord
{
    protected static string $resource = KependudukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
