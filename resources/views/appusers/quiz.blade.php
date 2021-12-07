<x-app-layout>
    <x-slot name="title">{{ __('quiz.take_a_new_quiz')}}</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('quiz_dash.Testing') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl m-1 mx-auto sm:px-6 lg:px-8">
        <!-- Pass the variables and load Livewire component -->
        <livewire:user-quizlv />
    </div>
</x-app-layout>
