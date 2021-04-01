@extends('layouts.app')

@section('title')
    Друзі
@endsection

@section('content')
    <div class="container">
        <div class="container">
            <ul class="nav nav-pills mt-3">
                <li class="active mt-1"><a href="#friends" role="pill" data-toggle="tab">
                        <input type="button" class="btn btn-primary" value="Друзі"></a></li>
                <li class="mt-1"><a href="#request_to_friends" role="tab" data-toggle="pill">
                        <input type="button" class="btn btn-primary ml-3" value="Запит до друзів"></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="friends">
                    @foreach ($friends  as $friend)
                        <div class="col-md-10 mt-5">
                            <img src="/uploads/avatars/{{ $friend->friend_info->avatar}}"
                                 style="width: 170px; height: 175px; float:left; border-radius:50%; margin-right:25px">
                            <div class="row">
                                <div class="col-8">
                                    <div class="container mt-5">
                                        <h2>{{ $friend->friend_info->name}}</h2>
                                    </div>
                                </div>
                                <a href="{{route('user_page',['id'=>$friend->friend_info->id])}}" class="ml-2 mt-4"><input type="button" class="btn btn-success mt-3 " value="Переглянути"></a>
                                <a href="{{route('messenger_user',['id'=>$friend->friend_info->id])}}" class="ml-2 mt-4"><input type="button" class="btn btn-success mt-3 " value="Написати"></a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <hr>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="request_to_friends">
                    <div class="container">
                        @foreach ($requests as $request)
                            <div class="col-md-10 mt-5">
                                <img src="/uploads/avatars/{{$request->friend_info->avatar}}"
                                     style="width: 170px; height: 175px; float:left; border-radius:50%; margin-right:25px">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="container mt-5">
                                            <h2>{{ $request->friend_info->name}}</h2>
                                        </div>
                                    </div>
                                    <form method="post" action="/friends/check/true">
                                        @csrf
                                        <input type="text" name="user_A" id="user_A" style="display: none" value="{{$request->user_A}}"  class="form-control  mt-4">
                                        <input type="text" name="user_B" id="user_B" style="display: none" value="{{$request->user_B}}"  class="form-control  mt-4">
                                        <button type="submit" name="status" id="status" value="2" class="btn btn-success  mt-5">Стежити</button>
                                    </form>
                                    <form method="post" action="/friends/check/false">
                                        @csrf
                                        <input type="text" name="user_A" id="user_A" style="display: none" value="{{$request->user_A}}"  class="form-control  mt-4">
                                        <input type="text" name="user_B" id="user_B" style="display: none" value="{{$request->user_B}}" class="form-control  mt-4">
                                        <button type="submit" name="status" id="status" value="0" class="btn btn-success mt-5 ml-3">Не стежити</button>
                                    </form>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


