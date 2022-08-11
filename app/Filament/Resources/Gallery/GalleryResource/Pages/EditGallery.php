<?php

namespace App\Filament\Resources\Gallery\GalleryResource\Pages;

use App\Filament\Resources\Gallery\GalleryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
