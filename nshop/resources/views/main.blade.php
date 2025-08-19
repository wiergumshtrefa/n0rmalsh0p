<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>nshop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   
    <header style="background-color: #f8f9fa; padding: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1>Интернет-магазин техники "NSHOP" </h1>
            @auth
                <div>
                    <a href="{{ route('catalog') }}" style="margin-right: 10px;">Каталог</a>
                    <a href="{{ route('profile') }}" style="margin-right: 10px;">Профиль</a>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit">Выйти</button>
                    </form>
                </div>
            @else
                <div>
                    <a href="{{ route('catalog') }}" style="margin-right: 10px;">Каталог</a>
                    <a href="/register" class="btn custom-btn">Регистрация</a>
                    <a href="/login" class="btn custom-btn">Войти</a>
                </div>
            @endauth
        </div>
    </header>
 
    <main style="padding: 40px; text-align: center;">
        <h2>Добро пожаловать в наш магазин!</h2>
        <p>Здесь вы найдете лучшие товары по выгодным ценам.</p>
      
        <a href="{{ route('catalog') }}" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
            Перейти в каталог
        </a>
    </main>
 
    <footer style="background-color: #f8f9fa; padding: 20px; text-align: center;">
        &copy; {{ date('Y') }} Интернет-магазин техники. Все права защищены.
    </footer>
</body>
</html>