<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carline>
 */
class CarlineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->words(2,true),
            'commodity' => fake()->words(1,true),
            'destination' => fake()->word(2,true),
            'carmaker' => fake()->word(1,true),
            'carline' => fake()->word(1,true),
            'year' => fake()->year(),
            'status'   => rand(0,1)
        ];
    }
}
