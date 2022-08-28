<?php

namespace App\Filament\Resources\Documents\DocCategoryResource\Pages;

use App\Filament\Resources\Documents\DocCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocCategory extends EditRecord
{
    protected static string $resource = DocCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
