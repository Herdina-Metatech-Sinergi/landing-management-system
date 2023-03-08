<?php

namespace App\Filament\Resources\SimFeatureResource\Pages;

use App\Filament\Resources\SimFeatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSimFeatures extends ListRecords
{
    protected static string $resource = SimFeatureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
