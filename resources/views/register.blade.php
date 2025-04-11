@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')

<div class="registertab mt-5">
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

@endsection
