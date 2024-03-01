@extends('main')
@section('title','Заявления пользователей')
@section('content')
<h1>Все заявления</h1>
@if (session('message'))
    <p class="success">
        {{session('message')}}
    </p>
@endif
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
        <td>
            Действие
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
        <td style="width: 150px">
            <a href="{{route('apllications.edit',['apllication'=>$item->id])}}"><button>Изменить</button></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
