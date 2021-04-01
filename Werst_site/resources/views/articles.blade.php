@extends('layouts.app')

@section('title')
    Допомога з кодом
@endsection

@section('content')


    <div class="container">
        <ul class="nav nav-pills mt-2">
            <li class="active mt-1"><a href="#courses_1" role="pill" data-toggle="tab">
                    <input type="button" class="btn btn-primary" value="Проблемний код"></a></li>
            <li class="active mt-1"><a href="#courses_2" role="tab" data-toggle="pill">
                    <input type="button" class="btn btn-primary ml-3" value="Допомога користувачів"></a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane" id="courses_1">
                <h1 class="font-weight-bold mt-lg-5">Форма для заповнення проблеми в коді</h1>
                <form method="post" action="/review/check">
                    @csrf
                    <input type="text" name="subject" id="subject" class="form-control mt-4"
                           placeholder="Ваша проблема">
                    <textarea name="message" id="message" class="form-control mt-3" placeholder="Ваш код або детальна інформація"></textarea>
                    @if($errors->any())
                        <div class="alert alert-danger mt-4">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-success mt-4">Відправити</button>
                </form>
            </div>
            <div class="tab-pane active" id="courses_2">
                <h1 class="font-weight-bold mt-lg-5">Питання користувачів:</h1>

                @foreach($question as $el)
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{route('user_page',['id'=>$el->user_id]) }}" style="text-decoration: none">
                                    <img src="/uploads/avatars/{{ $el->creator->avatar }}"
                                     style="width: 52px; height: 52px; float: right; border-radius: 50%">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="{{route('user_page',['id'=>$el->user_id]) }}" style="text-decoration: none">
                                    <h3 style="margin-top:12px; width: 600px"  >{{ $el->creator->name }}</h3>
                                </a>
                            </div>
                        </div>
                        <h3 class="mt-4">{{ $el->subject }}</h3>
                        <div style="padding-top: 10px; padding-bottom: 10px">{{ $el->message }}</div>
                        <hr>
                        <a href={{route('comments',['id'=>$el->id]) }}><input type="button" class="btn btn-success" value="Допомогти з питанням"></a>
                    </div>

                    @foreach($el-> comments as $comment)
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-8">
                                    <div class="jumbotron"
                                         style="padding-top: 10px; padding-bottom: 10px">{{ $comment->message }}</div>
                                    <div class="text-lg-right">{{ $comment->created_at }}</div>
                                </div>
                                    <div class="col-2">
                                        <a href="{{route('user_page',['id'=>$comment->user_id]) }}"
                                           style="text-decoration: none">
                                            <h5 style="margin-top:12px; float: right">{{ $comment->creator->name }}</h5>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a href="{{route('user_page',['id'=>$comment->user_id]) }}"
                                           style="text-decoration: none">
                                            <img src="/uploads/avatars/{{ $comment->creator->avatar }}"
                                                 style="width: 42px; height: 42px; float: left; border-radius: 50%">
                                        </a>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection

