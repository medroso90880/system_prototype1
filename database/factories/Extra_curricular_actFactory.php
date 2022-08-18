<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extra_curricular_act>
 */
class Extra_curricular_actFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position_g7' => $this->faker->sentence(),
            'position_g8' => $this->faker->sentence(),
            'position_g9' => $this->faker->sentence(),
            'position_g10' => $this->faker->sentence(),
            'position_g11' => $this->faker->sentence(),
            'position_g12' => $this->faker->sentence(),
            'org/club_g7' => $this->faker->sentence(),
            'org/club_g8' => $this->faker->sentence(),
            'org/club_g9' => $this->faker->sentence(),
            'org/club_g10' => $this->faker->sentence(),
            'org/club_g11' => $this->faker->sentence(),
            'org/club_g12' => $this->faker->sentence(),
            'activity_g7' => $this->faker->sentence(),
            'activity_g8' => $this->faker->sentence(),
            'activity_g9' => $this->faker->sentence(),
            'activity_g10' => $this->faker->sentence(),
            'activity_g11' => $this->faker->sentence(),
            'activity_g12' => $this->faker->sentence(),
            'extent_activity_g7' => $this->faker->sentence(),
            'extent_activity_g8' => $this->faker->sentence(),
            'extent_activity_g9' => $this->faker->sentence(),
            'extent_activity_g10' => $this->faker->sentence(),
            'extent_activity_g11' => $this->faker->sentence(),
            'extent_activity_g12' => $this->faker->sentence(),
            'award_g7' => $this->faker->sentence(),
            'award_g8' => $this->faker->sentence(),
            'award_g9' => $this->faker->sentence(),
            'award_g10' => $this->faker->sentence(),
            'award_g11' => $this->faker->sentence(),
            'award_g12' => $this->faker->sentence(),
            'activity_competition_g7' => $this->faker->sentence(),
            'activity_competition_g8' => $this->faker->sentence(),
            'activity_competition_g9' => $this->faker->sentence(),
            'activity_competition_g10' => $this->faker->sentence(),
            'activity_competition_g11' => $this->faker->sentence(),
            'activity_competition_g12' => $this->faker->sentence(),
            'classification_g7' => $this->faker->sentence(),
            'classification_g8' => $this->faker->sentence(),
            'classification_g9' => $this->faker->sentence(),
            'classification_g10' => $this->faker->sentence(),
            'classification_g11' => $this->faker->sentence(),
            'classification_g12' => $this->faker->sentence(),
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
