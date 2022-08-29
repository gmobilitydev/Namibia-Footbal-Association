<?php

namespace App\Filament\Resources\Utilities\HighlightResource\Pages;

use App\Filament\Resources\Utilities\HighlightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHighlights extends ListRecords
{
    protected static string $resource = HighlightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
