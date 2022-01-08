<?php

namespace Database\Seeders;

use App\Models\Breathing\BreathingStyle;
use Illuminate\Database\Seeder;

class BreathingStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sunStyle = BreathingStyle::create([
            'name'        => 'Sun',
            'description' => 'Hinokami Kagura is a Breathing Style only known and taught by the Kamado Family, later revealed to be the first Breathing Style, Sun Breathing.'
        ]);

        // Sun childStyles
        $subStyles = [
            [
                'name'        => 'Water',
                'description' => 'Water Breathing is a Breathing Style that mimics water, specifically the flow, flexibility and adaptability of the liquid and replicates it with the user\'s movements, techniques and abilities.'
            ],
            [
                'name'        => 'Moon',
                'description' => 'Moon Breathing is a Breathing Style that mimics the moon and replicates it with the user\'s movements, techniques and abilities. Most, if not all, known techniques and forms are standard yet varied swordsmanship techniques that focus on swift and powerful strikes that always follow the shape and pattern of a crescent moon.'
            ],
            [
                'name'        => 'Flame',
                'description' => 'Flame Breathing is a Breathing Style that mimics flames and replicates it with the user\'s movements, techniques and abilities.'
            ],
            [
                'name'        => 'Thunder',
                'description' => 'Thunder Breathing is a Breathing Style that mimics lightning, specifically swift strikes and movements akin to lightning ripping through the sky, and replicates it with the user\'s movements, techniques and abilities.'
            ],
            [
                'name'        => 'Stone',
                'description' => 'Stone Breathing is a Breathing Style that mimics earth and stone and replicates it with the user\'s movements, techniques and abilities.'
            ],
            [
                'name'        => 'Wind',
                'description' => 'Wind Breathing is a Breathing Style that mimics wind, specifically powerful torrents of air and whirlwinds, and replicates it with the user\'s movements, techniques and abilities.'
            ],
        ];

        foreach ($subStyles as $substyleData) {
            $sunStyle->childStyles()->create($substyleData);
        }

        // Water childStyles
        $subStyles = [
            [
                'name'        => 'Flower',
                'description' => 'Flower Breathing is a Breathing Style that mimics flowers and fruits and replicates with the user\'s movements, techniques and abilities.'
            ],
            [
                'name'        => 'Serpent',
                'description' => 'Serpent Breathing is a Breathing Style that mimics serpents and snakes, specifically their slithering motions, and replicates it with the user\'s movements, techniques and abilities.'
            ],
        ];

        foreach ($subStyles as $substyleData) {
            BreathingStyle::whereName('Water')->first()->childStyles()->create($substyleData);
        }

        // Flame childStyles
        $subStyles = [
            [
                'name'        => 'Love',
                'description' => 'Love Breathing is a Breathing Style that is based of the emotion of love. Most, if not all, known techniques form a combination of mid to long-ranged whip-like attacks that utilize the user\'s own flexibility, dexterity, agility and speed.'
            ]
        ];

        foreach ($subStyles as $substyleData) {
            BreathingStyle::whereName('Flame')->first()->childStyles()->create($substyleData);
        }

        // Thunder childStyles
        $subStyles = [
            [
                'name'        => 'Sound',
                'description' => 'Sound Breathing is a Breathing Style that mimics sound, specifically its disorientating loudness, and replicates it with the user\'s movements, techniques and abilities.'
            ]
        ];

        foreach ($subStyles as $substyleData) {
            BreathingStyle::whereName('Thunder')->first()->childStyles()->create($substyleData);
        }

        // Wind childStyles
        $subStyles = [
            [
                'name'        => 'Beast',
                'description' => 'Beast Breathing is a Breathing Style that mimics beasts and wild animals, specifically their unpredictable and wild nature, including movements, attacks and senses, and replicates it with the user\'s movements, techniques and abilities.'
            ],
            [
                'name'        => 'Mist',
                'description' => 'Mist Breathing is a Breathing Style that mimics mist, specifically the obscurity of mist, and replicates it with the user\'s movements, techniques and abilities.'
            ],
        ];

        foreach ($subStyles as $substyleData) {
            BreathingStyle::whereName('Wind')->first()->childStyles()->create($substyleData);
        }

        // Flower childStyles
        $subStyles = [
            [
                'name'        => 'Insect',
                'description' => 'Insect Breathing is a Breathing Style that mimics insects, specifically their lethal stings and movements, and replicates it with user\'s movements, techniques and abilities.'
            ],
        ];

        foreach ($subStyles as $substyleData) {
            BreathingStyle::whereName('Flower')->first()->childStyles()->create($substyleData);
        }
    }
}
