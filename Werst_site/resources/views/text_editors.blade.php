@extends('layouts.app')
    <link href="/css/text_editors.css" rel="stylesheet">
@section('title')
    Редактори коду
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 jumbotron  mt-4 " id="content">
                <h1 class="font-weight-bold" >Редактори Коду</h1>
                <p class="text-justify">В чому писати код? Відповідь завжди суб'єктивна. Є чимало хороших варіантів і з
                    часом ви підберете
                    той редактор, який буде найзручнишим для вас. Але перед цим слід уточнити, що умовно редактори можна
                    поділити на текстові редактори і IDE (англ. Integrated Development Environment).</p>
                <p class="text-justify">В той час як перші є легкими, другі (наприклад, Eclipse, NetBeans або Aptana
                    Studio) — важкі, вимогливі
                    до ресурсів, проте мають значно більше корисних функцій.</p>

                <h2 class="font-weight-bold">Вимоги до сучасного редактора коду</h2>
                <ul>
                    <li>Підсвічування синтаксису мови програмування, на якій ви пишете код.</li>
                    <li>Підказки коду, авто-завершення.</li>
                    <li>Можливість відлагоджувати код (англ. debugging).</li>
                    <li>Розширюваність за допомогою плагінів.</li>
                    <li>Можливість працювати з Git (або іншою системою керування версіями файлів)</li>
                    <li>Підтримка препроцесорів, якщо ви їх використовуєте (Less/Sass тощо).</li>
                    <li>Наявність вбудованого FTP-клієнта, SSH тощо.</li>
                </ul>
                <h2 class="font-weight-bold">«Легкі» редактори</h2>
                <p class="text-justify">«Легкі» редактори менш потужні, ніж IDE, але вони відрізняються швидкістю,
                    зручним інтерфейсом і простотою. В основному їх використовують для того, щоб швидко відкрити і
                    відредагувати потрібний файл.</p>
                <p class="text-justify">Головна відмінність між «легким» редактором і IDE полягає в тому, що IDE працює
                    на рівні цілого проекту, тому вона завантажує більше даних при запуску, аналізує структуру проекту,
                    якщо це необхідно, і так далі. Якщо ви працюєте тільки з одним файлом, то набагато швидше відкрити
                    його в «легкому» редакторі.</p>
                <p class="text-justify">На практиці «Легкі» редактори можуть мати безліч плагінів, що включають
                    автозаповнення і аналізаторі синтаксису на Рівні Директорії, тому кордону між IDE і «легкими»
                    редакторами є розмитими.</p>
            </div>
        </div>
        <h1 class="mt-lg-5">Текстові редактори для початківців:</h1><br>
        <div class="row">
            <div class="col-8 jumbotron" id="content">
                <h2 class="text-center font-weight-bold">Atom від GitHub</h2>
                <p class="text-justify">Atom позиціонують, як текстовий редактор, створений для потреб сучасних
                    розробників. Завдяки відкритому API має чимало послідовників та силу-силенну плагінів. Atom —
                    безкоштовний і працює на Windows, Mac OS та Linux.</p>
                <p class="text-justify">Atom — розроблений компанією «GitHub» вільний текстовий редактор і редактор
                    коду, який може використовуватися як самодостатнє рішення, так і у ролі технологічного стека для
                    побудови різних спеціалізованих рішень. Зокрема, на платформі Atom побудовані середовище розробки
                    «Visual Studio Code» від компанії «Microsoft» і «Nuclide» від «Facebook».</p>
                <img class="img-thumbnail"
                     src="https://ihor.gitbooks.io/introduction-to-web-development/content/getting-started/atom_screenshot.png">
                <div class="panel-group" id="collapse-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el1"><h5 class="mt-4">Кращі
                                    плагіни для робити Atom</h5></a>
                        </div>
                        <div id="el1" class="collapse in">
                            <div class="panel-body">
                                <ul>
                                    <li>Emmet - прискорення написання HTML і CSS коду.</li>
                                    <li>Atom Tabs Expos - швидке перемикання між вкладками редактора.</li>
                                    <li>Atom Material Syntax - темна тема з приємною оку підсвічуванням коду.</li>
                                    <li>Atom Beautify - розширення для форматування HTML, CSS, PHP, JavaScript і ін.</li>
                                    <li>Highlight Selected - підсвічування конкретної функції в коді, що полегшує її
                                        пошук.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://atom.io/"><input type="button" class="btn btn-success mt-3" value="Скачати Atom"></a>
            </div>
            <div class="col-4">
                <img src="https://pngimage.net/wp-content/uploads/2018/05/atom-icon-png.png" id="logo_text_editors">
            </div>
        </div>
        <div class="row mt-lg-5">
            <div class="col-8 jumbotron" id="content">
                <h2 class="text-center font-weight-bold">Brackets від Adobe</h2>
                <p class="text-justify">Brackets зосереджений на потребах веб-дизайнерів з вбудованою підтримкою HTML,
                    CSS та JavaScript. Brackets — безкоштовний, легкий у використанні, швидкий і має багато додаткових
                    плагінів. Працює на Windows, Mac OS та Linux.</p>
                <p class="text-justify">Brackets підтримує режим Live-розробки, при якому редагований контент
                    (JavaScript, HTML і CSS) у міру зміни відразу відображається в синхронізованому з редактором вікні
                    браузера — розробник може змінювати вміст і відразу спостерігати до яких наслідків приводять дані
                    зміни. Налагодження також може виконуватися синхронно із браузером, розробник може встановити точку
                    зупину або відкотитися на крок назад при перегляді результатів. Є вбудована підтримка препроцесорів
                    LESS і SCSS. В інтерфейсі застосовується система контекстно-залежних інструментів, що з'являються в
                    міру необхідності в основному вікні розробки. Для розширення можливостей редактора розвивається
                    система доповнень.</p>
                <img class="img-thumbnail"
                     src="https://ihor.gitbooks.io/introduction-to-web-development/content/getting-started/brackets_screenshot.png">
                <div class="panel-group" id="collapse-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el2"><h5 class="mt-4">Кращі
                                    плагіни для робити Brackets</h5></a>
                        </div>
                        <div id="el2" class="collapse in">
                            <div class="panel-body">
                                <ul>
                                    <li>Emmet - прискорення написання HTML і CSS коду.</li>
                                    <li>Beautify - розширення для форматування HTML, CSS і JavaScript.</li>
                                    <li>Bootstrap Skeleton, Bootstrap starter Template, ACB Bootstrap Snippets - плагіни
                                        інтеграції з популярним фреймворком.</li>
                                    <li>Color Highlighter - це підсвічування для CSS, LESS, SCSS, SASS.</li>
                                    <li>CSScomb - сортує css файли.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="http://brackets.io/"><input type="button" class="btn btn-primary mt-3" value="Скачати Brackets"></a>
            </div>
            <div class="col-4">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Brackets_Icon.svg/1200px-Brackets_Icon.svg.png"
                    id="logo_text_editors">
            </div>
        </div>
        <div class="row mt-lg-5">
            <div class="col-8 jumbotron" id="content">
                <h2 class="text-center font-weight-bold">Visual Studio Code від Microsoft</h2>
                <p class="text-justify">Visual Studio Code — це текстовий редактор із відкритим кодом, який працює на
                    всіх основних платформах — Windows, Mac OS і Linux. За допомогою розширень можна додати новий
                    функціонал, тему до вподоби тощо.</p>
                <p class="text-justify">Microsoft Visual Studio — серія продуктів фірми Майкрософт, які включають
                    інтегроване середовище розробки програмного забезпечення та низку інших інструментальних засобів. Ці
                    продукти дозволяють розробляти як консольні програми, так і програми з графічним інтерфейсом, в тому
                    числі з підтримкою технології Windows Forms, а також веб-сайти, веб-застосунки, веб-служби як в
                    рідному, так і в керованому кодах для всіх платформ, що підтримуються Microsoft Windows, Windows
                    Mobile, Windows Phone, Windows CE, .NET Framework, .NET Compact Framework та Microsoft
                    Silverlight.</p>
                <img class="img-thumbnail"
                     src="https://ihor.gitbooks.io/introduction-to-web-development/content/getting-started/visual_studio_code_screenshot.png">
                <div class="panel-group" id="collapse-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el3"><h5 class="mt-4">Кращі
                                    плагіни для робити Visual Studio Code</h5></a>
                        </div>
                        <div id="el3" class="collapse in">
                            <div class="panel-body">
                                <ul>
                                    <li>Emmet - прискорення написання HTML і CSS коду.</li>
                                    <li>CodeMaid - очищення, форматування, реорганізація коду, перемикання між
                                        пов'язаними файлами.</li>
                                    <li>Settings Sync - зручна синхронізація між пристроями.</li>
                                    <li>IntelliSense for CSS class names in HTML - автоматичне визначення назви
                                        CSS-класу для HTML-атрибуту.</li>
                                    <li>Web Analyzer - обчислює і виводить помилки і попередження CSS, JS та ін.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://code.visualstudio.com/download"><input type="button" class="btn btn-dark mt-3" value="Скачати Visual Studio Code"></a>
            </div>
            <div class="col-4">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Visual_Studio_2013_Logo.svg/500px-Visual_Studio_2013_Logo.svg.png"
                    id="logo_text_editors">
            </div>
        </div>
        <div class="row mt-lg-5">
            <div class="col-8 jumbotron" id="content">
                <h2 class="text-center font-weight-bold">Sublime Text</h2>
                <p class="text-justify">Sublime Text — це надзвичайно потужний текстовий редактор для коду, який можна
                    розширити за допомогою плагінів. Вам сподобається його витончений інтерфейс, набір корисних функцій
                    та вражаюча продуктивність. Редактор платний, але нема обмеження на те, як довго ви можете
                    використовувати пробну версії. Sublime Text доступний на Windows, Mac OS та Linux.</p>
                <p class="text-justify">Sublime Text — швидкий кросплатформенний текстовий редактор. Підтримує плагіни,
                    розроблені за допомогою мови програмування Python. Sublime Text не є вільним чи відкритим програмним
                    забезпеченням, але деякі його плагіни розповсюджуються з вільною ліцензією, розробляються і
                    підтримуються спільнотою розробників.</p>
                <img class="img-thumbnail"
                     src="https://ihor.gitbooks.io/introduction-to-web-development/content/getting-started/sublime_text_screenshot.png">
                <div class="panel-group" id="collapse-group">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#collapse-group" href="#el4"><h5 class="mt-4">Кращі
                                    плагіни для робити Sublime Text</h5></a>
                        </div>
                        <div id="el4" class="collapse in">
                            <div class="panel-body">
                                <ul>
                                    <li>Emmet - прискорення написання HTML і CSS коду.</li>
                                    <li>Package Control - установка і оновлення компонентів редактора.</li>
                                    <li>Side Bar Enhancements - додаткові функції редактора в сайдбарі.</li>
                                    <li>HTMLPrettify - форматує код HTML, CSS, JavaScript, JSON, React і Vue.</li>
                                    <li>JQuery - дозволяє писати функції швидше.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="https://www.sublimetext.com/3"><input type="button" class="btn btn-secondary mt-3" value="Скачати Sublime Text"></a>
            </div>
            <div class="col-4">
                <img
                    src="https://iproductkeys.com/wp-content/uploads/2019/12/Sublime-Text-Crack-3.2.2-Build-3211-With-License-Key-Download-2020.png"
                    id="logo_text_editors">
            </div>
        </div>


    </div>
@endsection
