<?php

namespace App\Filament\Resources\Competitions\EventResource\Pages;

use App\Filament\Resources\Competitions\EventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
}
