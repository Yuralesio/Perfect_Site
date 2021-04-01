@extends('layouts.app')

@section('title')
    Профіль
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img class="mt-5" src="/uploads/avatars/{{ $user->avatar }}"
                     style="width: 170px; height: 175px; float:left; border-radius:50%; margin-right:25px">
                <h2>{{ $user->name }}</h2>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                            <div class="container mt-4">
                                <div>
                                    <h3>Вік: {{ $user->infost->age }}</h3>
                                </div>
                                <div>
                                    <h3>Країна: {{ $user->infost->country }}</h3>
                                </div>
                                <div>
                                    <h3>Місто: {{ $user->infost->city }}</h3></div>
                                <div>
                                    <h3>Хобі: {{ $user->infost->hobby }}</h3></div>
                            </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
