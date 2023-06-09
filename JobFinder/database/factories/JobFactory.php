<?php

namespace Database\Factories;

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
            //
            'title' => fake()->title(),
            'tags' => 'PHP, ASP.NET, Backend',
            'logo' => '/public/wallpaper.png',
            'company' => fake()->company(),
            'location' => fake()->address(),
            'email'=> fake()->unique()->companyEmail(),
            'website' => fake()->url(),
            'description' => fake()->paragraph(5),
        ];
    }
}
