@extends('main')
@section('title','Редактирование')
@section('content')
    <form action="{{route('apllications.update',['apllication'=>$data->id])}}" method="post">
        @method('put')
        @csrf
        <h1>Редактирование</h1>
        <h3>
            Номер машины
        </h3>
        <p>
            {{$data->number_car}}
        </p>
        <h3>
            Описание
        </h3>
        <p>
            {{$data->description}}
        </p>
        <h3>
            Статус
        </h3>
        <p>
            <label for="status">Статус</label>
            <select name="status" id="status">
                <option value="новое" {{$data->status=='новое'?'selected':''}}>новое</option>
                <option value="подтверждено" {{$data->status=='подтверждено'?'selected':''}}>подтверждено</option>
                <option value="отклонено" {{$data->status=='отклонено'?'selected':''}}>отклонено</option>
            </select>
            @foreach ($errors->get('status') as $error)
                <p class="error">
                    {{$error}}
                </p>
            @endforeach
        </p>
        <p>
            <input type="submit" value="Изминить">
        </p>
    </form>
@endsection
