<?php

namespace Database\Factories;

use App\Models\Character\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class BloodDemonArtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'         => $this->faker->word(),
            'description'  => $this->faker->sentence(50)
        ];
    }
}
