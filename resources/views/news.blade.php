@extends('layouts.app')

@section('title', 'Новости')

@section('content')
    @guest
        <div class="banner">
            <h1>Сначала Войдите/Зарегистрируйтесь</h1>
        </div>
        <div class="nonauth">
            <img src="public\img\nonauth.png" alt="img">
        </div>
    @endguest
    @auth
        <div class="banner">
            <div class="container_wrap">
                <h1>Новости</h1>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="living_middle">
            <div class="container">
                <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
                    <ul class="feature">
                        <li><i class="icon-trophy"></i></li>
                        <li class="feature_right"><h4>Как вы получите ключи от номера</h4>
                            <p>
                                После подтверждения брони вас встретит администратор на ресепшене. Вам нужно будет
                                предъявить
                                документ, удостоверяющий личность, после чего вы получите ключи от своего номера. Процедура
                                занимает не более 5 минут.
                            </p>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                    <ul class="feature">
                        <li><i class="icon-tick"></i></li>
                        <li class="feature_right"><h4>Постельное бельё и комфорт</h4>
                            <p>
                                Во всех номерах предоставляется свежайшее, чистое и выглаженное постельное бельё. Матрасы
                                средней жёсткости, мягкие подушки и тёплое одеяло обеспечат вам крепкий и уютный сон. </p>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                    <ul class="feature">
                        <li><i class="icon-audio"></i></li>
                        <li class="feature_right"><h4>Доставка багажа</h4>
                            <p>
                                После заселения наш персонал поможет доставить ваш багаж прямо в номер. Просто сообщите
                                администратору на ресепшене — и мы позаботимся обо всём! </p>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                    <ul class="feature last_grid">
                        <li><i class="icon-video"></i></li>
                        <li class="feature_right"><h4>Строение отеля</h4>
                            <p>
                                Наш отель представляет собой современное тринадцати этажное здание с просторными номерами на
                                каждом уровне. На первом этаже расположена зона ресепшн, уютное лобби и обеденный зал.
                                Номера
                                классов "Эконом", "Комфорт" и "Люкс" размещены на остальных этажах, обеспечивая гостям
                                тишину и
                                уединение. Здание оборудовано системой видеонаблюдения и круглосуточной охраной. </p>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-8 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="educate_grid">
                        <div class="col-md-6 room-grid">
                            <div class="living_box"><div>
                                    <img src="public/images/e4.jpg" class="img-responsive" alt=""/>
                                    <span class="sale-box">
                      <span class="sale-label">Холл</span>
                    </span>
                        </div>
                                <div class="living_desc desc1">
                                    <h3>Мраморные врата</h3>
                                    <p>Оформление холла нашего отеля в раскошном классическом стиле</p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 room-grid">
                            <div class="living_box"><div>
                                    <img src="public/images/e3.jpg" class="img-responsive" alt=""/>
                                    <span class="sale-box">
                      <span class="sale-label">Номеры</span>
                    </span>
                        </div>
                                <div class="living_desc desc1">
                                    <h3>VIP номера</h3>
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
                            <div class="living_box"><div>
                                    <img src="public/images/e1.jpg" class="img-responsive" alt=""/>
                                    <span class="sale-box">
                      <span class="sale-label">Балкон</span>
                    </span>
                            </div>
                                <div class="living_desc desc1">
                                    <h3>Панорама</h3>
                                    <p>Взгляните на наш с прекрасного ракурса</p>
                                    <p class="educate"><img src="public/images/star1.png" alt=""/></p>
                                    <p class="price pr_box"> вход $150</p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 room-grid">
                            <div class="living_box"><div >
                                    <img src="public/images/e2.jpg" class="img-responsive" alt=""/>
                                    <span class="sale-box">
                      <span class="sale-label">Бассейн</span>
                    </span>
                        </div>
                                <div class="living_desc desc1">
                                    <h3>Вода</h3>
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
    @endauth
@endsection
