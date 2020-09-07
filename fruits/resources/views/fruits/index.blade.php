@extends('layout')

@section('Content')
    <header class="major">
        <h2>Фрукты</h2>
        <span class="byline">Статистика по фруктам</span>
    </header>



    <table class ="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Название фрукта</th>
            <th scope="col">Количество</th>
            <th scope="col">Объем ящиков</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @php($i = 1)
        @foreach($fruits as $fruit)
            <tr>
                <th scope="row">{{$i++}}</th>
                <th>{{$fruit->name}}</th>
                <th>{{$fruit->boxes->sum('volume')}}</th>
                <th>{{$fruit->boxes->sum('capacity')}}</th>
                <th style="width: 10%"><a href="{{route('fruits.edit', $fruit)}}" type="button" class="btn btn-primary">Изменить</a></th>
                <th style="width: 10%"><a href="{{route('fruits.delete', $fruit)}}" type="button" class="btn btn-danger">Удалить</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a href="{{route('fruits.create')}}" type="button" class="btn btn-success btn-lg">Добавить новый фрукт</a>
    </div>


@endsection
