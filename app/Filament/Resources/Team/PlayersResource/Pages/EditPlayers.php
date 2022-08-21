<?php

namespace App\Filament\Resources\Team\PlayersResource\Pages;

use App\Filament\Resources\Team\PlayersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayers extends EditRecord
{
    protected static string $resource = PlayersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
