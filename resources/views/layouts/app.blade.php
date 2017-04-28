<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('partials._head')
    </head>
    <body style="min-height: 100vh; background: url(https://source.unsplash.com/category/nature/1920x1080); background-size: 100% 100%; background-repeat: no-repeat;">
        <div id="app">
            @include('partials._navbar')
            <div style="position: absolute; top: 50%; transform: translateY(-50%); width: 100%;">
                @yield('content')
            </div>
        </div>
    </body>
</html>
