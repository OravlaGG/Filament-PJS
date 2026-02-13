<?php

namespace App\Filament\Resources\Campannas\Pages;

use App\Filament\Resources\Campannas\CampannaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditCampanna extends EditRecord
{
    protected static string $resource = CampannaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
