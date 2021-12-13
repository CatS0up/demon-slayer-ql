<?php

namespace Database\Factories\Character;

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
            '_affiliationId'      => Affiliation::factory()->create()->_id,
            '_breathingStyleId'   => $this->faker->randomElement([null, Affiliation::factory()->create()->_id]),
            'name'                => $this->faker->firstName(),
            'age'                 => $this->faker->randomNumber(),
            'firstAnimeApperance' => $this->faker->word(),
            'firstMangaApperance' => $this->faker->word(),
            'description'         => $this->faker->sentence(50),
            'animeAvatar'         => null,
            'mangaAvatar'         => null,
        ];
    }
}
