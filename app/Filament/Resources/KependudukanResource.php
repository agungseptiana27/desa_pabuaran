<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KependudukanResource\Pages;
use App\Filament\Resources\KependudukanResource\RelationManagers;
use App\Models\Kependudukan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KependudukanResource extends Resource
{
    protected static ?string $model = Kependudukan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('male')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('female')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('family_head')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('death')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('male')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('female')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('family_head')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('death')
                    ->numeric()
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKependudukans::route('/'),
            'create' => Pages\CreateKependudukan::route('/create'),
            'edit' => Pages\EditKependudukan::route('/{record}/edit'),
        ];
    }
}
