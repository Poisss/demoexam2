@extends('main')
@section('title','Регистрация')
@section('content')
    <form action="{{route('apllications.store')}}" method="POST">
        @method('POST')
        @csrf
        <h1>Создание</h1>
        <p>
            <label for="number_car">Номер машины</label>
            <input id="number_car" name="number_car" type="text">
            @foreach ($errors->get('number_car') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
            <label for="description">Описание</label>
            <input id="description" name="description" type="text">
            @foreach ($errors->get('description') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <input type="submit" value="Создать">
        </p>
    </form>
@endsection
