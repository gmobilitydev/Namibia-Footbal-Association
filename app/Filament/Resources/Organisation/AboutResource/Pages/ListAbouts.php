<?php

namespace App\Filament\Resources\Organisation\AboutResource\Pages;

use App\Filament\Resources\Organisation\AboutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
