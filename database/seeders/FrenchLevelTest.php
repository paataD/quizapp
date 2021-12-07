<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Section;
use Illuminate\Database\Seeder;

class FrenchLevelTest extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $quiz      = [
            'name'      => 'French Level test',
            'is_active' => '1',
            'user_id'   => 1,
            'shuffle_quest_flg' => 1
        ];
        $results   = [
            [
                'points_start' => 0,
                'points_end'   => 10,
                'name'         => 'Уровень ниже A1'
            ],
            [
                'points_start' => 11,
                'points_end'   => 25,
                'name'         => 'Уровень A1'
            ],
            [
                'points_start' => 26,
                'points_end'   => 49,
                'name'         => 'Уровень  А2'
            ],
            [
                'points_start' => 50,
                'points_end'   => 96,
                'name'         => 'Уровень B1'
            ],
            [
                'points_start' => 97,
                'points_end'   => 100,
                'name'         => 'Уровень выше B1'
            ],
        ];
        $questions = [
            [
                'question' => 'Vous avez entendu la nouvelle? Deux hommes _________ par la police pour banditisme.',
                'answers'  => [
                    [
                        'answer'     => 'ont été arrêtés',
                        'is_checked' => '1',
                        'score'      => 4

                    ],
                    [
                        'answer' => 'étaient arrêtés',
                    ],
                    [
                        'answer' => 'se sont arrêtés',
                    ],
                ]
            ],
            [
                'question' => 'Hier soir, elle _________ avec ses amies.',
                'answers'  => [
                    [
                        'answer'     => 'est sortie',
                        'is_checked' => '1',
                        'score'      => 3

                    ],
                    [
                        'answer' => 'est sorti',
                    ],
                    [
                        'answer' => 'a sorti',
                    ],
                ]
            ],
            [
                'question' => '_________ est-ce que vous partez en vacances? – Samedi!',
                'answers'  => [
                    [
                        'answer'     => 'Quand',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'Pourquoi',
                    ],
                    [
                        'answer' => 'Quel',
                    ],
                ]
            ],
            [
                'question' => '_________ est votre chanteur préféré ?',
                'answers'  => [
                    [
                        'answer' => 'Quelle',
                    ],
                    [
                        'answer'     => 'Quel',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'Qu’est-ce que',
                    ],
                ]
            ],
            [
                'question' => 'Elise! Comment s’appelle la personne _________ est venue ce matin prendre des informations?',
                'answers'  => [
                    [
                        'answer' => 'où',
                    ],
                    [
                        'answer' => 'que',

                    ],
                    [
                        'answer'     => 'qui',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'Tu connais ce restaurant, on _________ mange vraiment bien!',
                'answers'  => [
                    [
                        'answer'     => 'y',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'en',
                    ],
                    [
                        'answer' => 'à',
                    ],
                ]
            ],
            [
                'question' => 'Tu as des nouvelles d\'Eric? Je commence à m\'inquiéter. _________ là.',
                'answers'  => [
                    [
                        'answer' => 'Il n\'est presque',

                    ],
                    [
                        'answer' => 'Il n\'est rien',
                    ],
                    [
                        'answer'     => 'Il n\'est pas encore',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'J\'ai oublié de _________ offrir son cadeau d\'anniversaire. Il va être déçu.',
                'answers'  => [
                    [
                        'answer' => 'leur',
                    ],
                    [
                        'answer'     => 'lui',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'le',
                    ],
                ]
            ],
            [
                'question' => 'Ils ont annoncé une baisse des températures pour demain mais depuis une semaine _________ déjà très froid.',
                'answers'  => [
                    [
                        'answer' => 'c\'est',
                    ],
                    [
                        'answer' => 'il est',
                    ],
                    [
                        'answer'     => 'il fait',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'Je me lève en général à 6h30 (_________).',
                'answers'  => [
                    [
                        'answer'     => 'six heures et demie',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'six heures et quart',
                    ],
                    [
                        'answer' => 'six heures trente deux',

                    ],
                ]
            ],
            [
                'question' => 'Moi, je suis Médecin et ma femme est _________ dans une librairie.',
                'answers'  => [
                    [
                        'answer' => 'patissier',
                    ],
                    [
                        'answer' => 'vendeur',
                    ],
                    [
                        'answer'     => 'vendeuse',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                ]
            ],
            [
                'question' => 'Béatrice _________ des magazines scientifiques.',
                'answers'  => [
                    [
                        'answer' => 'lise',
                    ],
                    [
                        'answer'     => 'lit',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'lire',
                    ],
                ]
            ],
            [
                'question' => 'Elle parle très _________ le français mais très _________ l’anglais.',
                'answers'  => [
                    [
                        'answer' => 'mieux / mauvais',
                    ],
                    [
                        'answer'     => 'bien / mal',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'bon / meilleur',
                    ],
                ]
            ],
            [
                'question' => 'Quand le magasin _________ ses portes pour le premier jour des soldes, toutes les personnes _________ pour entrer.',
                'answers'  => [
                    [
                        'answer' => 'ouvrait / se bousculent',
                    ],
                    [
                        'answer' => 'ouvrira / se bousculeraient',
                    ],
                    [
                        'answer'     => 'a ouvert / se sont bousculées',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                ]
            ],
            [
                'question' => 'Moi, je vais bien et _________?',
                'answers'  => [
                    [
                        'answer'     => 'toi',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'il',
                    ],
                    [
                        'answer' => 'lui',
                    ],
                ]
            ],
            [
                'question' => 'Nous travaillons dans ce magasin _________ deux ans.',
                'answers'  => [
                    [
                        'answer'     => 'pendant',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'il y a',
                    ],
                    [
                        'answer' => 'depuis',
                    ],
                ]
            ],
            [
                'question' => '_________ à droite et _________ tout droit.',
                'answers'  => [
                    [
                        'answer' => 'Prenne / continue',
                    ],
                    [
                        'answer' => 'Prend / continuons',
                    ],
                    [
                        'answer'     => 'Prenez / continuez',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                ]
            ],
            [
                'question' => 'Je _________ mon travail dans 5 minutes.',
                'answers'  => [
                    [
                        'answer' => 'finit',
                    ],
                    [
                        'answer' => 'finissais',
                    ],
                    [
                        'answer'     => 'finis',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                ]
            ],
            [
                'question' => 'J\'ai faim! J\'ai envie d\'un sandwich avec _________ poulet et _________ mayonnaise.',
                'answers'  => [
                    [
                        'answer' => 'de la / du',
                    ],
                    [
                        'answer' => 'de / de',
                    ],
                    [
                        'answer'     => 'du / de la',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'Il _________ François, il est _________ et il est _________ à une italienne.',
                'answers'  => [
                    [
                        'answer'     => 's\'appelle / Français / marié',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'vous appelez / France / veuve',
                    ],
                    [
                        'answer' => 'm\'appelle / française / divorcée',

                    ],
                ]
            ],
            [
                'question' => 'Elle _________ au tennis tous les jours.',
                'answers'  => [
                    [
                        'answer'     => 'joue',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'joues',

                    ],
                    [
                        'answer' => 'jouais',

                    ],
                ]
            ],
            [
                'question' => 'J\'aime beaucoup Isabelle. C\'est _________ amie.',
                'answers'  => [
                    [
                        'answer' => 'tes',
                    ],
                    [
                        'answer'     => 'mon',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'ma',

                    ],
                ]
            ],
            [
                'question' => 'Nicole et David habitent _________ Nice _________ France.',
                'answers'  => [
                    [
                        'answer'     => 'en / à',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'au / au',
                    ],
                    [
                        'answer' => 'à / en',

                    ],
                ]
            ],
            [
                'question' => 'Ils _________ et _________ les cheveux.',
                'answers'  => [
                    [
                        'answer'     => 'se sont douchés / se sont brossé',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'se sont douché / se sont brossé',

                    ],
                    [
                        'answer' => 's\'avaient douché / s\'avaient brossé',

                    ],
                ]
            ],
            [
                'question' => 'On _________ se promener quand tu _________ ton travail',
                'answers'  => [
                    [
                        'answer' => 'irait / auras finit',

                    ],
                    [
                        'answer' => 'sera allé / aura finis',

                    ],
                    [
                        'answer'     => 'ira / auras fini',
                        'is_checked' => '1',
                        'score'      => 5

                    ],
                ]

            ],
            [
                'question' => '_________ tu ne veux pas sortir, on peut rester à la maison.',
                'answers'  => [
                    [
                        'answer' => 'En effet',
                    ],
                    [
                        'answer'     => 'Puisque',
                        'is_checked' => '1',
                        'score'      => 3

                    ],
                    [
                        'answer' => 'Donc',
                    ],
                ]

            ],
            [
                'question' => 'Pourquoi tu ne m’as pas dit que _________ ton anniversaire ? Je _________ quelque chose!',
                'answers'  => [
                    [
                        'answer' => 'ce sera / t’achetais',
                    ],
                    [
                        'answer' => 'ça aurait été / t’ai acheté',


                    ],
                    [
                        'answer'     => 'c’était / t’aurais acheté',
                        'is_checked' => '1',
                        'score'      => 5
                    ],
                ]
            ],
            [
                'question' => 'Excusez-moi! _________ m’indiquer la route pour Monaco ? – Désolé, je ne suis pas d’ici!',
                'answers'  => [
                    [
                        'answer' => 'Auriez-vous pu',
                    ],
                    [
                        'answer'     => 'Pourriez-vous',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'Avez-vous pu',

                    ],
                ]
            ],
            [
                'question' => 'Les gens _________ une vie saine ne souffrent pas de stress.',
                'answers'  => [
                    [
                        'answer' => 'menants',
                    ],
                    [
                        'answer'     => 'menant',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'en menant',

                    ],
                    [
                        'answer' => 'mené',

                    ],
                ]
            ],
            [
                'question' => 'Je ne pense pas qu\'il _________ obtenu ce poste.',
                'answers'  => [
                    [
                        'answer' => 'est',
                    ],
                    [
                        'answer'     => 'ait',
                        'is_checked' => '1',
                        'score'      => 5
                    ],
                    [
                        'answer' => 'a',

                    ],
                    [
                        'answer' => 'avait',

                    ],
                ]
            ],
        ];
        $quiz      = Section::create( $quiz );
        $quiz->results()->createMany( $results );

        foreach ( $questions as $question ) {
            $questionArr = [
                'question'   => $question['question'],
                'is_active'  => '1',
                'section_id' => $quiz->id
            ];
            $newQuestion = Question::create( $questionArr );
            if ( $question['answers'] ) {
                $newQuestion->answers()->createMany( $question['answers'] );
            }
        }
    }
}
