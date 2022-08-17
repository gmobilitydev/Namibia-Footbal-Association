<?php

namespace App\Filament\Resources\Organisation\MemberResource\Pages;

use App\Filament\Resources\Organisation\MemberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;
}
