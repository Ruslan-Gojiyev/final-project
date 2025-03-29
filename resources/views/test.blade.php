<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- @auth
        <h1>Добро пожаловать</h1> 
        <ul>
            <li>
                <a href="{{ route('logout') }}">Выйти</a>
            </li>
        </ul>
    @endauth

    @guest
        <h1>Необходимо войти в аккаунт</h1>
        <ul>
            <li>
                <a href="{{ route('login') }}">Войти</a>
            </li>
            <li>
                <a href="{{ route('register') }}">Регистрация</a>
            </li>
        </ul>


    @endguest   -->



      <div class="btn-group" role="group" aria-label="Basic example">
        @guest
        <a  href="{{ route('login') }}" type="button" class="btn btn-primary">Войти</a>
        <a  href="{{ route('register') }}" type="button" class="btn btn-primary">Регистрация</a>
        @endguest
        @auth
        <a  href="{{ route('logout') }}" type="button" class="btn btn-primary">Выйти</a>
        @endauth
    </div>  
</body>
</html>