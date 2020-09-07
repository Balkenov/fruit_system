
@extends('layout')

@section('Content')
    <header class="major">
        <h2>Редактирование ящика "{{$box->name}}"</h2>
    </header>


    <form method="POST" action="{{route('boxes.update', $box)}}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="font-weight-normal">Название</label>
            <input name="name" type="text" class="form-control form-control-lg border {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{$box->name}}">
            @error('name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-normal">Фрукт для хранения</label>
            <select name="fruit_name" class="form-control form-control-lg border {{$errors->has('fruit_name') ? 'is-invalid' : ''}}">
                @foreach($fruits as $fruit)
                    <option @if($fruit == $box->fruit) selected @endif> {{$fruit->name}} </option>
                @endforeach
            </select>
            @error('fruit_name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-normal">Вместимость</label>
            <input name="capacity" type="text" class="form-control form-control-lg border {{$errors->has('capacity') ? 'is-invalid' : ''}}" value="{{$box->capacity}}">
            @error('capacity')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-normal">Текущий объем</label>
            <input name="volume" type="text" class="form-control form-control-lg border {{$errors->has('volume') ? 'is-invalid' : ''}}" value="{{$box->volume}}">
            @error('volume')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <p><div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Сохранить</button>
        </div>

        <p><div class="d-flex justify-content-center">
            <a href="{{route('boxes.index')}}" type="button" class="btn btn-secondary btn-lg btn-block">Отмена</a>
        </div>
    </form>

@endsection
