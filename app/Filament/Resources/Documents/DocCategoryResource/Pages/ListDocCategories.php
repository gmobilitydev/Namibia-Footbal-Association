<?php

namespace App\Filament\Resources\Documents\DocCategoryResource\Pages;

use App\Filament\Resources\Documents\DocCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDocCategories extends ListRecords
{
    protected static string $resource = DocCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
