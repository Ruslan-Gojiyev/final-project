<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Deluxe | Rooms</title>
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
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
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
   	  <div class="container_wrap">
		@guest
   			<h1>Сначало Зарегестрируйтесь</h1> 
		@endguest
		@auth
			<h1>Как вам эти варианты?</h1> 
		@endauth   		
   		    <div class="clearfix"> </div>
         </div>
    </div>
    @guest
    <div class="nonauth">
    <img src="public\img\nonauth.png" alt="img">
  </div>
    @endguest
    @auth
   <div class="living_middle">
   	  <div class="container">
			@foreach($rooms as $room)
				<div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
					<div class="living_box"><a href="#">
						<img src="{{ $room->img }}" class="img-responsive" alt=""/>
						<span class="sale-box">
						<span class="sale-label">Номер</span>
						</span>
						</a>
						<div class="living_desc">
						<h3><a href="#">{{ $room->title }}</a></h3>
						<p>{{ $room->text }}</p>
						<p class="price">${{ $room->price }}</p>
						</div>
						<table border="1" class="propertyDetails">
						<tbody><tr>
						<td><img src="public/images/area.png" alt="" style="margin-right:7px;">2,412m</td>
						<td><img src="public/images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
						<td><img src="public/images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                    </tr>
                </tbody></table>
			</div>
		 </div>
		 @endforeach
   </div>
   @endauth
</body>
</html>		