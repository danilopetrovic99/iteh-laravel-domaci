<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Drzava;

class ZooFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'adresa' => $this->faker->address(),
            'drzava_id' => Drzava::factory()
        ];
    }
}
