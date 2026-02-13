<?php

namespace App\Filament\Resources\Personajes\Pages;

use App\Filament\Resources\Personajes\PersonajeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditPersonaje extends EditRecord
{
    protected static string $resource = PersonajeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
