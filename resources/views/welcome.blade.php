<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', __('quiz.quiz_system'))</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="fixed top-0 right-12 sm:px-15 lg:px-15 py-4 sm:block">
            @auth
            <a href="{{ route('userQuizHome') }}" class="text-sm text-gray-700 underline">Домой</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Вход</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Зарегистрироваться</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">

               <livewire:anon-quizlv />

        </div>

    </div>

    @livewireScripts
    @include('vendor.sweetalert.alert')
    @stack('js')
</body>

</html>
