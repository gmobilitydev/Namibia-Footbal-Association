<?php

namespace App\Filament\Resources\Competitions\GroupResource\Pages;

use App\Filament\Resources\Competitions\GroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroup extends EditRecord
{
    protected static string $resource = GroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
