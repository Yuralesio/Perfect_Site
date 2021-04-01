@extends('layouts.app')

@section('title')
    Настройка профіля
@endsection

@section('content')
    <div class="container">
        <h1 class="font-weight-bold">Налаштування профіля</h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <img src="/uploads/avatars/{{ $user->avatar }}"
                         style="width: 170px; height: 175px; float:left; border-radius:50%; margin-right:25px">
                    <h2>{{ $user->name }}</h2>
                    <form enctype="multipart/form-data" action="setting" method="POST" class="mt-5">
                        <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <form method="post" class="mt-3" action="/profile/check">
                @csrf
                <label class="mt-2" for="age">Вік</label>
                <input type="number" name="age" id="age" class="form-control">
                <label class="mt-2" for="country">Країна</label>
                <input type="text" name="country" id="country" class="form-control">
                <label class="mt-2" for="city">Місто</label>
                <input type="text" name="city" id="city" class="form-control">
                <label class="mt-2" for="hobby">Хобі</label>
                <input type="text" name="hobby" id="hobby" class="form-control">
                @if($errors->all())
                    <div class="alert alert-danger mt-3">
                        @foreach($errors->all() as $error)
                            <li style="list-style-type: none">{{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                <button type="submit" class="btn btn-success mt-4">Оновити інформацію</button>
            </form>
        </div>
    </div>
@endsection
