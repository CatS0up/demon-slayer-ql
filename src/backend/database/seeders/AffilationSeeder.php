<?php

namespace Database\Seeders;

use App\Models\Affilation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AffilationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $affitaltions = [
            [
                'name'              => 'Demon Slayer Corps',
                'short_description' => 'Demon Slayer Corps is an organization that has existed since ancient times, dedicating its existence to protecting humanity from demons.',
                'children' => [
                    [
                        'name'              => 'Hashira',
                        'short_description' => 'Hashira are the highest ranking combatants in the Demon Slayer Corps.'
                    ],
                    [
                        'name'              => 'Butterfly Mansion',
                        'short_description' => 'Butterfly Mansion is the manor that Insect Hashira Shinobu Kocho, Tsuguko Kanao Tsuyuri, and assistants Aoi Kanzaki, Sumi Nakahara, Kiyo Terauchi, and Naho Takada live in. The manor is often used as a recovery base for injured Demon Slayers.'
                    ],
                    [
                        'name'              => 'Ubuyashiki Family',
                        'short_description' => 'The Ubayashiki\'s are the family in which Muzan was born. To be precise, they are a very distant family of Muzan . This led to them being affected by a curse in which every child was born weak and eventually died due to weakness.'
                    ]
                ]
            ],
            [
                'name'              => 'Demons',
                'short_description' => 'Demons are an ancient race of monstrous, supernatural, immortal beings and the main antagonists of Demon Slayer: Kimetsu no Yaiba.',
                'children' => [
                    [
                        'name'              => 'Twelve Kizuki',
                        'short_description' => 'Twelve Kizuki is an organization of the twelve most powerful demons in existence who are under the direct command of the Demon King, Muzan Kibutsuji. '
                    ],
                    [
                        'name'              => 'The Upper Moon',
                        'short_description' => 'The high-ranking members of the Twelve Moons. Each of them has lived for a century at least and killed dozens of Hashira. Some of them mutated their bodies to the point that they can\'t be killed just by decapitation, unlike other demons.'
                    ],
                    [
                        'name'              => 'The Lower Moon',
                        'short_description' => 'The low-ranking members of the Twelve Kizuki, whose membership is constantly shifting compared to the Upper Ranks.'
                    ],
                ]
            ],
            [
                'name'              => 'Civilians',
                'short_description' => 'Character which doesn\'t belong to any organization.',
                'children' => [
                    [
                        'name'              => 'Kamado Family',
                        'short_description' => 'The Family members of Tanjiro and Nezuko.'
                    ],
                    [
                        'name'              => 'Final Selection',
                        'short_description' => 'The Final Selection is an entrance exam for individuals who seek to become a Demon Slayer of the Demon Slayer Corps. The exam takes place on Fujikasane Mountain, where Wisteria flowers bloom every season from the mountain\'s foot to its slope. The area around the mountaintop does not have any Wisteria flowers and is infested with Demons, which were caught alive and placed on the mountain by existing Demon Slayers. Since Wisteria is poisonous to Demons, the Demons remain trapped on the mountain top and cannot leave.'
                    ],
                    [
                        'name'              => 'Swordsmith Village',
                        'short_description' => 'The Swordsmith Village is a hidden village where all the swordsmiths reside. In order to travel to the village, a Demon Slayer must be transferred via multiple Kakushi and Kasugai Crows while blindfolded.'
                    ],
                    [
                        'name'              => 'Entertainment District',
                        'short_description' => 'The Entertainment District Arc is the eighth arc of Kimetsu no Yaiba. '
                    ],
                    [
                        'name'              => 'Others',
                        'short_description' => 'The low-ranking members of the Twelve Kizuki, whose membership is constantly shifting compared to the Upper Ranks.'
                    ],
                ]
            ],
        ];


        $this->createAffilationsStructure($affitaltions);
    }

    // TODO: Refactor
    private function createAffilationsStructure(array $affilations): void
    {
        foreach ($affilations as $affilation) {
            $model = Affilation::create([
                'name'              => $affilation['name'],
                'short_description' => $affilation['short_description']
            ]);

            if (key_exists('children', $affilation)) {
                foreach ($affilation['children'] as $subAffilation) {

                    $model->subAffilations()->create(
                        [
                            'name'              => $subAffilation['name'],
                            'short_description' => $subAffilation['short_description']
                        ]
                    );
                }
            }
        }
    }
}