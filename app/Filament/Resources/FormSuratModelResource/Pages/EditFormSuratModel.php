<?php

namespace App\Filament\Resources\FormSuratModelResource\Pages;

use App\Filament\Resources\FormSuratModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormSuratModel extends EditRecord
{
    protected static string $resource = FormSuratModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
