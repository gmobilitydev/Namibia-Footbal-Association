<?php

namespace Database\Factories\Fixtures;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FixtureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $minutes = $this->faker->randomElement(range(90, 100));
        $seconds = $this->faker->randomElement(range(10, 60));
        $timePlayed = strval($minutes . ':' . $seconds);

        $homeNumber = $this->faker->randomElement([1, 12]);
        $awayNumber = $this->getRandomNumber(1, 12, array($homeNumber));

        $homeTeam = DB::table('teams')->where('id', '=', $homeNumber)->pluck('name');
        $awayTeam = DB::table('teams')->where('id', '=', $awayNumber)->pluck('name');;

        $date_now = new DateTime();
        $game_date = $this->faker->dateTimeBetween('+1 days', '+3 months');

        return [
            'name' => strval($homeTeam . ' vs ' . $awayTeam) , 
            'date' => $game_date,
            'time_played' => $timePlayed,
            'home_score' => $game_date > $date_now ? NULL : $this->faker->randomElement(range(0, 10)),
            'away_score' => $game_date > $date_now ? NULL : $this->faker->randomElement(range(0, 10)),
        ];
    }

    function getRandomNumber(int $min, int $max, array $exclude) {
        do {
            $n = mt_rand($min, $max);
        } while(in_array($n, $exclude));
    
        return $n;
    }
}
