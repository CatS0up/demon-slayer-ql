<?php

namespace Database\Seeders;

use App\Models\BreathingStyle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

class BreathingStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Closest descendants of Sun style
        $this->createSubStylesForStyleModel(
            BreathingStyle::create(['name' => 'Sun']),
            ['name' => 'Water'],
            ['name' => 'Moon'],
            ['name' => 'Flame'],
            ['name' => 'Thunder'],
            ['name' => 'Stone'],
            ['name' => 'Wind']
        );

        // Water
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Water'),
            ['name' => 'Flower'],
            ['name' => 'Serpent']
        );

        // Flower
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Flower'),
            ['name' => 'Insect']
        );

        // Flame
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Flame'),
            ['name' => 'Love']
        );

        // Thunder
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Thunder'),
            ['name' => 'Sound']
        );

        // Wind
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Wind'),
            ['name' => 'Beast'],
            ['name' => 'Mist']
        );
    }

    private function createSubStylesForStyleModel(Model $model, array ...$styles): void
    {
        foreach ($styles as $style) {
            $model->subStyles()->create($style);
        }
    }
}
