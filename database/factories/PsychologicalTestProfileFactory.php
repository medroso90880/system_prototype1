<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PsychologicalTestProfile>
 */
class PsychologicalTestProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'culture_fair' => $this->faker->sentence(),
            'olmat' => $this->faker->sentence(),
            'raw_score_a' => $this->faker->sentence(),
            'percentile_a' => $this->faker->sentence(),
            'description_a' => $this->faker->sentence(),
            'raw_score_b' => $this->faker->sentence(),
            'percentile_b' => $this->faker->sentence(),
            'description_b' => $this->faker->sentence(),
            'grade7' => $this->faker->sentence(),
            'grade8' => $this->faker->sentence(),
            'grade9' => $this->faker->sentence(),
            'grade10' => $this->faker->sentence(),
            'grade11' => $this->faker->sentence(),
            'grade12' => $this->faker->sentence(),
            'reserve' => 1,
            'less_intelligent' => 0,
            'affected_by_feelings' => 0,
            'phlegmatic' => 0,
            'obedient' => 1,
            'disregards_rules' => 0,
            'shy' => 1,
            'tough_minded' => 0,
            'sober' => 0,
            'vigorous' => 0,
            'self_assured' => 1,
            'group_dependent' => 0,
            'casual' => 1,
            'relaxed' => 1
        ];
    }
}
