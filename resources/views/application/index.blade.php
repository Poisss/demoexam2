@extends('main')
@section('title','Мои заявления')
@section('content')
<div class="header">
    <div class="logo">
        <h1>Нарушениям.Нет</h1>
    </div>
    <div class="logout">
        <a href="{{route('logout')}}">
            <button>Выйти</button>
        </a>
    </div>
</div>
<h2>Мои Заявления</h2>
@if (session('message'))
    <p class="success">
        {{session('message')}}
    </p>
@endif
<p>
    <a href="{{route('apllications.create')}}"><button>Создать заявление</button></a>
</p>
<table>
    <tr>
        <td style="width: 100px">
            Номер машины
        </td>
        <td>
            Описание
        </td>
        <td style="width: 100px">
            Статус
        </td>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td style="max-width: 100px">
            {{$item->number_car}}
        </td>
        <td style="min-width: 100px">
            {{$item->description}}
        </td>
        <td style="max-width: 100px">
            {{$item->status}}
        </td>
    </tr>
    @endforeach
</table>
@endsection
