<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentsSelfAssessment>
 */
class StudentsSelfAssessmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'physical_well_being' => 1,
            'mental_comprehension' => 0,
            'speech_english' => 0,
            'speech_filpino' => 0,
            'written_communication_skills' => 0,
            'personality' => 1,
            'character' => 1,
            'general_make_up' => $this->faker->sentence(),
            'statement_1' => $this->faker->sentence(),
            'statement_2' => $this->faker->sentence(),
            'statement_3' => $this->faker->sentence(),
            'statement_4' => $this->faker->sentence(),
            'statement_5' => $this->faker->sentence(),
            'statement_6' => $this->faker->sentence(),
            'statement_7' => $this->faker->sentence(),
            'statement_8' => $this->faker->sentence(),
            'statement_9' => $this->faker->sentence(),
            'statement_10' => $this->faker->sentence(),
        ];
    }
}
