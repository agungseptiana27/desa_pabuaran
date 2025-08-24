<?php

namespace App\Filament\Resources\GaleriDesaResource\Pages;

use App\Filament\Resources\GaleriDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateGaleriDesa extends CreateRecord
{
    protected static string $resource = GaleriDesaResource::class;
    protected static ?string $title = 'Tambah Galeri Desa';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    /**
     * Mutasi data sebelum disimpan ke database
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();
        return $data;
    }
}