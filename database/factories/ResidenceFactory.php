<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Residence>
 */
class ResidenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'family_home' => 0,
            'guardians_home' => 1,
            'school_dormitory' => 1,
            'others_a' => $this->faker->state(),
            'public_transport' => 1,
            'family_vehicle' => 0,
            'car_pool' => 1,
            'services' => 1,
            'others_b' => $this->faker->sentence(),
            'question' => $this->faker->sentence()
        ];
    }
}
