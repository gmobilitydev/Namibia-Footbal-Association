<?php

namespace App\Filament\Resources\Competitions\CompetitionResource\Pages;

use App\Filament\Resources\Competitions\CompetitionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompetition extends EditRecord
{
    protected static string $resource = CompetitionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
