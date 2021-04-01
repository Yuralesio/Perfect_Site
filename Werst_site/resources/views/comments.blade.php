@extends('layouts.app')
    <link href="/css/comments.css" rel="stylesheet">
@section('title')
    Допомога з кодом
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($question  as $el)
                    <div class="container mt-3">
                        <h3 class="mt-2 font-weight-bold">{{ $el->subject }}</h3>
                        <div class="mt-2" id="message">{{ $el->message }}</div>
                        <hr>
                    </div>
                @endforeach
                <form method="post" action="/comments/check">
                    @csrf
                    <input type="text" name="question_id" id="question_id" style="display: none"  value="{{ $el->id }}" class="form-control  mt-4">
                    <textarea name="message" id="message" class="form-control mt-3"
                              placeholder="Ваша відповідь"></textarea>
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
        </div>
    </div>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-12">
                <img src="http://nm.tj/uploads/posts/2020-01/1580323472_real_1580228323.jpg"  class="img-thumbnail mt-4">
            </div>
        </div>
    </div>
@endsection
