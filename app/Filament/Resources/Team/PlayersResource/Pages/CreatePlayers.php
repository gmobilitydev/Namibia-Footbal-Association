<?php

namespace App\Filament\Resources\Team\PlayersResource\Pages;

use App\Filament\Resources\Team\PlayersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePlayers extends CreateRecord
{
    protected static string $resource = PlayersResource::class;
}
