<?php

namespace App\Filament\Resources\Team\PlayersResource\Pages;

use App\Filament\Resources\Team\PlayersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayers extends ListRecords
{
    protected static string $resource = PlayersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
