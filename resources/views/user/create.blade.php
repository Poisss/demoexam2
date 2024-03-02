@extends('main')
@section('title','Регистрация')
@section('content')
    <form action="{{route('logup')}}" method="POST">
        @method('POST')
        @csrf
        <h1>Регистрация</h1>
        <p>
            <label for="first_name">Имя</label>
            <input id="first_name" name="first_name" type="text">
            @foreach ($errors->get('first_name') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <label for="last_name">Фамилия</label>
            <input id="last_name" name="last_name" type="text">
            @foreach ($errors->get('last_name') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <label for="patronymic">Отчество</label>
            <input id="patronymic" name="patronymic" type="text">
            @foreach ($errors->get('patronymic') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <label for="email">Email</label>
            <input id="email" name="email" type="text">
            @foreach ($errors->get('email') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <label for="phone">Номер тел.</label>
            <input id="phone" name="phone" type="text" placeholder="+7(xxx)-xxx-xx-xx">
            @foreach ($errors->get('phone') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <label for="login">Логин</label>
            <input id="login" name="login" type="text">
            @foreach ($errors->get('login') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <label for="password">Пароль</label>
            <input id="password" name="password" type="password">
            @foreach ($errors->get('password') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <input type="submit" value="Создать">
        </p>
       <p>
            Уже есть аккаунт? <a href="/signin">Авторизоваться</a>
       </p>
    </form>
@endsection
