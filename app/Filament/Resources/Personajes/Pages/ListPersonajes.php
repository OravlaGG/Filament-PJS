<?php

namespace App\Filament\Resources\Personajes\Pages;

use App\Filament\Resources\Personajes\PersonajeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPersonajes extends ListRecords
{
    protected static string $resource = PersonajeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
