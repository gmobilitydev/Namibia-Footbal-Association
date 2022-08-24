<?php

namespace App\Filament\Resources\Team\TeamResource\Pages;

use App\Filament\Resources\Team\TeamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeams extends ListRecords
{
    protected static string $resource = TeamResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
