<div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">

    <!-- Start of quiz box -->
    @if($quizInProgress)
    <div class="px-4 -py-3 sm:px-6 ">
        <div class="flex max-w-auto justify-between">
            <h1 class="text-sm leading-6 font-medium text-gray-900">
                <span class="text-gray-400 font-extrabold p-1">{{ __('quiz.User') }}</span>
                <span class="font-bold p-2 leading-loose bg-blue-500 text-white rounded-lg">{{Auth::user()->name}}</span>
            </h1>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                <span class="text-gray-400 font-extrabold p-1">{{__('quiz.Questions')}}</span>
                <span class="font-bold p-3 leading-loose bg-blue-500 text-white rounded-full">{{$count .'/'. $quizSize}}</span>
            </p>
        </div>
    </div>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-6">
        <form wire:submit.prevent>
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 mb-2 font-medium text-gray-900">
                    <span class="mr-2 font-extrabold"> {{$count}}</span> {{$currentQuestion->question}}
                    @if($learningMode)
                    <div x-data={show:false} class="block text-xs">
                        <div class="p-1" id="headingOne">
                            <button @click="show=!show" class="underline text-blue-500 hover:text-blue-700 focus:outline-none text-xs px-3" type="button">
                                {{ __('quiz.explanation') }}
                            </button>
                        </div>
                        <div x-show="show" class="block p-2 bg-green-100 text-xs">
                            {{$currentQuestion->explanation}}
                        </div>
                    </div>
                    @endif
                </h3>
                @foreach($currentQuestion->answers as $answer)
                <label for="question-{{$answer->id}}">
                    <div class="max-w-auto px-3 py-3 m-3 text-gray-800 rounded-lg border-2 border-gray-300 text-sm ">
                        <span class="mr-2 font-extrabold"><input id="question-{{$answer->id}}" value="{{$answer->id}}" wire:model="userAnswered" type="checkbox"> </span> {{$answer->answer}}
                    </div>
                </label>
                @endforeach
                <label for="question-no-answer">
                    <div class="max-w-auto px-3 py-3 m-3 text-gray-800 rounded-lg border-2 border-gray-300 text-sm ">
                        <span class="mr-2 font-extrabold"><input id="question-no-answer" value="0" wire:model="userAnswered" type="checkbox"> </span> {{ __('quiz.don\'t_know_the_answer') }}
                    </div>
                </label>

            </div>
            <div class="flex items-center justify-end mt-4">
                @if($count < $quizSize) <button wire:click="nextQuestion" type="submit" @if($isDisabled) disabled='disabled' @endif class="m-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    {{ __('quiz.Next Question') }}
                    </button>
                    @else
                    <button wire:click="nextQuestion" type="submit" @if($isDisabled) disabled='disabled' @endif class="m-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('quiz.Show Results') }}
                    </button>
                    @endif
            </div>
        </form>
    </div>
    @endif
    <!-- end of quiz box -->

    @if($showResult)
    <section class="text-gray-600 body-font">
        <div class="bg-white border-2 border-gray-300 shadow overflow-hidden sm:rounded-lg">
            <div class="container px-5 py-5 mx-auto">
                <div class="text-center mb-5 justify-center">
                    <h1 class=" sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Результаты теста</h1>
                    <p class="text-md mt-10"> {{ __('quiz.Dear') }} <span class="font-extrabold text-blue-600 mr-2"> {{Auth::user()->name.'!'}} </span>  <a class="bg-green-300 px-2 mx-2 hover:green-400 rounded-lg underline" href="{{route('userQuizDetails',$quizid) }}">{{ __('quiz_dash.Show quiz details') }}</a></p>
                    <progress class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto" id="quiz-{{$quizid}}" value="{{$quizPecentage}}" max="100"> {{$quizPecentage}} </progress> <span> {{$quizPecentage}}% </span>
                </div>
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill=" none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">{{ __('quiz.Correct Answers') }}</span><span class="title-font font-medium">{{$currectQuizAnswers}} | {{$quizPecentage.'%'}}</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">{{ __('quiz.Total Questions') }}</span><span class="title-font font-medium">{{$totalQuizQuestions}}</span>
                        </div>
                    </div>
                    @if($currectQuizResult)
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">{{ __('quiz.result') }}</span><span class="title-font font-medium">{{$currectQuizResult['name']}}</span>
                        </div>
                    </div>
                    @endif
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">{{ __('quiz.score') }}</span><span class="title-font font-medium">{{$currectQuizScore}}</span>
                        </div>
                    </div>


                    {{--<div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium mr-5 text-purple-700">{{ __('quiz.Quiz status') }}</span><span class="title-font font-medium">{{ $quizPecentage > 70 ? 'Pass' : 'Fail' }}</span>
                        </div>
                    </div>--}}
                </div>
                <div class="mx-auto min-w-full p-2 md:flex m-2 justify-between">
                    <a href="{{route('userQuizDetails',$quizid) }}" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ __('quiz.show_quiz_details') }}</a>
                    <a href="{{route('userQuizHome')}}" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ __('quiz.passed_quizzes') }}</a>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if($setupQuiz)

    <section class="text-gray-600 mx-auto body-font">
        @if (session()->has('message'))

            <div class="alert alert-success">
                {{ session('message') }}
            </div>

        @endif
        <div class="container px-5 py-2 mx-auto">
            <div class="">
                <form class="flex flex-wrap -m-4 w-full" wire:submit.prevent="startQuiz">
                    @csrf
                    @if (!Auth::check())
                        <div class="p-4 md:w-1/2 w-full">
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Контакты</h2>
                    <label class="block">
                        <span class="text-gray-700">{{ __('auth.name') }}</span>
                        <input type="text" name="name" wire:model="name" class="block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                        @error('name') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                    </label>
                    <label class="block">
                        <span class="text-gray-700">{{ __('auth.email') }}</span>
                        <input type="email" name="email" wire:model="email" class="block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                        @error('email') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                    </label>
                    <label class="block">
                        <span class="text-gray-700">{{ __('auth.phone') }}</span>
                        <input type="text" name="name" wire:model="phone" class="block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                        @error('phone') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                    </label>
                </div>
                    @endif
                {{--<div class="p-4 md:w-1/2 w-full">

                        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Пройти тест</h2>
                        <div class="relative mx-full mb-4">
                            <select name="section" id="section_id" wire:model="sectionId" class="block w-full mt-1 rounded-md bg-gray-100 border-2 border-gray-500 focus:bg-white focus:ring-0">
                                @if($sections->isEmpty())
                                <option value="">No Quiz Sections Available Yet</option>
                                @else
                                <option value="">Выберите тест</option>
                                @foreach($sections as $section)
                                @if($section->questions_count>0)
                                <option value="{{$section->id}}">{{$section->name}}</option>
                                @endif
                                @endforeach
                                @endif
                            </select>
                            @error('sectionId') <span class="text-red-400 text-xs">{{ $message }}</span> @enderror
                        </div>


                        <button type="submit" class="block w-full text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Начать тест</button>

                </div>--}}
                </form>
            </div>
        </div>
    </section>

        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

                <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach($sections as $section)
                    <a href="#" wire:click="startQ({{ $section->id }})" class="group">
                        <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                            <img src="{{ asset('/images/quizz-placeholder.png') }}" alt="lablang-quizz" class="w-full h-full object-center object-cover group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-md text-gray-700">
                            {{ $section->name }}
                        </h3>
                        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                        >
                            Small
                        </button>

                    </a>
                    @endforeach
                </div>
            </div>
        </div>


    @endif
</div>
