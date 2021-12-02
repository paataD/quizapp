<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Home') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white mt-4 overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto bg-green-200">
                <h2 class="text-2xl font-bold card bg-green-600 p-4 text-gray-100 rounded-t-lg mx-auto">11</h2>
                <div class="mt-2 max-w-auto mx-auto card p-4 bg-white rounded-b-lg shadow-md">
                    <div class="grid grid-cols-1 gap-6">
                        <form action="{{route('updateQuestion', $question)}}" method="post">
                            @csrf
                            <label class="block">
                                <span class="text-gray-700">{{ __('quiz_dash.Question') }}</span>
                                @error('question')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <input name="question[question]" value="{{ old('question',  $question->question) }}" type="text" class="mt-1 block w-full text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                            </label>
                            <label class="block">
                                <span class="text-gray-700">{{ __('quiz_dash.Explanation') }}</span>
                                @error('explanation')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <textarea name="question[explanation]" type="text" class="mt-1 bg-gray-200 block w-full text-xs  bg-graygray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" rows="2">{{ old('explanation', $question->explanation) }}</textarea>
                            </label>
                            <label class="block">
                                <span class="text-gray-700">Is this question active?</span>
                                @error('is_active')
                                <span class="text-red-700 text-xs content-end float-right">{{$message}}</span>
                                @enderror
                                <select name="question[is_active]" value="{{ old('is_active') }}" class="block w-1/2 mt-1 text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                                    <option value="1">{{ __('quiz_dash.Yes') }}</option>
                                    <option value="0">{{ __('quiz_dash.No') }}</option>
                                </select>
                            </label>
                            <div class="grid grid-cols-1 my-5 justify-center">

                                @foreach($answers as $answer)
                                    <label class="flex items-center">
                                        <input type="checkbox" name="answers[{{$answer->id}}][is_checked]" {{ ($answer->is_checked == 1 )? ' checked' : ''}}>
                                        <span class="w-10/12 px-5">
                                            <input name="answers[{{$answer->id}}][answer]" value="{{ old('answers.0.answer', $answer->answer) }}" type="text" class="mt-1 text-xs block w-full bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                        </span>
                                        <span class="w-2/12">
                                            <input name="answers[{{$answer->id}}][score]" value="{{ old('answers.0.answer', $answer->score) }}" type="number" class="mt-1 block w-full text-xs  bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" />
                                        </span>
                                    </label>
                                @endforeach

                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <a href="{{route('adminhome')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent text-xs  font-semibold text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{ __('quiz_dash.Back') }}</a>
                                <x-jet-button type="submit" class="ml-4">
                                    {{ __('quiz_dash.Update') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
