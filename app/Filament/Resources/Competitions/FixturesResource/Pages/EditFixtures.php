<?php

namespace App\Filament\Resources\Competitions\FixturesResource\Pages;

use App\Filament\Resources\Competitions\FixturesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFixtures extends EditRecord
{
    protected static string $resource = FixturesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
