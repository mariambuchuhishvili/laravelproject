@extends('layouts.shablon')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form action="{{ route('zakaz-form') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя </label>
            <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите email </label>
            <input type="text" name="email" id="email" placeholder="Введите email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Ваши желания к заказу</label>
            <textarea name="message" id="message" placeholder="Ваши желания к заказу" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
@section('footer')
@endsection
