<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'logo' => "https://as2.ftcdn.net/jpg/05/05/61/73/1000_F_505617309_NN1CW7diNmGXJfMicpY9eXHKV4sqzO5H.webp",
            'user_id' => User::factory(),
        ];
    }
}
