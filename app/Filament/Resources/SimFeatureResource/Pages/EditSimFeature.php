<?php

namespace App\Filament\Resources\SimFeatureResource\Pages;

use App\Filament\Resources\SimFeatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSimFeature extends EditRecord
{
    protected static string $resource = SimFeatureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
