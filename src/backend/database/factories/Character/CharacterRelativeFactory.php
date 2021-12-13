<?php

namespace Database\Factories\Character;

use App\Models\Character\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterRelativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            '_characterId' => Character::factory()->create()->_id,
            '_relativeId'  => Character::factory()->create()->_id,
            'kinship'      => $this->faker->word()
        ];
    }
}
