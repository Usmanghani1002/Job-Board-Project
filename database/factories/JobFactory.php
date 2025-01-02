<?php

namespace Database\Factories;

use App\Models\Employers;
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
            'employers_id' => Employers::factory(),
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(),
            'salary' => fake()->randomElement(['$30,000 USD', '$40,000 USD', '$50,000 USD', '$60,000 USD', '$70,000 USD']),
            'location' => fake()->city(),
            'type' => fake()->randomElement(['Full Time', 'Part Time', 'Contract']),
            'url' => fake()->url(),
            'featured' => false,
        ];
    }
}
