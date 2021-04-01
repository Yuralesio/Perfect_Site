@extends('layouts.app')

@section('title')
    Статті
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ваші заслуги</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <h1 class="text-center">{{ Auth::user()->name }}</h1>
                        <img class="rounded" src="/uploads/avatars/{{ Auth::user()->avatar }}"
                             style="width: 170px; height: 175px; float:left; border-radius:50%; margin-right:25px">
                        <input type="button" class="btn btn-success mt-3" value="Досягнення">
                        <input type="button" class="btn btn-success mt-3" value="Рівень довіреності">
                        <input type="button" class="btn btn-success mt-3" value="Junior">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
