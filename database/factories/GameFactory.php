<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'genre' => $this->faker->randomElement(['actions', 'sports', 'moba']),
            'platform' => $this->faker->randomElement(['pc', 'console', 'mobile']),
            'release_date' => $this->faker->date(),
        ];
    }
}