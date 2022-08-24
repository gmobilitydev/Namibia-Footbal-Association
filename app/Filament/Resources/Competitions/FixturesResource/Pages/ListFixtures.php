<?php

namespace App\Filament\Resources\Competitions\FixturesResource\Pages;

use App\Filament\Resources\Competitions\FixturesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFixtures extends ListRecords
{
    protected static string $resource = FixturesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
