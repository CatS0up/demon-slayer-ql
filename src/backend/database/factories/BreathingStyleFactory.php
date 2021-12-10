<?php

namespace Database\Factories;

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
            'parent_uuid' => $this->faker->randomElement([null, Str::uuid()]),
            'name'        => $this->faker->word()
        ];
    }
}
