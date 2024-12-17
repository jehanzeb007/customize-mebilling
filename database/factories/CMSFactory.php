<?php

namespace Database\Factories;
use App\Models\CMS;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CMS>
 */
class CMSFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'short_description' => fake()->text(100),
            'long_description' => fake()->text(200),
            'slug' => fake()->slug(),
        ];
    }
}
