<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('inc/head')
<body>
@include('inc/header')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@include('inc/footer')
</body>
</html>
