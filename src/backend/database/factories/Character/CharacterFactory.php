<?php

namespace Database\Factories\Character;

use App\Models\Breathing\BreathingStyle;
use App\Models\Character\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    protected $model = Character::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
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
