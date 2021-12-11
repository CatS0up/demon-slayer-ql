<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AffilationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_uuid' => $this->faker->randomElement([
                null,
                AffilationFactory::factory()->create()->uuid
            ]),
            'name'              => $this->faker->word(),
            'short_description' => $this->faker->sentence('50')
        ];
    }
}
