<?php

namespace App\Filament\Resources\Organisation\MemberResource\Pages;

use App\Filament\Resources\Organisation\MemberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMember extends EditRecord
{
    protected static string $resource = MemberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
