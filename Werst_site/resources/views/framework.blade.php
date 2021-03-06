@extends('layouts.app')
    <link href="/css/framework.css" rel="stylesheet">
@section('title')
    Фреймворки
@endsection

@section('content')
    <div class="container">
        <h1 class="font-weight-bold">Фреймворки</h1>
        <p>Фреймворк (англ. framework) — це набір всіляких бібліотек (інструментів) для швидкої розробки повсякденних
            (рутинних) завдань. Головна мета фреймворку — надати програмісту зручне середовище для проекту з великим і
            добре розширюваним функціоналом.</p>
        <ul>
            <h2>Переваги фреймворків:</h2>
            <li>фреймворки максимально полегшують роботу розробників, зменшуючи час розробки;</li>
            <li>завдяки фреймворкам, код виходить структурованим, зрозумілим і доступним для повторного використання;</li>
            <li>фрейморки використовують популярні шаблони проектування (наприклад, Singleton, MVC)</li>
        </ul>
        <p>Якщо в проекті ви використовуєте фреймворк, то більша частина коду і структура проекту будуть базуватись на
            цьому каркасі. Ви отримаєте як інструмент добре спроектовану систему, оминаючи чимало підводних каменів, про
            які ви навіть можете не підозрювати на початках.</p>
        <p>З іншого боку, якщо ви вирішили створювати сайт, сервіс з
            нуля, то від вас вимагається вищий рівень кваліфікації, адже спроектувати більш-менш серйозний проект — діло
            не з легких.</p>

        <h1 class="text-center">ТОП-10 фреймворків для веб-разробки в 2021</h1>
        <p>Стандарти веб-розробки постійно зростають разом зі складністю сучасних технологій. Винахід власних
            велосипедів тепер займає надто багато часу і сил. На допомогу розгубленому девелоперу поспішають фреймворки,
            готові зняти з його плечей тягар турбот.</p>
        <p>Але тут з'являється нова проблема: цих фреймворків так багато, що очі розбігаються. Для фронтенда і бекенд,
            гнучкі і жорсткі, легкі і всеосяжні, на PHP, Python, Java, JavaScript (так-так, незліченні JavaScript
            фреймворки). Загалом, на будь-який смак.</p>
        <p>Щоб ваші очі не тікали далеко, тримайте компактну добірку найкращих інструментів для веб-розробки.</p>
    </div>
    <div class="container ">
        <h1 class="text-center mt-4">5 backend-фреймворків для веб-розробки</h1>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Laravel</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/laravel.png">
                <p class="text-justify mt-4">
                    MVC-фреймворк для самого поширеного мови інтернету - PHP. Laravel досить молодий, але вже досить
                    популярний.Багато можливості, наприклад, підтримка API, доступні з коробки. Крім того є багато
                    корисних пакетів з додатковою функціональністю.</p>
                <p class="text-justify">Основна проблема Laravel - недостатня продуктивність в порівнянні з Django або
                    Express. Для важких проектів це може стати істотним мінусом.
                </p>
                <p class="text-justify">Возможно, самый большой недостаток Express, особенно для начинающих, – слишком
                    большая гибкость. Одну и ту же вещь можно сделать по-разному.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Express</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/express.png">
                <p class="text-justify mt-4 ">JavaScript-фреймворк Express злітає на хвилі популярності Node.js. Зараз
                    це один з найбільш
                    трендових інструментів веб-розробки. Його використовують великі компанії Accenture, IBM і Uber, а
                    також інші фреймворки, наприклад, Kraken, Sails і Loopback.</p>
                <p class="text-justify">Express позиціонується як мінімалістичний, швидкий і дуже гнучкий фреймворк. Він
                    надає всі необхідні
                    можливості, при цьому активно використовуючи всі переваги і потужність Node.js. Підтримує REST API.
                </p>
                <p class="text-justify">Возможно, самый большой недостаток Express, особенно для начинающих, – слишком
                    большая гибкость. Одну
                    и ту же вещь можно сделать по-разному.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Django</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/django.png">
                <p class="text-justify mt-4">Ще один популярний серед IT-лідерів (Google, YouTube, Instagram) фреймворк
                    для веб-розробки, на цей
                    раз на Python. Django має Model-View-Template-структуру і слід кращим принципам проектування: DRY і
                    Угода по конфігурації.</p>
                <p class="text-justify">Ви можете більше не турбуватися про багатьох складних і важливих речах - купа
                    надзвичайно цікавих функцій доступна прямо з коробки. Аутентифікація, обмін повідомленнями,
                    маршрутизація, робота з базою даних, адмінських частина сайту - все це Django бере на себе.
                </p>
                <p class="text-justify">Особливий пріоритет віддається безпеки. Фреймворк реалізує багато важливих
                    принципи захисту
                    самостійно, наприклад, запобігає виконанню коду на рівні шаблонів. Крім того, є ряд методів та
                    інструментів, які можуть застосовуватися на розсуд розробника.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Rails</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/rails.png">
                <p class="text-justify mt-4">Популярний Ruby-фреймворк з класичною структурою Model-View-Controller.
                    Rails успішно працює в Airbnb, GitHub, Hulu і Shopify.</p>
                <p class="text-justify">Інструмент лояльний до новачків і має невисокий початковий поріг входження.
                    Однак за сценою там чимало магії, варто зробити кілька перших кроків, і доведеться дертися на круту
                    гору. Ще один недолік - складний процес розгортання і запуску на продакшені.
                </p>
                <p class="text-justify">Щоб зробити роботу з фреймворком швидше і ефективніше, створено безліч корисних
                    гемов (gems, пакети
                    і бібліотеки), які можна підключити до вашого додатком. Rails-спільнота досить сильне і
                    доброзичливе, крім того в мережі є чимало навчальних ресурсів по цьому інструменту.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Spring</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/spring.png">
                <p class="text-justify mt-4">
                    Для повноти картини списку backend-фреймворків для веб-розробки не вистачає тільки Java. Вітайте
                    Spring - "стратегічно важливий фреймворк", професійний, досить гнучкий і дуже надійний. По суті, це
                    колекція фреймворків у фреймворку, більшість з яких може працювати незалежно один від одного.</p>
                <p class="text-justify">Навчання Spring може бути досить круте, особливо якщо ви погано знаєте Java.</p>
            </div>
        </div>
        <h1 class="text-center mt-4">5 frontend-фреймворків для веб-розробки</h1>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Angular</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/angular.png">
                <p class="text-justify mt-4">Спеціалізація Angular - повноцінні одностранічнікі (SPA), і в цьому він
                    по-справжньому хороший. Це дітище Google, яке також високо оцінили в Microsoft і Paypal.</p>
                <p class="text-justify">Для розробки використовується TypeScript, що швидше за гідність, ніж недолік.
                    Мова JavaScript дуже гнучкий, але ця гнучкість може бути причиною безлічі помилок.</p>
                <p class="text-justify">Основні мінуси Angular - його розмір у порівнянні з іншими JS-фреймворками і
                    вроджена недружніх SEO. Втім, останній недолік цілком можна виправити оптимізацією.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>React</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/react.png">
                <p class="text-justify mt-4">
                    Не дуже правильно називати React фреймворком, це скоріше бібліотека компонентів для веб-розробки.
                    Однак його значення таке велике, що історично жодне порівняння без нього не обходиться.</p>
                <p class="text-justify">
                    Розробка ведеться на особливому діалекті JavaScript - JSX. Це суміш звичного JS з таким же звичним
                    HTML. І в цілому це дуже інтерфейс-орієнтований інструмент, істотно спрощує роботу з веб-сторінкою в
                    браузері.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Vue</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/vue.jpg">
                <p class="text-justify mt-4">Розпочавшись як проект одного розробника Google, Vue.js дуже швидко виріс в
                    один з найпопулярніших JavaScript-фреймворків.</p>
                <p class="text-justify">Це дуже гнучкий інструмент з прогресивною структурою, який легко інтегрувати в
                    уже існуючі проекти. Компонентна архітектура і багата екосистема дозволяє розробляти складні додатки
                    з мінімальними витратами.</p>
                <p class="text-justify">За спиною Vue не варто який-небудь IT-гігант, але цей фреймворк для веб-розробки
                    вже в стиг заслужити визнання фронтендеров усього світу.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Ember</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/ember.png">
                <p class="text-justify mt-4">У 2015 році Ember був названий кращим JavaScript-фреймворком. Чотири роки
                    по тому він все ще популярний (що дивно в бурхливому і мінливому JS-світі). Спільнота продовжує
                    розширюватися, з'являються нові функції і релізи. Інструмент використовується в Google, Microsoft,
                    Heroku і Netflix.</p>
                <p class="text-justify">З коробки в Ember доступна двостороння прив'язка даних, а також безліч корисних
                    функцій і компонентів.</p>
                <p class="text-justify">Основна мета фреймворку - максимізувати продуктивність розробника. Для цього він
                    застосовує кращі практики програмування.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 mt-2 jumbotron" id="content">
                <h2>Backbone</h2>
                <img class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2019/03/backbone.png">
                <p class="text-justify mt-4">Backbone — це JavaScript бібліотека з RESTful JSON інтерфейсом і базується
                    на парадигмі
                    програмування Model-View-Presenter (MVP). Backbone.js відомий своїми малими розмірами та прямою
                    залежністю від бібліотеки Underscore.js. Бібліотека призначена для розробки односторінкових
                    веб-застосунків. Розроблена Джеремі Ашкінсоном, відомим завдяки CoffeeScript.</p>
                <p class="text-justify mt-4">Фреймворк володіє багатою екосистемою, яка в поєднанні з Mustache і
                    Marionette дозволяє створювати повноцінні клієнтські програми.</p>
            </div>
        </div>
    </div>

@endsection
