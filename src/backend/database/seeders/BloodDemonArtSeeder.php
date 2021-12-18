<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BloodDemonArtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techniques = [
            [
                'name'        => 'Supernatural Blood',
                'description' => 'User can to draw her blood and cast various spells that enact various effects on her targets.'
            ],
            [
                'name'              => 'Blindfold',
                'description'       => 'This technique allows user to create paper talismans which possess the ability to mask or reveal something\'s presence.',
                'subBloodDemonArts' => [
                    [
                        'name'        => 'Mind Control',
                        'description' => 'Blood Demon Art, which allows user to put an individual with his Blindfold under hypnosis and take control of their minds and vision.'
                    ],
                ]
            ],
            [
                'name'        => 'Hiasobi Temari',
                'description' => 'Blood Demon Art allows user to conjure Temari handballs at will. User can either throw or kick them at such intense speed and power that she can completely annihilate any limbs with a single touch.'
            ],
            [
                'name'        => 'Koketsu Arrow',
                'description' => 'Blood Demon Art allows user to conjure and manipulate invisible red arrows by blinking the eyes on each of his palms.'
            ],
            [
                'name'        => 'Swamp Domain',
                'description' => 'User is able to conjure a pocket swamp dimension in which he can navigate freely.'
            ],
            [
                'name'        => 'Self-Replication',
                'description' => 'User is able to create clones of himself,.'
            ],
            [
                'name'        => 'Metamorphosis',
                'description' => 'The User possessed the ability to transform into a more powerful form with increased physical power and regenerative abilities, making him even stronger and durable than in his original form.'
            ],
            [
                'name'              => 'String Manipulation',
                'description'       => 'User materializes spider strings from the tips of her fingers and can extend the range of the strings to cover an entire mountain.',
                'subBloodDemonArts' => [
                    [
                        'name'        => 'Puppetry',
                        'description' => 'User uses her strings in a unique manner by utilizing it to manipulate corpses like puppets.'
                    ],
                ]
            ],
            [
                'name'        => 'Spider Manipulation',
                'description' => 'User can create and command small white spiders with red dot like design similar to the physical traits of herself and her "family" to stealthily attach her threads to her intended victims without them noticing.'
            ],
            [
                'name'              => 'Poison Manipulation',
                'description'       => 'User\'s ability is his power to generate and manipulate deadly poison.',
                'subBloodDemonArts' => [
                    [
                        'name'        => 'Spider Conversion',
                        'description' => 'User reveals that one of his venom\'s possesses the ability to convert a human being into a spider like creature.'
                    ],
                ]
            ],
            [
                'name'        => 'Acid Manipulation',
                'description' => 'User can manipulate and generate acid made from her own blood and flesh.'
            ],
            [
                'name'        => 'Flute Manipulation',
                'description' => 'User\'s main ability is to conjure a special flute that when played, enacts various effects.',
                'subBloodDemonArts' => [
                    [
                        'name'        => 'Nervous System Disruption',
                        'description' => 'When user\'s flute is played, it disrupts the nervous system of his opponents'
                    ],
                    [
                        'name'        => 'Wolf Manipulation',
                        'description' => 'User can also use his flute to summon 2 black wolves and command them to kill his opponents.'
                    ],
                ]
            ],
            [
                'name'        => 'Crescent Moon Blades',
                'description' => 'Complementing user\'s combat style: Moon Breathing, his Blood Demon Art allows him to create and manipulate dozens of sharp blades shaped like traditional crescent moons from his flesh katana.'
            ],
            [
                'name'        => 'Cryokinesis',
                'description' => 'User can generate ice and frost from his flesh and blood and can spawn it anywhere in his vicinity, as well as manipulating it at will, allowing him to unleash incredibly potent ice techniques.'
            ],
            [
                'name'        => 'Destructive Death',
                'description' => 'Blood Demon Art takes the form of a martial arts style that combines shockwave-like attacks and his Soryu Style.'
            ],
            [
                'name'        => 'Infinity Castle',
                'description' => 'Blood Demon Art takes the form of an extra-dimensional space that houses a fortress of infinite scale.',
                'subBloodDemonArts' => [
                    [
                        'name'        => 'Portal Creation',
                        'description' => 'User can spawn portals at any location to transport people outside her fortress or to anywhere within it in the form of tatami sliding doors.'
                    ],
                ]
            ],
            [
                'name'        => 'Porcelain Vases',
                'description' => 'User can  spawn vases which let him teleportation between them. Anywhere within his vicinity and create multiple pots of varying sizes at once'
            ],
            [
                'name'        => 'Electrokinesis',
                'description' => 'Blood Demon Art grants user special electrokinetic abilities which allow him to generate and manipulate black colored lightning and electricity from his flesh and blood.'
            ],
            [
                'name'        => 'Blood Manipulation',
                'description' => 'This Blood Demon Art allows him to manipulate his own blood.'
            ],
            [
                'name'        => 'Obi Sash Manipulation',
                'description' => 'This Blood Demon Art allows user to create flower-patterned Obi sashes from her flesh, as well as manipulate them at will.'
            ],
            [
                'name'        => 'Sleep Inducement',
                'description' => 'This Blood Demon Art grants user the ability to force anyone into deep sleep.',
                'subBloodDemonArts' => [
                    [
                        'name'        => 'Dream Manipulation',
                        'description' => 'User is able to enter, manipulate and control someone\'s dreams when they are asleep.'
                    ],
                ]
            ],
            [
                'name'        => 'Illusion Manifestation',
                'description' => 'User is able to cast powerful illusions at will.'
            ],
            [
                'name'        => 'Umbrakinesis',
                'description' => 'This Blood Demon Art allows him to create and manipulate shadows with special properties and characteristics from his flesh and blood.',
                'subBloodDemonArts' => [
                    [
                        'name'        => 'Artillery Manipulation',
                        'description' => 'User\'s shadows contain a countless number of weapons.'
                    ],
                ]
            ],
            [
                'name'        => 'Thread Manipulation',
                'description' => 'This Blood Demon Art allows user to create thin threads indiscernable from string from his own cells, and manipulate them however he pleases.'
            ],
            [
                'name'        => 'Drumming',
                'description' => 'User use 6 Tsuzumi Drums imbedded in different parts of his body and each one of them, when played, enacts a certain effect on his surroundings.'
            ],
            [
                'name'        => 'Pyrokinesis',
                'description' => 'This Blood Demon Art allows user to generate and manipulate special demonic flames created from his blood that are pinkish in color.'
            ],
        ];
    }
}
