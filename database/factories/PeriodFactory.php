<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Period>
 */
class PeriodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'term_id'   => rand(1,10),
            'name'      => fake()->name(),
            'group'     => fake()->word(1,true),
            'status'    => rand(0,1)
        ];
    }
}
