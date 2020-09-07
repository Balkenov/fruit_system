@extends('layout')

@section('Content')
    <header class="major">
        <h2>Успешно!</h2>
        <span class="byline">Фрукт добавлен в ящик {{$box->name}}. Теперь он заполнен на {{$box->volume}} из {{$box->capacity}}.</span>
    </header>
    <p><div class="d-flex justify-content-center">
        <a href="{{route('apply.index')}}" type="button" class="btn btn-success btn-lg btn-block">ОК</a>
    </div>
@endsection
