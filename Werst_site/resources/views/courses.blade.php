@extends('layouts.app')

@section('title')
    Курси
@endsection


@section('content')
    <div class="container">
        <h1 class="font-weight-bold">Курси - для початку освоєння Веб-розробки </h1>
        <div class="container">
            <ul class="nav nav-pills mt-3">
                <li class="active mt-1"><a href="#courses_1" role="pill" data-toggle="tab">
                        <input type="button" class="btn btn-primary" value="Курс Основи Web UI розробки"></a></li>
                <li class="mt-1"><a href="#courses_2" role="tab" data-toggle="pill">
                        <input type="button" class="btn btn-primary ml-3" value="Курс PHP &#8372"></a></li>
                <li class="mt-1"><a href="#courses_3" role="pill" data-toggle="tab">
                        <input type="button" class="btn btn-primary ml-3" value="Курс Bootstrap"></a></li>
                <li class="mt-1"><a href="#courses_4" role="pill" data-toggle="tab">
                        <input type="button" class="btn btn-primary ml-3" value="Курс Laravel"></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="courses_1">
                    <h2 class="mt-4">Основи Web UI розробки 2020 </h2>
                    <img  class="img-thumbnail" src="https://courses.prometheus.org.ua/asset-v1:LITS+114+2020_T3+type@asset+block@webui_prometeus_b.png">
                    <div class="row">
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Про курс</h4>
                            <p class="text-justify">Веб програмування або веб розробка – це створення динамічних веб додатків та веб сайтів, яскравими
                                прикладами яких є соціальні мережі, наприклад, Facebook, сайти електронної комерції типу Amazon, а
                                також різноманітні корпоративні сайти та сайти-візитки.</p>
                            <p class="text-justify">Багато людей вивчають веб програмування, тому що хочуть створити новий Facebook або знайти роботу в
                                IT-сфері. Хтось просто цікавиться тим, як працює веб і хоче отримати загальне уявлення про
                                програмування. Так чи інакше, якщо ви мрієте про кар’єру у сфері розробки програмного забезпечення
                                чи цікавитесь для загального розвитку, вебпрограмування – це хороший вибір, адже: </p>
                            <ul>
                                <li>Почати навчання дуже легко.</li>
                                <li> У мережі багато тренінгів, онлайн-посібників, які дозволяють швидко освоїти ту чи іншу мову
                                    програмування або бібліотеку.
                                </li>
                            </ul>

                        </div>
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Програма курсу</h4>
                            <p class="text-justify">В процесі вивчення курсу ми поговоримо про такі теми:</p>
                            <ul>
                                <li>Історія та найновіші тренди у веб розробці</li>
                                <li>Як працює інтернет та веб браузери?</li>
                                <li>В чому різниця між client-side та server-side розробкою?</li>
                                <li>Специфіка роботи front-end розробника</li>
                                <li>Середовища розробки</li>
                                <li> HTML/CSS/Javascript, як базові мови веб програмування та як писати прості застосунки за їх
                                    допомогою
                                </li>
                            </ul>

                            <h4 class="font-weight-bold">Тривалість курсу</h4>
                            <p class="text-justify">5 тижнів. Матеріали кожного нового тижня відкриваються щопонеділка.</p>
                            <a class="text-right" href="https://courses.prometheus.org.ua/courses/course-v1:LITS+114+2020_T3/about"><input
                                    type="button" class="btn btn-success mt-3" value="Почати курс"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="courses_2">
                    <h2 class="mt-4">Основи PHP </h2>
                    <img  class="img-thumbnail" src="https://forwww.com/wp-content/uploads/2018/01/php-2-min.png.pagespeed.ce.2ORfDYs3Rr.png">
                    <div class="row">
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Про курс</h4>
                            <p class="text-justify">Мова PHP – скриптова мова програмування веб-додатків. Середовище
                                розробки PHP застосовується для написання динамічних веб-сайтів, соціальних мереж,
                                блогів, в сфері електронної комерції. Як приклади, написані на PHP, можна назвати
                                Вікіпедію, Facebook, Flickr, Twitter, систему управління контентом WordPress, Drupal, а
                                також фреймворки Zend, Symfony, Yii.</p>
                            <p class="text-justify">PHP-розробники будують кар’єру як на фріланс-біржах, так і в
                                прогресивних компаніях. Курс PHP ведуть фахівці-практики з найбільших ІТ-компаній. Уроки
                                PHP розроблені за принципом «мінімум теорії, максимум практики», а це означає, що
                                навчання буде цікавим, ефективним і насиченим. </p>
                            <p class="text-justify text-danger font-weight-bold">Курс по вивченю PHP є платним </p>
                        </div>
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Програма курсу</h4>
                            <p class="text-justify">В процесі вивчення курсу ми поговоримо про такі теми:</p>
                            <ul>
                                <li>Історія та найновіші тренди у веб розробці.</li>
                                <li>Як працює інтернет та веб браузери?</li>
                                <li>В чому сила PHP?</li>
                                <li>Середовища розробки.</li>
                                <li>PHP, як базова мова веб програмування та як писати застосунки за їх допомогою.</li>
                            </ul>

                            <h4 class="font-weight-bold">Тривалість курсу</h4>
                            <p class="text-justify">7-10 тижнів.</p>
                            <a class="text-right" href="https://lviv.itea.ua/courses-itea/php/"><input
                                    type="button" class="btn btn-success mt-3" value="Почати курс"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="courses_3">
                    <h2 class="mt-4">Основи Bootstrap </h2>
                    <img  class="img-thumbnail" src="https://media.proglib.io/wp-uploads/2018/03/ogp3.png">
                    <div class="row">
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Про курс</h4>
                            <p class="text-justify">Bootstrap - це css-фреймворк з готовими css-класами і html / jquery
                                компонентами, за допомогою яких, ви дуже швидко зможете створити інтерфейс веб-сайту,
                                здатний адаптуватися під мобільні пристрої.</p>
                            <p class="text-justify">За допомогою Bootstrap, верстка сайтів ставати схожа на збірку
                                конструктора з деталей. Ви зможете за кілька хвилин вбудувати верстку на ваш сайт
                                наступних популярних компонентів: Адаптивне горизонтальне меню, красиві кнопки,
                                html-форми з додатковими елементами, прогрес бар, каталог товарів і багато іншого!</p>
                            <p class="text-justify">Програма навчання складається з відео уроків по фреймворку Bootstap,
                                а також включає інтерактивні тести і уроки верстки Bootstrap, що дозволяють закріпити
                                отримані вами знання з Bootstrap програмування і створення сайтів.</p>
                        </div>
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Програма курсу</h4>
                            <p class="text-justify">В уроках Bootstrap ви дізнаєтеся:</p>
                            <ul>
                                <li>Що таке Grid-system і як позиціонувати блоки на сайті</li>
                                <li>Як швидко зверстати веб-сайт за допомогою Bootstrap</li>
                                <li>Як зробити горизонтальне і вертикальне меню</li>
                                <li>Які існують компоненти в Bootstrap</li>
                                <li>Як вставити картинку на сторінку і зробити її адаптивної</li>
                                <li> Як швидко зробити карусель зображень на сайті</li>
                            </ul>

                            <h4 class="font-weight-bold">Тривалість курсу</h4>
                            <p class="text-justify">4-6 тижнів. Матеріали відкритий.</p>
                            <a class="text-right" href="https://fructcode.com/ru/courses/bootstrap/"><input
                                    type="button" class="btn btn-success mt-3" value="Почати курс"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="courses_4">
                    <h2 class="mt-4">Основи Laravel</h2>
                    <img  class="img-thumbnail" src="https://www.axsel.com.my/wp-content/uploads/2016/04/laravel-web.jpg">
                    <div class="row">
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Про курс</h4>
                            <p class="text-justify">Laravel - популярний веб-фреймворк на PHP, призначений для швидкої
                                розробки сайтів. Він поєднує в собі великі можливості складних фреймворків і простоту
                                написання коду з мінімумом конфігурації.</p>
                            <p class="text-justify">Цей фреймворк набирає популярності з кожним роком. Він з'явився в
                                2011-му, але пік затребуваності доводиться на 2017-й і по сей день.</p>
                            <p class="text-justify">Якщо переглянути вакансії, де шукають програмістів, то Laravel буде
                                одним з ключових вимог. Відповідно, знання принципів роботи даного фреймворка буде для
                                вас і підвищенням кваліфікації, і додатковою перевагою при прийомі на роботу.</p>
                        </div>
                        <div class="col-6">
                            <br>
                            <h4 class="font-weight-bold">Програма курсу</h4>
                            <p class="text-justify">Чому ви навчитеся:</p>
                            <ul>
                                <li>Створювати сайти за допомогою Laravel</li>
                                <li>Використовувати систему лейаутов і шаблонів</li>
                                <li>Взаємодіяти з базою даних через ORM</li>
                                <li>Конфігурувати фреймворк через змінні оточення</li>
                            </ul>

                            <h4 class="font-weight-bold">Тривалість курсу</h4>
                            <p class="text-justify">6 тижнів. Матеріали відкритий.</p>
                            <a class="text-right" href="https://ru.hexlet.io/courses/php-laravel"><input
                                    type="button" class="btn btn-success mt-3" value="Почати курс"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
