<x-app-layout>
    <x-slot name="title">{{ __('quiz.my_quizzes_list')}}</x-slot>
    <x-slot name="header">
        <div class="md:flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('quiz_dash.My Quizzes') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
                <div class="flex justify-between items-center py-4">
                    <a href="{{route('startQuiz')}}" class=" tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-1 px-6 items-center">{{ __('quiz_dash.Take a New Quiz') }}</a>
                    <p class="tracking-wide font-bold rounded @if(round($quizAverage,2)<70) bg-red-500 @endif  @if(round($quizAverage,2)>=70) bg-green-600 @endif text-white shadow-md py-2 px-6 items-center">{{ __('quiz_dash.Average Score') }}: <span class="mx-2"> {{round($quizAverage,2) .'%'}}</span></p>
                </div>
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-5 mx-auto">
                        <div class="flex flex-wrap -m-4 text-center">
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                        <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-xl text-gray-900">{{$sections->count()}}</h2>
                                    <p class="leading-relaxed">{{ __('quiz_dash.Quizzes') }}</p>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full ">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                        <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-xl text-gray-900">{{$questionsCount}}</h2>
                                    <p class="leading-relaxed">{{ __('quiz_dash.Questions') }}</p>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg bg-white">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-xl text-gray-900">{{$quizesTaken}}</h2>
                                    <p class="leading-relaxed">{{ __('quiz_dash.Quizzes Taken') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-gray-600 body-font">
                    <div class="p-4 w-full">
                        <div class="container px-5 py-5 mx-auto" id="chart">
                        </div>
                    </div>
                </section>
                <!-- --------------------- START NEW TABLE --------------------->
                @if($userQuizzes->isEmpty())
                <div class="px-4 py-5 sm:px-6">
                    <h1 class="text-sm leading-6 font-medium text-gray-900">
                        {{ __('quiz_dash.No Quizzes found!') }}
                    </h1>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                       {{ __('quiz_dash.looks_like_you_have_just_landed!_Once_you_have_taken_a_quiz_it_will_be_listed_here') }}
                    </p>
                </div>
                @else
                <div class=" flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="tracking-wide font-bold rounded border-2 bg-green-500 text-white  transition shadow-md py-2 px-6 items-center">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                {{ __('quiz_dash.Questions qnt') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                {{ __('quiz_dash.Status') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                {{ __('quiz_dash.Score') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">
                                                {{ __('quiz_dash.Date') }}
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($userQuizzes as $quiz)
                                        <tr class="hover:bg-green-100">
                                            <td class="px-6 ">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            <a class="text-white px-6 font-extrabold py-1 rounded-lg bg-blue-500 hover:bg-blue-600 hover:underline" href="{{route('userQuizDetails', $quiz->id)}}">
                                                                {{ $quiz->quiz_size}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-1">
                                                <div class="text-sm text-gray-900">{{ $quiz->completed ? __('quiz_dash.Completed') : __('quiz_dash.Not Completed') }}</div>
                                            </td>
                                            <td class="px-6 py-1">
                                                <div class="text-sm ">
                                                    <progress class="max-w-full  mx-auto mr-1 " id="quiz-{{$quiz->id}}" value="{{$quiz->score}}" max="100"> {{$quiz->score}} </progress> <span> {{$quiz->score .'%'}}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-1">
                                                <div class="text-sm text-gray-900">{{ $quiz->updated_at->diffForHumans()}}</div>
                                            </td>
                                            <td class="sm:flex align-middle justify-center items-center px-6 py-1 text-right text-sm font-medium">
                                                <a href="{{route('userQuizDetails', $quiz->id)}}" class="text-green-500 hover:text-green-700">
                                                    <i class="fas fa-search text-blue-500"></i>
                                                </a>
                                                @hasrole('admin')
                                                <form action="{{route('deleteUserQuiz', $quiz->id)}}" method="post">
                                                    @csrf
                                                    <a class="text-red-500 hover:text-red-700">
                                                        <button type="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 pt-1" viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </a>
                                                </form>
                                                @endrole
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $userQuizzes->links() }}
                        </div>
                    </div>
                </div>
                <!-- ---------------- END NEW TABLE --------------------- -->
                @endif
            </div>
        </div>
    </div>
    @push('js')
    <script>
        const chart = new Chartisan({
            el: '#chart',
            url: "@chart('user_quiz')",
            loader: {
                color: '#ff00ff',
                size: [60, 60],
                type: 'bar',
                textColor: '#ffff00',
                text: 'Loading some chart data...',
            },
            hooks: new ChartisanHooks()
                .colors()
                .beginAtZero()
                .title('{{__('quiz_dash.quiz_scores')}}')
                .datasets(['line'])
                .stepSize(25)
                .responsive()
        });
    </script>
    @endpush
</x-app-layout>
