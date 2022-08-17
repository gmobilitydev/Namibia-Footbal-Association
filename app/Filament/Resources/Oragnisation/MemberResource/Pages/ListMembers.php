<?php

namespace App\Filament\Resources\Oragnisation\MemberResource\Pages;

use App\Filament\Resources\Oragnisation\MemberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembers extends ListRecords
{
    protected static string $resource = MemberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
