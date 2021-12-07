<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Section;
use Illuminate\Database\Seeder;

class ItalianLevelTest extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $quiz    = [
            'name'      => 'Italian Level test',
            'is_active' => '1',
            'user_id'   => 1,
            'shuffle_quest_flg' => 1
        ];
        $results = [
            [
                'points_start' => 0,
                'points_end'   => 15,
                'name'         => 'Уровень A1'
            ],
            [
                'points_start' => 16,
                'points_end'   => 33,
                'name'         => 'Уровень A2'
            ],
            [
                'points_start' => 34,
                'points_end'   => 70,
                'name'         => 'Уровень B1'
            ],
            [
                'points_start' => 71,
                'points_end'   => 89,
                'name'         => 'Уровень B2'
            ],
            [
                'points_start' => 90,
                'points_end'   => 98,
                'name'         => 'Уровень C1'
            ],
            [
                'points_start' => 99,
                'points_end'   => 100,
                'name'         => 'Уровень C2'
            ],
        ];

        $questions = [
            [
                'question' => 'Lei come si chiama?',
                'answers'  => [
                    [
                        'answer' => 'Mi chiamo Sergio.',

                    ],
                    [
                        'answer'     => 'Mi chiami Sergio.',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'Mi chiama Sergio.',
                    ],
                ]
            ],
            [
                'question' => 'Noi abbiamo molti ________',
                'answers'  => [
                    [
                        'answer' => 'amiche',

                    ],
                    [
                        'answer'     => 'amici',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'amico',
                    ],
                ]
            ],
            [
                'question' => 'Quanti anni ha?',
                'answers'  => [
                    [
                        'answer'     => 'Ho 23 anni.',
                        'is_checked' => '1',
                        'score'      => 1

                    ],
                    [
                        'answer' => 'Sono 23 anni.',
                    ],
                    [
                        'answer' => 'Sono 23.',
                    ],
                ]
            ],
            [
                'question' => 'Che lavoro fa Marco?',
                'answers'  => [
                    [
                        'answer'     => 'Fa la barista.',
                        'is_checked' => '1',
                        'score'      => 1

                    ],
                    [
                        'answer' => 'И la barista.',
                    ],
                    [
                        'answer' => 'Fa il barista.',
                    ],
                ]
            ],
            [
                'question' => 'Dove sono ________ chiavi?',
                'answers'  => [
                    [
                        'answer'     => 'le',
                        'is_checked' => '1',
                        'score'      => 1

                    ],
                    [
                        'answer' => 'i',
                    ],
                    [
                        'answer' => 'gli',
                    ],
                ],
                [
                    'question' => '________ fai domani?',
                    'answers'  => [
                        [
                            'answer'     => 'Che',
                            'is_checked' => '1',
                            'score'      => 1

                        ],
                        [
                            'answer' => 'Quale',
                        ],
                        [
                            'answer' => 'Que',
                        ],
                    ]
                ]
            ],
            [
                'question' => '________ Guardano le donne.',
                'answers'  => [
                    [
                        'answer'     => 'Gli uomini',
                        'is_checked' => '1',
                        'score'      => 1

                    ],
                    [
                        'answer' => 'I uomi',
                    ],
                    [
                        'answer' => 'L’uomi',
                    ],
                ]
            ],
            [
                'question' => 'Quando hai visto Giovanni e Marco?',
                'answers'  => [
                    [
                        'answer' => 'Quando hanno venuto a casa mia.',
                    ],
                    [
                        'answer' => 'Quando hanno venuti a casa mia.',
                    ],
                    [
                        'answer'     => 'Quando sono venuti a casa mia.',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                ]

            ],
            [
                'question' => '________ quanti anni studi a Palermo?',
                'answers'  => [
                    [
                        'answer' => 'Da',
                    ],
                    [
                        'answer' => 'Di',
                    ],
                    [
                        'answer'     => 'Ne',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                ]
            ],
            [
                'question' => '________ pizza ci vuole la mozzarella.',
                'answers'  => [
                    [
                        'answer' => 'Per',
                    ],
                    [
                        'answer'     => 'Sulla',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'Alla',
                    ],
                ]
            ],
            [
                'question' => 'A che ora comincia la partita?',
                'answers'  => [
                    [
                        'answer' => 'Al 3.',
                    ],
                    [
                        'answer'     => 'Alle 3.',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'Alla 3.',
                    ],
                ]
            ],
            [
                'question' => 'Ho sete: c’ è ________ ?',
                'answers'  => [
                    [
                        'answer' => 'Una pesca',
                    ],
                    [
                        'answer'     => 'vino',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'forchetta',
                    ],
                ]
            ],
            [
                'question' => 'Puoi venire al supermercato con me?',
                'answers'  => [
                    [
                        'answer'     => 'No, mi dispiace, devo farmi la doccia.',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'No, mi dispiace, devo mi fare la doccia.',
                    ],
                    [
                        'answer' => 'No, mi dispiace, devo mi faccio la doccia.',
                    ],
                ]
            ],
            [
                'question' => 'Daniela ________ alle otto.',
                'answers'  => [
                    [
                        'answer'     => 'si и svegliata',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'si и sveglia',
                    ],
                    [
                        'answer' => 'и svegliata',
                    ],
                ]
            ],
            [
                'question' => 'Bella questa ________ nera e non costa molto!',
                'answers'  => [
                    [
                        'answer' => 'via',
                    ],
                    [
                        'answer' => 'banca',
                    ],
                    [
                        'answer'     => 'gonna',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'Le nostre camere danno su ________.',
                'answers'  => [
                    [
                        'answer'     => 'un cortile',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'una vasca',
                    ],
                    [
                        'answer' => 'un tavolo',
                    ],
                ]
            ],
            [
                'question' => 'I genitori di mia nonna sono i miei ________',
                'answers'  => [
                    [
                        'answer' => 'nipoti',
                    ],
                    [
                        'answer' => 'zii',
                    ],
                    [
                        'answer'     => 'bisnonni',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'Quanto ci vuole per arrivare alla stazione?',
                'answers'  => [
                    [
                        'answer' => 'Ci vuole come minimo due ore.',
                    ],
                    [
                        'answer'     => 'Ci vogliono come minimo due ore.',
                        'is_checked' => '1',
                        'score'      => 3,
                        5
                    ],
                    [
                        'answer' => 'Ci mette come minimo due ore.',

                    ],
                ]
            ],
            [
                'question' => 'Chi ha regalato i fiori a Gianna?',
                'answers'  => [
                    [
                        'answer'     => 'Glieli ha regalati Marco.',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'Gliene ha regalati Marco.',
                    ],
                    [
                        'answer' => 'Lei li ha regalati Marco.',

                    ],
                ]
            ],
            [
                'question' => 'Dove hai conosciuto Marco e Giovanna?',
                'answers'  => [
                    [
                        'answer' => 'Li ho conosciuto all`Universitа.',

                    ],
                    [
                        'answer'     => 'Li ho conosciuti all`Universitа.',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'Gli ho conosciuti all`Universitа.',

                    ],
                ]
            ],
            [
                'question' => 'Quando ________ piccolo, ________ molto.',
                'answers'  => [
                    [
                        'answer' => 'sono, ho mangiato',

                    ],
                    [
                        'answer'     => 'ero, mangiavo',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'ero, ho mangiato',

                    ],
                ]
            ],
            [
                'question' => 'Gianni! Bella questa foto! Chi ________ ________ ha scattata?',
                'answers'  => [
                    [
                        'answer'     => 'te, l’',
                        'is_checked' => '1',
                        'score'      => 3,
                        5

                    ],
                    [
                        'answer' => 'Ti l’',
                    ],
                    [
                        'answer' => 'Ti lo',
                    ],
                ]
            ],
            [
                'question' => 'Non mi _______ mai della mia prima estate in Italia.',
                'answers'  => [
                    [
                        'answer'     => 'dimenticherт',
                        'is_checked' => '1',
                        'score'      => 3,
                        5

                    ],
                    [
                        'answer' => 'dimenticherai',
                    ],
                    [
                        'answer' => 'ho dimenticato',
                    ],
                ]
            ],
            [
                'question' => 'Quando siamo arrivati alla stazione ________',
                'answers'  => [
                    [
                        'answer' => 'il treno и giа partito.',
                    ],
                    [
                        'answer'     => 'il treno era giа partito.',
                        'is_checked' => '1',
                        'score'      => 3,
                        5
                    ],
                    [
                        'answer' => 'il treno ha giа partito.',
                    ],
                ]
            ],
            [
                'question' => 'Credo che Filippo non ________ al lavoro.',
                'answers'  => [
                    [
                        'answer' => 'sia',
                    ],
                    [
                        'answer'     => 'sarai',
                        'is_checked' => '1',
                        'score'      => 3,
                        5
                    ],
                    [
                        'answer' => 'fui',
                    ],
                ]
            ],
            [
                'question' => 'lia, sei stata gentilissima! Grazie mille!',
                'answers'  => [
                    [
                        'answer' => 'Va bene!',
                    ],
                    [
                        'answer' => 'Mi raccomando!',
                    ],
                    [
                        'answer'     => 'fui',
                        'is_checked' => '1',
                        'score'      => 3,
                        5
                    ],
                ]
            ],
            [
                'question' => 'Ragazzi, ho vinto la borsa di studio!',
                'answers'  => [
                    [
                        'answer' => 'Buona fortuna!',
                    ],
                    [
                        'answer'     => 'Complimenti!',
                        'is_checked' => '1',
                        'score'      => 3,
                        5
                    ],
                    [
                        'answer' => 'Mannaggia!',
                    ],
                ]
            ],
            [
                'question' => 'Lui non parla con nessuno. Lui è ________ .',
                'answers'  => [
                    [
                        'answer' => 'gentile',
                    ],
                    [
                        'answer'     => 'taciturno',
                        'is_checked' => '1',
                        'score'      => 3,
                        5
                    ],
                    [
                        'answer' => 'pigro',
                    ],
                ]
            ],
            [
                'question' => 'Scusi, posso parlare con il dottor Marini?',
                'answers'  => [
                    [
                        'answer'     => 'Certo, Glielo passo subito!',
                        'is_checked' => '1',
                        'score'      => 3,
                        5
                    ],
                    [
                        'answer' => 'Certo, lo passo subito!',
                    ],
                    [
                        'answer' => 'Certo, gli passo subito!',
                    ],
                ]
            ],
            [
                'question' => 'Se avessi un milione di euro...',
                'answers'  => [
                    [
                        'answer' => 'viaggiassi in tutto il mondo e aiutassi i poveri.',
                    ],
                    [
                        'answer'     => 'viaggerei in tutto il mondo e aiuterei i poveri.',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'viaggiassi in tutto il mondo e aiuterei i poveri.',
                    ],
                ]
            ],
            [
                'question' => 'Ho perso il treno, altrimenti...',
                'answers'  => [
                    [
                        'answer' => 'arriverei in tempo.',
                    ],
                    [
                        'answer' => 'sono arrivato in tempo.',
                    ],
                    [
                        'answer'     => 'sarei arrivato in tempo.',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                ]
            ],
            [
                'question' => 'Dov`и la mamma?',
                'answers'  => [
                    [
                        'answer'     => 'Non lo so. Sarа andata al supermercato.',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'Non lo so. И andata al supermercato.',
                    ],
                    [
                        'answer' => 'Non lo so. Andra al supermercato.',
                    ],
                ]
            ],
            [
                'question' => 'Mario ha ________ i biglietti e noi non dobbiamo cercarli.',
                'answers'  => [
                    [
                        'answer'     => 'prenotato',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'guardato',
                    ],
                    [
                        'answer' => 'fatto',
                    ],
                ]
            ],
            [
                'question' => 'Chi ha riparato il lavandino?',
                'answers'  => [
                    [
                        'answer'     => 'Credo che l`abbia riparato papа.',
                        'is_checked' => '1',
                        'score'      => 4,
                        5
                    ],
                    [
                        'answer' => 'Credo che l`ha riparato papа.',
                    ],
                    [
                        'answer' => 'Credo che se l`abbia riparato papа.',
                    ],
                ]
            ],
            [
                'question' => 'L`insegnante ha detto che ________',
                'answers'  => [
                    [
                        'answer' => 'porterа i risultati del test il giorno dopo.',
                    ],
                    [
                        'answer'     => 'avrebbe portato i risultati del test il giorno dopo.',
                        'is_checked' => '1',
                        'score'      => 4,
                        5
                    ],
                    [
                        'answer' => 'porterebbe i risultati del test il giorno dopo.',
                    ],
                ]
            ],
            [
                'question' => 'Dante nacque a Firenze e ________',
                'answers'  => [
                    [
                        'answer'     => 'morм a Ravenna.',
                        'is_checked' => '1',
                        'score'      => 4,
                        5
                    ],
                    [
                        'answer' => 'morte a Ravenna.',
                    ],
                    [
                        'answer' => 'и morto a Ravenna.',
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
