<?php

namespace App\Filament\Resources\Documents\DocumentsResource\Pages;

use App\Filament\Resources\Documents\DocumentsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocuments extends EditRecord
{
    protected static string $resource = DocumentsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
