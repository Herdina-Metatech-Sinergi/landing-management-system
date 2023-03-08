<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SimFeatureResource\Pages;
use App\Filament\Resources\SimFeatureResource\RelationManagers;
use App\Models\SimFeature;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SimFeatureResource extends Resource
{
    protected static ?string $model = SimFeature::class;

    protected static ?string $navigationGroup = 'SIM';
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Feature';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('sim_id')->relationship('sim', 'nama'),

                TextInput::make('nama')->required(),
                RichEditor::make('deskripsi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('sim.nama')->searchable()->sortable(),
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('deskripsi')->searchable()->sortable()->html()->wrap()->limit(100),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSimFeatures::route('/'),
            'create' => Pages\CreateSimFeature::route('/create'),
            'edit' => Pages\EditSimFeature::route('/{record}/edit'),
        ];
    }
}
