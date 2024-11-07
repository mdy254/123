<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Записная книжка</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('home') }}">Главная</a></li>
        <li><a href="{{ route('news.index') }}">Заметки</a></li>
        <li><a href="{{ route('news.create') }}">Добавить заметку</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
