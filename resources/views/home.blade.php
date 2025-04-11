@extends('layouts.app')

@section('title', 'Главная')

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
                <h1>Это все МЫ</h1>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="content_middle">
            <div class="container">
                <div class="content_middle_box">
                    <div class="top_grid">
                        @foreach($houses as $key => $house)
                            <div class="col-md-3 index-grids wow fadeInLeft" data-wow-delay="{{ $key * 0.4 }}s">
                                <div class="grid1">
                                    <div class="view view-first">
                                        <div class="index_img">
                                            <img src="{{ $house->img }}" class="img-responsive" alt=""/>
                                        </div>
                                    </div>
                                    <div class="inner_wrap">
                                        <ul class="star1 mb-3">
                                            <h4 class="green">{{ $house->title }}</h4>
                                        </ul>
                                        <h3>{{ $house->text }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
