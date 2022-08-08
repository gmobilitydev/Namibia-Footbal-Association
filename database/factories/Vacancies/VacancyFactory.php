<?php

namespace Database\Factories\Vacancies;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'job_title' =>fake()->jobTitle(),
            'job_description' =>fake()->realText($maxNbChats =200),
            'start_date'=>'2022-07-05',
            'end_date'=>fake()->date(),
            'status'=>'0'
        ];
    }
}
