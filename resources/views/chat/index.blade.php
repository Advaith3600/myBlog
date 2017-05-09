<!DOCTYPE html>
<html>
    <head>
        <title>Public Chat</title>
        @include('partials._head')
        <meta name="username" content="{{ Auth::user()->name }}" />
    </head>
    <body>
        @include('partials._navbar')
        <div class="col-sm-8 col-sm-offset-2" style="margin-top: 80px;" id="app">
            <h1 class="text-center">Public Chat <span class="badge">@{{ usersInRoom.length }}</span></h1>
            <hr />
            <div>
                <chat-log v-bind:messages="messages"></chat-log>
                <chat-composer v-on:messagesent="addMessage"></chat-composer>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
