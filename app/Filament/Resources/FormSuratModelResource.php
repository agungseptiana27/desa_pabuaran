<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormSuratModelResource\Pages;
use App\Filament\Resources\FormSuratModelResource\RelationManagers;
use App\Models\FormSuratModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormSuratModelResource extends Resource
{
    protected static ?string $model = FormSuratModel::class;
    protected static ?string $navigationGroup = 'Surat';
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Select::make('form_id')
                ->label('Sub Surat Type')
                ->relationship('subSuratType', 'nama_sub_surat')
                ->required(),

            Forms\Components\TextInput::make('name')
                ->label('Nama Field')
                ->required(),

            Forms\Components\TextInput::make('label')
                ->label('Label Field')
                ->required(),

            Forms\Components\Select::make('type')
                ->label('Tipe Input')
                ->options([
                    'text' => 'Text',
                    'select' => 'Select',
                    'date' => 'Date',
                ])
                ->required(),

            Forms\Components\Toggle::make('required')
                ->label('Wajib diisi'),

            Forms\Components\KeyValue::make('options')
                ->label('Opsi (jika select)')
                ->keyLabel('Value')
                ->valueLabel('Label')
                ->visible(fn (callable $get) => $get('type') === 'select'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
                ->columns([
                Tables\Columns\TextColumn::make('subSuratType.nama_sub_surat')
                    ->label('Sub Surat Type')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Field')
                    ->searchable(),

                Tables\Columns\TextColumn::make('label')
                    ->label('Label Field'),

                Tables\Columns\BadgeColumn::make('type')
                    ->colors([
                        'primary' => 'text',
                        'success' => 'select',
                        'warning' => 'date',
                    ]),

                Tables\Columns\IconColumn::make('required')
                    ->boolean()
                    ->label('Wajib?'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListFormSuratModels::route('/'),
            'create' => Pages\CreateFormSuratModel::route('/create'),
            'edit' => Pages\EditFormSuratModel::route('/{record}/edit'),
        ];
    }
}
