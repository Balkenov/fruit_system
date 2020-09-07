@extends('layout')

@section('Content')
    <header class="major">
        <h2>Заявка на хранение фруктов</h2>

    </header>


    <form method="POST" action="{{route('apply.index')}}">
        @csrf
        <div class="form-group">
            <label class="font-weight-normal" for="exampleFormControlSelect1">Выберите фрукт</label>
            <select name="fruit_name" class="form-control form-control-lg border {{$errors->has('fruit_name') ? 'is-invalid' : ''}}" id="exampleFormControlSelect1">
                @foreach($fruits as $fruit)
                    <option>{{$fruit->name}}</option>
                @endforeach
            </select>
            @error('fruit_name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        @error('no_boxes')
            <h3 class="text-danger">{{ $message }}</h3><p>
        @enderror

        <div class="form-group">
            <label class="font-weight-normal" for="exampleFormControlSelect1">Количество в кг</label>
            <input name="quantity" type="text" class="form-control form-control-lg border {{$errors->has('quantity') ? 'is-invalid' : ''}}" id="formGroupExampleInput" placeholder="Введите количество в килограммах">
            @error('quantity')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        @error('no_space')
            <h3 class="text-danger">{{ $message }}</h3><p>
        @enderror
{{--        <div class="form-group row justify-content-center">--}}
{{--            <label class="col-sm-2 col-form-label" style="text-align: end">Название фрукта</label>--}}
{{--            <div class="col-sm-3">--}}
{{--                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{old('name')}}">--}}
{{--                @error('name')--}}
{{--                <small class="form-text text-danger">Укажите название фрукта!</small>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
        <p><div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Отправить</button>
        </div>
{{--        <p><div class="d-flex justify-content-center">--}}
{{--            <button href="{{route('fruits.index')}}" type="button" class="btn btn-secondary btn-lg btn-block">Отмена</button>--}}
{{--        </div>--}}
    </form>


    @endsection
