<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EducationalBackground>
 */
class EducationalBackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'school_last_attended' => $this->faker->catchPhrase(),
            'public_or_private' => $this->faker->sentence(),
            'school_address' => $this->faker->city(),
            'coed_or_exclusive' => $this->faker->sentence(),
            'honors_or_awards_received' => $this->faker->sentence(),
            'secretarian_or_nonsect' => $this->faker->sentence(),
            'grade_level' => $this->faker->sentence(),
            'section' => $this->faker->sentence(),
            'scholarship_status' => $this->faker->sentence(),
            'academic_status' => $this->faker->sentence(),
            'subject_like_best' => $this->faker->catchPhrase(),
            'subject_like_least' => $this->faker->catchPhrase(),
            'subject_find_difficult' => $this->faker->catchPhrase(),
            'subject_find_difficult' => $this->faker->catchPhrase(),
            'subject_learned_most' => $this->faker->catchPhrase(),
            'subject_learned_least' => $this->faker->catchPhrase(),
            'subject_taught_best' => $this->faker->catchPhrase(),
            'subject_taught_worst' => $this->faker->catchPhrase()
        ];
    }
}
