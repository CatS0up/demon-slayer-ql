<?php

namespace Database\Factories\Character;

use Illuminate\Database\Eloquent\Factories\Factory;

class AffiliationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->word(),
            'description' => $this->faker->sentence(50)
        ];
    }
}
