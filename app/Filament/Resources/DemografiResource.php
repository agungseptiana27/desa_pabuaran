<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemografiResource\Pages;
use App\Filament\Resources\DemografiResource\RelationManagers;
use App\Models\Demografi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DemografiResource extends Resource
{
    protected static ?string $model = Demografi::class;

    protected static ?string $navigationLabel = 'Demografi Desa';

    protected static ?string $navigationGroup = 'Profil Desa';

    protected static ?int $navigationSort = 6;

    protected static ?string $navigationIcon = 'heroicon-s-map-pin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                ->label('Judul')
                ->default('Demografi Desa Pabuaran')
                ->required(),

                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(6),

                Forms\Components\Repeater::make('batas_wilayah')
                    ->label('Batas Wilayah')
                    ->schema([
                        Forms\Components\TextInput::make('arah')->label('Arah')->required(),
                        Forms\Components\TextInput::make('batas')->label('Batas')->required(),
                    ])
                    ->minItems(1)
                    ->createItemButtonLabel('Tambah Batas Wilayah'),

                Forms\Components\TextInput::make('map_embed')
                    ->label('Embed Map (iframe src Google Maps / OSM)')
                    ->helperText('Contoh: https://www.google.com/maps/embed?...'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            // Kolom Judul
            Tables\Columns\TextColumn::make('judul')
                ->label('Judul')
                ->searchable()
                ->sortable(),

            // Kolom Deskripsi (dibatasi supaya tidak kepanjangan)
            Tables\Columns\TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->limit(50) // tampil hanya 50 karakter
                ->toggleable(),

            // Kolom Batas Wilayah (ambil dari JSON repeater)
            Tables\Columns\TextColumn::make('batas_wilayah')
                ->label('Batas Wilayah')
                ->formatStateUsing(function ($state) {
                    if (is_array($state)) {
                        // contoh output: "Selatan: Kec. Cipeundeuy, Utara: Kec. Patokbeusi, ..."
                        return collect($state)->map(fn($item) => $item['arah'] . ': ' . $item['batas'])->implode(', ');
                    }
                    return '-';
                })
                ->toggleable(),

            // Kolom Map (tampilkan link atau iframe kecil)
            Tables\Columns\TextColumn::make('map_embed')
                ->label('Link Peta')
                ->url(fn($state) => $state, true) // bisa di-klik buka di tab baru
                ->limit(30)
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDemografis::route('/'),
            'create' => Pages\CreateDemografi::route('/create'),
            'edit' => Pages\EditDemografi::route('/{record}/edit'),
        ];
    }
}
