<?php

namespace Database\Factories\Fixtures;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->unique()->randomElement([
                'African Stars', 'Blue Waters', 'Citizens',
                'Eleven Arrows', 'FC Civics', 'Life Fighters FC',
                'Mighty Gunners', 'Namibia FA', 'Orlando Pirates SC',
                'Ramblersna', 'Sandtos Football Club', 'SKW'
            ]),
            'slug'=> Str::slug($name),
            'country' => 'Namibia',
            'date_founded' => $this->faker->dateTimeBetween('-25 years', '-2 years'),
            'points'=> $this->faker->randomElement(range(5, 100)),
            'manager'=> $this->faker->name(),
            'logo' => $this->getImage($name)
        ];
    }

    public function getImage(String $imageName)
    {
        $filename = $imageName . '.jpg';
        $image = file_get_contents($filename);

        Storage::disk('public/assets/logos/squads')->get($filename);

        return $filename;
    }
}
