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
<div class="alert alert-danger" role="alert">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif
</div>

    <!-- <form action="{{ route('register') }}" method="POST">
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
    </form> -->
<div class="registertab">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Имя</label>
                <input type="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>
        </label>
        <label>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
        </label>
        <label>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>
        </label>
        <label>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Подтвердите пароль</label>
                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
            </div>
        </label>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>