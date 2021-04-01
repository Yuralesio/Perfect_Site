<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('main') }}">
            PerfectSite
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ml-5">
                    <a class="nav-link" href="{{   route('main')   }}">Головна</a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link" href="{{   route('text_editors')   }}">Редактори коду</a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link" href="{{   route('framework')   }}">Фреймворки</a>
                </li>

                <li class="nav-item ml-1">
                    <a class="nav-link" href="{{   route('courses')   }}">Курси</a>
                </li>
                @auth
                    <li class="nav-item ml-1">
                        <a class="nav-link" href="{{   route('articles')   }}">Код</a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link" href="{{   route('user_search')   }}">Користувачі</a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link" href="{{   route('friends')   }}">Друзі</a>
                    </li>
                @endauth
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Вхід') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Реєстрація') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding: 12px 0px 8px 50px">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                                 style="width: 32px; height: 32px; position: absolute; top: 8px; left: 10px; border-radius: 50%">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item ml " href="{{ route('profile') }}"><i class="fas fa-user mr-1"></i> {{ __('Профіль') }}</a>
                            <a class="dropdown-item ml " href="{{ route('profile_setting') }}"><i class="fas fa-sliders-h" mr-1></i> {{ __('Настройка профіля') }}</a>
                            <a class="dropdown-item " href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-1"></i> {{ __('Вихід') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
