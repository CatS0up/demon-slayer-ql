<?php

namespace Database\Seeders;

use App\Models\Breathing\BreathingStyle;
use Illuminate\Database\Eloquent\Model;
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
        $sunStyle =  BreathingStyle::create(['name' => 'Sun']);

        $sunTechniques = [
            'First Form: Dance',
            'First Form: Dancing Flash',
            'Second Form: Clear Blue Sky',
            'Third Form: Raging Sun',
            'Fourth Form: Burning Bones, Summer Sun',
            'Fifth Form: Setting Sun Transformation',
            'Sixth Form: Solar Heat Haze',
            'Seventh Form: Beneficent Radiance',
            'Eighth Form: Sunflower Thrust',
            'Ninth Form: Dragon Sun Halo Head Dance',
            'Tenth Form: Fire Wheel',
            'Eleventh Form: Fake Rainbow',
            'Twelfth Form: Flame Dance',
            'Thirteenth'
        ];

        foreach ($sunTechniques as $technique) {
            $sunStyle->techniques()->create(['name' => $technique]);
        }

        // Closest descendants of Sun style
        $this->createSubStylesForStyleModel(
            $sunStyle,
            [
                'name' => 'Water',
                'techniques' => [
                    'First Form: Water Surface Slash',
                    'Second Form: Water Wheel',
                    'Second Form: Improved, Lateral Water Wheel',
                    'Third Form: Flowing Dance',
                    'Fourth Form: Striking Tide',
                    'Striking Tide: Turbulent',
                    'Fifth Form: Blessed Rain After the Drought',
                    'Sixth Form: Whirlpool',
                    'Sixth Form: Whirlpool, Flow ',
                    'Seventh Form: Drop Ripple Thrust',
                    'Eighth Form: Waterfall Basin',
                    'Ninth Form: Splashing Water Flow, Turbulent',
                    'Tenth Form: Constant Flux',
                    'Eleventh Form: Dead Calm'
                ]
            ],
            [
                'name' => 'Moon',
                'techniques' => [
                    'First Form: Dark Moon, Evening Palace',
                    'Second Form: Pearl Flower Moongazing',
                    'Third Form: Loathsome Moon, Chains',
                    'Fifth Form: Moon Spirit Calamitous Eddy',
                    'Sixth Form: Perpetual Night, Lonely Moon - Incessant',
                    'Seventh Form: Mirror of Misfortune, Moonlit',
                    'Eighth Form: Moon-Dragon Ringtail',
                    'Ninth Form: Waning Moonswaths',
                    'Tenth Form: Drilling Slashes, Moon Through Bamboo Leaves',
                    'Fourteenth Form: Catastrophe, Tenman Crescent Moon',
                    'Sixteenth Form: Moonbow, Half Moon'
                ]
            ],
            [
                'name' => 'Flame',
                'techniques' => [
                    'First Form: Unknowing Fire',
                    'Second Form: Rising Scorching Sun',
                    'Third Form: Blazing Universe',
                    'Fourth Form: Blooming Flame Undulation',
                    'Fifth Form: Flame Tiger',
                    'Ninth Form: Rengoku'
                ]
            ],
            [
                'name' => 'Thunder',
                'techniques' => [
                    'First Form: Thunderclap and Flash',
                    'First Form: Thunderclap and Flash - Sixfold',
                    'First Form: Thunderclap and Flash - Eightfold',
                    'First Form: Thunderclap and Flash - God Speed',
                    'Second Form: Rice Spirit',
                    'Third Form: Thunder Swarm',
                    'Fourth Form: Distant Thunder',
                    'Fifth Form: Heat Lightning',
                    'Sixth Form: Rumble and Flash',
                    'Seventh Form: Honoikazuchi no Kami'
                ]
            ],
            [
                'name' => 'Stone',
                'techniques' => [
                    'First Form: Serpentinite Bipolar',
                    'Second Form: Upper Smash',
                    'Third Form: Stone Skin',
                    'Fourth Form: Volcanic Rock, Rapid Conquest',
                    'Fifth Form: Arcs of Justice'
                ]
            ],
            [
                'name' => 'Wind',
                'techniques' => [
                    'First Form: Dust Whirlwind Cutter',
                    'Second Form: Claws-Purifying Wind',
                    'Third Form: Clean Storm Wind Tree',
                    'Fifth Form: Cold Mountain Wind',
                    'Sixth Form: Black Wind Mountain Mist',
                    'Seventh Form: Gale, Sudden Gusts',
                    'Eighth Form: Primary Gale Slash',
                    'Ninth Form: Idaten Typhoon'
                ]
            ]
        );

        // Water
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Water'),
            [
                'name' => 'Flower',
                'techniques' => [
                    'Second Form: Honorable Shadow Plum',
                    'Fourth Form: Crimson Hanagoromo',
                    'Fifth Form: Peonies of Futility',
                    'Sixth Form: Whirling Peach',
                    'Final Form: Equinoctial Vermilion Eye'
                ]
            ],
            [
                'name' => 'Serpent',
                'techniques' => [
                    'First Form: Winding Serpent Slash',
                    'Second Form: Venom Fangs of the Narrow Head',
                    'Third Form: Coil Choke',
                    'Fourth Form: Twin-Headed Reptile',
                    'Fifth Form: Slithering Serpent'
                ]
            ]
        );

        // Flower
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Flower'),
            [
                'name' => 'Insect',
                'techniques' => [
                    'Butterfly Dance: Caprice',
                    'Dance of the Bee Sting: True Flutter',
                    'Dance of the Dragonfly: Compound Eye Hexagon',
                    'Dance of the Centipede: Hundred-Legged Zigzag'
                ]
            ]
        );

        // Flame
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Flame'),
            [
                'name' => 'Love',
                'techniques' => [
                    'First Form: Shivers of First Love',
                    'Second Form: Love Pangs',
                    'Third Form: Catlove Shower',
                    'Fifth Form: Swaying Love, Wildclaw',
                    'Sixth Form: Cat-Legged Winds of Love'
                ]
            ]
        );

        // Thunder
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Thunder'),
            [
                'name' => 'Sound',
                'techniques' => [
                    'First Form: Roar',
                    'Fourth Form: Constant Resounding Slashes',
                    'Fifth Form: String Performance',
                ]
            ]
        );

        // Wind
        $this->createSubStylesForStyleModel(
            BreathingStyle::firstWhere('name', 'Wind'),
            [
                'name' => 'Beast',
                'techniques' => [
                    'First Fang: Pierce',
                    'Second Fang: Slice',
                    'Third Fang: Devour',
                    'Fourth Fang: Slice \'n\' Dice',
                    'Fifth Fang: Crazy Cutting',
                    'Sixth Fang: Palisade Bite',
                    'Seventh Form: Spatial Awareness',
                    'Eighth Fang: Explosive Rush',
                    'Ninth Fang: Extending Bendy Slash',
                    'Tenth Fang: Whirling Fangs',
                    'Sudden Throwing Strike'
                ]
            ],
            [
                'name' => 'Mist',
                'techniques' => [
                    'First Form: Low Clouds, Distant Haze',
                    'Second Form: Eight-Layered Mist',
                    'Third Form: Scattering Mist Splash',
                    'Fourth Form: Shifting Flow Slash',
                    'Fifth Form: Sea of Clouds and Haze',
                    'Sixth Form: Lunar Dispersing Mist',
                    'Seventh Form: Obscuring Clouds'
                ]
            ]
        );
    }

    private function createSubStylesForStyleModel(Model $model, array ...$styles): void
    {
        foreach ($styles as $style) {
            $substyle = $model->subStyles()->create(['name' => $style['name']]);

            foreach ($style['techniques'] as $technique) {
                $substyle->techniques()->create(['name' => $technique]);
            }
        }
    }
}
