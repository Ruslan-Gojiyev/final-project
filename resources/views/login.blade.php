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
    <!-- <form action="{{ route('login') }}" method="POST">
        @csrf
        <label>
            Email:
            <input type="email" name="email">
        </label>
        <label>
            Пароль:
            <input type="password" name="password">
        </label>
        <button>Войти</button>
    </form>  -->


<div class="logintab">
    <form action="{{ route('login') }}" method="POST" class="login">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
    <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
</body>
</html>