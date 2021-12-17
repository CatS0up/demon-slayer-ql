<?php

namespace Database\Factories\Breathing;

use App\Models\Breathing\BreathingStyle;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreathingStyleFactory extends Factory
{
    protected $model = BreathingStyle::class;
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
