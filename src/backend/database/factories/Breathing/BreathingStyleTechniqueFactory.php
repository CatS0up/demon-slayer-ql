<?php

namespace Database\Factories\Breathing;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreathingStyleTechniqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'breathing_style_uuid' => BreathingStyleFactory::factory()->create()->uuid,
            'name'                 => $this->faker->word()
        ];
    }
}
