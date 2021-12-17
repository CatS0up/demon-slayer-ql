<?php

namespace Database\Factories\Character;

use App\Models\Character\Affiliation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AffiliationFactory extends Factory
{
    protected $model = Affiliation::class;
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
