<?php

namespace App\Filament\Resources\Campannas\Pages;

use App\Filament\Resources\Campannas\CampannaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCampannas extends ListRecords
{
    protected static string $resource = CampannaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
