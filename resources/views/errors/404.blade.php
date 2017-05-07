<!DOCTYPE html>
<html>
    <head>
        <title>Page not Found</title>
        @include('partials._head')
    </head>
    <body style="min-height: 100vh; background: url(https://source.unsplash.com/category/nature/1920x1080); background-size: 100% 100%; background-repeat: no-repeat;">
        <div class="w3-display-middle text-center">
            <h1 class="w3-text-red" style="text-shadow:1px 1px 0 #444">Your requested page "/{{ Request::path() }}" was not found.</h1>
            <h3><a href="{{ url('/') }}">Go Home</a></h3>
        </div>
    </body>
</html>
