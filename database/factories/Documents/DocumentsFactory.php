<?php

namespace Database\Factories\Documents;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocumentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'title'=>fake()->title(),
            'description'=>fake()->realText(),
            'category'=>fake()->name(),
            'file'=>fake()->title()

        ];
    }
}
