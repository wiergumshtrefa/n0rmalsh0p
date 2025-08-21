<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Подключение через Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div id="app">
        <!-- Навигация -->
        <nav class="bg-white dark:bg-gray-800 shadow-sm">
            <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <a href="{{ url('/') }}" class="text-xl font-bold">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div class="flex items-center space-x-4">
                    <!-- Добавляем кнопку Каталог -->
                    <a href="{{ route('catalog') }}" class="px-4 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        Каталог
                    </a>

                    <!-- Добавляем кнопку Корзина -->
                    <a href="{{ route('cart') }}" class="px-4 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                        Корзина
                    </a>

                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="px-4 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                                Войти
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Регистрация
                            </a>
                        @endif
                    @else
                        <a href="{{ route('profile') }}" class="px-4 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                            Профиль
                        </a>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="px-4 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                                Выйти
                            </button>
                        </form>
                    @endguest
                </div>
            </div>
        </nav>

        <!-- Основное содержимое -->
        <main class="py-8">
            @yield('content')
        </main>
    </div>
</body>
</html>