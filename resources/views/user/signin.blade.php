@extends('main')
@section('title','Авторизация')
@section('content')
    <form action="{{route('login')}}" method="POST">
        @csrf
        <h1>Авторизация</h1>
        @if (session('message'))
            <p class="success">
                {{session('message')}}
            </p>
        @endif
        <p>
            <label for="login">Логин</label>
            <input id="login" name="login" type="text">
        </p>
        @foreach ($errors->get('login') as $error)
            <p class="error">
                {{$error}}
            </p>
        @endforeach
        <p>
            <label for="password">Пароль</label>
            <input id="password" name="password" type="password">
        </p>
        @foreach ($errors->get('password') as $error)
            <p class="error">
                {{$error}}
            </p>
        @endforeach
        <p>
            <input type="submit" value="Войти">
        </p>
        <p>
            Нету аккаунта? <a href="/signup">Зарегистрироваться</a>
       </p>
    </form>
@endsection
