<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seminar>
 */
class SeminarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title_g7' => $this->faker->sentence(),
            'title_g8' => $this->faker->sentence(),
            'title_g9' => $this->faker->sentence(),
            'title_g10' => $this->faker->sentence(),
            'title_g11' => $this->faker->sentence(),
            'title_g12' => $this->faker->sentence(),
            'sponsor_g7' => $this->faker->sentence(),
            'sponsor_g8' => $this->faker->sentence(),
            'sponsor_g9' => $this->faker->sentence(),
            'sponsor_g10' => $this->faker->sentence(),
            'sponsor_g11' => $this->faker->sentence(),
            'sponsor_g12' => $this->faker->sentence(),
            'scope_g7' => $this->faker->sentence(),
            'scope_g8' => $this->faker->sentence(),
            'scope_g9' => $this->faker->sentence(),
            'scope_g10' => $this->faker->sentence(),
            'scope_g11' => $this->faker->sentence(),
            'scope_g12' => $this->faker->sentence(),
            'nature_evolvement_b_g7' => $this->faker->sentence(),
            'nature_evolvement_b_g8' => $this->faker->sentence(),
            'nature_evolvement_b_g9' => $this->faker->sentence(),
            'nature_evolvement_b_g10' => $this->faker->sentence(),
            'nature_evolvement_b_g11' => $this->faker->sentence(),
            'nature_evolvement_b_g12' => $this->faker->sentence()
        ];
    }
}
