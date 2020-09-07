@extends('layout')

@section('Content')
    <header class="major">
        <h2>No Sidebar</h2>
        <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
    </header>

    <form method="POST" action="{{route('fruits.update', $fruit)}}">
        @csrf
        @method('PUT')

        <p><div class="form-group">
            <label class="font-weight-normal">Название</label>
            <input name="name" type="text" class="form-control form-control-lg border {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{$fruit->name}}">
            @error('name')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <p><div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Сохранить</button>
        </div>

        <p><div class="d-flex justify-content-center">
            <a href="{{route('fruits.index')}}" type="button" class="btn btn-secondary btn-lg btn-block">Отмена</a>
        </div>
    </form>

@endsection
