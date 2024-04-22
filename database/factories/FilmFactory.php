<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul"=> $this->faker->sentence(mt_rand(2,4)),
            "slug"=> $this->faker->slug(),
            "sipnosis" => $this->faker->paragraph(),
            "genre" => mt_rand(1,3),
            "actor" => fake()->name(),
            "created_by" => fake()->name(),
        ];
    }
}
