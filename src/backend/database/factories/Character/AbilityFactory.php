<?php

namespace Database\Factories\Character;

use Illuminate\Database\Eloquent\Factories\Factory;

class AbilityFactory extends Factory
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
