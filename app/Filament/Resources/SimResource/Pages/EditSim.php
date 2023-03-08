<?php

namespace App\Filament\Resources\SimResource\Pages;

use App\Filament\Resources\SimResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSim extends EditRecord
{
    protected static string $resource = SimResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
