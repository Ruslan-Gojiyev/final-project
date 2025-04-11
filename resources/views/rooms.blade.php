@extends('layouts.app')

@section('title', 'Комнаты')

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
                <h1>Как вам эти варианты?</h1>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="living_middle">
            <div class="container">
                @foreach($rooms as $key => $room)
                    <div class="col-md-4 wow fadeInLeft" data-wow-delay="{{ $key * 0.4 }}s">
                        <div class="living_box">
                            <div>
                            <a href="{{$room->link}}" target="_blank">
                                <img src="{{ $room->img }}" class="img-responsive" alt="" style="width: 100%; height: 200px;" />
                            </a>
                                <span class="sale-box">
                                    <span class="sale-label">Номер</span>
                                </span>
                            </div>
                            <div class="living_desc">
                                <h3><div>{{ $room->title }}</div></h3>
                                <p>{{ $room->text }}</p>
                                <p class="price">${{ $room->price }}</p>
                            </div>
                            <table class="propertyDetails">
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endauth
@endsection
