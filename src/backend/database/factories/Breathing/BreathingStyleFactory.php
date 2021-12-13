<?php

namespace Database\Factories\Breathing;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreathingStyleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word()
        ];
    }
}
