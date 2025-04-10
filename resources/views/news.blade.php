<!DOCTYPE HTML>
<html>
<head>
<title>Hotel DeluxeDeluxeDeluxe  | News</title>
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
   		<h1>Новости</h1>
   		    <div class="clearfix"></div>
         </div>
   </div>
   </div>
   <div class="living_middle">
   	  <div class="container">
   		  <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
   		  	<ul class="feature">
                   <li> <i class="icon-trophy"></i></li>
                    <li class="feature_right"><h4>Как вы получите ключи от номера</h4>
                    <p>
					После подтверждения брони вас встретит администратор на ресепшене. Вам нужно будет предъявить документ, удостоверяющий личность, после чего вы получите ключи от своего номера. Процедура занимает не более 5 минут.
                    </p>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature">
                   <li> <i class="icon-tick"></i></li>
                    <li class="feature_right"><h4>Постельное бельё и комфорт</h4>
                    <p>
						Во всех номерах предоставляется свежайшее, чистое и выглаженное постельное бельё. Матрасы средней жёсткости, мягкие подушки и тёплое одеяло обеспечат вам крепкий и уютный сон.                    </p>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature">
                   <li> <i class="icon-audio"></i></li>
                    <li class="feature_right"><h4>Доставка багажа</h4>
                    <p>
						После заселения наш персонал поможет доставить ваш багаж прямо в номер. Просто сообщите администратору на ресепшене — и мы позаботимся обо всём!                    </p>
                    </li>
                    <div class="clearfix"></div>
            </ul>
            <ul class="feature last_grid">
                   <li> <i class="icon-video"></i></li>
                    <li class="feature_right"><h4>Строение отеля</h4>
                    <p>
						Наш отель представляет собой современное тринадцати этажное здание с просторными номерами на каждом уровне. На первом этаже расположена зона ресепшн, уютное лобби и обеденный зал. Номера классов "Эконом", "Комфорт" и "Люкс" размещены на остальных этажах, обеспечивая гостям тишину и уединение. Здание оборудовано системой видеонаблюдения и круглосуточной охраной.                    </p>
                    </li>
                    <div class="clearfix"></div>
            </ul>
         </div>
         <div class="col-md-8 wow fadeInRight" data-wow-delay="0.4s">
          <div class="educate_grid">
            <div class="col-md-6 room-grid">
   	    	  <div class="living_box"><a href="single.html">
			    <img src="public/images/e4.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Холл</span>
			    </span>
				</a>
				<div class="living_desc desc1">
				<h3><a href="#">Мраморные врата</a></h3>
				<p>Оформление холла нашего отеля в раскошном классическом стиле</p>
				<div class="clearfix"></div>
				</div>
			  </div>
		    </div>
		    <div class="col-md-6 room-grid">
   	    	  <div class="living_box"><a href="single.html">
			    <img src="public/images/e3.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Номеры</span>
			    </span>
				</a>
				<div class="living_desc desc1">
				<h3><a href="#">VIP номера</a></h3>
				<p>Новые номера класса VIP скоро будут доступны</p>
				<p class="price pr_box"> стоимость от $1150</p>
				<div class="clearfix"></div>
				</div>
			  </div>
		    </div>
		    <div class="clearfix"></div>
		   </div>
		   <div class="educate_grid1">
            <div class="col-md-6 room-grid">
   	    	  <div class="living_box"><a href="single.html">
			    <img src="public/images/e1.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Балкон</span>
			    </span>
				</a>
				<div class="living_desc desc1">
				<h3><a href="#">Панорама</a></h3>
				<p>Взгляните на наш с прекрасного ракурса</p>
				<p class="educate"><img src="public/images/star1.png" alt=""/></p>
				<p class="price pr_box"> вход $150</p>
				<div class="clearfix"></div>
				</div>
			  </div>
		    </div>
		    <div class="col-md-6 room-grid">
   	    	  <div class="living_box"><a href="single.html">
			    <img src="public/images/e2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Бассейн</span>
			    </span>
				</a>
				<div class="living_desc desc1">
				<h3><a href="#">Вода</a></h3>
				<p>Наш бассейн оставит у вас МОРЕ эмоций</p>
				<p class="educate"><img src="public/images/star1.png" alt=""/></p>
				<p class="price pr_box">вход от $150(безлимит $250)</p>
				<div class="clearfix"></div>
				</div>
			  </div>
		    </div>
		    <div class="clearfix"></div>
		   </div>
		 </div>
      </div>
   </div>
</body>
</html>		