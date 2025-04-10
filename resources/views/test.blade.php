<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="public/style.css" rel="stylesheet">
    <title>Hotel DeluxeDeluxeDeluxe  | Home</title>
    <link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="public/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="public/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="public/js/login.js"></script>
    <script src="public/js/jquery.easydropdown.js"></script>
    <!--Animation-->
    <script src="public/js/wow.min.js"></script>
    <link href="public/css/animate.css" rel='stylesheet' type='text/css' />
    <script>
      new WOW().init();
    </script>
</head>
<body>
<div class="header">
<div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="{{ route('test') }}"><img src="public/images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
							<a class="toggleMenu" href="#"><img src="public/images/nav.png" alt="" /></a>
							<ul class="nav" id="nav">
								<li><a href="{{ route('test') }}">Главная страница</a></li>
								<li><a href="{{ route('rooms') }}">Номера</a></li>
								<li><a href="{{ route('news') }}">Новости</a></li>
							</ul>
							<script type="text/javascript" src="public/js/responsive-nav.js"></script>
						</div>					
	    	    </div>
	            <div class="col-sm-4 header_right">
                    @guest
	    		      <div id="loginContainer"><a href="#" id="loginButton"><img src="public/images/login.png"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" action="{{ route('login') }}" method="POST" class="login">
                                    @csrf
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Войти">
						            	</fieldset>
							      </form>
								  <a href="{{ route('register') }}">Или Зарегестрируйтесь</a>
				              </div>
			             </div>
                    @endguest
                    @auth 
                    <div id="loginContainer"><a href="#" id="123"><img src="public/images/login.png"><span>{{ auth()->user()->name }}</span></a>
			             </div>
                   <a href="{{ route('logout') }}">Выйти</a>
                    @endauth 
		                 <div class="clearfix"> </div>
	                 </div>
	                <div class="clearfix"> </div>
    </div>
   <div class="banner">
   		@guest
   			<h1>Сначала Войдите/Зарегестрируйтесь</h1> 
		@endguest
		@auth
			<h1>Как вам эти варианты?</h1> 
		@endauth 		
   </div>
   @auth
   <div class="content_top">
   	</div>
   </div>
   <div class="content_middle">
   	  <div class="container">
   	    <div class="content_middle_box">
          <div class="top_grid">
			@foreach($houses as $house)
   			<div class="col-md-3 index-grids">
   			  <div class="grid1">
   				<div class="view view-first">
                  <div class="index_img"><img src="{{ $house->img }}" class="img-responsive" alt=""/></div>
                   </div> 
   				 <div class="inner_wrap">
   				 	<h3>{{ $house->text }}</h3>
   				 	<ul class="star1">
   				 	  <h4 class="green">{{ $house->title }}</h4>
   				 	</ul>
   				 </div>
   			   </div>
   			</div>
			@endforeach
   			<div class="clearfix"> </div>
   		</div>
   @endauth
   @guest 
  <div class="nonauth">
    <img src="public\img\nonauth.png" alt="img">
  </div>
   @endguest
</body>
</html>		
</body>
</html>