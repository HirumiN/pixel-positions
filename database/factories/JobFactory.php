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
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['RP 10.000.000', 'RP 8.000.000', 'RP 15.000.000']),
            'location' => 'Remote',
            'schedule' => fake()->randomElement(['full-time', 'part-time']),
            'url' => fake()->url,
            'featured' =>fake()->boolean(),
        ];
    }

}
