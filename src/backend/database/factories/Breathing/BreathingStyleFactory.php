<?php

namespace Database\Factories\Breathing;

use App\Models\Breathing\BreathingStyle;
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
            '_parentId' => $this->faker->randomElement([
                null,
                BreathingStyle::factory()->create()->uuid
            ]),
            'name' => $this->faker->word()
        ];
    }
}
