@extends('layout')

@section('Content')
    <header class="major">
        <h2>Успешно!</h2>
        <span class="byline">Фрукт добавлен в ящик <a class="text-bold">{{$box->name}}</a>. Теперь он заполнен на {{$box->volume}} кг из {{$box->capacity}} кг.</span>
    </header>
    <p><div class="d-flex justify-content-center">
        <a href="{{route('apply.index')}}" type="button" class="btn btn-success btn-lg btn-block">ОК</a>
    </div>
@endsection
