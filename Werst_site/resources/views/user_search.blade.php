@extends('layouts.app')

@section('title')
    Користувачі
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="font-weight-bold">Користувачі</h1>
            </div>
            <div class="col-3">
                <form method="post" action="#">
                    <input type="text" name="user_search" id="user_search"  class="form-control">
                    <button type="submit" name="search" id="search" class="btn btn-success"> Пошук <i
                            class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <hr>
        @foreach ($users as $user)
            <div class="col-md-10 mt-5">
                <img src="/uploads/avatars/{{ $user->avatar }}"
                     style="width: 170px; height: 175px; float:left; border-radius:50%; margin-right:25px">
                <h2>{{ $user->name }}</h2>
                <div class="row">
                    <div class="col-8">
                        <div class="container mt-4">
                            <div>
                                <h3>Вік: {{ $user->infost->age }}</h3>
                            </div>
                            <div>
                                <h3>Країна: {{ $user->infost->country }}</h3>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="/friends/check">
                        @csrf
                        <input type="text" name="user_B" id="user_B" style="display:none;" value="{{ $user->id }}" class="form-control  mt-4">
                        <button type="submit" name="status" id="status" value="1" class="btn btn-success mt-3">Стежити</button>
                    </form>
                    <a href="{{route('user_page',['id'=>$user->id])}}" class="ml-2"><input type="button" class="btn btn-success mt-3 " value="Переглянути"></a>
                </div>
                <br>
                <br>
                <hr>
            </div>
        @endforeach
@endsection

