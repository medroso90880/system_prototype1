<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialProfile>
 */
class SocialProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'friends_same_age' => 1,
            'friends_older' => 1,
            'friends_younger' => 0,
            'friends_boys' => 1,
            'friends_girls' => 1,
            'friend_other_school' => 1,
            'friend_this_school' => 0,
            'list_friends' => $this->faker->text(),
            'list_talents_hobbies' => $this->faker->text()
        ];
    }
}
