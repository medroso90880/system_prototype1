<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VocationalPlanning>
 */
class VocationalPlanningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            '1st' => $this->faker->sentence(),
            '2st' => $this->faker->sentence()
        ];
    }
}
