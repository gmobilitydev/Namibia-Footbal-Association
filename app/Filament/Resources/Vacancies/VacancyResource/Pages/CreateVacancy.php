<?php

namespace App\Filament\Resources\Vacancies\VacancyResource\Pages;

use App\Filament\Resources\Vacancies\VacancyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVacancy extends CreateRecord
{
    protected static string $resource = VacancyResource::class;
}
