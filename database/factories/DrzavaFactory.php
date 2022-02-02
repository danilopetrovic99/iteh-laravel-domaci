<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DrzavaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->country(),
            'broj_stanovnika' => $this->faker->numberBetween($min = 50000, $max = 10000000),
            'predsednik' => $this->faker->name()
        ];
    }
}
