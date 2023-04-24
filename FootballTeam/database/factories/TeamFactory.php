<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $existingUserIds = User::pluck('id')->toArray();
        return [
            'name'=>$this->faker->city(),
            'bio'=>$this->faker->sentence(),
            'user_id'=>$this->faker->randomElement($existingUserIds)
            
        ];
    }
}
