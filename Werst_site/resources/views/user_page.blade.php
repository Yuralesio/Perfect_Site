@extends('layouts.app')

@section('title')
    @foreach($user as $el)
        {{ $el->name }}
    @endforeach
@endsection

@section('content')
    <div class="container">
        <h1 class="font-weight-bold">Користувач</h1>
        <div class="col-md-10 mt-5">
            @foreach($user as $el)
                <img src="/uploads/avatars/{{ $el->avatar }}"
                     style="width: 170px; height: 175px; float:left; border-radius:50%; margin-right:25px; margin-top: 0px">
                <h2 style="margin-left:220px ">{{ $el->name }}</h2>
            @endforeach
            <div class="row">
                <div class="col-12">
                    <div class="container mt-4">
                        <div>
                            <h3>Вік: {{ $el->infost->age }}</h3>
                        </div>
                        <div>
                            <h3>Країна: {{ $el->infost->country }}</h3>
                        </div>
                        <div>
                            <h3>Місто: {{ $el->infost->city }}</h3>
                        </div>
                        <div>
                            <h3>Хобі: {{ $el->infost->hobby }}</h3>
                        </div>
                        <a href="{{route('messenger_user',['id'=>$el->id])}}"><input type="button" class="btn btn-success mt-3 " value="Написати"></a>
                    </div>
                </div>
            </div>
        <a style="text-decoration: none" href="{{ route('user_friends',['id'=>$el->id])}}"><h3 class="font-weight-bold mt-5">Друзі</h3></a>
        <div class="row">
            @foreach($friends  as $friend)
                <div class="col-2">
                    <div class="container mt-2">
                        <div>
                            <div>
                                <a href="{{route('user_page',['id'=>$friend->friend_info->id])}}" style="text-decoration: none">
                                    <img src="/uploads/avatars/{{ $friend->friend_info->avatar}}"
                                                 style="width: 112px; height: 110px; float:left; border-radius:50%; margin-right:25px;">
                                    <h4>{{$friend->friend_info->name}}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
