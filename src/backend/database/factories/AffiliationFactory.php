<?php

namespace Database\Factories;

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
            '_parentId' => $this->faker->randomElement([
                null,
                AffiliationFactory::factory()->create()->uuid
            ]),
            'name'        => $this->faker->word(),
            'description' => $this->faker->sentence(50)
        ];
    }
}
