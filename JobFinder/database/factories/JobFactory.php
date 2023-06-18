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
            'title' => fake()->streetName(),
            'tags' => 'C#, ASP.NET, MVC',
            'logo' => 'wallpaper.png',
            'company' => fake()->company(),
            'location' => fake()->address(),
            'email'=> fake()->unique()->companyEmail(),
            'website' => fake()->url(),
            'description' => fake()->paragraph(5),
        ];
    }
}
