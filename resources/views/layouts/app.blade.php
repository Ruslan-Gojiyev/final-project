<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../../../public/style.css" rel="stylesheet">
    <title>Hotel Deluxe | @yield('title')</title>
    <link href="../../../public/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="../../../public/css/style.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../../../public/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../../public/js/login.js"></script>
    <script src="../../../public/js/jquery.easydropdown.js"></script>
    <!--Animation-->
    <script src="../../../public/js/wow.min.js"></script>
    <link href="../../../public/css/animate.css" rel='stylesheet' type='text/css'/>
    <script>
        new WOW().init();
    </script>
</head>
<body>
<div class="header">
    <div class="col-sm-8 header-left">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="../../../public/images/logo.png" alt=""/></a>
        </div>
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="../../../public/images/nav.png" alt=""/></a>
            <ul class="nav" id="nav">
                <li><a href="{{ route('home') }}">Главная страница</a></li>
                <li><a href="{{ route('rooms') }}">Номера</a></li>
                <li><a href="{{ route('news') }}">Новости</a></li>
            </ul>
            <script type="text/javascript" src="../../../public/js/responsive-nav.js"></script>
        </div>
    </div>
    <div class="col-sm-4 header_right">
        @guest
            <div id="loginContainer"><a href="#" id="loginButton"><img src="../../../public/images/login.png"><span>Войти</span></a>
                <div id="loginBox">
                    <form id="loginForm" action="{{ route('login') }}" method="POST" class="login">
                        @csrf
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email">
                            </fieldset>
                            <fieldset>
                                <label for="password">Пароль</label>
                                <input type="password" name="password" id="password">
                            </fieldset>
                            <fieldset style="display: flex; align-items: center">
                                <input type="submit" id="login" value="Войти">
                            </fieldset>
                            <fieldset>
                                <a href="{{ route('register') }}">Регистрация</a>
                            </fieldset>
                        </fieldset>
                    </form>
                </div>
            </div>
        @endguest
        @auth
            <div id="loginContainer">
                <a href="{{ route('logout') }}" title="Выйти?">
                    <img src="../../../public/images/login.png">
                    <span>Привет, {{ auth()->user()->name }}</span>
                </a>
            </div>
        @endauth
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>

@if($errors->any())
    <div class="content_middle pt-4">
        <div class="container">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <p style="color: red;">{{ $error }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endif

@section('content')
@show
</body>
</html>
