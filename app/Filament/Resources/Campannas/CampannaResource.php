<?php

namespace App\Filament\Resources\Campannas;

use App\Filament\Resources\Campannas\Pages\CreateCampanna;
use App\Filament\Resources\Campannas\Pages\EditCampanna;
use App\Filament\Resources\Campannas\Pages\ListCampannas;
use App\Filament\Resources\Campannas\Schemas\CampannaForm;
use App\Filament\Resources\Campannas\Tables\CampannasTable;
use BackedEnum;
use \App\Models\Campanna;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CampannaResource extends Resource
{
    protected static ?string $model = Campanna::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CampannaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CampannasTable::configure($table);
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
            'index' => ListCampannas::route('/'),
            'create' => CreateCampanna::route('/create'),
            'edit' => EditCampanna::route('/{record}/edit'),
        ];
    }


}
