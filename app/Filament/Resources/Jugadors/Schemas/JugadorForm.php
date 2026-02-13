<?php

namespace App\Filament\Resources\Jugadors\Schemas;

use Filament\Forms;

class JugadorForm
{
    public static function schema(): array
    {
        return [
            Forms\Components\Section::make('Datos del jugador')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('nombre')
                        ->label('Nombre')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\Select::make('sexo')
                        ->label('Sexo')
                        ->options([
                            1 => 'Hombre',
                            2 => 'Mujer',
                            3 => 'Otro',
                        ])
                        ->required(),

                    Forms\Components\Textarea::make('descripcion')
                        ->label('Descripción')
                        ->columnSpanFull()
                        ->rows(5)
                        ->required(),
                ]),
        ];
    }
}
