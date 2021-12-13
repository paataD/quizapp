<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RussianLevelTest extends Seeder {


    public function run() {
        $quiz      = [
            'name'              => 'Russian language Level test',
            'is_active'         => '1',
            'user_id'           => 1,
            'shuffle_quest_flg' => 1
        ];
        $questions = [
            [
                "question"  => "Он работает _________ университете.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer"     => "в",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "на",
                    ]
                ]
            ],
            [
                "question"  => "Я поеду домой весной в _________ .",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "феврале",
                    ],
                    [
                        "answer"     => "мае",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "июне",
                    ]
                ]
            ],
            [
                "question"  => "Скажите, пожалуйста, профессор _________ ?",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "сюда",
                    ],
                    [
                        "answer" => "туда",
                    ],
                    [
                        "answer"     => "здесь",
                        "is_checked" => "1",
                    ]
                ]
            ],
            [
                "question"  => "Вы не знаете, где дом _________ 12?",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "цифра",
                    ],
                    [
                        "answer" => "число",
                    ],
                    [
                        "answer" => "номер",
                    ]
                ]
            ],
            [
                "question"  => "Напишите, пожалуйста, _________ вашего общежития.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "дома",
                    ],
                    [
                        "answer"     => "адрес",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "улицу",
                    ]
                ]
            ],
            [
                "question"  => "В магазине «Фрукты» я покупаю _________ .",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer"     => "яблоки",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "мясо",
                    ],
                    [
                        "answer" => "рис",
                    ]
                ]
            ],
            [
                "question"  => "Скажите, _________ мы будем обедать?",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "откуда",
                    ],
                    [
                        "answer" => "куда",
                    ],
                    [
                        "answer"     => "когда",
                        "is_checked" => "1",
                    ]
                ]
            ],
            [
                "question"  => "Извините, я хочу _________ вопрос.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer"     => "задать",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "спросить",
                    ],
                    [
                        "answer" => "сказать",
                    ]
                ]
            ],
            [
                "question"  => "Сейчас он _________ русский язык.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "занимается",
                    ],
                    [
                        "answer" => "учится",
                    ],
                    [
                        "answer"     => "изучает",
                        "is_checked" => "1",
                    ]
                ]
            ],
            [
                "question"  => "Обычно я … на остановку пешком.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer"     => "иду",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "еду",
                    ],
                    [
                        "answer" => "пришел",
                    ]
                ]
            ],
            [
                "question"  => "Я _________ тебе хорошо отдохнуть.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "хочу",
                    ],
                    [
                        "answer" => "желаю",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "думаю",
                    ]
                ]
            ],
            [
                "question"  => "… ты звонила вчера?",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "Кого",
                    ],
                    [
                        "answer"     => "Кому",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "С кем",
                    ]
                ]
            ],
            [
                "question"  => "Я видела _________ по телевизору.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer"     => "его",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "у него",
                    ],
                    [
                        "answer" => "ему",
                    ]
                ]
            ],
            [
                "question"  => "Нет, я не знаю, сколько лет _________ .",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "Андрей",
                    ],
                    [
                        "answer" => "Андрея",
                    ],
                    [
                        "answer"     => "Андрею",
                        "is_checked" => "1",
                    ]
                ]
            ],
            [
                "question"  => "Он опять опоздал на _________.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "лекция",
                    ],
                    [
                        "answer"     => "лекцию",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "лекцией",
                    ]
                ]
            ],
            [
                "question"  => "Я взял словарь у _________ .",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "друг",
                    ],
                    [
                        "answer"     => "друга",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "другу",
                    ]
                ]
            ],
            [
                "question"  => "Мы поехали в библиотеку _________ .",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "на трамвай",
                    ],
                    [
                        "answer"     => "на трамвае",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "с трамваем",
                    ]
                ]
            ],
            [
                "question"  => "Москва – столица _________.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer"     => "России",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "Россия",
                    ],
                    [
                        "answer" => "Россию",
                    ]
                ]
            ],
            [
                "question"  => "Ты хорошо понимаешь _________?",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "нашему преподавателю",
                    ],
                    [
                        "answer" => "с нашим преподавателем",
                    ],
                    [
                        "answer"     => "нашего преподавателя",
                        "is_checked" => "1",
                    ]
                ]
            ],
            [
                "question"  => "Больница работает _________.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "каждого дня",
                    ],
                    [
                        "answer"     => "каждый день",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "каждым днём",
                    ]
                ]
            ],
            [
                "question"  => "Твой брат уже умеет _________.?",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "писала",

                    ],
                    [
                        "answer" => "пишет",
                    ],
                    [
                        "answer"     => "писать",
                        "is_checked" => "1",
                    ]
                ]
            ],
            [
                "question"  => "Я знаю, _________ зовут твою сестру.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "какая",

                    ],
                    [
                        "answer" => "что",
                    ],
                    [
                        "answer"     => "как",
                        "is_checked" => "1",
                    ]
                ]
            ],
            [
                "question"  => "Преподаватель сказал, _________ я хорошо занимаюсь.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "где",
                    ],
                    [
                        "answer"     => "что",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "куда",
                    ]
                ]
            ],
            [
                "question"  => "Я хочу учиться здесь, _________ мне нравится мой университет.",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer"     => "потому что",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "поэтому",
                    ],
                    [
                        "answer" => "как",
                    ]
                ]
            ],
            [
                "question"  => "Скажите, пожалуйста, _________ стоит билет?",
                "is_active" => "1",
                "answers"   => [
                    [
                        "answer" => "зачем",
                    ],
                    [
                        "answer"     => "сколько",
                        "is_checked" => "1",
                    ],
                    [
                        "answer" => "почему",
                    ]
                ]
            ]

        ];
    }
}


