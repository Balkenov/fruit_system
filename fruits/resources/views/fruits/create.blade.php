@extends('layout')

@section('Content')

    <header class="major">
        <h2>Добавить новый фрукт в справочник</h2>
    </header>


    <form method="POST" action="{{route('fruits.index')}}">
        @csrf
        <div class="form-group">
            <label class="font-weight-normal">Название</label>
            <input name="name" type="text" class="form-control form-control-lg border {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Введите название фрукта">
            @error('name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <p><div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Добавить фрукт</button>
        </div>
        <p><div class="d-flex justify-content-center">
            <a href="{{route('fruits.index')}}" type="button" class="btn btn-secondary btn-lg btn-block">Отмена</a>
        </div>
    </form>

@endsection
