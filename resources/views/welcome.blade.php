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

    <div class="relative flex items-top flex-col  justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <nav class="min-w-full  sm:px-6 lg:px-8">
            <div class="flex
            items-center
           rounded-lg shadow-lg h-16 mx-2 mt-2 mb-3 bg-white">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img class="ml-4" src="{{ asset('/images/lablang-logo.png') }}" alt="Lablang quiz" srcset="{{ asset('/images/lablang-logo@2x.png') }} 2x" />
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 mr-4">
                        Docs
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 mr-4">
                        Examples
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200">
                        Blog
                    </a>
                </div>
                <div>
                    <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
                </div>
            </div>
            </div>
        </nav>
        @if (Route::has('login'))

       {{-- <div class="fixed top-0 right-12 sm:px-15 lg:px-15 py-4 sm:block">
            @auth
            <a href="{{ route('userQuizHome') }}" class="text-sm text-gray-700 underline">Домой</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Вход</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Зарегистрироваться</a>
            @endif
            @endauth
        </div>--}}
        @endif

        <div class="min-w-full sm:px-6 lg:px-8">
               <livewire:anon-quizlv />
        </div>

    </div>

    @livewireScripts
    @include('vendor.sweetalert.alert')
    @stack('js')
</body>

</html>
