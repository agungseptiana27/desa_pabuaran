<?php

namespace App\Filament\Resources\GaleriDesaResource\Pages;

use App\Filament\Resources\GaleriDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditGaleriDesa extends EditRecord
{
    protected static string $resource = GaleriDesaResource::class;
    protected static ?string $title = 'Edit Galeri Desa';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();
        return $data;
    }
}