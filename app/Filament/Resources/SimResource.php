<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SimResource\Pages;
use App\Filament\Resources\SimResource\RelationManagers;
use App\Models\Sim;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SimResource extends Resource
{
    protected static ?string $model = Sim::class;

    protected static ?string $navigationGroup = 'SIM';
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Main';
    protected static ?int $navigationSort = 1;

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            //
            TextInput::make('nama')->required(),

            FileUpload::make('foto_device_mashup')->image()
                ->multiple(),
            FileUpload::make('foto_website_based')->image()
                ->multiple(),
            FileUpload::make('foto_mobile_app')->image()
                ->multiple(),
            TextInput::make('slogan')->required(),
            RichEditor::make('deskripsi'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama')->searchable()->sortable(),

                ViewColumn::make('foto_device_mashup')->view('customs.table.image-array'),
                ViewColumn::make('foto_website_based')->view('customs.table.image-array'),
                ViewColumn::make('foto_mobile_app')->view('customs.table.image-array'),

                TextColumn::make('slogan')->searchable()->sortable(),
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
            'index' => Pages\ListSims::route('/'),
            'create' => Pages\CreateSim::route('/create'),
            'edit' => Pages\EditSim::route('/{record}/edit'),
        ];
    }
}
