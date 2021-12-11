<?php

namespace Database\Factories\Breathing;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            '_parentId' => $this->faker->randomElement([
                null,
                BreathingStyleFactory::factory()->create()->uuid
            ]),
            'name' => $this->faker->word()
        ];
    }
}
