@extends('layouts.app')

@section('title')
    Друзі
@endsection

@section('content')
    <div class="container">
        <h1 class="font-weight-bold">Друзі</h1>
        <hr>
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
                    <a href="{{route('user_page',['id'=>$friend->friend_info->id])}}" class="ml-2 mt-5"><input type="button" class="btn btn-success mt-3 " value="Переглянути"></a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <hr>
            </div>
        @endforeach
    </div>
@endsection
