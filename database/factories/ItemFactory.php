<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'group' => fake()->words(3,true),
             'sub_group' => fake()->words(2,true),
             'name' => fake()->name(),
             'code' => fake()->word(1,true),
             'status'   => rand(0,1)
        ];
    }
}
