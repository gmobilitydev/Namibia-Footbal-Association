<?php

namespace Database\Factories\Fixtures;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['female', 'male']);

        return [
            'firstname'=>$this->faker->firstName($gender),
            'surname'=>$this->faker->lastName(),
            'DOB'=>$this->faker->dateTimeBetween('-65 years', '-25 years'),
            'gender' =>$gender,
            'positions'=>$this->faker->randomElement(['Goalkeeper', 'Midfielder', 'Defender', 'Forward']),
            'nationality' => 'Namibian',
            'height'=> $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1.4, $max = 2),
        ];
    }
}
