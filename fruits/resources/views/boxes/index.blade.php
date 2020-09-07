
@extends('layout')

@section('Content')
    <header class="major">
        <h2>Ящики</h2>
        <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
    </header>


    <table class ="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Название ящика</th>
            <th scope="col">Фрукт</th>
            <th scope="col">Вместимость</th>
            <th scope="col">Текущая заполненность</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @foreach($boxes as $box)
            <tr>
                <th scope="row">{{$i++}}</th>
                <th>{{$box->name}}</th>
                <th>{{$box->fruit->name}}</th>
                <th>{{$box->capacity}}</th>
                <th>{{$box->volume}}</th>
                <th style="width: 10%"><a href="{{route('boxes.edit', $box)}}" type="button" class="btn btn-primary">Изменить</a></th>
                <th style="width: 10%"><a href="{{route('boxes.delete', $box)}}" type="button" class="btn btn-danger">Удалить</a></th>
{{--                <th><button class="btn btn-danger" onclick="window.location.href='/'">Continue</button></th>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{route('boxes.create')}}" type="button" class="btn btn-success btn-lg">Добавить новый ящик</a>
    </div>


@endsection
