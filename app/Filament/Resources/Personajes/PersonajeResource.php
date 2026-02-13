<?php

namespace App\Filament\Resources\Personajes;

use App\Filament\Resources\Personajes\Pages\CreatePersonaje;
use App\Filament\Resources\Personajes\Pages\EditPersonaje;
use App\Filament\Resources\Personajes\Pages\ListPersonajes;
use App\Filament\Resources\Personajes\Schemas\PersonajeForm;
use App\Filament\Resources\Personajes\Tables\PersonajesTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use \App\Models\Personaje;

class PersonajeResource extends Resource
{
    protected static ?string $model = Personaje::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PersonajeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PersonajesTable::configure($table);
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
            'index' => ListPersonajes::route('/'),
            'create' => CreatePersonaje::route('/create'),
            'edit' => EditPersonaje::route('/{record}/edit'),
        ];
    }

}
