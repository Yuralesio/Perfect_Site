@extends('layouts.app')
    <link href="/css/main.css" rel="stylesheet">
@section('title')
    Головна
@endsection

@section('content')
<div id="body">
    <video width="1280" height="720" controls>
        <source src="public/uploads/video/123.mp4" type="video/mp4">
    </video>
    <div class="container-fluid">
        <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div id="img_slide" class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://miro.medium.com/max/8400/1*kUcnzFjf1UJBKHE8oj5c6g.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://miro.medium.com/max/2538/1*ThXTyLdInGOu5X0IvqDmBg.jpeg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://www.technixmw.com/wp-content/uploads/2020/06/e-learning-system.jpeg"
                         class="d-block w-100">
                </div>
            </div>
            <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button"
               data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#carouselExampleIndicators" class="carousel-control-next" role="button"
               data-slide="prev">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <h1 class="text-center font-weight-bold mt-5 ">Цікава інформація на нашому сайті</h1>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2 class="font-weight-bold">Редактори коду</h2>
                    <p class="text-justify">Для чого потрібний текстовий редактор? Які текстові
                        редактори на даний момент популярні? Який текстовий редактор вибрати для початківця?<br>
                        В цьому розділі зібрана підбірка редакторів коду для розробників, програмістів і веб-майстрів.
                        Дані редактори мають підсвічування синтаксису, в залежності від вибраної мови програмування,
                        що поволяет поліпшити якість коду, швидко знайти помилки, незакриті теги і правильно
                        структруіровать свій проект. </p>
                    <p><a href="{{   route('text_editors')   }}" class="btn btn-success ">Більше інформації &raquo;</a>
                    </p>
                </div>
                <div class="col-4">
                    <h2 class="font-weight-bold">Фреймворки</h2>
                    <p class="text-justify">Суть фреймворка полягає якраз в перекладі слова. Це програмне середовище
                        спеціального призначення, своєрідний каркас, який використовується для того, щоб істотно
                        полегшити процес об'єднання певних компонентів при створенні програм. Це основа, яка дозволяє
                        додавати компоненти в залежності від потреб. База, на якій можна сформувати програму будь-якого
                        призначення досить швидко і без особливих труднощів.</p>
                    <p><a href="{{   route('framework')   }}" class="btn btn-success ">Більше інформації &raquo;</a></p>
                </div>
                <div class="col-4">
                    <h2 class="font-weight-bold">Курси IT</h2>
                    <p class="text-justify">Гарантоване працевлаштування кращим студентам. Опануй нову професію.
                        Викладачі практики. Твій заробіток залежить тілки від тебе, такщо зберись з думками і почни
                        змінюватися не з понеділка, а прямо зараз.Не знаєш англійську не парся ми разом зможем це
                        виправити.Якщо ти ще досі їздиш на заробітки забувай це і змінюйся разом з нами. Курси розраховані
                        приблизно на 9 місяців.Так це довго якшо не почати прямо зараз.Розпочни свою карєру в ІТ </p>
                    <p><a href="{{   route('courses')   }}" class="btn btn-success ">Більше інформації &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
