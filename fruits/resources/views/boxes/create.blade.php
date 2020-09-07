
@extends('layout')

@section('Content')
    <header class="major">
        <h2>Добавить новый ящик</h2>
    </header>


    <form method="POST" action="{{route('boxes.index')}}">
        @csrf

        <div class="form-group">
            <label class="font-weight-normal">Название</label>
            <input name="name" type="text" class="form-control form-control-lg border {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Введите название ящика">
            @error('name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-normal">Выберите фрукт</label>
            <select name="fruit_name" class="form-control form-control-lg border {{$errors->has('fruit_name') ? 'is-invalid' : ''}}">
                @foreach($fruits as $fruit)
                    <option>{{$fruit->name}}</option>
                @endforeach
            </select>
            @error('fruit_name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-normal">Вместимость в кг</label>
            <input name="capacity" type="text" class="form-control form-control-lg border {{$errors->has('capacity') ? 'is-invalid' : ''}}" placeholder="Введите количество в килограммах">
            @error('capacity')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <p><div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Создать ящик</button>
        </div>

        <p><div class="d-flex justify-content-center">
            <a href="{{route('boxes.index')}}" type="button" class="btn btn-secondary btn-lg btn-block">Отмена</a>
        </div>
    </form>


@endsection
