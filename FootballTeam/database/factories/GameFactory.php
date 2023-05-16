<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\game;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $existingTeamIds = Team::pluck('id')->toArray();
        return [
            'other_team'=>$this->faker->randomElement($existingTeamIds),
            'team_id'=>$this->faker->randomElement($existingTeamIds),
            'city'=>$this->faker->city(). ' stadium',
            'game_date'=>$this->faker->date(),
            'status'=> $this->faker->randomElement(['win','lose','draw','coming soon'])
        ];
    }
}
