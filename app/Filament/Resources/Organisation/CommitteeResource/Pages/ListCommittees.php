<?php

namespace App\Filament\Resources\Organisation\CommitteeResource\Pages;

use App\Filament\Resources\Organisation\CommitteeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommittees extends ListRecords
{
    protected static string $resource = CommitteeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
