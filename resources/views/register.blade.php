<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>
            Имя:
            <input type="text" name="name">
        </label>
        <label>
            Email:
            <input type="email" name="email">
        </label>
        <label>
            Пароль:
            <input type="password" name="password">
        </label>
        <label>
            Подтверждение:
            <input type="password" name="password_confirmation">
        </label>
        <button>Зарегистрироваться</button>
    </form>
</body>
</html>