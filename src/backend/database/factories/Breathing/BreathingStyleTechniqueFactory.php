<?php

namespace Database\Factories\Breathing;

use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingStyleTechnique;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreathingStyleTechniqueFactory extends Factory
{
    protected $model = BreathingStyleTechnique::class;
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
