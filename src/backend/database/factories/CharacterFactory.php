<?php

namespace Database\Factories;

use App\Models\Affiliation;
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
            '_affilationId'         => Affiliation::factory()->create()->uuid,
            '_breathingStyleId'     => $this->faker->randomElement([null, AffiliationFactory::factory()->create()->uuid]),
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
