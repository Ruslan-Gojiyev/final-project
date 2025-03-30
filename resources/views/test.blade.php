<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h4 class="card-title">Добо Пожаловать!</h4>
    @guest
            <a  href="{{ route('login') }}" type="button" class="btn btn-primary ">Войти</a>
            <a  href="{{ route('register') }}" type="button" class="btn btn-primary">Регистрация</a>
            <h8>Войдите или зарегестрируйтесь!</h8>
        @endguest
        @auth
            <a  href="{{ route('logout') }}" type="button" class="btn btn-primary">Выйти</a>
        @endauth<br>
    
  </div>
</div>
</body>
</html>