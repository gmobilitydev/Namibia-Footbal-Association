<?php

namespace App\Filament\Resources\Utilities\PartnersResource\Pages;

use App\Filament\Resources\Utilities\PartnersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartners extends EditRecord
{
    protected static string $resource = PartnersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
