<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zoo;

class ZivotinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'tip' => $this->faker->word(),
            'godine' => $this->faker->numberBetween($min = 1, $max = 101),
            'zoo_id' => Zoo::factory()
        ];
    }
}
