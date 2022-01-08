<?php

namespace Database\Seeders;

use App\Models\Breathing\BreathingStyle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class BreathingTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techniques = [
            // Sun
            [
                'name'        => 'Dance',
                'description' => 'The user delivers a single high-powered vertical slash.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Dance Flash',
                'description' => 'A modified version of Dance developed and utilized only by Tanjiro Kamado. The user infuses the Thunderclap and Flash technique of Thunder Breathing into the high-powered slash of Dance by inhaling huge amounts of oxygen, increasing the pumping of blood through the entire body, focusing it on the legs, and releasing it all to assault the target with a slash.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Clear Blue Sky',
                'description' => 'The user spins their body horizontally to deliver a 360° slash.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Raging Sun',
                'description' => 'The user unleashes two horizontal slashes to hit or defend from incoming attacks.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Burning Bones, Summer Sun',
                'description' => 'The user unleashes a large circular slash that defends from imminent frontal attacks.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Setting Sun Transformation',
                'description' => 'The user backflips into the air to deliver a powerful upended sword slash that aims to decapitate their target.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Beneficent Radiance',
                'description' => 'The user spirals into the air and delivers a powerful slash that surrounds the enemy.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Dragon Sun Halo Head Dance',
                'description' => 'The user unleashes a continuous fast and powerful sword attack that seemingly takes the form of a Japanese dragon made of solar flames. This technique is capable of decapitating multiple targets at once.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Fire Wheel',
                'description' => 'The user leaps behind the opponent and spins in the air downward, releasing a sword attack in a circular motion.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Fake Rainbow',
                'description' => 'The user performs high-speed twists and rotations, thus creating afterimages used mostly to evade attacks. The afterimages work most effectively on enemies with good vision.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Flame Dance',
                'description' => 'A two-combo strike which starts with a vertical slash and then a horizontal one right after.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'Thirteenth Form',
                'description' => 'The user continuously performs all twelve forms of Sun Breathing in repetitive succession to increase the accuracy and agility of his movements while reducing fatigue. This form was created solely for the purpose of killing Muzan Kibutsuji, since the repetition of all twelve forms aims to destroy Muzan\'s twelve vital organs (seven hearts and five brains) that move freely inside his body.',
                'style'       => 'Sun',
            ],
            [
                'name'        => 'First Form: Water Surface Slash',
                'description' => 'The user generates enough momentum to create a powerful single concentrated slash.',
                'style'       => 'Water',
            ],

            // Water
            [
                'name'        => 'First Form: Water Surface Slash',
                'description' => 'The user generates enough momentum to create a powerful single concentrated slash.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Second Form: Water Wheel',
                'description' => 'The user leaps and vertically spins forward in the air while releasing a flowing attack in a circular motion.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Second Form: Improved, Lateral Water Wheel',
                'description' => 'An alternate variation of Second Form: Water Wheel created by Tanjiro Kamado that unleashes a horizontal spin instead of a vertical one.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Third Form: Flowing Dance',
                'description' => 'The user swings and bends their blade in a winding motion along with their body and dances in a flowing pattern, slicing everything in its path.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Fourth Form: Striking Tide',
                'description' => 'The user makes multiple consecutive slashes while twisting their body and sword in a flowing fashion to deliver multiple blows simultaneously.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Striking Tide, Turbulent',
                'description' => 'An improved version of the Fourth Form: Striking Tide. The user increases the quantity of consecutive strikes and slashes along with improving its accuracy in order to contact a specific target during a chaotic situation.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Fifth Form: Blessed Rain After the Drought',
                'description' => 'The user changes the grip on their sword and decapitates the opponent in a single flowing strike that causes little to no pain. It is a “sword strike of kindness” used when the enemy willingly surrenders.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Sixth Form: Whirlpool',
                'description' => 'The user fiercely twists their upper and lower body, creating a whirlpool of air that cuts anything caught in it. Its effect and efficiently is enhanced underwater, where the user can draw water around their weapon to enhance their slashes.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Whirlpool, Flow',
                'description' => 'A combination of Third Form: Flowing Dance and Sixth Form: Whirlpool created by Tanjiro Kamado. The user combines the footwork from Flowing Dance and the twisting movements of Whirlpool, performing an attack around the user that conjures a twisting, swirling, vicious flow of water to redirect projectiles from multiple angles.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Seventh Form: Drop Ripple Thrust',
                'description' => 'The user performs a fast and accurate stab, capable of reducing the impact of a moving target.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Drop Ripple Thrust, Curve',
                'description' => 'A modified strike that hits from a specific angle corresponding to the sword\'s structure which nearly nullifies the impact and momentum of a moving object.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Eighth Form: Waterfall Basin',
                'description' => 'The user cuts the target vertically in a flowing motion which is most effective when they are falling downward.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Ninth Form: Splashing Water Flow, Turbulent',
                'description' => 'The user changes their footwork in a way that minimizes the landing time and surface needed when landing, allowing the user to move without limits. Ideal when fighting in a place with no solid foothold.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Tenth Form: Constant Flux',
                'description' => 'The user performs a continuous flowing attack which seemingly takes the form of a water dragon that increases in strength and power with each rotation due to momentum.',
                'style'       => 'Water',
            ],
            [
                'name'        => 'Eleventh Form: Dead Calm',
                'description' => 'The personal creation of the current Water Hashira, Giyu Tomioka. The user ceases all body movements and enters a state of complete tranquility, deflecting, blocking and cutting any incoming attacks with imperceptible speed with their blade. However, its effectiveness is limited as fast and numerous attacks can break through.',
                'style'       => 'Water',
            ],

            // Flower
            [
                'name'        => 'Second Form: Honorable Shadow Plum',
                'description' => 'The user releases several rotating sword slashes that deflects incoming physical attacks.',
                'style'       => 'Flower',
            ],
            [
                'name'        => 'Fourth Form: Crimson Hanagoromo',
                'description' => 'The user unleashes single sword slash that curves and twists gracefully.',
                'style'       => 'Flower',
            ],
            [
                'name'        => 'Fifth Form: Peonies of Futility',
                'description' => 'The user unleashes a flurry of nine consecutive attacks that flow and weave in on themselves.',
                'style'       => 'Flower',
            ],
            [
                'name'        => 'Sixth Form: Whirling Peach',
                'description' => 'A technique used after or during evasion, the user spins around moving with their body weight to deliver an attack.',
                'style'       => 'Flower',
            ],
            [
                'name'        => 'Final Form: Equinoctial Vermilion Eye',
                'description' => 'A focusing technique that raises the user\'s kinetic vision to its maximum, while using this technique the user perceives the world as if it were in slow motion.',
                'style'       => 'Flower',
            ],

            // Insect
            [
                'name'        => 'Butterfly Dance: Caprice',
                'description' => 'The user leaps into the air and charges towards the opponent and stings them multiple times with their blade to inject poison.',
                'style'       => 'Insect',
            ],
            [
                'name'        => 'Dance of the Bee Sting: True Flutter',
                'description' => 'The user dashes at their target at blinding speeds and uses the momentum of their speed to then strengthen a single thrust into their opponent and inject poison into them.',
                'style'       => 'Insect',
            ],
            [
                'name'        => 'Dance of the Dragonfly: Compound Eye Hexagon',
                'description' => 'A six strike attack with which the user aims to strike and inject their target with multiple doses of poison at the target\'s weak spots (such as the neck, heart, torso, etc.) in order to kill them with a large dose of poison.',
                'style'       => 'Insect',
            ],
            [
                'name'        => 'Dance of the Centipede: Hundred-Legged Zigzag',
                'description' => 'An attack with which the user uses their full speed to run a zigzag pattern that confuses their opponent in order to create an opening for them to directly stab their opponent\'s neck and inject poison to kill them, with the stab\'s force and power being further enhanced by the momentum of their speed.',
                'style'       => 'Insect',
            ],

            // Serpent
            [
                'name'        => 'First Form: Winding Serpent Slash',
                'description' => 'The user moves like a slithering snake and releases several slashes in a winding pattern.',
                'style'       => 'Serpent',
            ],
            [
                'name'        => 'Second Form: Venom Fangs of the Narrow Head',
                'description' => 'The user dashes behind their opponent at blinding speed and aims to swiftly slice off their head.',
                'style'       => 'Serpent',
            ],
            [
                'name'        => 'Third Form: Coil Choke',
                'description' => 'The user circles around their opponent while using their sword to slice them from all directions.',
                'style'       => 'Serpent',
            ],
            [
                'name'        => 'Fourth Form: Twin-Headed Reptile',
                'description' => 'The user leaps forward and performs a horizontal slash that slices through the target.',
                'style'       => 'Serpent',
            ],
            [
                'name'        => 'Fifth Form: Slithering Serpent',
                'description' => 'The user curves their sword in multiple directions and slices their opponent, making it capable of decapitating multiple enemies at once.',
                'style'       => 'Serpent',
            ],

            // Flame
            [
                'name'        => 'First Form: Unknowing Fire',
                'description' => 'The user charges towards their opponent at high speeds and aims to decapitate them in one slash.',
                'style'       => 'Flame',
            ],
            [
                'name'        => 'Second Form: Rising Scorching Sun',
                'description' => 'The user releases an arching sword slash upwards.',
                'style'       => 'Flame',
            ],
            [
                'name'        => 'Third Form: Blazing Universe',
                'description' => 'The user swings their blade downwards in an arc.',
                'style'       => 'Flame',
            ],
            [
                'name'        => 'Fourth Form: Blooming Flame Undulation',
                'description' => 'The user swings their blade in a circular motion that can defend them from incoming attacks or decapitate multiple enemies at once.',
                'style'       => 'Flame',
            ],
            [
                'name'        => 'Fifth Form: Flame Tiger',
                'description' => 'The user performs a series of powerful sword slashes that seemingly takes the form of a flaming tiger.',
                'style'       => 'Flame',
            ],
            [
                'name'        => 'Ninth Form: Rengoku',
                'description' => 'A devastating dashing slash that the user initiates from a high stance, the technique had enough power to carve a deep impression that burnt the ground where it was unleashed.',
                'style'       => 'Flame',
            ],

            // Love
            [
                'name'        => 'First Form: Shivers of First Love',
                'description' => 'The user dashes forward with a series of extended whip slashes that winds around and through the target.',
                'style'       => 'Love',
            ],
            [
                'name'        => 'Second Form: Love Pangs',
                'description' => 'The user unleashes multiple powerful whip slashes around themselves.',
                'style'       => 'Love',
            ],
            [
                'name'        => 'Third Form: Catlove Shower',
                'description' => 'he user leaps and unleashes a series of ranged arced attacks in quick succession.',
                'style'       => 'Love',
            ],
            [
                'name'        => 'Fifth Form: Swaying Love, Wildclaw',
                'description' => 'The user somersaults backwards through the air creating a long whip-like string of attacks.',
                'style'       => 'Love',
            ],
            [
                'name'        => 'Sixth Form: Cat-Legged Winds of Love',
                'description' => 'The user twirls upside-down and creates multiple extending slashing attacks before retracting it and extending it again, all within a very short amount of time.',
                'style'       => 'Love',
            ],

            // Moon
            [
                'name'        => 'First Form: Dark Moon, Evening Palace',
                'description' => 'Kokushibo quickly draws his sword and slashes swiftly in a singular horizontal motion in a crescent shape, creating numerous chaotic crescent blades. This technique is extremely reminiscent of Iaijutsu.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Second Form: Pearl Flower Moongazing',
                'description' => 'Kokushibo performs several crescent-shaped slashes that defend him from incoming attacks, sending a barrage of crescent blades.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Third Form: Loathsome Moon, Chains',
                'description' => 'Kokushibo swings his sword rapidly in two gigantic crescent slashes, from which a storm of smaller crescents spread, causing huge destruction in a small area.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Fifth Form: Moon Spirit Calamitous Eddy',
                'description' => 'Kokushibo makes multiple curved slashes layered over one another, creating a rising vortex of sword slashes and crescent moon blades.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Sixth Form: Perpetual Night, Lonely Moon - Incessant',
                'description' => 'Kokushibo releases a wild barrage of crescent-shaped slashes several meters in front of him. This technique was powerful enough to overwhelm Sanemi Shinazugawa and so long-ranged that it slices up the surrounding pillars.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Seventh Form: Mirror of Misfortune, Moonlit',
                'description' => 'Kokushibo swings the gigantic version of his sword in a powerful frontal crescent-shaped slash that creates powerful multi-directional long-ranged slashes in the ground.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Eighth Form: Moon-Dragon Ringtail',
                'description' => 'Kokushibo uses the gigantic version of his sword and creates a singular gigantic crescent-shaped slash that slowly decreases in size, creating dozens of crescent moon blades.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Ninth Form: Waning Moonswaths',
                'description' => 'Kokushibo creates a stream of long-ranged crescent-shaped vertical and horizontal slashes along with numerous crescent moon blades with the gigantic version of his sword.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Tenth Form: Drilling Slashes, Moon Through Bamboo Leaves',
                'description' => 'Kokushibo creates a long-ranged triple-layered slash twister full of crescent moon blades with the gigantic version of his sword.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Fourteenth Form: Catastrophe, Tenman Crescent Moon',
                'description' => 'Kokushibo uses the gigantic version of his sword and creates a chaotic vortex of powerful extremely long-ranged omni-directional slashes that destroys whatever is caught up within its attack radius.',
                'style'       => 'Moon',
            ],
            [
                'name'        => 'Sixteenth Form: Moonbow, Half Moon',
                'description' => 'Kokushibo creates a barrage of downward crescent slashes from an extremely long and wide range, resulting in a powerful six-fold slash crashing down on his opponents; the attack itself is powerful enough to create several miniature craters where the slashes have landed.',
                'style'       => 'Moon',
            ],

            // Thunder
            [
                'name'        => 'First Form: Thunderclap and Flash',
                'description' => 'The user unsheathes their katana, dashes forward at blinding speeds and decapitates their opponent faster than they can react, before sheathing it back.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Sixfold',
                'description' => 'An extension of the Thunderclap and Flash technique created by Zenitsu. The user performs Thunderclap and Flash six times in quick succession while slightly augmenting the power and speed of his dashes.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Eightfold',
                'description' => 'An extension of the Thunderclap and Flash technique created by Zenitsu. The user performs Thunderclap and Flash eight times in quick succession while slightly augmenting the power and speed of his dashes.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'God Speed',
                'description' => 'An extension of the Thunderclap and Flash technique created by Zenitsu. The user performs Thunderclap and Flash while greatly augmenting the speed of the technique.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Second Form: Rice Spirit',
                'description' => 'Kaigaku releases five arched slashes accompanied by lightning in quick succession.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Third Form: Thunder Swarm',
                'description' => 'Kaigaku surrounds the enemy with waves of arched lightning and attacks them from all directions.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Fourth Form: Distant Thunder',
                'description' => 'Kaigaku generates a ball of electricity that releases waves of strong multi-directional lightning bolts from afar.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Fifth Form: Heat Lightning',
                'description' => 'Kaigaku unleashes a long-ranged upward sword slash accompanied by lightning.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Sixth Form: Rumble and Flash',
                'description' => 'Kaigaku releases a series of powerful long-ranged lightning attacks that strike his opponent from afar.',
                'style'       => 'Thunder'
            ],
            [
                'name'        => 'Seventh Form: Honoikazuchi no Kami',
                'description' => 'The personal creation of Zenitsu Agatsuma. The user dashes forward at blinding speeds and unleashes a singular forward slash at a low stance, which is seemingly accompanied by a yellow Japanese dragon shaped like a lightning bolt.',
                'style'       => 'Thunder'
            ],

            // Sound
            [
                'name'        => 'First Form: Roar',
                'description' => 'The user lifts their twin swords above their head and slams them down with great force whilst simultaneously creating an explosion with his bombs to deal massive physical damage, causing a loud sound resembling thunder as a result.',
                'style'       => 'Sound'
            ],
            [
                'name'        => 'Fourth Form: Constant Resounding Slashes',
                'description' => 'The user holds their swords apart and spins them rapidly in conjunction with releasing his bombs, creating massive explosions while defending themselves from attacks.',
                'style'       => 'Sound'
            ],
            [
                'name'        => 'Fifth Form: String Performance',
                'description' => 'The user holds one of their swords with a reverse grip and spins the other using the chain that connects them. They couple this by also releasing numerous bombs to detonate, causing great explosions that deal massive physical damage.',
                'style'       => 'Sound'
            ],

            // Stone
            [
                'name'        => 'First Form: Serpentinite Bipolar',
                'description' => 'The user throws both the flail and axe towards their intended target and manipulates the chain by rotating it thus causing the axe and flail to also rotate in order to drill and grind right through his target.',
                'style'       => 'Stone'
            ],
            [
                'name'        => 'Second Form: Upper Smash',
                'description' => 'The user throws both his axe and spiked flail for a pincer move before smashing down on the chain to cause the flail to then rebound and smash his target from afar.',
                'style'       => 'Stone'
            ],
            [
                'name'        => 'Third Form: Stone Skin',
                'description' => 'The user unleashes a series of slashes with his axe deflecting nearby attacks.',
                'style'       => 'Stone'
            ],
            [
                'name'        => 'Fourth Form: Volcanic Rock, Rapid Conquest',
                'description' => 'The user manipulates both the flail and axe weapons at both ends of the chain by swinging the chain on both sides in order to strike his opponents using a two pronged wide ranged attack.',
                'style'       => 'Stone'
            ],
            [
                'name'        => 'Fifth Form: Arcs of Justice',
                'description' => 'The user utilizes a powerful barrage with his flail and axe, doing a great amount of damage. The axe is destined to hit first with the trajectory of the flail following from the opposite side and slamming into the opponent.',
                'style'       => 'Stone'
            ],

            // Wind
            [
                'name'        => 'First Form: Dust Whirlwind Cutter',
                'description' => 'The user dashes forward at blinding speeds and slashes continuously in a horizontal cyclone pattern.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Second Form: Claws-Purifying Wind',
                'description' => 'The user lifts the sword upwards towards the right, above their head and unleashes four vertical slashes at once down on the enemy resembling claws.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Third Form: Clean Storm Wind Tree',
                'description' => 'The user unleashes a whirlwind of slashes around their body that can defend them from incoming attacks and slice up their surroundings.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Fourth Form: Rising Dust Storm',
                'description' => 'The user releases several slashes above them from below their target.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Fifth Form: Cold Mountain Wind',
                'description' => 'The user creates several circular arched slashes that increase in size from above their target.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Sixth Form: Black Wind Mountain Mist',
                'description' => 'The user rotates their body in an uppercut movement, creating an arcing slash.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Seventh Form: Gale, Sudden Gusts',
                'description' => 'The user leaps into the air while swinging their blade which generates gale-force winds to shred their opponent apart.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Eighth Form: Primary Gale Slash',
                'description' => 'The user dashes forward at blinding speeds and slashes continuously in a horizontal cyclone pattern.',
                'style'       => 'Wind'
            ],
            [
                'name'        => 'Ninth Form: Idaten Typhoon',
                'description' => 'The user backflips into the air and while upside-down, unleashes a powerful gust of circular wind that slashes apart anything below.',
                'style'       => 'Wind'
            ],

            // Beast
            [
                'name'        => 'First Fang: Pierce',
                'description' => 'The user stabs the target\'s neck with both blades.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Second Fang: Slice',
                'description' => 'The user unleashes a double slash with his two blades in an X-shaped cut.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Third Fang: Devour',
                'description' => 'The user releases simultaneous horizontal slashes towards the target\'s throat.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Fourth Fang: Slice \'n\' Dice',
                'description' => 'The user delivers multiple diagonal double slashes with both swords.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Fifth Fang: Crazy Cutting',
                'description' => 'The user slices everything in all directions.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Sixth Fang: Palisade Bite',
                'description' => 'The user releases simultaneous slashes with two swords from both directions.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Seventh Form: Spatial Awareness',
                'description' => 'The user utilizes their sense of touch to identify the position of enemies and their weaknesses by feeling small disturbances in the air. This technique was so strong that Inosuke Hashibira could sense all the demons spread out through a whole mountain.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Eighth Fang: Explosive Rush',
                'description' => 'The user charges towards their opponent at blinding speeds while swinging both their swords.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Ninth Fang: Extending Bendy Slash',
                'description' => 'The user dislocates the joints of their arm to increase the range of their attack and unleashes a single strike.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Tenth Fang: Whirling Fangs',
                'description' => 'The user rapidly spins their swords in a circular motion, deflecting enemy attacks.',
                'style'       => 'Beast'
            ],
            [
                'name'        => 'Sudden Throwing Strike',
                'description' => ' The user throws both of their blades at an enemy.',
                'style'       => 'Beast'
            ],

            // Mist
            [
                'name'        => 'First Form: Low Clouds, Distant Haze',
                'description' => 'The user unleashes a powerful thrust attack in front of them.',
                'style'       => 'Mist'
            ],
            [
                'name'        => 'Second Form: Eight-Layered Mist',
                'description' => 'The user unleashes eight forward slashes with each one on top of the other in extremely quick succession.',
                'style'       => 'Mist'
            ],
            [
                'name'        => 'Third Form: Scattering Mist Splash',
                'description' => 'The user releases a powerful circular slash in front of them that can be used to blow away projectiles.',
                'style'       => 'Mist'
            ],
            [
                'name'        => 'Fourth Form: Shifting Flow Slash',
                'description' => 'The user quickly unsheathes their sword and dashes towards their enemy at blinding speeds and delivers a quick slash from beneath them.',
                'style'       => 'Mist'
            ],
            [
                'name'        => 'Fifth Form: Sea of Clouds and Haze',
                'description' => 'The user dashes forward at high speed and unleashes a flurry of slashes that cover a wide area while obscuring their movements.',
                'style'       => 'Mist'
            ],
            [
                'name'        => 'Sixth Form: Lunar Dispersing Mist',
                'description' => 'The user backflips into the air while upside down and delivers countless ranged slashes downwards, capable of decimating dozens of targets at once.',
                'style'       => 'Mist'
            ],
            [
                'name'        => 'Seventh Form: Obscuring Clouds',
                'description' => 'The personal creation of Muichiro Tokito. A technique in which the user drastically changes the tempo of their movement to disorient their enemy, which seemingly takes the form of clouds of mist enveloping a wide area.',
                'style'       => 'Mist'
            ],
        ];

        foreach ($techniques as $technique) {
            BreathingStyle::whereName($technique['style'])
                ->first()
                ->techniques()
                ->create(Arr::only($technique, ['name', 'description']));
        }
    }
}
