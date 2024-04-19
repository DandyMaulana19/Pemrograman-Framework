<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurants>
 */
class RestaurantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(3, 8)),
            'slug' => fake()->slug(),
            'location' => fake()->city(),
            'body' => fake()->paragraph(mt_rand(5, 10))
        ];
    }
}
