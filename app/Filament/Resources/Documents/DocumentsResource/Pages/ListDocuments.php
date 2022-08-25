<?php

namespace App\Filament\Resources\Documents\DocumentsResource\Pages;

use App\Filament\Resources\Documents\DocumentsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDocuments extends ListRecords
{
    protected static string $resource = DocumentsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
