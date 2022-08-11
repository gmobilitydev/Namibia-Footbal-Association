<?php

namespace App\Filament\Resources\Vacancies\VacancyResource\Pages;

use App\Filament\Resources\Vacancies\VacancyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVacancy extends EditRecord
{
    protected static string $resource = VacancyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
