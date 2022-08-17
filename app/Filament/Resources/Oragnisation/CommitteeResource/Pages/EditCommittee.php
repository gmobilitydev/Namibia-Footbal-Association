<?php

namespace App\Filament\Resources\Oragnisation\CommitteeResource\Pages;

use App\Filament\Resources\Oragnisation\CommitteeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommittee extends EditRecord
{
    protected static string $resource = CommitteeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
