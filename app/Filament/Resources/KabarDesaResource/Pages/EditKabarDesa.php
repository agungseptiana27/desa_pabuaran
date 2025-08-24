<?php

namespace App\Filament\Resources\KabarDesaResource\Pages;

use App\Filament\Resources\KabarDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditKabarDesa extends EditRecord
{
    protected static string $resource = KabarDesaResource::class;
    protected static ?string $title = 'Edit Kabar Desa';

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