<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RussianLevelTest extends Seeder {


    public function run() {
        $quiz      = [
            'name'              => 'Italian Level test',
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
                        "answer"      => "здесь",
                        "is_checked"  => "1",
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
                "answers"   => []
            ],
            [
                "question"  => "Скажите, _________ мы будем обедать?",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Извините, я хочу _________ вопрос.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Сейчас он _________ русский язык.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Обычно я … на остановку пешком.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Я _________ тебе хорошо отдохнуть.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "… ты звонила вчера?",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Я видела _________ по телевизору.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Нет, я не знаю, сколько лет _________ .",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Он опять опоздал на _________.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Я взял словарь у _________ .",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Мы поехали в библиотеку _________ .",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Москва – столица _________.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Ты хорошо понимаешь _________?",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Больница работает _________.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Твой брат уже умеет _________.?",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Я знаю, _________ зовут твою сестру.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Преподаватель сказал, _________ я хорошо занимаюсь.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Я хочу учиться здесь, _________ мне нравится мой университет.",
                "is_active" => "1",
                "answers"   => []
            ],
            [
                "question"  => "Скажите, пожалуйста, _________ стоит билет?",
                "is_active" => "1",
                "answers"   => []
            ]

        ];


    }
}


