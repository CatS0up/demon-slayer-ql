<?php

namespace Database\Factories\Breathing;

use App\Models\Breathing\BreathingStyle;
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
            '_breathingStyleId' => BreathingStyle::factory()->create()->_id,
            'name'              => $this->faker->word()
        ];
    }
}
