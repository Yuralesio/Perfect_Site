@extends('layouts.app')
    <link href="/css/messenger_user.css" rel="stylesheet">
@section('title')
    Ч
@endsection

@section('content')
    <div class="container mt-5" id="io">
        <div class="container">
            @foreach($recipient as $el)
                <a href="{{route('user_page',['id'=>$el->id])}}" id="user_recipient">
                    <img src="/uploads/avatars/{{ $el->avatar }}" id="img_avatar">
                    <h4>{{ $el->name }}</h4>
                </a>
            @endforeach
            <hr>
            <div class="row" id="field_message">
                <div class="col-6">
                    @foreach($message_creator as $el)
                        <h5 class="text-primary" id="message">{{ $el->message }}</h5>
                        <p>{{ $el->created_at }}</p>
                    @endforeach
                </div>
                <div class="col-6">
                    @foreach($message_recipient as $el)
                        <h5 class="text-success" id="message">{{ $el->message }}</h5>
                        <p>{{ $el->created_at }}</p>
                    @endforeach
                </div>

            </div>
        </div>

        <form method="post" action="/message/{{$id}}/check" id="message_form">
            @csrf
            <input name="message" id="message" class="form-control mt-3">
            <button type="submit" id="getRequest" class="btn btn-success mt-4">Відправити</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('#getRequest').click(function () {

                var recipient = $("input[name=recipient]").val();
                var creator_message = $("input[name=creator_message]").val();
                var message = $("input[name=message]").val();

                $.ajax({
                    type: 'POST',
                    url: "/message/check",
                    data: {
                        recipient: recipient,
                        creator_message: creator_message,
                        message: message,
                    },
                    headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                    success: $("#message").html(data.msg),



                })
            });
        });
    </script>





@endsection
