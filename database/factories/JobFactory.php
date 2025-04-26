<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->jobTitle(),
            'salary' => fake()->randomElement([50, 000, 30, 000, 60, 000]),
            'url' => fake()->url,
            'location' => fake()->city(),
            'featured' => true,
            'employer_id' => Employer::factory(),
        ];
    }
}
