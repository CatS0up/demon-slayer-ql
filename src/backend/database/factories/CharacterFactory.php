<?php

namespace Database\Factories;

use App\Models\Affilation;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'affilation_uuid'       => Affilation::factory()->create()->uuid,
            'breathing_style_uuid'  => $this->faker->randomElement([null, AffilationFactory::factory()->create()->uuid]),
            'name'                  => $this->faker->firstName(),
            'age'                   => $this->faker->randomNumber(),
            'first_anime_apperance' => $this->faker->word(),
            'first_manga_apperance' => $this->faker->word(),
            'short_description'     => $this->faker->sentence(50),
            'anime_avatar'          => null,
            'manga_avatar'          => null,
        ];
    }
}
