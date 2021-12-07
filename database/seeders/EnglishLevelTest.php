<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Section;
use Illuminate\Database\Seeder;

class EnglishLevelTest extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $quiz      = [
            'name'      => 'English Level test',
            'is_active' => '1',
            'user_id'   => 1,
            'shuffle_quest_flg' => 1
        ];
        $results   = [
            [
                'points_start' => 1,
                'points_end'   => 10,
                'name'         => 'Уровень ниже уровня Starter'
            ],
            [
                'points_start' => 11,
                'points_end'   => 32,
                'name'         => 'Уровень А1/Elementary'
            ],
            [
                'points_start' => 33,
                'points_end'   => 52,
                'name'         => 'Уровень  А2/Elementary+'
            ],
            [
                'points_start' => 53,
                'points_end'   => 90,
                'name'         => 'Уровень  B1/ Pre-Intermediate'
            ],
            [
                'points_start' => 91,
                'points_end'   => 100,
                'name'         => 'Уровень  выше B1/Intermediate'
            ]
        ];
        $questions = [
            [
                'question' => '_________ you like chocolate?',
                'answers'  => [
                    [
                        'answer' => 'Does',

                    ],
                    [
                        'answer'     => 'Do',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                ]
            ],
            [
                'question' => 'Did you go out _________ Friday evening?',
                'answers'  => [
                    [
                        'answer'     => 'on',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'it',
                    ],
                    [
                        'answer' => 'at',
                    ],
                ]
            ],
            [
                'question' => 'Are you going away _________ Easter.',
                'answers'  => [
                    [
                        'answer'     => 'at',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'in',
                    ],
                    [
                        'answer' => 'on',
                    ],
                ]
            ],
            [
                'question' => 'Craig buys things _________ flea markets.',
                'answers'  => [
                    [
                        'answer' => 'in',
                    ],
                    [
                        'answer'     => 'at',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'on',
                    ],
                ]
            ],
            [
                'question' => 'When can we meet again?',
                'answers'  => [
                    [
                        'answer'     => 'When are you free?',
                        'is_checked' => '1',
                        'score'      => 1
                    ],
                    [
                        'answer' => 'Can you help me?',

                    ],
                    [
                        'answer' => 'It was two days ago.',
                    ],
                ]
            ],
            [
                'question' => 'My aunt is going to stay with me.',
                'answers'  => [
                    [
                        'answer' => 'How was it?',
                    ],
                    [
                        'answer' => 'How do you do?',

                    ],
                    [
                        'answer'     => 'How long for?',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                ]
            ],
            [
                'question' => 'When do you study?',
                'answers'  => [
                    [
                        'answer'     => 'in the evenings',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'in the library',

                    ],
                    [
                        'answer' => 'at school',
                    ],
                ]
            ],
            [
                'question' => 'Would you prefer lemonade or orange juice?',
                'answers'  => [
                    [
                        'answer' => 'Are you sure about that?',
                    ],
                    [
                        'answer'     => 'Have you got anything else?',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'If you like.',
                    ],
                ]

            ],
            [
                'question' => 'I was very _________ in the story.',
                'answers'  => [
                    [
                        'answer' => 'interesting',
                    ],
                    [
                        'answer' => 'interests',
                    ],
                    [
                        'answer' => 'interest',
                    ],
                    [
                        'answer'     => 'interested',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                ]
            ],
            [
                'question' => 'Let\'s have dinner now.',
                'answers'  => [
                    [
                        'answer'     => 'Tom isn\'t here yet',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'There aren\'t any.',
                    ],
                    [
                        'answer' => 'You aren\'t eating.',
                    ],
                ]
            ],
            [
                'question' => 'The snow was _________ heavily when I left the house.',
                'answers'  => [
                    [
                        'answer' => 'dropping',
                    ],
                    [
                        'answer'     => 'falling',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'landing',
                    ],
                    [
                        'answer' => 'descending',
                    ],
                ]
            ],
            [
                'question' => 'I can\'t find my keys anywhere - I _________ have left them at work.',
                'answers'  => [
                    [
                        'answer' => 'can',
                    ],
                    [
                        'answer'     => 'must',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'ought',
                    ],
                    [
                        'answer' => 'would',
                    ],
                ]
            ],
            [
                'question' => 'When a car pulled out in front of her, Jane did well not to _________ control of her bicycle.',
                'answers'  => [
                    [
                        'answer' => 'miss',
                    ],
                    [
                        'answer' => 'drop',
                    ],
                    [
                        'answer'     => 'lose',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'fail',
                    ],
                ]
            ],
            [
                'question' => 'According to Richard\'s _________ the train leaves at 7 o\'clock.',
                'answers'  => [
                    [
                        'answer'     => 'information',
                        'is_checked' => '1',
                        'score'      => 2
                    ],
                    [
                        'answer' => 'knowledge',
                    ],
                    [
                        'answer' => 'advice',

                    ],
                    [
                        'answer' => 'opinion',
                    ],
                ]
            ],
            [
                'question' => 'When you stay in a country for some time you get used to the people\'s _________ of life.',
                'answers'  => [
                    [
                        'answer' => 'habit',

                    ],
                    [
                        'answer' => 'system',
                    ],
                    [
                        'answer' => 'custom',

                    ],
                    [
                        'answer'     => 'way',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'The builders are _________ good progress with the new house.',
                'answers'  => [
                    [
                        'answer' => 'doing',

                    ],
                    [
                        'answer'     => 'making',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'getting',

                    ],
                    [
                        'answer' => 'taking',
                    ],
                ]
            ],
            [
                'question' => 'She is now taking a more positive _________ to her studies and should do well.',
                'answers'  => [
                    [
                        'answer' => 'style',

                    ],
                    [
                        'answer' => 'manner',
                    ],
                    [
                        'answer' => 'behaviour',

                    ],
                    [
                        'answer'     => 'attitude',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                ]

            ],
            [
                'question' => 'My father _________ his new car for two weeks now.',
                'answers'  => [
                    [
                        'answer' => 'had',

                    ],
                    [
                        'answer'     => 'has had',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'is having',

                    ],
                    [
                        'answer' => 'has',
                    ],
                ]
            ],
            [
                'question' => 'What differences are there _________ the English spoken in the UK and the English spoken in the US?',
                'answers'  => [
                    [
                        'answer'     => 'between',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'beside',
                    ],
                    [
                        'answer' => 'among',
                    ],
                    [
                        'answer' => 'with',
                    ],
                ]
            ],
            [
                'question' => 'At 6 p.m. I started to get angry with him because he was late _________ .',
                'answers'  => [
                    [
                        'answer' => 'usually',
                    ],
                    [
                        'answer'     => 'as usual',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'typically',
                    ],
                    [
                        'answer' => 'in general',
                    ],
                ]
            ],
            [
                'question' => '_________ you get your father\'s permission, I\'ll take you skiing next weekend.',
                'answers'  => [
                    [
                        'answer' => 'Unless',
                    ],
                    [
                        'answer'     => 'Provided',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'As',
                    ],
                    [
                        'answer' => 'Although',
                    ],
                ]
            ],
            [
                'question' => 'A local company has agreed to _________ the school team with football shirts.',
                'answers'  => [
                    [
                        'answer' => 'produce',
                    ],
                    [
                        'answer' => 'contribute',
                    ],
                    [
                        'answer'     => 'supply',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'give',
                    ],
                ]
            ],
            [
                'question' => 'I really enjoy stories that are _________ in the distant future.',
                'answers'  => [
                    [
                        'answer' => 'put',
                    ],
                    [
                        'answer' => 'found',
                    ],
                    [
                        'answer' => 'placed',
                    ],
                    [
                        'answer'     => 'set',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                ]
            ],
            [
                'question' => 'That old saucepan will come in _________ when we go camping.',
                'answers'  => [
                    [
                        'answer' => 'suitable',
                    ],
                    [
                        'answer'     => 'handy',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'fitting',
                    ],
                    [
                        'answer' => 'convenient',

                    ],
                ]
            ],
            [
                'question' => 'Anyone _________ after the start of the play is not allowed in until the interval.',
                'answers'  => [
                    [
                        'answer' => 'has arrived',
                    ],
                    [
                        'answer'     => 'arriving',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'arrived',
                    ],
                    [
                        'answer' => 'arrives',

                    ],
                ]
            ],
            [
                'question' => 'I didn\'t _________ driving home in the storm so I stayed overnight in a hotel.',
                'answers'  => [
                    [
                        'answer' => 'desire',
                    ],
                    [
                        'answer'     => 'fancy',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'want',
                    ],
                    [
                        'answer' => 'prefer',

                    ],
                ]
            ],
            [
                'question' => 'The judge said that those prepared to _________ in crime must be ready to suffer the consequences.',
                'answers'  => [
                    [
                        'answer'     => 'engage',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'involve',
                    ],
                    [
                        'answer' => 'undertake',
                    ],
                    [
                        'answer' => 'enlist',

                    ],
                ]
            ],
            [
                'question' => 'Marianne seemed to take _________ at my comments on her work.',
                'answers'  => [
                    [
                        'answer' => 'annoyance',

                    ],
                    [
                        'answer'     => 'offence',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'insult',
                    ],
                    [
                        'answer' => 'indignation',

                    ],
                ]
            ],
            [
                'question' => 'You should not have a dog if you are not _________ to look after it.',
                'answers'  => [
                    [
                        'answer' => 'arranged',

                    ],
                    [
                        'answer'     => 'prepared',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'adapted',
                    ],
                    [
                        'answer' => 'decided',
                    ],
                ]
            ],
            [
                'question' => 'The farmhouse was so isolated that they had to generate their own electricity _________.',
                'answers'  => [
                    [
                        'answer'     => 'supply',
                        'is_checked' => '1',
                        'score'      => 4
                    ],
                    [
                        'answer' => 'current',
                    ],
                    [
                        'answer' => 'grid',
                    ],
                    [
                        'answer' => 'power',
                    ],
                ]
            ],
            [
                'question' => 'Peter doesn\'t like beer and _________.',
                'answers'  => [
                    [
                        'answer'     => 'neither do I',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'either do I',
                    ],
                    [
                        'answer' => 'so do I',
                    ],
                    [
                        'answer' => 'neither I do',
                    ],
                ]
            ],
            [
                'question' => 'She liked the film, _________?',
                'answers'  => [
                    [
                        'answer' => 'doesn\'t she',
                    ],
                    [
                        'answer' => 'isn\'t it',
                    ],
                    [
                        'answer'     => 'didn\'t she',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'won\'t she',
                    ],
                ]
            ],
            [
                'question' => 'If I had asked the way I _________ got lost.',
                'answers'  => [
                    [
                        'answer' => 'won\'t have',
                    ],
                    [
                        'answer' => 'hadn\'t',
                    ],
                    [
                        'answer' => 'not have',
                    ],
                    [
                        'answer'     => 'wouldn\'t have',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                ]
            ],
            [
                'question' => 'Would you mind _________ me five dollars.',
                'answers'  => [
                    [
                        'answer'     => 'lending',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'lend',
                    ],
                    [
                        'answer' => 'be going to lend',
                    ],
                    [
                        'answer' => 'to lend',

                    ],
                ]
            ],
            [
                'question' => 'The amount of money taken or the amount of goods sold after all the deductions, taxes etc., is the',
                'answers'  => [
                    [
                        'answer' => 'revenue',
                    ],
                    [
                        'answer' => 'turnover',
                    ],
                    [
                        'answer'     => 'profit',
                        'is_checked' => '1',
                        'score'      => 3
                    ],
                    [
                        'answer' => 'income',
                    ],
                ]
            ],

        ];

        $quiz = Section::create( $quiz );
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
