<?php

namespace Database\Seeders;

use App\Models\Character\Affiliation;
use Illuminate\Database\Seeder;

class AffiliationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Demons
        $demons = Affiliation::create(
            [
                'name'        => 'Demons',
                'description' => 'Demons are a mostly carnivorous, vampiric species whose primary diet is humans, consuming their flesh and/or blood. Sunlight is deadly to them and will burn them to ash, so they strictly operate at night.',
            ]
        );

        $demonsSubAffiliations = [
            [
                'name'        => 'Twelve Kizuki',
                'description' => 'Twelve Kizuki is an organization of the twelve most powerful demons in existence who are under the direct command of the Demon King, Muzan Kibutsuji.',
            ],
            [
                'name'        => 'Spider Family',
                'description' => 'Spider Family was a clan of Demons on Natagumo Mountain with spider-like traits and abilities, formed and led by Lower Rank Five, Rui, of the Twelve Kizuki.',
            ],
            [
                'name'        => 'Ordinary Demons',
                'description' => 'Twelve Kizuki is an organization of the twelve most powerful demons in existence who are under the direct command of the Demon King, Muzan Kibutsuji.',
            ],
        ];

        $this->attachSubAffiliations($demons, $demonsSubAffiliations);

        // Slayers
        $slayers = Affiliation::create(
            [
                'name'        => 'Demon Slayer Corps',
                'description' => 'Demon Slayer Corps is an organization that has existed since ancient times, dedicating its existence to protecting humanity from demons.',
            ],
        );

        $slayersSubAffiliations = [
            [
                'name'        => 'Ordinary Demon Slayers',
                'description' => 'Ordinary Demon Slayers...',
            ],
            [
                'name'        => 'Ubuyashiki Family',
                'description' => 'The Ubayashiki’s are the family in which Muzan was born. That family is affected by a curse  in which every child was born weak.',
            ],
            [
                'name'        => 'Hashira',
                'description' => 'Hashira are the highest ranking combatants in the Demon Slayer Corps. As such, they are the organization\'s most elite and powerful warriors who each serve a pivotal role in their war against Muzan Kibutsuji and the Twelve Kizuki.',
            ],
            [
                'name'        => 'Butterfly Mansion',
                'description' => 'Butterfly Mansion is the manor that Insect Hashira Shinobu Kocho, Tsuguko Kanao Tsuyuri, and assistants Aoi Kanzaki, Sumi Nakahara, Kiyo Terauchi, and Naho Takada live in. The manor is often used as a recovery base for injured Demon Slayers.',
            ],
            [
                'name'        => 'Swordsmith Village',
                'description' => 'The Swordsmith Village is a hidden village where all the swordsmiths reside. In order to travel to the village, a Demon Slayer must be transferred via multiple Kakushi and Kasugai Crows while blindfolded.',
            ],
            [
                'name'        => 'Other/Associations',
                'description' => 'Other characters associated with Demon Slayer Corps.',
            ],
        ];

        $this->attachSubAffiliations($slayers, $slayersSubAffiliations);


        // Others
        Affiliation::create([
            'name'        => 'Others',
            'description' => 'Other characters which doesn\'t belongs to any organization.',
        ]);
    }

    private function attachSubAffiliations(Affiliation $affiliaiton, array $subAffiliations): void
    {
        foreach ($subAffiliations as $subAffiliation) {
            $affiliaiton->subAffiliations()->create($subAffiliation);
        }
    }
}
