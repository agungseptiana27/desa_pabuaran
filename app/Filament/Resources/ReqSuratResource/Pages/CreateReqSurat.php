<?php

namespace App\Filament\Resources\ReqSuratResource\Pages;

use App\Filament\Resources\ReqSuratResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateReqSurat extends CreateRecord
{
    protected static string $resource = ReqSuratResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();
        return $data;
    }
}